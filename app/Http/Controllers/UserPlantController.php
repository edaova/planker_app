<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\UserPlant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPlantController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Načtení všech rostlin, které si uživatel přidal (včetně sub-rostlin)
        $userPlants = $user->plants()->with('parent')->get();

        return view('dashboard', compact('userPlants'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        // Validace vstupu
        $validated = $request->validate([
            'plant_id' => 'required|exists:plants,id'
        ]);

        // Kontrola, jestli uživatel už má rostlinu v kolekci
        if ($user->plants()->where('plant_id', $validated['plant_id'])->exists()) {
            return redirect()->back()->with('error', 'This plant is already in your collection.');
        }

        // Načtení rostliny (kvůli jménu)
        $plant = Plant::findOrFail($validated['plant_id']);

        // Přidání rostliny do uživatelovy kolekce
        $user->plants()->attach($plant->id, [
            'plant_name' => $plant->name
        ]);

        return redirect()->back()->with('success', '✔ Saved');
    }

    public function destroyPlant($id)
    {
        $user = Auth::user();
        
        // Najdi záznam pro aktuálního uživatele
        $userPlant = UserPlant::where('user_id', $user->id)->where('plant_id', $id)->first();

        // Odstranění vztahu mezi uživatelem a rostlinou
        $user->plants()->detach($id);

        return redirect()->route('dashboard', ['tab' => 'plants'])->with('success', 'Plant removed successfully!');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
{
    public function index()
    {
        // Načítání pouze hlavní rostliny (bez rodiče)
        $plants = Plant::whereNull('parent_id')->get(); 
        return view('plants', compact('plants'));
    }

    public function show(Plant $plant)
    {
         // Získání všech pod-rostlin dané rostliny
        $subPlants = $plant->subPlants;

        return view('plant-details', compact('plant', 'subPlants'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'watering_frequency' => 'nullable|string',
            'fertilizer' => 'nullable|string',
            'humidity' => 'nullable|integer',
            'sunlight' => 'nullable|string',
            'temperature' => 'nullable|string',
            'pet_friendly' => 'nullable|boolean',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:plants,id'
        ]);

        // Vytvoření rostliny
        $plant = Plant::create($validated);

        return redirect()->route('plants');
    }
}
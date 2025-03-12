<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Plant;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
        $userPlants = Auth::user()->userPlants;
        $events = Event::where('user_id', Auth::id())->with('userPlant.plant')->get();

        return view('dashboard', compact('userPlants', 'events'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'plant_id' => 'required|exists:plants,id',
            'event_type' => 'required|in:watering,fertilizer',
            'event_date' => 'required|date',
            'color' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $plant = Plant::findOrFail($validated['plant_id']);
        $plantName = $plant->name;

        // Frekvence zalévání
        $frequencies = [
            'once a week' => 7,
            'twice a week' => 3,
            'once a month' => 30,
            'every two weeks' => 14,
            'every three weeks' => 21,
            'once every two weeks' => 14,
            'once every three months' => 90,
            'mist twice a week' => 3,

        ];

        $frequencyDays = $frequencies[strtolower($validated['event_type'] === 'watering' ? $plant->watering_frequency : $plant->fertilizing_frequency)] ?? null;

        // Vytvoření prvního eventu
        Event::create([
            'user_id' => Auth::id(),
            'plant_id' => $validated['plant_id'],
            'plant_name' => $plantName,
            'event_type' => $validated['event_type'],
            'event_date' => $validated['event_date'],
            'color' => $validated['color'] ?? '#4CAF50',
            'notes' => $validated['notes'],
        ]);

        // Pokud je frekvence, přidat eventy na příští týden
        if ($frequencyDays) {
            $startDate = Carbon::parse($validated['event_date'])->addDays($frequencyDays);
            $endDate = Carbon::parse($validated['event_date'])->addDays(7);

            while ($startDate->lte($endDate)) {
                Event::create([
                    'user_id' => Auth::id(),
                    'plant_id' => $validated['plant_id'],
                    'plant_name' => $plantName,
                    'event_type' => $validated['event_type'],
                    'event_date' => $startDate->format('Y-m-d'),
                    'color' => $validated['color'] ?? '#4CAF50',
                    'notes' => $validated['notes'],
                ]);

                $startDate->addDays($frequencyDays);
            }
        }

        return redirect('/dashboard');
    }

    public function updateStatus(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        // Ověření oprávnění
        if ($event->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Unauthorized');
        }

        // Aktualizace stavu
        $event->update(['status' => $request->input('status')]);

        return redirect()->route('dashboard', ['month' => $request->month, 'year' => $request->year])
                        ->with('success', 'Event status updated!');
    }

    public function deleteEvent($id)
    {
        $event = Event::find($id);

        if ($event && $event->user_id === Auth::id()) {
            $event->delete();
            return redirect()->route('dashboard');
        }

        return redirect()->route('dashboard');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $month = $request->query('month', Carbon::now()->month);
        $year = $request->query('year', Carbon::now()->year);

        // Počet dní v měsíci
        $daysInMonth = Carbon::create($year, $month, 1)->daysInMonth;

        // První den v měsíci
        $firstDayOfMonth = (Carbon::create($year, $month, 1)->dayOfWeekIso) % 7;

        // Načtení eventů pro aktuální měsíc, seskupeno podle data
        $events = Event::where('user_id', Auth::id())
            ->whereBetween('event_date', ["$year-$month-01", "$year-$month-$daysInMonth"])
            ->orderBy('event_date')
            ->get()
            ->groupBy(fn($event) => Carbon::parse($event->event_date)->format('Y-m-d'));

        // Načtení uživatelských rostlin
        $plants = Auth::user()->plants()->with('parent')->get();

        return view('dashboard', compact('plants', 'month', 'year', 'daysInMonth', 'firstDayOfMonth', 'events'));
    }
}
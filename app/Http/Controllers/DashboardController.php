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
        // Načtení eventů pro aktuální měsíc, seskupeno podle data
        $events = Event::where('user_id', Auth::id())->whereIn('status', ['in_progress', 'done'])->orderBy('event_date')->get()->groupBy(fn($event) => Carbon::parse($event->event_date)->format('Y-m-d'));


        // Načtení uživatelských rostlin
        $plants = Auth::user()->plants()->with('parent')->get();
        return view('dashboard', compact('events'));
    }
}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\UserPlantController;
use Illuminate\Support\Facades\Auth;

// Pokud je uživatel přihlášený, přesměruje ho to na dashboard
Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('welcome');
})->name('home');

// Uživatel nemůže na /welcome, pokud je přihlášený
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome')->middleware('guest');

// Přesměrování na login
Route::get('/login', function () {
    return redirect()->route('auth');
})->name('login');

// Autentizace
Route::controller(AuthController::class)->group(function () {
    Route::get('/auth', 'index')->name('auth')->middleware('guest'); // ✅ Pouze pro nepřihlášené uživatele
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});

// Chráněné route (pouze pro přihlášené uživatele)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Eventy
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::delete('/events/{id}', [EventController::class, 'deleteEvent'])->name('events.destroy');

    // Rostliny
    Route::get('/plants', [PlantController::class, 'index'])->name('plants');
    Route::get('/plant/{plant}', [PlantController::class, 'show'])->name('plant.show');

    // Uživatelovy rostliny
    Route::post('/user/plants', [UserPlantController::class, 'store'])->name('user.plants.store');
    Route::delete('/user/plants/{id}', [UserPlantController::class, 'destroyPlant'])->name('user.plants.destroy');

    // Průvodce péče o rostliny
    Route::get('/guide', [GuideController::class, 'index'])->name('guide');
});
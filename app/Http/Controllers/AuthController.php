<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            "email" => 'required|email',
            "password" => 'required|min:8',
        ]);
    
        if (!Auth::attempt($credentials)) {
            return back()
                ->withErrors(['email' => 'Invalid login credentials.'], 'login');
        }
    
        return redirect()->route('dashboard');
    }
    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'required|string|max:255',
            "surname" => 'required|string|max:255',
            "email" => 'required|string|email|max:255|unique:users',
            "password" => 'required|string|min:8|confirmed',
        ], [
            "password.confirmed" => "Passwords do not match.",
        ]);
    
        if ($validator->fails()) {
            return back()
                ->withErrors($validator, 'register');
        }
    
        $user = User::create([
            "name" => $request->name,
            "surname" => $request->surname,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
    
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }
}
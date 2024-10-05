<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Register
        $user = User::create([
            'name' => ucwords($request->name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login
        Auth::login($user);

        // Redirect
        return redirect()->route('home.page');
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'remember' => 'boolean',
        ]);

        if (Auth::attempt(['email' => $fields['email'], 'password' => $fields['password']], $fields['remember'] ?? false)) {
            $request->session()->regenerate();
            return redirect()->route('home.page');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}

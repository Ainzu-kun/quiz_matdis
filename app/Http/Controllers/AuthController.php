<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);
    }

    public function login() {
        return view('auth.login');
    }

    public function authorization(Request $request) {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Memproses login pengguna.
     */
    public function login(Request $request)
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            $remember = $request->boolean('remember');

            if (! Auth::attempt($credentials, $remember)) {
                return back()
                    ->withErrors([
                        'email' => 'Email atau password salah.',
                    ])
                    ->onlyInput('email');
            }

            $request->session()->regenerate();

            return match (Auth::user()->role) {
                'admin' => redirect()->route('dashboard.admin'),
                'kepala' => redirect()->route('dashboard.kepala'),
                default => redirect()->route('dashboard.pendaftar'),
            };
        }
}
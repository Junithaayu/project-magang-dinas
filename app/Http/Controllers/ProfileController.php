<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Menampilkan halaman profil pendaftar.
     */
    public function index()
    {
        $user = Auth::user();

        return view('pendaftar.profile', [
            'user' => $user,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PendaftarDashboardController extends Controller
{
    /**
     * Menampilkan dashboard pendaftar.
     */
    public function index()
    {
        $user = Auth::user();

        return view('pendaftar.dashboard', [
            'user' => $user,
        ]);
    }
}
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftarDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard/pendaftar', [PendaftarDashboardController::class, 'index'])
    ->name('dashboard.pendaftar');

Route::get('/dashboard/admin', function () {
    return 'Dashboard Admin';
})->name('dashboard.admin');

Route::get('/dashboard/kepala', function () {
    return 'Dashboard Kepala';
})->name('dashboard.kepala');
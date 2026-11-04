<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PendaftarDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/pilih-unit', function () {
    return view('admin.pilih-unit');
})->middleware('auth')
    ->name('admin.pilih-unit');

Route::get('/dashboard/pendaftar', [PendaftarDashboardController::class, 'index'])
    ->middleware(['auth', 'role:pendaftar'])
    ->name('dashboard.pendaftar');

Route::get('/dashboard/admin', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'role:admin_pusat'])
    ->name('dashboard.admin');

Route::get('/dashboard/kepala', function () {
    return 'Dashboard Kepala';
})->middleware(['auth', 'role:kepala'])
    ->name('dashboard.kepala');

Route::get('/dashboard/admin/upt-tik', function () {
    return 'Dashboard Admin UPT TIKP';
})->middleware(['auth', 'role:admin_upt_tik'])
    ->name('dashboard.admin.upt-tik');

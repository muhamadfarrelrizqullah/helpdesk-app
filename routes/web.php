<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

// Super Admin
Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard');
})->name('spradmdashboard');

// Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admdashboard');

Route::get('/admin/tiket-mahasiswa', function () {
    return view('admin.tiket_mahasiswa');
})->name('tmahasiswa');

Route::get('/admin/tiket-dosen', function () {
    return view('admin.tiket_dosen');
})->name('tdosen');

Route::get('/admin/tiket-karyawan', function () {
    return view('admin.tiket_karyawan');
})->name('tkaryawan');

// Teknisi
Route::get('/teknisi/dashboard', function () {
    return view('teknisi.dashboard');
})->name('tksdashboard');

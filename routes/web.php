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
})->name('sprdashboard');

Route::get('/superadmin/tiket', function () {
    return view('superadmin.tiket');
})->name('sprtiket');

Route::get('/superadmin/status', function () {
    return view('superadmin.statustiket');
})->name('sprstatustiket');

Route::get('/superadmin/kategori-masalah', function () {
    return view('superadmin.kategorimasalah');
})->name('sprkategorimasalah');


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

Route::get('/teknisi/aduan-belum-proses', function () {
    return view('teknisi.aduan_belumproses');
})->name('adbelumproses');

Route::get('/teknisi/aduan-proses', function () {
    return view('teknisi.aduan_proses');
})->name('adproses');

Route::get('/teknisi/aduan-selesai', function () {
    return view('teknisi.aduan_selesai');
})->name('adselesai');

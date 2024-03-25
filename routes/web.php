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

/*
|--------------------------------------------------------------------------
| Halaman Super Admin
|--------------------------------------------------------------------------
*/
Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard');
})->name('sprdashboard');

Route::get('/superadmin/tiket', function () {
    return view('superadmin.tiket');
})->name('sprtiket');

Route::get('/superadmin/status', function () {
    return view('superadmin.status_tiket');
})->name('sprstatustiket');

Route::get('/superadmin/kategori-masalah', function () {
    return view('superadmin.kategori_masalah');
})->name('sprkategorimasalah');

Route::get('/superadmin/unit', function () {
    return view('superadmin.unit');
})->name('sprunit');

Route::get('/superadmin/pengguna', function () {
    return view('superadmin.pengguna');
})->name('sprpengguna');

Route::get('/superadmin/profil', function () {
    return view('superadmin.profil');
})->name('sprprofil');


/*
|--------------------------------------------------------------------------
| Halaman Admin
|--------------------------------------------------------------------------
*/
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admdashboard');

Route::get('/admin/tiket-mahasiswa', function () {
    return view('admin.tiket_mahasiswa');
})->name('admtiketmahasiswa');

Route::get('/admin/tiket-dosen', function () {
    return view('admin.tiket_dosen');
})->name('admtiketdosen');

Route::get('/admin/tiket-karyawan', function () {
    return view('admin.tiket_karyawan');
})->name('admtiketkaryawan');

Route::get('/teknisi/profil-admin', function () {
    return view('admin.profil');
})->name('admprofil');


/*
|--------------------------------------------------------------------------
| Halaman Teknisi
|--------------------------------------------------------------------------
*/
Route::get('/teknisi/dashboard', function () {
    return view('teknisi.dashboard');
})->name('tksdashboard');

Route::get('/teknisi/aduan-belum-proses', function () {
    return view('teknisi.aduan_belumproses');
})->name('tksaduanbelumproses');

Route::get('/teknisi/aduan-proses', function () {
    return view('teknisi.aduan_proses');
})->name('tksaduanproses');

Route::get('/teknisi/aduan-selesai', function () {
    return view('teknisi.aduan_selesai');
})->name('tksaduanselesai');

Route::get('/teknisi/profil-teknisi', function () {
    return view('teknisi.profil');
})->name('tksprofil');

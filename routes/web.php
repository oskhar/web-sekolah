<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Teacher;
use App\Http\Controllers\Login;

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

// Pages views
Route::get('/', [Pages::class, 'home'])->name('home');
Route::get('/tentang/', [Pages::class, 'tentang']);
Route::get('/visi-misi/', [Pages::class, 'visiMisi']);
Route::get('/latar-belakang/', [Pages::class, 'latarBelakang']);
Route::get('/galeri/', [Pages::class, 'galeri']);
Route::get('/berita-acara/', [Pages::class, 'beritaAcara']);
Route::get('/contact/', [Pages::class, 'contact']);
Route::get('/materi/', [Pages::class, 'materi']);
Route::get('/kebijakan-privasi/', [Pages::class, 'kebijakanPrivasi']);
Route::get('/lowongan-kerja/', [Pages::class, 'lowonganKerja']);
Route::get('/sel-berita-acara/', [Pages::class, 'selBeritaAcara']);

// Login views
Route::group(['middleware' => ['guest']], function () {

    // Route menu login
    Route::get('/login', [Login::class, 'login'])->name('login');

    // Route login guru
    Route::get('/login/guru', [Login::class, 'guru'])->name('login.guru');
    Route::post('/login/guru', [Login::class, 'verifikasiGuru'])->name('login.guru');

    // Route login murid
    Route::get('/login/murid', [Login::class, 'murid'])->name('login.murid');
    Route::post('/login/murid', [Login::class, 'verifikasiAdmin'])->name('login.murid');

    // Route login admin
    Route::get('/login/admin', [Login::class, 'admin'])->name('login.admin');
    Route::post('/login/admin', [Login::class, 'verifikasiGuru'])->name('login.admin');
});

// Student views

// Teacher views
Route::group(['middleware' => 'auth:teacher'], function () {
    Route::get('/teacher/', [Teacher::class, 'index'])->name('teacher');

    // Halaman kelola materi
    Route::get('/teacher/materi', [Teacher::class, 'materi']);
    Route::get('/teacher/write-materi', [Teacher::class, 'writeMateri'])->name('teacher.write-materi');
    Route::post('/teacher/write-materi', [Teacher::class, 'createMateri']);

    // Halaman kelola berita
    Route::get('/teacher/berita', [Teacher::class, 'berita']);
    Route::get('/teacher/write-berita', [Teacher::class, 'writeBerita'])->name('teacher.write-berita');
    Route::post('/teacher/write-berita', [Teacher::class, 'createBerita']);

    // Halaman kelola murid
    Route::get('/teacher/murid', [Teacher::class, 'murid']);
    Route::get('/teacher/write-murid', [Teacher::class, 'writeMurid'])->name('teacher.write-murid');
    Route::post('/teacher/write-murid', [Teacher::class, 'createMurid']);

    // Halaman kelola pekerjaan rumah
    Route::get('/teacher/pekerjaan-rumah', [Teacher::class, 'pekerjaanRumah']);

    // Halaman kelola profile
    Route::get('/teacher/profile', [Teacher::class, 'profile']);
    Route::post('/teacher/ubah-foto-profile', [Teacher::class, 'ubahFotoProfile'])->name('teacher.ubah_foto_profile');

    // Aksi logout
    Route::post('/teacher/logout', [Teacher::class, 'logout'])->name('teacher.logout');
});

// Admin views
Route::get('/admin/', [Admin::class, 'index']);
Route::post('/admin/', [Admin::class, 'createTeacher']);

// Testing purpose
Route::get('/testing/', function () {
    return view('test');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
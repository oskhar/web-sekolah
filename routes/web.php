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
Route::get('/', [Pages::class, 'home']);
Route::get('/tentang/', [Pages::class, 'tentang']);
Route::get('/visi-misi/', [Pages::class, 'visiMisi']);
Route::get('/latar-belakang/', [Pages::class, 'latarBelakang']);
Route::get('/galeri/', [Pages::class, 'galeri']);
Route::get('/berita-acara/', [Pages::class, 'beritaAcara']);
Route::get('/contact/', [Pages::class, 'contact']);
Route::get('/materi/', [Pages::class, 'materi']);

// Login views
Route::group(['middleware' => 'guest'], function () {
    // Route login guru
    Route::get('/login/guru', [Login::class, 'guru'])->name('login.guru');
    Route::post('/login/guru', [Login::class, 'verifikasiGuru'])->name('login.guru');
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

    Route::get('/teacher/pekerjaan-rumah', [Teacher::class, 'pekerjaanRumah']);
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
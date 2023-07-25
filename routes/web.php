<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Teacher;

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

// Login views
Route::group(['middleware' => 'guest'], function () {
    // Route login guru
    Route::get('/login/guru', [Pages::class, 'loginGuru'])->name('login.guru');
    Route::post('/login/guru', [Pages::class, 'verifikasiLoginGuru'])->name('login.guru');
});

// Student views

// Teacher views
Route::group(['middleware' => 'auth:teacher'], function () {
    Route::get('/teacher/', [Teacher::class, 'index'])->name('teacher');
    Route::get('/teacher/materi', [Teacher::class, 'materi']);
});

// Admin views
Route::get('/admin/', [Admin::class, 'index']);
Route::post('/admin/', [Admin::class, 'insertTeacher']);

// Testing purpose
Route::get('/testing/', function () {
    return view('test');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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
Route::get('/visi_misi/', [Pages::class, 'visiMisi']);
Route::get('/latar_belakang/', [Pages::class, 'latarBelakang']);
Route::get('/galeri/', [Pages::class, 'galeri']);
Route::get('/berita_acara/', [Pages::class, 'beritaAcara']);
Route::get('/contact/', [Pages::class, 'contact']);

// Student views

// Teacher views
Route::get('/teacher/', [Teacher::class, 'index']);

// Admin views
Route::get('/admin/', [Admin::class, 'index']);

// Testing purpose
Route::get('/testing/', function () {
    return view('test');
});
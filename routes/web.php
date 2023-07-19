<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\Home;

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

Route::get('/', [Pages::class, 'home']);
Route::get('/tentang/', [Pages::class, 'tentang']);
Route::get('/visi_misi/', [Pages::class, 'visiMisi']);
Route::get('/latar_belakang/', [Pages::class, 'latarBelakang']);
Route::get('/galeri/', [Pages::class, 'galeri']);
Route::get('/berita_acara/', [Pages::class, 'beritaAcara']);
Route::get('/contact/', [Pages::class, 'contact']);

Route::get('/dashboard/', [DashboardAdminController::class, 'index']);


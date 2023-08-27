<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Teacher;
use App\Http\Controllers\Student;
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
Route::get('/sel-materi/', [Pages::class, 'selMateri']);

Route::post('/contact/', [Pages::class, 'kirimPesan']);

// Login views

// Route menu login
Route::get('/login', [Login::class, 'login'])->name('login')->middleware('guest');

// Route login guru
Route::get('/login/guru', [Login::class, 'guru'])->name('login.guru')->middleware('guest:teacher');
Route::post('/login/guru', [Login::class, 'verifikasiGuru'])->name('login.guru');

// Route login murid
Route::get('/login/murid', [Login::class, 'murid'])->name('login.murid')->middleware('guest:student');
Route::post('/login/murid', [Login::class, 'verifikasiMurid'])->name('login.murid');

// Route login admin
Route::get('/login/admin', [Login::class, 'admin'])->name('login.admin')->middleware('guest:admin');
Route::post('/login/admin', [Login::class, 'verifikasiAdmin'])->name('login.admin');

// Student views
// Teacher views
Route::group(['middleware' => 'auth:student'], function () {
    // Main dashboard
    Route::get('/student/', [Student::class, 'index'])->name('student');
    Route::get('/student/profile', [Student::class, 'profile'])->name('profile');
    Route::get('/student/pesan', [Student::class, 'pesan'])->name('pesan');
    Route::post('/student/ubah-foto-profile', [Student::class, 'ubahFotoProfile'])->name('student.ubah_foto_profile');
});

// Teacher views
Route::group(['middleware' => 'auth:teacher'], function () {
    // Main dashboard
    Route::get('/teacher/', [Teacher::class, 'index'])->name('teacher');

    // Kelola materi
    Route::get('/teacher/materi', [Teacher::class, 'materi'])->name('teacher.materi');
    Route::get('/teacher/write-materi', [Teacher::class, 'writeMateri'])->name('teacher.write-materi');
    Route::post('/teacher/write-materi', [Teacher::class, 'createMateri']);
    Route::get('/teacher/edit-materi/', [Teacher::class, 'editMateri'])->name('teacher.edit-materi');
    Route::post('/teacher/delete-materi', [Teacher::class, 'deleteMateri'])->name('teacher.delete-materi');
  
    // Kelola berita
    Route::get('/teacher/berita', [Teacher::class, 'berita'])->name('teacher.berita');
    Route::get('/teacher/write-berita', [Teacher::class, 'writeBerita'])->name('teacher.write-berita');
    Route::post('/teacher/write-berita', [Teacher::class, 'createBerita']);
    Route::post('/teacher/delete-berita', [Teacher::class, 'deleteBerita'])->name('teacher.delete-berita');
    Route::get('/teacher/edit-berita', [Teacher::class, 'editBerita'])->name('teacher.edit-berita');

    // Kelola murid
    Route::get('/teacher/murid', [Teacher::class, 'murid'])->name('teacher.murid');
    Route::get('/teacher/write-murid', [Teacher::class, 'writeMurid'])->name('teacher.write-murid');
    Route::post('/teacher/write-murid', [Teacher::class, 'createMurid']);
    Route::post('/teacher/delete-murid', [Teacher::class, 'deleteMurid'])->name('teacher.delete-murid');
    Route::get('/teacher/edit-murid', [Teacher::class, 'editMurid'])->name('teacher.edit-murid');

    // Kelola pekerjaan rumah
    Route::get('/teacher/pekerjaan-rumah', [Teacher::class, 'pekerjaanRumah'])->name('teacher.pekerjaan-rumah');
    Route::get('/teacher/write-pekerjaan-rumah', [Teacher::class, 'writePekerjaanRumah'])->name('teacher.write-pekerjaan-rumah');
    Route::post('/teacher/write-pekerjaan-rumah', [Teacher::class, 'createPekerjaanRumah']);

    // Kelola galeri
    Route::get('/teacher/galeri', [Teacher::class, 'galeri'])->name('galeri');
    Route::get('/teacher/galeri/upload', [Teacher::class, 'galeriUpload']);
    Route::post('/teacher/galeri/upload', [Teacher::class, 'galeriPush']);

    // Kelola profile
    Route::get('/teacher/profile', [Teacher::class, 'profile'])->name('profile');
    Route::post('/teacher/ubah-foto-profile', [Teacher::class, 'ubahFotoProfile'])->name('teacher.ubah_foto_profile');
    Route::get('/teacher/edit-profile', [Teacher::class, 'editProfile'])->name('teacher.edit-profile');
    Route::post('/teacher/edit-profile', [Teacher::class, 'pushProfile'])->name('teacher.push-profile');
    Route::get('/teacher/ubah-password', [Teacher::class, 'changePassword'])->name('teacher.change-password');
    Route::post('/teacher/ubah-password', [Teacher::class, 'commitChangePassword']);

    // Kelola pesan
    Route::get('/teacher/pesan', [Teacher::class, 'pesan']);

    // Aksi logout
    Route::post('/teacher/logout', [Teacher::class, 'logout'])->name('teacher.logout');
});

// Admin views
Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin/', [Admin::class, 'index'])->name('admin');
    Route::post('/admin/', [Admin::class, 'createTeacher']);
    Route::post('/admin/teacher/delete', [Admin::class, 'deleteTeacher'])->name('delete.teacher');

    // Kelola murid
    Route::get('/admin/murid', [Admin::class, 'murid'])->name('admin.murid');
    Route::get('/admin/write-murid', [Admin::class, 'writeMurid'])->name('admin.write-murid');
    Route::post('/admin/write-murid', [Admin::class, 'createMurid']);
    Route::post('/admin/delete-murid', [Admin::class, 'deleteMurid'])->name('admin.delete-murid');
  
  // Kelola materi
  Route::get('/admin/write-materi', [Admin::class, 'writeMateri'])->name('admin.write-materi');
  Route::get('/admin/materi', [Admin::class, 'materi']);
});

// Unit testing
Route::get('/testing/', function () {
    return view('test');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
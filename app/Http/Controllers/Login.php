<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class Login extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('pages.login');
    }

    /**
     * Display a listing of the resource.
     */
    public function murid()
    {
        return view('pages.login_guru');
    }

    /**
     * Display a listing of the resource.
     */
    public function verifikasiMurid(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('teacher')->attempt($credential)) {
            // Login berhasil, redirect ke halaman dashboard guru
            return redirect()->route('teacher');
        } else {
            // Login gagal, tampilkan pesan error
            return back()->with(['error_message' => 'Email atau Password salah! Pastikan anda menggunakan Email dan Password Yang sesuai']);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function guru()
    {
        return view('pages.login_guru');
    }

    /**
     * Display a listing of the resource.
     */
    public function verifikasiGuru(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('teacher')->attempt($credential)) {
            // Login berhasil, redirect ke halaman dashboard guru
            return redirect()->route('teacher');
        } else {
            // Login gagal, tampilkan pesan error
            return back()->with(['error_message' => 'Email atau Password salah! Pastikan anda menggunakan Email dan Password Yang sesuai']);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        return view('pages.login_guru');
    }

    /**
     * Display a listing of the resource.
     */
    public function verifikasiAdmin(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('teacher')->attempt($credential)) {
            // Login berhasil, redirect ke halaman dashboard guru
            return redirect()->route('teacher');
        } else {
            // Login gagal, tampilkan pesan error
            return back()->with(['error_message' => 'Email atau Password salah! Pastikan anda menggunakan Email dan Password Yang sesuai']);
        }
    }

    /**
     * Display a listing of the resource.
     */
    protected function authenticated(Request $request, $user)
    {
        // Menggunakan Auth::user() untuk mendapatkan informasi pengguna yang sudah login
        $user = Auth::user();

        // Redirect ke halaman beranda sesuai dengan peran pengguna
        if ($user->role === 'teacher') {
            return redirect('/teacher');
        } elseif ($user->role === 'murid') {
            return redirect('/murid');
        } elseif ($user->role === 'admin') {
            return redirect('/admin');
        } else {
            // Jika tidak ada peran yang sesuai, redirect ke halaman beranda default
            return redirect('/beranda');
        }
    }
}
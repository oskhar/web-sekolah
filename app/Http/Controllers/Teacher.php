<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeWork;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class Teacher extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banyak_pekerjaan_rumah = HomeWork::count();
        $data_pekerjaan_rumah = HomeWork::all();
        return view('teacher.dashboard', [
            'banyak_pekerjaan_rumah' => $banyak_pekerjaan_rumah,
            'data_pekerjaan_rumah' => $data_pekerjaan_rumah,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function materi()
    {
        //
        return view('teacher.materi', [
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMateri(Request $request)
    {
        //
        $data_validated = $request->validate([
            'judul' => 'required|unique:blogs',
            'isi' => 'required',
            'gambar' => 'mimes:jpeg,jpg,png',
        ]);

        // Simpan file yang diupload ke direktori 'public/assets/upload'
        $path = $request->file('gambar')->store('upload', 'public_uploads');

        $data_validated['gambar'] = $path;
        $data_validated['guru_id'] = Auth::user()->id;
        Blog::create($data_validated);

        // Tampilkan pesan sukses dan redirect kembali ke halaman sebelumnya
        return back()->with('success_message', 'File berhasil diupload.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pekerjaanRumah()
    {
        //
        return view('teacher.pekerjaan_rumah', [
        ]);
    }
    /**
     * Logout user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
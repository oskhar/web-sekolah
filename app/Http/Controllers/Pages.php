<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display a listing of the resource.
     */
    public function tentang()
    {
        return view('pages.tentang');
    }

    /**
     * Display a listing of the resource.
     */
    public function visiMisi()
    {
        return view('pages.visi_misi');
    }

    /**
     * Display a listing of the resource.
     */
    public function latarBelakang()
    {
        return view('pages.latar_belakang');
    }

    /**
     * Display a listing of the resource.
     */
    public function galeri()
    {
        return view('pages.galeri');
    }

    /**
     * Display a listing of the resource.
     */
    public function beritaAcara()
    {
        return view('pages.berita_acara');
    }

    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display a listing of the resource.
     */
    public function materi()
    {
        return view('pages.materi');
    }

    /**
     * Display a listing of the resource.
     */
    public function kebijakanPrivasi()
    {
        return view('pages.kebijakan_privasi');
    }

    /**
     * Display a listing of the resource.
     */
    public function lowonganKerja()
    {
        return view('pages.lowongan_kerja');
    }

    /**
     * Display a listing of the resource.
     */
    public function loginGuru()
    {
        return view('pages.login_guru');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\ImageModel;

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
        // Mendapatkan semua data foto
        $data_foto = ImageModel::all();
        return view('pages.galeri', [
            'data_foto' => $data_foto,
        ]);
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
        return view('pages.materi');
    }

    /**
     * Display a listing of the resource.
     */
    public function selBeritaAcara()
    {
        return view('pages.sel_Berita_Acara');
    }
    public function kirimPesan(Request $request)
    {
        $data_validated = $request->validate([
            'isi' => '',
            'pengirim' => '',
        ]);

        Message::create($data_validated);
        return back()->with('success_message', 'Berhasil mengirim pesan');
    }

}
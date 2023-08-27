<?php

namespace App\Http\Controllers;

use App\Models\TeacherModel;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Blog;
use App\Models\Event;
use App\Models\ImageModel;

class Pages extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $data_materi = Blog::all();
        return view('pages.home', [
            'data_materi' => $data_materi,
        ]);
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
        $data_galeri = ImageModel::all();
        $banyak_galeri = ImageModel::count();
        return view('pages.galeri', [
            "data_galeri" => $data_galeri,
            "banyak_galeri" => $banyak_galeri,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function beritaAcara()
    {
        $data_berita = Event::all();
        $banyak_berita = Event::count();
        return view('pages.berita_acara', [
            "data_berita" => $data_berita,
            "banyak_berita" => $banyak_berita,
        ]);
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
        $banyak_materi = Blog::count();
        $data_materi = Blog::select('blogs.*', 'teachers.nama_lengkap AS nama_lengkap')
            ->join('teachers', 'blogs.guru_id', '=', 'teachers.id')
            ->get();

        return view('pages.materi', [
            "data_materi" => $data_materi,
            'banyak_materi' => $banyak_materi,
        ]);
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
    public function selBeritaAcara(Request $request)
    {
        $id = $request->input('id');
        $data = Event::select('events.*', 'teachers.nama_lengkap AS nama_lengkap')
            ->join('teachers', 'events.guru_id', '=', 'teachers.id')
            ->where('events.id', '=', $id)
            ->first();
        return view('pages.sel_berita_acara', [
            'data' => $data,
        ]);
    }
    public function selMateri(Request $request)
    {
        $id = $request->input('id');
        $data = Blog::select('blogs.*', 'teachers.nama_lengkap AS nama_lengkap')
            ->join('teachers', 'blogs.guru_id', '=', 'teachers.id')
            ->where('blogs.id', '=', $id)
            ->first();
        return view('pages.sel_materi', [
            'data' => $data,
        ]);
    }
    public function kirimPesan(Request $request)
    {
        $data_validated = $request->validate([
            'isi' => 'required',
            'pengirim' => 'required',
        ]);

        Message::create($data_validated);
        return back()->with('success_message', 'Berhasil mengirim pesan');
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeWork;
use App\Models\TeacherModel;
use App\Models\Blog;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Image;

class Teacher extends Controller
{
    public function index()
    {
        //
        $banyak_pekerjaan_rumah = HomeWork::count();
        $banyak_berita = Event::count();

        $data_berita = Event::all();

        return view('teacher.dashboard', [
            'banyak_pekerjaan_rumah' => $banyak_pekerjaan_rumah,
            'banyak_berita' => $banyak_berita,
            'data_berita' => $data_berita,
        ]);
    }

    public function berita()
    {
        //
        $data_berita = Event::all();
        return view('teacher.berita', [
            'data_berita' => $data_berita,
        ]);
    }
    public function writeBerita()
    {
        //
        return view('teacher.write_berita');
    }
    public function createBerita(Request $request)
    {
        //
        $data_validated = $request->validate([
            'judul' => 'required|unique:events',
            'isi' => '',
            'gambar' => 'required|mimes:jpeg,jpg,png',
            'tanggal_acara' => 'required',
            'durasi_hari' => 'required',
        ]);

        // Simpan file yang diupload ke direktori 'public/assets/upload'
        $path = $request->file('gambar')->store('upload', 'public_uploads');

        $data_validated['gambar'] = $path;
        $data_validated['guru_id'] = Auth::user()->id;
        Event::create($data_validated);

        // Tampilkan pesan sukses dan redirect kembali ke halaman sebelumnya
        return back()->with('success_message', 'File berhasil diupload.');
    }
    public function materi()
    {
        //
        $data_materi = Blog::all();
        return view('teacher.materi', [
            'data_materi' => $data_materi,
        ]);
    }
    public function writeMateri()
    {
        //
        return view('teacher.write_materi');
    }
    public function createMateri(Request $request)
    {
        //
        $data_validated = $request->validate([
            'judul' => 'required|unique:blogs',
            'isi' => '',
            'gambar' => 'required|mimes:jpeg,jpg,png',
        ]);

        // Simpan file yang diupload ke direktori 'public/assets/upload'
        $path = $request->file('gambar')->store('upload', 'public_uploads');

        $data_validated['gambar'] = $path;
        $data_validated['guru_id'] = Auth::user()->id;
        Blog::create($data_validated);

        // Tampilkan pesan sukses dan redirect kembali ke halaman sebelumnya
        return back()->with('success_message', 'File berhasil diupload.');
    }

    public function murid()
    {
        //
        $data_murid = Blog::all();
        return view('teacher.murid', [
            'data_murid' => $data_murid,
        ]);
    }
    public function writeMurid()
    {
        //
        return view('teacher.write_murid');
    }
    public function createMurid(Request $request)
    {
        //
        $data_validated = $request->validate([
            'judul' => 'required|unique:blogs',
            'isi' => '',
            'gambar' => 'required|mimes:jpeg,jpg,png',
        ]);

        // Simpan file yang diupload ke direktori 'public/assets/upload'
        $path = $request->file('gambar')->store('upload', 'public_uploads');

        $data_validated['gambar'] = $path;
        $data_validated['guru_id'] = Auth::user()->id;
        Blog::create($data_validated);

        // Tampilkan pesan sukses dan redirect kembali ke halaman sebelumnya
        return back()->with('success_message', 'File berhasil diupload.');
    }

    public function pekerjaanRumah()
    {
        //
        return view('teacher.pekerjaan_rumah', [
        ]);
    }

    public function profile()
    {
        //
        return view('teacher.profile');
    }
    public function ubahFotoProfile(Request $request)
    {
        //
        $all_data = $request->all();
        if (!empty($all_data['upload'])) {

            // Simpan file yang diupload ke direktori 'public/assets/upload'
            $destinationPath = public_path('assets/upload');
            $image = $request->file('foto_profile');
            $img = Image::make($image->getRealPath());

            // Nama file baru
            $filename = time() . '_' . $image->getClientOriginalName();

            // Auto crop 1:1
            $img->fit(300, 300); // Ubah ukuran sesuai kebutuhan Anda

            // Simpan gambar ke direktori tujuan
            $img->save($destinationPath . '/' . $filename);
            $all_data['foto_profile'] = 'upload/' . $filename;
        }

        $data = TeacherModel::find(Auth::user()->id);
        $data->fill($all_data);
        $data->save();
        return back()->with('success_message', 'Avatar berhasi diganti');
    }

    public function galeri()
    {
        //
        return view('teacher.galeri');
    }

    /**
     * Logout user.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
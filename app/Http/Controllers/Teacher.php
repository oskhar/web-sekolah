<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeWork;
use App\Models\TeacherModel;
use App\Models\StudentModel;
use App\Models\ImageModel;
use App\Models\Blog;
use App\Models\Message;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

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
    public function deleteBerita(Request $request)
    {
        $id = $request->input('id');
        $data_teacher = Event::find($id);
        if ($data_teacher) {
            $data_teacher->delete();
            // Menambahkan response json
            $response = [
                'success_message' => 'Data berhasil dihapus',
            ];
            return response()->json($response);
        }
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
        $data_murid = StudentModel::all();
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
            'token' => 'required|unique:students',
            'password' => 'required',
            'nama_lengkap' => 'required',
            'gedung' => '',
            'email' => '',
        ]);

        $data_validated['foto_profile'] = 'avatar/';
        $data_validated['password'] = Hash::make($data_validated['password']);
        StudentModel::create($data_validated);

        // Simpan pesan flash ke session.
        $request->session()->flash('success_message', 'Murid berhasil ditambahkan.');

        // Pindahkan ke halaman lain.
        return redirect()->route('teacher.murid');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function deleteMurid(Request $request)
    {
        $id = $request->input('id');
        $data_teacher = StudentModel::find($id);
        if ($data_teacher) {
            $data_teacher->delete();
            // Menambahkan response json
            $response = [
                'success_message' => 'Data berhasil dihapus',
            ];
            return response()->json($response);
        }
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

    public function editProfile()
    {
        //
        return view('teacher.edit-profile');
    }

    public function pushProfile(Request $request)
    {
        //
        $data_validated = $request->validate([
            'nama_lengkap' => '',
            'nama_panggilan' => '',
            'nomor_telepon' => '',
            'email' => [
                'required',
                Rule::unique('teachers')->ignore(Auth::user()->id, 'id'),
            ],
            'pengalaman_mengajar' => '',
            'jabatan' => '',
            'gender' => '',
            'gedung' => 'required',
        ]);

        $data = TeacherModel::find(Auth::user()->id);
        $data->fill($data_validated);
        $data->save();

        // Simpan pesan flash ke session.
        $request->session()->flash('success_message', 'Foto berhasil diupload.');

        // Pindahkan ke halaman lain.
        return redirect()->route('profile');
    }

    public function galeri()
    {
        //
        $data_foto = ImageModel::all();
        return view('teacher.galeri', [
            'data_foto' => $data_foto,
        ]);
    }
    public function galeriUpload()
    {
        //
        return view('teacher.galeri-upload');
    }
    public function galeriPush(Request $request)
    {
        //
        $data_validated = $request->validate([
            'judul' => '',
            'gambar' => 'required|mimes:jpeg,jpg,png',
        ]);

        // Simpan file yang diupload ke direktori 'public/assets/upload'
        $path = $request->file('gambar')->store('upload', 'public_uploads');

        $data_validated['gambar'] = $path;
        $data_validated['guru_id'] = Auth::user()->id;
        ImageModel::create($data_validated);

        // Simpan pesan flash ke session.
        $request->session()->flash('success_message', 'Foto berhasil diupload.');

        // Pindahkan ke halaman lain.
        return redirect()->route('galeri');
    }

    public function pesan()
    {
        //
        $data_pesan = Message::all();
        $pesan_terbaru = $data_pesan->filter(function ($item) {
            return Carbon::parse($item->created_at)->diffInDays(Carbon::now()) < 2;
        });
        $banyak_pesan_terbaru = $pesan_terbaru->count();
        $pesan_lama = $data_pesan->filter(function ($item) {
            return Carbon::parse($item->created_at)->diffInDays(Carbon::now()) >= 2;
        });
        $banyak_pesan_lama = $pesan_lama->count();
        return view('teacher.pesan', [
            'pesan_terbaru' => $pesan_terbaru,
            'banyak_pesan_terbaru' => $banyak_pesan_terbaru,
            'pesan_lama' => $pesan_lama,
            'banyak_pesan_lama' => $banyak_pesan_lama,
        ]);
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
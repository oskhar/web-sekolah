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

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data_guru = TeacherModel::all();

        return view('admin.dashboard', [
            'data_guru' => $data_guru,
        ]);
    }

    public function materi()
    {
        //
        $data_materi = Blog::all();
        return view('admin.materi', [
            'data_materi' => $data_materi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createTeacher(Request $request)
    {
        //
        $list_gambar = [
            'avatar/guru.jpg',
            'avatar/guru-2.jpg',
        ];
        $data_validated = $request->validate([
            'nama_lengkap' => '',
            'nama_panggilan' => '',
            'nomor_telepon' => '',
            'email' => 'required|unique:teachers',
            'password' => 'required|min:6',
            'pengalaman_mengajar' => '',
            'jabatan' => '',
            'gender' => '',
            'gedung' => 'required',
            'foto_profile' => '',
        ]);
        if (!empty($data_validated['foto_profile'])) {

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
            $data_validated['foto_profile'] = 'upload/' . $filename;
        } else {
            $data_validated['foto_profile'] = $list_gambar[$data_validated['gender']];
        }

        $data_validated['password'] = Hash::make($data_validated['password']);

        TeacherModel::create($data_validated);

        return back()->with('success_message', 'Akun guru berhasil ditambahkan.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function deleteTeacher(Request $request)
    {
        $id = $request->input('id');
        $data_teacher = TeacherModel::find($id);
        if ($data_teacher) {
            $data_teacher->delete();
            // Menambahkan response json
            $response = [
                'success_message' => 'Data berhasil dihapus',
            ];
            return response()->json($response);
        }
    }

    public function murid()
    {
        //
        $data_murid = StudentModel::all();
        return view('admin.murid', [
            'data_murid' => $data_murid,
        ]);
    }
    public function writeMurid()
    {
        //
        return view('admin.write_murid');
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
        return redirect()->route('admin.murid');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function deleteMurid(Request $request)
    {
        $id = $request->input('id');
        $data_student = StudentModel::find($id);
        if ($data_student) {
            $data_student->delete();
            // Menambahkan response json
            $response = [
                'success_message' => 'Data berhasil dihapus',
            ];
            return response()->json($response);
        }
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
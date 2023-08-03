<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\TeacherModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Image;

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
            'password' => 'required',
            'pengalaman_mengajar' => '',
            'jabatan' => '',
            'gender' => '',
            'foto_profile' => 'mimes:jpeg,jpg,png',
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
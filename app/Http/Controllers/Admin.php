<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\TeacherModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $data_validated = $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'nomor_telepon' => 'required|unique:teachers',
            'email' => 'required|unique:teachers',
            'password' => 'required',
            'pengalaman_mengajar' => '',
            'jabatan' => '',
            'gender' => '',
            'foto_profile' => 'mimes:jpeg,jpg,png',
        ]);

        $list_gambar = [
            'avatar/guru.jpg',
            'avatar/guru-2.jpg',
        ];

        if (empty($data_validated['foto_profile'])) {
            $data_validated['foto_profile'] = $list_gambar[$data_validated['gender']];
        } else {
            // Simpan file yang diupload ke direktori 'public/assets/upload'
            $path = $request->file('foto_profile')->store('upload', 'public_uploads');
            $data_validated['foto_profile'] = $path;
        }

        $data_validated['password'] = Hash::make($data_validated['password']);

        TeacherModel::create($data_validated);

        return back()->with('success_message', 'Akun guru berhasil ditambahkan.');
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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
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
        $data_guru = Teacher::all();

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
            'email' => 'required|email:dns|unique:teachers',
            'password' => 'required',
            'foto_profile' => '',
            'pengalaman_mengajar' => '',
            'jabatan' => '',
            'gender' => '',
        ]);
        $data_validated['password'] = Hash::make($data_validated['password']);

        Teacher::create($data_validated);

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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\StudentModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class Student extends Controller
{
    //
    public function index()
    {
        $data_berita = Event::all();
        return view('student.dashboard', [
            'data_berita' => $data_berita, 
        ]);
    }

    public function profile()
    {
        return view('student.profile');
    }
    public function editProfile()
    {
        return view('student.dashboard');
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

        $data = StudentModel::find(Auth::user()->id);
        $data->fill($all_data);
        $data->save();
        return back()->with('success_message', 'Avatar berhasi diganti');
    }

    public function pesan()
    {
        return view('student.pesan');
    }
}


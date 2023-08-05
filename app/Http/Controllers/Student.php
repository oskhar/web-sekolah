<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

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
    public function ubahFotoProfile()
    {
        return view('student.dashboard');
    }
}
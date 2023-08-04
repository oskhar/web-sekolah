<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    //
    public function index()
    {
        return view('student.dashboard');
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
@extends('components.template_pages')

@section('title', "Halaman Visi Misi")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/visi_misi.css')}} ">

<div class="container-fluid mt-5">
    <!-- Teks yang ditampilkan di atas gambar -->
    <div class="text-overlay">GEDUNG SEKOLAH</div>
    
    <!-- Gambar dengan lebar 800px dan tinggi 600px yang berada di tengah -->
    <img src="{{ asset('assets/images/profile3.jpg')}}" alt="Gambar Gedung Sekolah" class="centered-image" width="900" height="400">

    <hr>

{{-- Bagian Visi Misi --}}
    <div class="visi_misi">
        <div class="sejarah">
            <div class="visi">
                <h2>VISI</h2>
                <p>Menjadikan siswa yang berprestasi dalam menuntut ilmu baik dunia maupun akhirat</p>
            </div>
        </div>
        <div class="sejarah mt-5">
            <div class="visi">
                <h2>MISI</h2>
                <p>Peserta didik yang berakhlakul karimah</p>
            </div>
        </div>
    </div>

</div>

@endsection
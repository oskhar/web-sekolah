@extends('components.template_pages')

@section('title', "Halaman Gallery")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/gallery.css')}} ">

{{-- Bagian Kebijakan Privasi--}}
<div class="container-kp">
    <h3>GALLERY</h3>
    <div class="teks-kp">
        <p>Selamat datang di halaman galeri kami! Di sini, Anda akan menemukan kumpulan foto-foto yang mengabadikan berbagai momen dan kegiatan berharga di PAUD kami. Mari jelajahi gambar-gambar yang merefleksikan keceriaan dan pembelajaran anak-anak di PAUD Kasih Bunda Kenanga Bangsa.
        </p>
    </div>


    {{-- Bagian Foto Gallery --}}
    <div class="container daftar-prestasi mt-5">
        <div class="row no-gutters">

            <!-- Baris 1 -->
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 1">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 2">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 3">
            </div>

            <!-- Baris 2 -->
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 4">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 5">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 6">
            </div>

            <!-- Baris 3 -->
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 7">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 8">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 9">
            </div>

            <!-- Baris 4 -->
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 10">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 11">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 12">
            </div>

        </div>
    </div>


</div>


@endsection
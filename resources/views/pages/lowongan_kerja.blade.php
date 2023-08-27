@extends('components.template_pages')

@section('title', "Halaman Lowongan Kerja")
@section('mainContainer')

{{-- Link Css --}}
<link rel="stylesheet" href="{{ asset('css/pages/lowongan_kerja.css')}} ">

{{-- MAIN --}}

    {{-- Bagian Lowongan Kerja--}}
    <div class="lowongan">
        <div class="container-kp">
            <h1>LOWONGAN PEKERJAAN</h1>
            <div class="teks-kp">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero laudantium esse eos obcaecati nisi qui ipsum neque dolorem. Ea consectetur, sunt veritatis asperiores natus laboriosam quia doloribus. Cumque voluptatibus a at, aut sed libero deseru</p>
            </div>
        </div>

        {{-- Bagian Sub Judul --}}
        <div class="teks-sub-judul">
            <h2>Judul Lowongan</h2>
            <h4>Persyaratan Pekerjaan</h4>
                <div class="sub-judul mb-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, impedit aperiam a nihil debitis repellendus iure quibusdam velit reprehenderit fugiat?et consectetur adipisicing elit. Commodi, impedit aperiam a nihil debitis repellendus iure quibusdam velit reprehenderit fugiat?</p>
                </div>
            <h4>Keahlian dan Kualifikasi Khusus</h4>
                <div class="sub-judul mb-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, impedit aperiam a nihil debitis repellendus iure quibusdam velit reprehenderit fugiat?et consectetur adipisicing elit. Commodi, impedit aperiam a nihil debitis repellendus iure quibusdam velit reprehenderit fugiat?</p>
                </div>
                <h4>Prosedur Melamar</h4>
                <div class="sub-judul mb-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, impedit aperiam a nihil debitis repellendus iure quibusdam velit reprehenderit fugiat?et consectetur adipisicing elit. Commodi, impedit aperiam a nihil debitis repellendus iure quibusdam velit reprehenderit fugiat?</p>
                </div>
            <h4>Informasi Kontak</h4>
                <div class="sub-judul mb-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, impedit aperiam a nihil debitis repellendus iure quibusdam velit reprehenderit fugiat?et consectetur adipisicing elit. Commodi, impedit aperiam a nihil debitis repellendus iure quibusdam velit reprehenderit fugiat?</p>
                </div>
        </div>

    </div>
@endsection
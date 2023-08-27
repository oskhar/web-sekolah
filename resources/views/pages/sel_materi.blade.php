@extends('components.template_pages')

@section('title', "Halaman Berita & Acara")
@section('mainContainer')

{{-- Link Css --}}
<link rel="stylesheet" href="{{ asset('css/pages/sel_Berita_Acara.css')}} ">

{{-- MAIN --}}

    {{-- gambar dan judul --}}
    <div class="container-fluid mt-5">
        <div class="text-overlay text-center"><h1><b>{{ $data->judul }}</b></h1></div>
        <!-- Gambar dengan lebar 800px dan tinggi 600px yang berada di tengah -->
        <img src="{{ asset('assets/'.$data->gambar)}}" alt="Gambar Gedung Sekolah" class="centered-image mt-5 mb-1" width="900" height="400">
        <p class="text-muted mt-0">{{ $data->created_at->format('Y-m-d') }}</p>
    

{{-- Bagian Visi Misi --}}
    <div class="visi_misi">
        <div class="sejarah">
            <div class="visi">
                {!! $data->isi !!}
                <p class="text-muted text-right">By {{ $data->nama_lengkap }}</p>
            </div>
        </div>

    </div>
</div>





@endsection
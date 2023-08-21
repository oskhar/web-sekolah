@extends('components.template_pages')

@section('title', "Halaman Berita & Acara")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/berita_acara.css')}} ">
<section class="content">
<div class="container-fluid mt-5">
    <!-- Teks yang ditampilkan paling atas -->
    <div class="text-overlay">
        <h2>BERITA & ACARA PAUD</h2>
    </div>

    {{--  Bagian Berita Dan Acara  --}}
    <div class="berita-acara row justify-content-center">
        @if ( $banyak_berita > 0 )
            @foreach ($data_berita as $data)
            <div class="card col-lg-10">
                <div class="pengumuman card-header">
                    <div class="display-pengumuman">
                        <a href="{{ url('sel-berita-acara?id='.$data->id) }}" class="btn float-right border">Selengkapnya</a>
                        <h3 class="mb-0">{{ $data->judul }}</h3>
                        <p class="text-muted">{{ $data->created_at->format('Y-m-d') }}</p>
                    </div>
                </div>

                {{-- Card Pengumuman --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/assets/{{ $data->gambar }}" class="img-fluid" alt="..." >
                        </div>
                        <div class="col-md-8">
                            <div class="">
                                <p class="card-text">
                                    {!! nl2br(substr($data->isi, 0, 3 * 100)) !!} <!-- Batasi ke tiga baris -->
                                    @if (strlen($data->isi) > 3 * 100)
                                        <span class="read-more">... <a href="{{ url('sel-berita-acara?id='.$data->id) }}" class="toggle-text">Selengkapnya</a></span>
                                    @endif</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-10 mt-5">
                <div class="info-box mb-3 bg-white row justify-content-center py-4">
                    <h5 class="text-center text-muted">Tidak ada berita saat ini !</h5>
                </div>
            </div>
        @endif
    </div>
</div>
</section>

@endsection
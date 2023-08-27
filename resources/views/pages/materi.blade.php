@extends('components.template_pages')

@section('title', "Halaman Materi")
@section('mainContainer')

{{-- Link Css --}}
<link rel="stylesheet" href="{{ asset('css/pages/materi.css')}} ">

{{-- MAIN --}}

    <section class="content">
        <div class="container-fluid mt-5 pl-5">
            <!-- Teks yang ditampilkan paling atas -->
            <div class="text-overlay container-fluid text-center row justify-content-center">
                <h2>MATERI - MATERI</h2>
                <p>Jelajahi halaman Materi kami untuk mengakses sumber belajar yang bermanfaat. Dapatkan akses mudah ke berbagai konten pembelajaran yang dirancang khusus untuk mendukung perkembangan anak-anak di PAUD Kasih Bunda Kenanga Bangsa.</p>
            </div>

            {{-- card materi --}}
            <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 justify-content-center">
                @if ( $banyak_materi > 0 )
                @foreach ($data_materi as $data)
                <div class="col">
                    <div class="card pl-5">
                        <img src="/assets/{{ $data->gambar }}" id="list-gambar" class="img mt-3" alt="..." >
                        <div class="card-body">
                        <h2 class="card-title"><strong>{{ $data->judul }}</strong></h2><br>
                        <sup>{{ $data->created_at->format('Y-m-d') }}</sup>
                        <p class="card-text">
                            {!! nl2br(substr($data->isi, 0, 3 * 20)) !!} <!-- Batasi ke tiga baris -->
                            @if (strlen($data->isi) > 3 * 20)
                                <span class="read-more">... <a href="{{ url('sel-materi?id='.$data->id) }}" class="toggle-text">Selengkapnya</a></span>
                            @endif</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    {{-- informasi tidak ada materi --}}
                    <div class="col-md-10 mt-5">
                        <div class="info-box mb-3 bg-white row justify-content-center py-5">
                            <h4 class="text-center text-muted py-5">Tidak ada materi saat ini !</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>


@endsection
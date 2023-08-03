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
        
        <div class="card col-lg-10">
            <div class="pengumuman card-header">
                <div class="display-pengumuman">
                    <button class="btn float-right border">Selengkapnya</button>
                    <h3 class="mb-0">Pengumuman</h3>
                    <p class="text-muted">17 Agustus 2023</p>
                </div>
            </div>

            {{-- Card Pengumuman --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/assets/images/logo_paud.jpg" class="img-fluid" alt="..." >
                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-lg-10">
            <div class="pengumuman card-header">
                <div class="display-pengumuman">
                    <button class="btn float-right border">Selengkapnya</button>
                    <h3 class="mb-0">Pengumuman</h3>
                    <p class="text-muted">17 Agustus 2023</p>
                </div>
            </div>

            {{-- Card Pengumuman --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/assets/images/foto_bareng_tk.jpg" class="img-fluid" alt="..." >
                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-lg-10">
            <div class="pengumuman card-header">
                <div class="display-pengumuman">
                    <button class="btn float-right border">Selengkapnya</button>
                    <h3 class="mb-0">Pengumuman</h3>
                    <p class="text-muted">17 Agustus 2023</p>
                </div>
            </div>

            {{-- Card Pengumuman --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/assets/images/foto_bareng_tk.jpg" class="img-fluid" alt="..." >
                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
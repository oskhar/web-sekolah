@extends('components.template_pages')

@section('title', "Halaman Berita & Acara")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/berita_acara.css')}} ">

<div class="container-fluid mt-5">
    <!-- Teks yang ditampilkan paling atas -->
    <div class="text-overlay">
        <h2>BERITA & ACARA PAUD</h2>
    </div>

    {{--  Bagian Berita Dan Acara  --}}
    <div class="berita-acara">
        <div class="card-utama mt-5">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">INFO - INFO</h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <p class="card-text-dua">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="card-utama mt-5">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">INFO - INFO</h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <p class="card-text-dua">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="card-utama mt-5">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">INFO - INFO</h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <p class="card-text-dua">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="card-utama mt-5">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">INFO - INFO</h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <p class="card-text-dua">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="card-utama mt-5">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">INFO - INFO</h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <p class="card-text-dua">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
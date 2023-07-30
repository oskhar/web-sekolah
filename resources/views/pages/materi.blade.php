@extends('components.template_pages')

@section('title', "Halaman Materi")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/materi.css')}} ">

<div class="container-fluid mt-5">
    <!-- Teks yang ditampilkan paling atas -->
    <div class="text-overlay">
        <h2>MATERI - MATERI</h2>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 mt-5">
        <div class="col">
            <div class="card">
                <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card">
                <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 mt-5">
        <div class="col">
            <div class="card">
                <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card">
                <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
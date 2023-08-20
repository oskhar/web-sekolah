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
                <h5 class="card-title">Matematika</h5>
                <p class="card-text">Pada kelas tanggal 17 September 2023 Mata pelajaran yang di sampaikan terkait dengan ..... Tetap belajar di rumah dan dikerjakan tugas yang di berikan oleh bunda</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card">
                <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                <div class="card-body">
                <h5 class="card-title">Seni</h5>
                <p class="card-text">Pada kelas tanggal 17 September 2023 Mata pelajaran yang di sampaikan terkait dengan ..... Tetap belajar di rumah dan dikerjakan tugas yang di berikan oleh bunda</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 mt-5">
        <div class="col">
            <div class="card">
                <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                <div class="card-body">
                <h5 class="card-title">Olahraga</h5>
                <p class="card-text">Pada kelas tanggal 17 September 2023 Mata pelajaran yang di sampaikan terkait dengan ..... Tetap belajar di rumah dan dikerjakan tugas yang di berikan oleh bunda</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card">
                <img src="/assets/images/foto_bareng_tk.jpg" class="img" alt="..." >
                <div class="card-body">
                <h5 class="card-title">Vokalis</h5>
                <p class="card-text">Pada kelas tanggal 17 September 2023 Mata pelajaran yang di sampaikan terkait dengan ..... Tetap belajar di rumah dan dikerjakan tugas yang di berikan oleh bunda</p>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
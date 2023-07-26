<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/components/template_pages.css')}}">

    {{-- Template AdminLTE --}}
    <base href="{{ asset('adminLTE') }}/">
    @include('components.adminlte_dependency')

    <title>@yield('title')</title>

</head>
<body>

    {{-- Bagian Header --}}
    <div class="header">
        <div class="logo">Logo Perusahaan</div>
    </div>

{{-- Bagian Toggle --}}
<nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
    </button>

    {{-- Bagian Navbar Pilihan --}}
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active text-light" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="text-light nav-link dropdown-toggle" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="text-light dropdown-item text-dark" href="{{url('/tentang')}}">Tentang</a>
                    <a class="text-light dropdown-item text-dark" href="{{url('/latar-belakang')}}">Latar Belakang</a>
                    <a class="text-light dropdown-item text-dark" href="{{url('/visi-misi')}}">Visi Misi</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link" href="{{url('/galeri')}}">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link" href="{{url('/berita-acara')}}">Berita & Acara</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link" href="{{url('/materi')}}">Materi</a>
            </li>
        </ul>

        {{-- Bagian Search --}}
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

{{-- Bagian Main --}}
    <main style="height: 200vh;">
        @yield('mainContainer')

        {{-- Bagian Footer --}}
        <footer class="footer mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center footer-logo p-2">
                        <!-- Logo Perusahaan -->
                        <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 12" style="width:80px; height: 80px;">
                    </div>
                    <div class="col-md-12 text-center footer-info">
                        <!-- Email, Alamat, dan Lokasi -->
                        <p><i class="far fa-envelope"></i> Email: info@perusahaan.com</p>
                        <p><i class="fas fa-globe"></i> Lokasi: jalan, kecamatan, kelurahan, no, Kota, Negara</p>
                        <p><i class="fas fa-phone"></i> Hubungi : + 62 98788759002</p>
                    </div>
                </div>
                <div class="row col-md-6 justify-content-between" style="font-size: 15px;">
                    <!-- Copy right -->
                    <p class="text-md-left">&copy; 2023 Perusahaan. All rights reserved.</p>
                    {{-- Bagian 4 Tombol Sosial Media --}}
                    <div class="social-icons justify-content-end">
                        <a href=""><button class="btn"><i class="fab fa-facebook-f"></i></button></a>
                        <a href=""><button class="btn"><i class="fab fa-twitter"></i></button></a>
                        <a href=""><button class="btn"><i class="fab fa-instagram"></i></button></a>
                        <a href=""><button class="btn"><i class="fab fa-linkedin-in"></i></button></a>
                    </div>
                </div>
            </div>
        </footer>
    </main>


    

    <script src="{{ asset('js/components/pagesnavbar.js') }}"></script>
</body>
</html>
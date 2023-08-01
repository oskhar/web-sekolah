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
<aside class="header">
    
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/images/logo_paud.jpg') }}" alt="paud Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-bold text-dark">Paud Kasih Bunda</span>
      </a>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Dropdown User Menu -->
        <li class="dropdown user user-menu">
          <!-- Toggle Dropdown -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- User Name -->
            @auth('teacher')
                <span class="hidden-xs">{{ auth('teacher')->user()->nama_panggilan }}</span>
                <!-- User Image -->
                <img src="{{ asset('assets/'.auth('teacher')->user()->foto_profile) }}" class="user-image thumbnail" alt="User Image">
            @else
                <span class="hidden-xs">Click Untuk Login</span>
                <!-- User Image -->
                <img src="{{ asset('assets/avatar/profile_kosong.jpg') }}" class="user-image thumbnail" alt="User Image">
            @endauth
          </a>
          <!-- Dropdown Menu -->
          <ul class="dropdown-menu dropdown-menu-right">
            <!-- User Image -->
            <li class="user-header">
                @auth('teacher')
                    <img src="{{ asset('assets/'.auth('teacher')->user()->foto_profile) }}" class="img-circle" alt="User Image">
                    <p>
                        <b class="">{{ auth('teacher')->user()->nama_panggilan }}</b>
                        <small class="text-gray">{{ auth('teacher')->user()->nama_lengkap }}</small>
                    </p>
                @else
                    <p class="text-muted p-3">Anda Belum login! silahkan login untuk akses fitur lanjutan</p>
                @endauth
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                @auth('teacher')
                    <div class="pull-left">
                        <a href="{{ url('/teacher/profile') }}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <form method="POST" class="pull-right mt-2" action="{{ route('teacher.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-flat">Log out</button>
                    </form>
                @else
                    <div class="pull-right">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-flat">Log in</a>
                    </div>
                @endauth
            </li>
          </ul>
        </li>      
    </ul>
</aside>

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
                <a class="nav-link text-light @if(request()->is('/')) active @endif" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="text-light nav-link dropdown-toggle" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu @if(
                                            request()->is('tentang') ||
                                            request()->is('latar-belakang') ||
                                            request()->is('visi-misi')
                ) active @endif" aria-labelledby="navbarDropdown">
                    <a class="text-light dropdown-item text-dark" href="{{url('/tentang')}}">Tentang</a>
                    <a class="text-light dropdown-item text-dark" href="{{url('/latar-belakang')}}">Latar Belakang</a>
                    <a class="text-light dropdown-item text-dark" href="{{url('/visi-misi')}}">Visi Misi</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link @if(request()->is('galeri')) active @endif" href="{{url('/galeri')}}">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link @if(request()->is('berita-acara')) active @endif" href="{{url('/berita-acara')}}">Berita & Acara</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link @if(request()->is('contact')) active @endif" href="{{url('/contact')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link @if(request()->is('materi')) active @endif" href="{{url('/materi')}}">Materi</a>
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
    <main style="height: 100vh;">
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
                <div class="row col-md-12 justify-content-between" style="font-size: 15px; width: 700%;">
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
@include('components.sweetalert')
</html>
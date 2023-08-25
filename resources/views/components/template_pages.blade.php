<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link Css --}}
    <link rel="stylesheet" href="{{asset('css/components/template_pages.css')}}">

    {{-- Template AdminLTE --}}
    <base href="{{ asset('adminLTE') }}/">
    @include('components.adminlte_dependency')

    <title>@yield('title')</title>

</head>
<body>

{{-- MAIN --}}

    {{-- Bagian Header --}}
    <aside class="header">
        
        <a href="{{url('/')}}" class="brand-link">
            <img src="{{ asset('assets/images/logo_paud.jpg') }}" alt="paud Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-bold text-dark">Paud/TK KB Kasih Bunda </span>
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
                    <a href="{{ route('login') }}" class=""><b>Click untuk Login</b></a>
                @endauth
            </a>

            <!-- Dropdown Menu -->
            @auth('teacher')
            <ul class="dropdown-menu dropdown-menu-right">

                <!-- User Image -->
                <li class="user-header">
                        <img src="{{ asset('assets/'.auth('teacher')->user()->foto_profile) }}" class="img-circle" alt="User Image">
                        <p>
                            <b class="">{{ auth('teacher')->user()->nama_panggilan }}</b>
                            <small class="text-gray">{{ auth('teacher')->user()->nama_lengkap }}</small>
                        </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                        <div class="pull-left">
                            <a href="{{ url('/teacher/profile') }}" class="btn btn-default btn-flat">Admin</a>
                        </div>
                        <form method="POST" class="pull-right mt-2" action="{{ route('teacher.logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-flat">Log out</button>
                        </form>
                </li>
            </ul>
            @endauth
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
            <form class="form-inline my-2 my-lg-0 navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar bg-white" type="submit">
                        <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    </div>
                </form>
            </form>
        </div>
    </nav>

    {{-- Bagian Main --}}
        <main>
            @yield('mainContainer')

            <br>
            {{-- Bagian Footer --}}
            <footer class="footer mt-5">
                <div class="row containe justify-content-center">
                    <div class="row align-items-center">

                        <!-- Logo Perusahaan -->
                        <div class="col-md-12 text-center footer-logo p-5">
                            <img src="{{ asset('assets/images/logo_paud.jpg') }}" class="img-circle elevation-3" alt="Gambar 12" style="height: 7rem">
                        </div>

                        <!-- Email, Alamat, dan Lokasi -->
                        <div class="col-md-12 text-center footer-info">
                            <p><i class="far fa-envelope"></i> Email: kasihbundakenangabangsa@gmail.com</p>
                            <p><i class="fas fa-globe"></i> Lokasi: Jalan Masjid Al Islah Blok Mandala Rt 001 Rw 03 No.79 Gondrong Cipondoh, RT.005/RW.002, Kenanga, </p>
                            <p><i class=""></i>Kec. Tangerang, Kota Tangerang, Banten 15146</p>
                            <p><i class="fas fa-phone"></i> Hubungi : +62895343694488</p>
                            <p class="kebijakan-privasi text-yellow"><i class="fas fa-shield-alt"></i><a href="{{url('/kebijakan-privasi')}}" class="text-yellow"> Kebijakan Privasi</a></p>
                        </div>
                    </div>
                    <div class="row col-md-10 justify-content-between">
                        
                        <!-- Copy right -->
                        <p class="text-left float-left">&copy; 2023 Perusahaan. All rights reserved.</p>
                        
                        {{-- Bagian 4 Tombol Sosial Media --}}
                        <div class="float-right justify-content-end">
                            <a class="btn" href="https://www.youtube.com/@KasihBundaKenangaBangsa" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a class="btn" href="https://instagram.com/kenangabangsa?igshid=MzNlNGNkZWQ4Mg" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn" href="https://www.facebook.com/profile.php?id=100095021275418&mibextid=ZbWKwL" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a class="btn" href="https://vm.tiktok.com/ZM2Wg8rwJ/" target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </main>

    {{-- Link js --}}
    <script src="{{ asset('js/components/pagesnavbar.js') }}"></script>
</body>
    @include('components.sweetalert')
</html>
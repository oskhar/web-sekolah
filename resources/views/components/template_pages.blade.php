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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
    <!-- Tempusdominus Bootstrap 4 -->

    {{-- Boostrap --}}
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

    <title>@yield('title')</title>

</head>
<body>

        {{-- Bagian Header --}}
    <div class="header">
        <div class="logo">Logo Perusahaan</div>
        <div class="social-icons">

            {{-- Bagian 4 Tombol Sosial Media --}}
            <a href=""><button class="btn"><i class="fab fa-facebook-f"></i></button></a>
            <a href=""><button class="btn"><i class="fab fa-twitter"></i></button></a>
            <a href=""><button class="btn"><i class="fab fa-instagram"></i></button></a>
            <a href=""><button class="btn"><i class="fab fa-linkedin-in"></i></button></a>
        </div>
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
                <a class="nav-link active text-light" href="">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="text-light nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="text-light dropdown-item" href="">Tentang</a>
                    <a class="text-light dropdown-item" href="">Latar Belakang</a>
                    <a class="text-light dropdown-item" href="">Visi Misi</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link" href="">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link" href="">Berita & Acara</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link" href="">Contact</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link" href="">Materi</a>
            </li>
        </ul>

        {{-- Bagian Search --}}
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

    <main style="height: 200vh;">
        @yield('mainContainer')
        <footer class="footer mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center footer-logo p-2">
                        <!-- Logo Perusahaan -->
                        <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 12" style="width:80px; height: 80px;">
                    </div>
                    <div class="col-md-12 text-center footer-info">
                        <!-- Email, Alamat, dan Lokasi -->
                        <p>Email: info@perusahaan.com</p>
                        <p>Alamat: Jl. Jalan Raya No. 123</p>
                        <p>Hubungi : + 62 98788759002</p>
                        <p>Lokasi: Kota, Negara</p>
                    </div>
                    <div class="col-md-6 text-md-left" style="font-size: 15px">
                        <!-- Copy right -->
                        <p>&copy; 2023 Perusahaan. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </main>


    

    <script src="{{ asset('js/components/pagesnavbar.js') }}"></script>
</body>
</html>
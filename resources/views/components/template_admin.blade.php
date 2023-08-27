<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

    {{-- Template AdminLTE --}}
    <base href="{{ asset('adminLTE') }}/">
    @include('components.adminlte_dependency')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url("/") }}" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #2b2a33;">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('assets/images/logo_paud.jpg') }}" alt="paud Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Paud Kasih Bunda</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link @if(request()->is('teacher')) active @endif">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Main Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/materi') }}" class="nav-link @if(request()->is('teacher/materi')) active @endif">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Blog Materi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/pekerjaan-rumah') }}" class="nav-link @if(request()->is('teacher/pekerjaan-rumah')) active @endif">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Pekerjaan Rumah
              </p>
            </a>
          </li>
          <li class="nav-item @if(request()->is('teacher/murid') || request()->is('teacher/galeri') || request()->is('teacher/profile')) menu-open @endif">
            <a class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Kelola Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/murid') }}" class="nav-link @if(request()->is('teacher/murid')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Murid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/galeri') }}" class="nav-link @if(request()->is('teacher/galeri')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/profile') }}" class="nav-link @if(request()->is('teacher/profile')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/berita') }}" class="nav-link @if(request()->is('teacher/berita')) active @endif">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita & Acara
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/pesan') }}" class="nav-link @if(request()->is('teacher/pesan')) active @endif">
              <i class="nav-icon fas fa-sms"></i>
              <p>
                Lihat Pesan
              </p>
            </a>
          </li>
          <li class="nav-item mt-5">
            <form action="{{ route('teacher.logout') }}" method="POST">
              @csrf
            <button type="submit" class="nav-link bg-danger btn">
              <i class="nav-icon fas fa-arrow-right"></i>
              <p>
                Log out
              </p>
            </button>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('mainContainer')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- /.control-sidebar -->
</div>
@include('components.sweetalert')
<!-- ./wrapper -->
</body>
</html>

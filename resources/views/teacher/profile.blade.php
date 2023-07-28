@extends('components.template_teacher')

@section('title', "Profile")
@section('mainContainer')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card col-md-4">
            <!-- Profile Card -->
            <div class="card-body row">
                <div class="col-sm-12 d-flex justify-content-center" id="bungkus_foto">
                    <img class="img-circle elevation-2" src="{{ asset('assets/'.Auth::user()->foto_profile) }}" alt="Foto Profil" id="foto_profile" onmouseover="munculkanTombolUbahProfile()">
                </div>
                <div class="col-sm-12 d-flex justify-content-center mt-4">
                    <h3 class="font-weight-light">{{ Auth::user()->nama_lengkap }}</h3>
                </div>
                <div class="col-sm-12 d-flex justify-content-center">
                    <h5 class="text-muted">{{ Auth::user()->jabatan }}</h5>
                </div>
            </div>
            </div>
            <div class="col-md-8">
            <!-- Detail Profile -->
            <div class="card">
                <div class="card-body">
                <h4 class="mb-4">Informasi Pribadi</h4>
                <div class="row">
                    <div class="col-md-6">
                    <strong>Nama Panggilan</strong>
                    <p>{{ Auth::user()->pengalaman_mengajar }}</p>
                    <hr>
                    <strong>Nomor Telepon</strong>
                    <p>{{ Auth::user()->nomor_telepon }}</p>
                    </div>
                    <div class="col-md-6">
                    <strong>Email</strong>
                    <p>{{ Auth::user()->email }}</p>
                    <hr>
                    <strong>Gender</strong>
                    <p>{{ ['Wanita', 'Pria'][Auth::user()->gender] }}</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->
<script>
    function munculkanTombolUbahProfile () {
        let tombol = document.createElement('button');
        tombol.id = 'tombol_ganti_avatar';
        $('foto_profile').add(tombol);
    }
</script>
@endsection
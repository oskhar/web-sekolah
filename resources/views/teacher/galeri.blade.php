@extends('components.template_teacher')

@section('title', "Galeri")
@section('mainContainer')
<style>
    #list-gambar {
        height:14rem;
        width:100%;
        object-fit:cover;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kumpulan Foto</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Kumpulan Foto</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Galeri Foto</h3>
            </div>
            <div class="row no-gutters card-body">

                <!-- Baris 1 -->
                <div class="col-sm-3">
                    <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 1" id="list-gambar">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
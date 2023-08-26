@extends('components.template_student')

@section('title', "Dashboard")
@section('mainContainer')

{{-- MAINS --}}

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Lihat Pesan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Lihat Pesan</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>  

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {{-- kolom isi pesan --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="info-box mb-3 bg-info">
                        <span class="info-box-icon"><i class="fas fa-sms"></i></span>
            
                        <div class="info-box-content">
                            <h2>Buat Pesan Baru</h2>
                        </div>
                    </div>
                </div>
                {{-- tombol kirim pesan --}}
                <div class="col-md-12">
                    <textarea class="form-control mb-3" id="pertanyaan" rows="5" name="isi" required placeholder="Masukkan Pesan Anda"></textarea>
                    <button type="submit" class="btn btn-primary mb-5">Kirim Pesan</button>
                </div>
                
                {{-- kumpulan pesan terkirim --}}
                <div class="col-md-12">
                    <div class="info-box mb-3 bg-success">
                        <span class="in fo-box-icon"><i class="fas fa-check"></i></span>
                        <div class="info-box-content">
                            <h2>Pesan Terkirim</h2>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-12">
                    <div class="info-box mb-3 bg-white row justify-content-center py-4">
                        <h5 class="text-center text-muted">Tidak ada pesan !</h5>
                    </div>
                </div>
        </div>


@endsection
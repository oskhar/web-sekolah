@extends('components.template_teacher')

@section('title', "Galeri")
@section('mainContainer')

{{-- CSS --}}
<style>
    #list-gambar {
        height:15rem;
        width:100%;
        object-fit:cover;
    }
</style>

{{-- MAIN --}}

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

    {{-- Fungsi Tombol Tambah foto --}}
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/teacher/galeri/upload') }}" class="btn border-primary text-primary btn-sm col-sm-2 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">Tambah Foto</a>
                </div>
                <div class="row no-gutters card-body">
                    @foreach ($data_foto as $data)
                        <div class="col-sm-3">
                            <img src="{{ asset('assets/'.$data->gambar)}}" onclick="lihatGambar('{{ asset('assets/'.$data->gambar)}}', '{{ $data->judul ?? 'Tidak memiliki judul...' }}')" class="img-fluid" alt="Gambar" id="list-gambar">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

{{-- Js --}}
    <script>
        function lihatGambar(image, judul) {
            Swal.fire({
                imageUrl: image,
                html: judul,
                imageAlt: 'Ini gambar',
                showConfirmButton: false,
                showDenyButton: true,
                showCancelButton: true,
                denyButtonText: `Hapus`,
            })
        }
    </script>
@endsection
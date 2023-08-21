@extends('components.template_pages')

@section('title', "Halaman Gallery")
@section('mainContainer')
<style>
    #list-gambar {
        height: 15rem;
        width:100%;
        object-fit:cover;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/pages/gallery.css')}} ">

{{-- Bagian Kebijakan Privasi--}}

<section class="content mt-5">
    <div class="container-fluid text-center row justify-content-center">
        <div class="col-lg-10">
            <h3>GALLERY</h3>
            <div class="teks-kp">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero laudantium esse eos obcaecati nisi qui ipsum neque dolorem. Ea consectetur, sunt veritatis asperiores natus laboriosam quia doloribus. Cumque voluptatibus a at, aut sed libero deserunt quibusdam fugit numquam expedita minima beatae provident laudantium quaerat atque explicabo praesentium nesciunt iste hic?</p>
            </div>
            {{-- Bagian Foto Gallery --}}
            <div class="daftar-prestasi mt-5">
                <div class="row no-gutters">
                    @foreach ($data_galeri as $data)
                        <div class="col-sm-3">
                            <img src="{{ asset('assets/'.$data->gambar)}}" onclick="lihatGambar('{{ asset('assets/'.$data->gambar)}}')" class="img-fluid" alt="Gambar" id="list-gambar">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
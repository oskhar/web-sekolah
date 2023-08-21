@extends('components.template_pages')

@section('title', "Halaman Gallery")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/gallery.css')}} ">

{{-- Bagian Kebijakan Privasi--}}
<div class="container-kp">
    <h3>GALLERY</h3>
    <div class="teks-kp">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero laudantium esse eos obcaecati nisi qui ipsum neque dolorem. Ea consectetur, sunt veritatis asperiores natus laboriosam quia doloribus. Cumque voluptatibus a at, aut sed libero deserunt quibusdam fugit numquam expedita minima beatae provident laudantium quaerat atque explicabo praesentium nesciunt iste hic?</p>
    </div>

    <div class="row no-gutters card-body">
        @foreach ($data_galeri as $data)
            <div class="col-sm-3">
                <img src="{{ asset('assets/'.$data->gambar)}}" onclick="lihatGambar('{{ asset('assets/'.$data->gambar)}}')" class="img-fluid" alt="Gambar" id="list-gambar">
            </div>
        @endforeach
    </div>
    <script>
        function lihatGambar(image) {
            Swal.fire({
                imageUrl: image,
                imageAlt: 'Ini gambar'
            })
        }
    </script>

</div>


@endsection
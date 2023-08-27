@extends('components.template_pages')

@section('title', "Halaman Gallery")
@section('mainContainer')

{{-- Link Css --}}
<link rel="stylesheet" href="{{ asset('css/pages/gallery.css')}} ">


{{-- MAIN --}}
<section class="content mt-5">
    <div class="container-fluid text-center row justify-content-center">

        {{-- bagian gallery dan teks--}}
        <div class="col-lg-10">
            <h3>GALLERY</h3>
            <div class="teks-kp">
                <p>Selamat datang di Galeri Kami! Jelajahi momen-momen istimewa yang tertangkap dalam gambar-gambar, membawa Anda lebih dekat dengan keceriaan dan kegiatan seru di PAUD kami</p>
            </div>
            {{-- Bagian Foto Gallery --}}
            <div class="daftar-prestasi mt-5">
                <div class="row no-gutters justify-content-center">
                    @if ( $banyak_galeri > 0 )
                    @foreach ($data_galeri as $data)
                        <div class="col-sm-3">
                            <img src="{{ asset('assets/'.$data->gambar)}}" onclick="lihatGambar('{{ asset('assets/'.$data->gambar)}}')" class="img-fluid" alt="Gambar" id="list-gambar">
                        </div>
                    @endforeach
                    @else
                        {{-- informasi tidak ada materi --}}
                        <div class="col-md-10 mt-5">
                            <div class="info-box mb-3 bg-white row justify-content-center py-5">
                                <h4 class="text-center text-muted py-5">Tidak ada galeri saat ini !</h4>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Kontrol Js --}}
<script>
    function lihatGambar(image, judul) {
        Swal.fire({
            imageUrl: image,
            html: judul,
            imageAlt: 'Ini gambar',
        })
    }
</script>

@endsection
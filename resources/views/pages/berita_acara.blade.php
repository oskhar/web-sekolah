@extends('components.template_pages')

@section('title', "Halaman Berita & Acara")
@section('mainContainer')

{{-- Link Css --}}
<link rel="stylesheet" href="{{ asset('css/pages/berita_acara.css')}} ">

{{-- MAIN --}}
    <section class="content">
    <div class="container-fluid mt-5">
        <!-- Teks yang ditampilkan paling atas -->
        <div class="text-overlay container-fluid text-center row justify-content-center">
            <h2>BERITA & ACARA PAUD</h2>
            <div class="text-judul col-lg-10">
                <p>Temukan berita terbaru dan acara menarik di halaman Berita dan Acara kami. Tetap up-to-date dengan informasi terkini tentang kegiatan dan perkembangan di PAUD Kasih Bunda Kenanga Bangsa.</p>
            </div>
        </div>

        {{--  Bagian Berita Dan Acara  --}}
        <div class="berita-acara row justify-content-center">
            @if ( $banyak_berita > 0 )
            @foreach ($data_berita as $data)

                {{-- card berita& acara --}}
                <div class="card col-lg-10">
                    <div class="pengumuman card-header">
                        <div class="display-pengumuman">
                            <a href="{{ url('sel-berita-acara?id='.$data->id) }}" class="btn float-right border">Selengkapnya</a>
                            <h3 class="mb-0">{{ $data->judul }}</h3>
                            <p class="text-muted">{{ $data->created_at->format('Y-m-d') }}</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/assets/{{ $data->gambar }}" class="img-fluid" alt="..." >
                            </div>
                            <div class="col-md-8">
                                <p class="card-text">
                                    {!! nl2br(substr($data->isi, 0, 3 * 100)) !!}
                                    @if (strlen($data->isi) > 3 * 100)
                                        ... <a href="{{ url('sel-berita-acara?id='.$data->id) }}" class="toggle-text">Selengkapnya</a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @else

                {{-- informasi tidak ada berita --}}
                <div class="col-md-10 mt-5">
                    <div class="info-box mb-3 bg-white row justify-content-center py-5">
                        <h4 class="text-center text-muted py-5">Tidak ada berita saat ini !</h4>
                    </div>
                </div>
            @endif
        </div>
    </div>
    </section>

@endsection
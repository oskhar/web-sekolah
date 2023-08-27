@extends('components.template_pages')

@section('title', "Halaman Utama")
@section('mainContainer')

{{-- Link Css --}}
<link rel="stylesheet" href="{{ asset('css/pages/home.css')}} ">
    
{{-- MAIN --}}

    <div class="display">
        <div id="container-1" class="row">

            {{-- Kalimat Pembukaan --}}
            <div class="col-sm-7 jarak" >
                <h2>SELAMAT DATANG DI PAUD</h2>
                <h2>KASIH BUNDA KENANGA BANGSA</h2>
                <p>Generasi bangsa perlu kita didik sejak dini untuk membentuk kesadaran akan pentingnya pengetahuan dan membentuk kebiasaan yang baik serta memperdalam etika dan moral agar anak tumbuh menjadi sosok yang kita harapkan dan menjadi anak - anak yang mutitalenta untuk bangsa negara indonesia</p>
            </div>

            {{-- Gambar Ilustrasi --}}
            <img src="{{ asset('assets/images/ilustrasi_sekolah.png') }}" alt="" class="col-sm-5">
        </div>
    </div>    
        
    {{-- Bagian Svg LightBlue --}}
    <div id="container-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" ">
            <path fill-opacity="#dddddd" d="M0,32L30,37.3C60,43,120,53,180,90.7C240,128,300,192,360,202.7C420,213,480,171,540,160C600,149,660,171,720,170.7C780,171,840,149,900,149.3C960,149,1020,171,1080,181.3C1140,192,1200,192,1260,202.7C1320,213,1380,235,1410,245.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>
    </div>
    

    {{-- Bagian Slide Home 2 --}}
    {{-- 3 Kotak --}}
    <section class="content">
        <div class="container-fluid">
            <div class="data-sekolah row justify-content-center">
                <div class="judul-data-sekolah text-center">
                    <h1>DATA - DATA SEKOLAH</h1>
                </div>
        
                <div class="row col-lg-11">
                    <div class="col-lg-4 p-3">
                        <div class="bg-cyan small-box p-5 rounded shadow">
                            <h4 class="title-1" >Banyak Pelajar </h4>
                            <h4>Di Kelas</h4>
                            <p>100%</p>
                        </div>
                    </div>
        
                    <div class="col-lg-4 p-3">
                        <div class="bg-green small-box p-5 rounded shadow">
                            <h4 class="title-1">Banyak Pendidik</h4>
                            <h4>dan Kependidikan</h4>
                            <p>9 Orang</p>
                        </div>
                    </div>
        
                    <div class="col-lg-4 p-3">
                        <div class="bg-red small-box p-5 rounded shadow">
                            <h4 class="title-1">Banyak Kelas </h4>
                            <h4>Di Paud/TK</h4>
                            <p>4 Kelas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bagian Pengumuman --}}

    <section class="content">
        <div class="container-fluid row justify-content-center">
        <div class="card col-lg-10">
            <div class="pengumuman card-header">
                <div class="display-pengumuman">
                    <a href="{{url('/berita-acara')}}" class="btn float-right border">Selengkapnya</a>
                    <h3>SAMBUTAN KEPALA SEKOLAH</h3>
                    <p class="text-muted">Wiwin Karmila, S.pd</p>
                </div>
            </div>

            {{-- Card Pengumuman --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/assets/images/foto_bareng_tk.jpg" class="img-fluid" alt="..." >
                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <h3 class="card-title">PENYAMPAIAN</h3>
                            <p class="card-text"><sup class="text-secondary">Di upload pukul 13.00</sup></p>
                            <p class="card-text">Pendaftaran murid baru sudah mulai di buka. Waktu pendaftaran di mulai pada tanggal 17 juli 2024, Bagi ibu dan bapak yang ingin anaknya bersekolah di Paud Kasih Bunda Kenanga Bangsa silahkan klik Selengkapnya. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Bagian Slide Kotak -->
    <div id="myCarousel" class="carousel slide mt-5" data-ride="carousel" style=" padding-top: 150px;">
        <!-- Wrapper untuk konten Carousel -->
        <div class="carousel-inner bg-skyblue py-5">
        <h1 class="text-center text-darkblue mt-5">KUMPULAN MATERI</h1>
          <div class="carousel-item active bg-skyblue">
            <!-- Konten Pertama -->
            <div class="row align-items-center justify-content-center">
                @foreach ($data_materi as $data)
                <div class="col-sm-3 p-5">
                    <div class="card">
                        <div class="p-4 rounded" style="background: url({{ asset('assets/'.$data->gambar) }});height: 10rem;">
                            <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 10rem; background-color: rgba(0, 0, 0, 0.5);z-index:0;"></div>
                            <h2 class="text-white">{{ $data->judul }}</h2>
                        </div>
                        <div class="p-4 bg-white">
                            <p>
                                {!! nl2br(substr($data->isi, 0, 3 * 10)) !!}
                                
                                @if (strlen($data->isi) > 3 * 20)
                                    <span class="read-more">... <a href="{{ url('sel-materi?id='.$data->id) }}" class="toggle-text">Selengkapnya</a></span>
                                @endif</p>
                            </p>
                        </div>
                      <!-- Isi Konten Pertama -->
                    </div>
                  </div>

                  @if ($loop->iteration % 3 == 0)
                          </div>
                      </div>
                      <div class="carousel-item bg-skyblue">
                      <div class="row align-items-center justify-content-center">
                  @endif
                  @endforeach
            </div>
          </div>
          <!-- Tambahkan konten berikutnya sesuai kebutuhan -->
        </div>
        
        <!-- Tombol Navigasi -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only" style="z-index: 1000;">Previous</span>
        </a>
        <a class="carousel-control-next " href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only" style="z-index: 1000;">Next</span>
        </a>
      </div>

      {{-- Bagian Daftar Presentasi --}}
      <div class="container daftar-prestasi mt-5">
        <h2 class="text-center mb-5">DAFTAR PRESTASI</h2>
        <div class="row no-gutters">
    
            <!-- Baris 1 -->
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 1">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 2">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 3">
            </div>
    
            <!-- Baris 2 -->
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 4">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 5">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 6">
            </div>
    
            <!-- Baris 3 -->
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 7">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 8">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 9">
            </div>
    
            <!-- Baris 4 -->
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 10">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 11">
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 12">
            </div>
    
        </div>
    </div>

@endsection
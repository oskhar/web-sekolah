@extends('components.template_pages')

@section('title', "Halaman Berita & Acara")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/berita_acara.css')}} ">
<section class="content">
<div class="container-fluid mt-5">
    <!-- Teks yang ditampilkan paling atas -->
    <div class="text-overlay">
        <h2>BERITA & ACARA PAUD</h2>
    </div>

    {{--  Bagian Berita Dan Acara  --}}
    <div class="berita-acara row justify-content-center">
        
        <div class="card col-lg-10">
            <div class="pengumuman card-header">
                <div class="display-pengumuman">
                    <button class="btn float-right border">Selengkapnya</button>
                    <h3 class="mb-0">Study Tour</h3>
                    <p class="text-muted">1 Agustus 2023</p>
                </div>
            </div>

            {{-- Card Pengumuman --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/assets/images/logo_paud.jpg" class="img-fluid" alt="..." >
                    </div>
                    <div class="col-md-8">
                        <div class="">
                            <p class="card-text">Kami sangat berbahagia untuk mengumumkan pelaksanaan kegiatan study tour yang akan membawa murid-murid kami menjelajahi kota Bandung pada tanggal 1 Agustus 2024. Kegiatan ini akan memberikan pengalaman belajar yang tak terlupakan di luar kelas. Untuk mendaftar, biaya pendaftaran sebesar 300 ribu rupiah per murid diperlukan, mencakup transportasi, penginapan, dan kegiatan selama study tour. Kami mengundang orang tua/wali murid untuk mendukung partisipasi anak-anak dalam kesempatan berharga ini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-lg-10">
            <div class="pengumuman card-header">
                <div class="display-pengumuman">
                    <button class="btn float-right border">Selengkapnya</button>
                    <h3 class="mb-0">Seragam</h3>
                    <p class="text-muted">29 January 2024</p>
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
                            <p class="card-text">Kami ingin memberitahukan bahwa biaya pembayaran seragam PAUD per murid adalah sebesar 200 ribu rupiah. Biaya ini mencakup biaya produksi dan distribusi seragam yang akan digunakan oleh anak-anak dalam proses pembelajaran di PAUD.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-lg-10">
            <div class="pengumuman card-header">
                <div class="display-pengumuman">
                    <button class="btn float-right border">Selengkapnya</button>
                    <h3 class="mb-0">Pembayaran</h3>
                    <p class="text-muted">8 juli 2023</p>
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
                            <p class="card-text">Kami ingin memberitahukan mengenai pembayaran SPP untuk para murid. Biaya SPP telah ditetapkan untuk memfasilitasi kegiatan pembelajaran dan pengembangan anak-anak di PAUD. Rincian lebih lanjut terkait besaran dan jadwal pembayaran SPP akan disampaikan dalam waktu dekat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
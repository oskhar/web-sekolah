@extends('components.template_pages')

@section('title', "Halaman Tentang")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/tentang.css')}} ">
  <!-- Card -->
  <div class="container p-5">
    <div class="card border-0">
      <div class="row g-0">
        <!-- Wilayah 1 (Lebar) -->
        <div class="col-md-8 p-4">
          <h3>KURIKULUM TAHUN 2023</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea eaque, consequatur reprehenderit minus harum et incidunt. Tenetur, illo illum adipisci, iste debitis aut consequatur alias repellat veritatis obcaecati veniam nostrum, quam odio consequuntur! Dolores provident nulla necessitatibus adipisci exercitationem dolorum ipsum perspiciatis quod atque quaerat voluptates quo aliquid, distinctio repellendus, nam voluptatem. Blanditiis velit unde exercitationem excepturi animi, dignissimos, expedita deleniti magni suscipit asperiores, totam placeat aliquid praesentium numquam qui harum? Officia fugit veritatis blanditiis, aliquam asperiores itaque sequi, hic totam expedita et magnam iusto facilis neque assumenda impedit rerum, ipsa beatae? Ea quae deleniti, beatae rerum nihil et aperiam!</p>
        </div>
        <!-- Wilayah 2 (Kecil) -->
        <div class="col-md-4">
          <div class="card-body">
            <h1 class="card-title">INFO</h1>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut magnam consequatur numquam ut laborum enim commodi reiciendis, cumque beatae laudantium debitis aliquid perferendis. Dicta voluptas rem soluta, voluptate totam harum voluptates magnam sit libero .</p>
            <P>Informasi kegiatan silahkan klik <a href="" style="color: #355389; font-weight: bold;">disini</a></P>
            <a href="#" class="btn btn-primary cek">Cek Lowongan Kerja</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- Bagian fasilitas dan sarana --}}
  <div id="myCarousel" class="carousel slide mt-5" data-ride="carousel" style=" padding-top: 150px;">
    <!-- Wrapper untuk konten Carousel -->
    <div class="carousel-inner pt-5 bg-cyan">
        <p style="text-align: center; font-weight: bold; font-size: 40px;">FASILITAS DAN SARANA</p>
      <div class="carousel-item active bg-cyan">
        <!-- Konten Pertama -->
        <div class="row align-items-center justify-content-center">
          <div class="col-sm-3 p-5">
            <div class="card">
                <div class="p-4 bg-green rounded">
                    <h2>Ini Judul</h2>
                </div>
                <div class="p-4 bg-white">
                    <p>Ini Isi Materi</p>
                </div>
              <!-- Isi Konten Pertama -->
            </div>
          </div>
          <div class="col-sm-3 p-5">
            <div class="card">
                <div class="p-4 bg-green rounded">
                    <h2>Ini Judul</h2>
                </div>
                <div class="p-4 bg-white">
                    <p>Ini Isi Materi</p>
                </div>
              <!-- Isi Konten Pertama -->
            </div>
          </div>
          <div class="col-sm-3 p-5">
            <div class="card">
                <div class="p-4 bg-green rounded">
                    <h2>Ini Judul</h2>
                </div>
                <div class="p-4 bg-white">
                    <p>Ini Isi Materi</p>
                </div>
              <!-- Isi Konten Pertama -->
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item bg-cyan">
        <!-- Konten Kedua -->
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-3 p-5">
                <div class="card">
                    <div class="p-4 bg-green rounded">
                        <h2>Ini Judul</h2>
                    </div>
                    <div class="p-4 bg-white">
                        <p>Ini Isi Materi</p>
                    </div>
                  <!-- Isi Konten Pertama -->
                </div>
              </div>
              <div class="col-sm-3 p-5">
                <div class="card">
                    <div class="p-4 bg-green rounded">
                        <h2>Ini Judul</h2>
                    </div>
                    <div class="p-4 bg-white">
                        <p>Ini Isi Materi</p>
                    </div>
                  <!-- Isi Konten Pertama -->
                </div>
              </div>
              <div class="col-sm-3 p-5">
                <div class="card">
                    <div class="p-4 bg-green rounded">
                        <h2>Ini Judul</h2>
                    </div>
                    <div class="p-4 bg-white">
                        <p>Ini Isi Materi</p>
                    </div>
                  <!-- Isi Konten Pertama -->
                </div>
              </div>
        </div>
      </div>
      <!-- Tambahkan konten berikutnya sesuai kebutuhan -->
    </div>
    <!-- Tombol Navigasi -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only" style="z-index: 1000;">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon " aria-hidden="true"></span>
      <span class="sr-only text-primary" style="z-index: 1000;">Next</span>
    </a>
  </div>


@endsection
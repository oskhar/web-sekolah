@extends('components.template_pages')

@section('title', "Halaman Tentang")
@section('mainContainer')

{{-- Link Css --}}
<link rel="stylesheet" href="{{ asset('css/pages/tentang.css')}} ">

{{-- MAIN --}}

  {{-- Bagian Kurikulum --}}
  <!-- Card -->
  <div class="container-tentang p-5">
    <div class="card border-0">
      <div class="row g-0">
        <!-- Wilayah 1 (Lebar) -->
        <div class="col-md-8 p-4">
          <h3>KURIKULUM TAHUN 2023</h3>
          <p>Kepada Orang Tua/Wali Murid PAUD "Kasih Bunda Kenanga Bangsa" di Wilayah Jawa Barat, Kota Tangerang,

            Kami ingin berbagi perubahan penting dalam kurikulum PAUD kami untuk tahun ajaran 2023, sesuai pedoman pendidikan usia dini yang ditetapkan pemerintah. Fokus kami adalah mengintegrasikan pendekatan holistik, pengembangan bahasa, pengenalan sains-kognitif, seni, dan etika. Kami berharap kolaborasi yang kuat antara sekolah,lingkungan dan rumah dalam mendukung pendidikan yang holistik dan berkualitas bagi anak-anak tercinta kita.
            
            <P>Hormat kami,</P>
            <P>Wiwin Karmila, S.pd</P>
            Kepala PAUD "Kasih Bunda Kenanga Bangsa"
          </p>
        </div>
        <!-- Wilayah 2 (Kecil) -->
        <div class="col-md-4">
          <div class="card-body p-4">
            <h1 class="card-title"><b>INFO</b></h1>
            <p class="card-text">Kami membuka peluang bagi individu yang berkomitmen untuk bergabung dalam tim kami di PAUD "Kasih Bunda Kenanga Bangsa." Jika Anda memiliki semangat dalam mendukung pendidikan usia dini dan ingin berkontribusi dalam lingkungan pembelajaran yang positif, kami mengundang Anda untuk melamar posisi yang tersedia.</p>
            <P>Informasi kegiatan silahkan klik <a href="{{url('/latar-belakang')}}" style="color: #355389; font-weight: bold;">disini</a></P>
            <a href="{{url('/lowongan-kerja')}}" class="btn btn-primary cek">Cek Lowongan Kerja</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- Bagian fasilitas dan sarana --}}
  <div id="myCarousel" class="carousel slide mt-5" data-ride="carousel" style=" padding-top: 150px;">
    <!-- Wrapper untuk konten Carousel -->
    <div class="carousel-inner pt-5 bg-skyblue">
        <h1 class="text-darkblue text-center">FASILITAS DAN SARANA</h1>
      <div class="carousel-item active bg-skyblue">
        <!-- Konten Pertama -->
        <div class="row align-items-center justify-content-center">
          <div class="col-sm-3 p-5">
            <div class="card-materi">
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
            <div class="card-materi">
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
            <div class="card-materi">
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
      <div class="carousel-item bg-skyblue">
        <!-- Konten Kedua -->
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-3 p-5">
                <div class="card-materi">
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
                <div class="card-materi">
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
                <div class="card-materi">
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


  {{-- Bagian Profile --}}
    {{-- Card Kepala sekolah --}}
    <div class="teks-card-tentang">
      <h1>PROFILE GURU</h1>
    </div>

    <div class="display-kepala row justify-content-around align-items-center center-box">
    <div class="card card-primary card-outline col-sm-5">
      <div class="card-body ">
        <div class="text-center gambar">
          <img class="profile-user-img" src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 1">
        </div>

        <h3 class="profile-username text-center">BUNDA WIWIN</h3>

        <p class="text-muted text-center">Wiwin Karmila</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Tahun Pengajar</b> <a class="float-right">- Tahun</a>
          </li>
          <li class="list-group-item">
            <b>Jabatan</b> <a class="float-right">Kepala Sekolah</a>
          </li>
          <li class="list-group-item">
            <b>Nomor Telepon</b> <a class="float-right">+62 895-2360-3709</a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="float-right">nama@gmail.com</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Hubungi</b></a>
      </div>
      <!-- /.card-body -->
    </div>
  </div>


    {{-- Card Guru - Guru --}}
    <div class="display-satu row justify-content-around align-items-center center-box col-sm-15">
    <div class="card-profile card-primary card-outline col-sm-4">
      <div class="card-body box-profile ">
        <div class="text-center gambar">
          <img class="profile-user-img" src="{{ asset('assets/images/imgProfileGuru/bunda-wida.jpg')}}" class="img-fluid" alt="Gambar 1">
        </div>

        <h3 class="profile-username text-center">BUNDA WIDA</h3>

        <p class="text-muted text-center">Wida Widianingsih</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Tahun Pengajar</b> <a class="float-right">- Tahun</a>
          </li>
          <li class="list-group-item">
            <b>Jabatan</b> <a class="float-right">Guru</a>
          </li>
          <li class="list-group-item">
            <b>Nomor Telepon</b> <a class="float-right">+62 882-9170-6850</a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="float-right">Widawidia756@gmail.com</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Hubungi</b></a>
      </div>
      <!-- /.card-body -->
    </div>

    <div class="card-profile card-primary card-outline col-sm-4">
      <div class="card-body box-profile">
        <div class="text-center gambar">
          <img class="profile-user-img" src="{{ asset('assets/images/imgProfileGuru/bunda-dewi.jpg')}}" class="img-fluid" alt="Gambar 1">
        </div>

        <h3 class="profile-username text-center">BUNDA DEWI</h3>

        <p class="text-muted text-center">Dewi Ratnasari</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Tahun Pengajar</b> <a class="float-right">- Tahun</a>
          </li>
          <li class="list-group-item">
            <b>Jabatan</b> <a class="float-right">GURU</a>
          </li>
          <li class="list-group-item">
            <b>Nomor Telepon</b> <a class="float-right">+62 857-7550-8021</a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="float-right">azwanpasha@gmail.com</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Hubungi</b></a>
      </div>
      <!-- /.card-body -->
    </div>
  </div>

   {{-- Card Guru - Guru --}}
   <div class="display-dua row justify-content-around align-items-center center-box col-sm-15">
    <div class="card-profile card-primary card-outline col-sm-4">
      <div class="card-body box-profile ">
        <div class="text-center gambar">
          <img class="profile-user-img" src="{{ asset('assets/images/imgProfileGuru/bunda-iis.jpg')}}" class="img-fluid" alt="Gambar 1">
        </div>

        <h3 class="profile-username text-center">BUNDA IIS</h3>

        <p class="text-muted text-center">Iis Herawati</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Tahun Pengajar</b> <a class="float-right">- Tahun</a>
          </li>
          <li class="list-group-item">
            <b>Jabatan</b> <a class="float-right">Guru</a>
          </li>
          <li class="list-group-item">
            <b>Nomor Telepon</b> <a class="float-right">+62 857-7550-8021</a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="float-right">isyabil115@gmail.com</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Hubungi</b></a>
      </div>
      <!-- /.card-body -->
    </div>

    <div class="card-profile card-primary card-outline col-sm-4">
      <div class="card-body box-profile ">
        <div class="text-center gambar">
          <img class="profile-user-img" src="{{ asset('assets/images/imgProfileGuru/bunda-nur.jpg')}}" class="img-fluid" alt="Gambar 1">
        </div>

        <h3 class="profile-username text-center">BUNDA NUR</h3>

        <p class="text-muted text-center">Nurhayati</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Tahun Pengajar</b> <a class="float-right">- Tahun</a>
          </li>
          <li class="list-group-item">
            <b>Jabatan</b> <a class="float-right">Guru</a>
          </li>
          <li class="list-group-item">
            <b>Nomor Telepon</b> <a class="float-right">+62 812-8623-8316</a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="float-right">bunda050875@gmail.com</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Hubungi</b></a>
      </div>
      <!-- /.card-body -->
    </div>
  </div>


@endsection
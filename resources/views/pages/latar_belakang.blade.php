@extends('components.template_pages')

@section('title', "Halaman Latar Belakang")
@section('mainContainer')

{{-- link Css --}}
<link rel="stylesheet" href="{{ asset('css/pages/latar_belakang.css')}} ">

{{-- MAIN --}}
  <div class="container-fluid mt-5">
      <!-- Teks yang ditampilkan di atas gambar -->
      <div class="text-overlay">GEDUNG SEKOLAH</div>
      
      <!-- Gambar dengan lebar 800px dan tinggi 600px yang berada di tengah -->
      <img src="{{ asset('assets/images/profile3.jpg')}}" alt="Gambar Gedung Sekolah" class="centered-image" width="900" height="400">

      {{-- Bagian Sejarah --}}
      <div class="sejarah">

          {{-- judul --}}
          <div class="text-center">
              <h2>Sejarah Paud Kasih Bunda Kenanga Bangsa</h2>
          </div>
          {{-- informasi tidak ada berita --}}
          <div class="mt-5">
            <div class="info-box mb-3 bg-white row justify-content-center py-4">
                <h5 class="text-center text-muted">Sedang Tahap Perkembangan!</h5>
            </div>
        </div>
      </div>
      
      {{-- 3 Kotak --}}
      <div class="data-sekolah">
          <div class="judul-data-sekolah text-center">
              <h1>Program pengembangan karakter</h1>
          </div>

          <div class="kotak row mt-5">
              <div class="kotak-satu col-sm-4 p-2">
                  <div class="text-kotak-satu bg-cyan rounded shadow p-5">
                      <h1>Program 1</h1>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, provident!</p>
                  </div>
              </div>

              <div class="kotak-dua col-sm-4 p-2">
                  <div class="text-kotak-dua bg-green rounded shadow p-5">
                      <h1>Program 2</h1>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, provident!</p>
                  </div>
              </div>

              <div class="kotak-tiga col-sm-4 p-2">
                  <div class="text-kotak-dua bg-red rounded shadow p-5">
                      <h1>Program 3</h1>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, provident!</p>
                  </div>
              </div>
          </div>
      </div>
      
  {{-- Bagian Table --}}
      <div class="container table-kegiatan">
          <h1>Kegiatan Hari - Hari</h1>
          <div class="row">
            <div class="col">
              <!-- Tabel dengan 4 baris dan 4 kolom -->
              <table class="table mt-5 text-center">
                <thead class="kolom-satu">
                  <tr>
                    <th>No</th>
                    <th>Kegiatan</th>
                    <th>Waktu</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Membaca Buku</td>
                    <td>10.00-12.00</td>
                    <td>hari ini harus di kumpulkan tugasnya</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Membaca Buku</td>
                    <td>08.00-09.30</td>
                    <td>hari ini harus di kumpulkan tugasnya</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Membaca Buku</td>
                    <td>14.00-16.00</td>
                    <td>hari ini harus di kumpulkan tugasnya</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Membaca Buku</td>
                    <td>19.00-20.30</td>
                    <td>hari ini harus di kumpulkan tugasnya</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>
@endsection
@extends('components.template_pages')

@section('title', "Halaman Contact")
@section('mainContainer')

{{-- Link Css --}}
<link rel="stylesheet" href="{{ asset('css/pages/contact.css')}} ">

{{-- MAIN --}}
  
        <section class="content">
            <div class="container-fluid">

              {{-- Bagian List contact --}}
                <div class="text-center mt-5 text-darkblue">
                    <h1>PERSON CONTACT</h1>
                </div>
                <div class="row justify-content-center">
                    <ul class="list-group list-group-unbordered mb-3 col-sm-10 mt-3">
                        <li class="list-group-item">
                        <b>Kepala Sekolah</b> <span class="float-right">+62 895-2360-3709</span>
                        </li>
                        <li class="list-group-item">
                        <b>Tata Usaha</b> <span class="float-right">+62 813-8638-0481</span>
                        </li>
                        <li class="list-group-item">
                        <b>Penanggung Jawab IT 1</b> <span class="float-right">+62 895-3436-94488</span>
                        </li>
                        <li class="list-group-item">
                        <b>Penanggung Jawab IT 2</b> <span class="float-right">+62 813-8638-0481</span>
                        </li>
                    </ul>
                    <!-- /.card-body -->
                    
                    <div class="container-jam-kerja mt-3 col-sm-12 text-center">
                        <h4 class="text-muted">
                          <i class="far fa-clock text-muted"></i> 
                          <span class="transparan">JAM KERJA</span> 7.30 - 12.00
                        </h4>
                      </div>
                </div>
            </div>
        </section>
    {{-- Teks Jam Kerja --}}
    
    


{{-- Bagian Ajukan Pertanyaan --}}
<div class="container-ajukan mt-5">
    <div class="row">
      <div class="col-md-10 offset-md-1 py-5">
        <div class="card-ajukan">
          <div class="card-body-ajukan">
            <!-- Form untuk mengajukan pertanyaan -->
            <form method="POST">
              @csrf
              <input type="hidden" name="pengirim" value="anonim">
              <div class="form-group-ajukan">
                <label for="pertanyaan" class=""><i class="fas fa-edit text-primary"></i> Pertanyaan Anda</label>

                <div class="form-group">
                  <label for="email">Alamat Email:</label>
                  <input type="text" class="form-control @error('pengirim') is-invalid @enderror" id="email" placeholder=" @error('pengirim') Alamat email wajib dimasukan !! @else Masukkan alamat email @enderror" name="pengirim">
                </div>
          
                <p>Diharapkan Anda mengisi kolom pertanyaan di bawah ini dengan menyertakan alamat email Anda <b>(WAJIB)</b>. Jika ada pertanyaan atau hal yang ingin Anda sampaikan, harap cantumkan alamat email Anda dan isi kolom pertanyaan dengan sejelas mungkin. Tim kami akan dengan senang hati merespons setiap pertanyaan yang Anda ajukan melalui email. Kami sangat menghargai partisipasi Anda dalam berkomunikasi dengan kami.</p>
                <textarea class="form-control" id="pertanyaan" rows="5" name="isi" required placeholder="Masukkan Pertanyaan Anda"></textarea>
                <br>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Google Maps - lokasi paud --}}
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5419754841055!2d106.69103507449742!3d-6.191983993795659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9ba18d52e67%3A0xc9b61e36f2e71de2!2sPAUD%20Kasih%20Bunda%20Kenanga%20Bangsa!5e0!3m2!1sid!2sid!4v1690357146240!5m2!1sid!2sid" height="450" style="border:0; width: 100vw;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


@endsection
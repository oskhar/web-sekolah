@extends('components.template_pages')

@section('title', "Halaman Tentang")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/contact.css')}} ">

{{-- Bagian List contact --}}
    <div class="teks-list">
        <h1>LIST CONTACT</h1>
    </div>

    <div class="container-contact border-bottom border-dark border-4">
        <p>Guru-2</p>
        <p>098767908675</p>
    </div>

    <div class="container-contact border-bottom border-dark border-4">
        <p>Guru-2</p>
        <p>098767908675</p>
    </div>

    <div class="container-contact border-bottom border-dark border-4">
        <p>Guru-2</p>
        <p>098767908675</p>
    </div>

    {{-- Teks Jam Kerja --}}
    <div class="container-jam-kerja">
        <h1 class="font-weight-bold text-muted">
          <i class="far fa-clock text-muted"></i> 
          <span class="transparan">JAM KERJA</span> 10.00 - 20.00
        </h1>
      </div>


{{-- Bagian Ajukan Pertanyaan --}}
<div class="container-ajukan">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card-ajukan">
          <div class="card-body-ajukan">
            <!-- Form untuk mengajukan pertanyaan -->
            <form>
              <div class="form-group-ajukan">
                <label for="pertanyaan border-0">Pertanyaan Anda</label>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, tempora perferendis. Minus maxime dignissimos ea quisquam necessitatibus tempore nesciunt placeat?</p>
                <textarea class="form-control" id="pertanyaan" rows="5" required></textarea>
                <br>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
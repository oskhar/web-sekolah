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




@endsection
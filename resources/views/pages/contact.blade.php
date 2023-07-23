@extends('components.template_pages')

@section('title', "Halaman Tentang")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/contact.css')}} ">

{{-- Bagian List contact --}}
<div class="container-contact">
    <div class="row tentang">
      <div class="col-md-6">
        <!-- Nama Kepala Sekolah -->
        <p style="border-bottom: 1px solid black;">John Doe</p>
      </div>
      <div class="col-md-6">
        <!-- Nomor Telepon -->
        <p style="border-bottom: 1px solid black;">(123) 456-7890</p>
      </div>
    </div>
  </div>

@endsection
@extends('components.template_pages')

@section('title', "Halaman Berita & Acara")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/sel_Berita_Acara.css')}} ">

<div class="container-fluid mt-5">
    <div class="text-overlay text-center"><h1><b>JUDUL BERITA & ACARA</b></h1></div>
    <!-- Gambar dengan lebar 800px dan tinggi 600px yang berada di tengah -->
    <img src="{{ asset('assets/images/profile3.jpg')}}" alt="Gambar Gedung Sekolah" class="centered-image" width="900" height="400">

    <hr>

{{-- Bagian Visi Misi --}}
    <div class="visi_misi">
        <div class="sejarah">
            <div class="visi">
                <h2 class="text-center">Sub judul atau detail judul</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reiciendis ea beatae quaerat incidunt. Sint omnis vel odio ex reprehenderit eaque! Nisi rerum nobis quas placeat, cupiditate, veritatis ea ullam consectetur accusantium numquam magnam consequuntur adipisci at ratione maiores vitae enim dolor! Quam asperiores assumenda perspiciatis! Beatae rem laboriosam deserunt.ipisicing elit. Rerum reiciendis ea beatae quaerat incidunt. Sint omnis vel odio ex reprehenderit eaque! Nisi rerum nobis quas placeat, </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reiciendis ea beatae quaerat incidunt. Sint omnis vel odio ex reprehenderit eaque! Nisi rerum nobis quas placeat, cupiditate, veritatis ea ullam consectetur accusantium numquam magnam consequuntur adipisci at ratione maiores vitae enim dolor! Quam asperiores assumenda perspiciatis! Beatae rem laboriosam deserunt.ipisicing elit. Rerum reiciendis ea beatae quaerat incidunt. Sint omnis vel odio ex reprehenderit eaque! Nisi rerum nobis quas placeat, </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reiciendis ea beatae quaerat incidunt. Sint omnis vel odio ex reprehenderit eaque! Nisi rerum nobis quas placeat, cupiditate, veritatis ea ullam consectetur accusantium numquam magnam consequuntur adipisci at ratione maiores vitae enim dolor! Quam asperiores assumenda perspiciatis! Beatae rem laboriosam deserunt.ipisicing elit. Rerum reiciendis ea beatae quaerat incidunt. Sint omnis vel odio ex reprehenderit eaque! Nisi rerum nobis quas placeat, </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reiciendis ea beatae quaerat incidunt. Sint omnis vel odio ex reprehenderit eaque! Nisi rerum nobis quas placeat, cupiditate, veritatis ea ullam consectetur accusantium numquam magnam consequuntur adipisci at ratione maiores vitae enim dolor! Quam asperiores assumenda perspiciatis! Beatae rem laboriosam deserunt.ipisicing elit. Rerum reiciendis ea beatae quaerat incidunt. Sint omnis vel odio ex reprehenderit eaque! Nisi rerum nobis quas placeat, </p>
            </div>
        </div>
    </div>

</div>




@endsection
@extends('components.template_pages')

@section('title', "Halaman Latar Belakang")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/latar_belakang.css')}} ">

<div class="container-fluid mt-5">
    <!-- Teks yang ditampilkan di atas gambar -->
    <div class="text-overlay">GEDUNG SEKOLAH</div>
    
    <!-- Gambar dengan lebar 800px dan tinggi 600px yang berada di tengah -->
    <img src="{{ asset('assets/images/profile3.jpg')}}" alt="Gambar Gedung Sekolah" class="centered-image" width="900" height="400">

    {{-- Bagian Sejarah --}}
    <div class="sejarah">
        <div class="text-center">
            <h2>Sejarah Paud Kasih Bunda Kenanga Bangsa</h2>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil omnis doloremque aliquam at sunt odit vel ipsam eum blanditiis, ipsa aliquid quas eaque nostrum soluta, laboriosam, architecto fuga delectus ad. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maximead. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maxime</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil omnis doloremque aliquam at sunt odit vel ipsam eum blanditiis, ipsa aliquid quas eaque nostrum soluta, laboriosam, architecto fuga delectus ad. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maximead. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maxime</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil omnis doloremque aliquam at sunt odit vel ipsam eum blanditiis, ipsa aliquid quas eaque nostrum soluta, laboriosam, architecto fuga delectus ad. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maximead. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maxime</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil omnis doloremque aliquam at sunt odit vel ipsam eum blanditiis, ipsa aliquid quas eaque nostrum soluta, laboriosam, architecto fuga delectus ad. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maximead. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maxime</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil omnis doloremque aliquam at sunt odit vel ipsam eum blanditiis, ipsa aliquid quas eaque nostrum soluta, laboriosam, architecto fuga delectus ad. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maximead. Adipisci, assumenda hic ex recusandae sapiente nihil, illum nostrum eaque consequatur dolor molestias! Voluptatem enim ducimus cumque quas nisi maxime</p>
    
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
    
    </div>



  </div>



@endsection
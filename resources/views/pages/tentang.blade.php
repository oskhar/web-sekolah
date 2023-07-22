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


@endsection
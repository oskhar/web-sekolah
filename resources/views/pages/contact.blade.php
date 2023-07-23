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

{{-- Bagian Kebijakan Privasi--}}
<div class="container-kp">
    <h1>KEBIJAKAN PRIVASI</h1>
    <br>
    <div class="teks-kp">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero laudantium esse eos obcaecati nisi qui ipsum neque dolorem. Ea consectetur, sunt veritatis asperiores natus laboriosam quia doloribus. Cumque voluptatibus a at, aut sed libero deserunt quibusdam fugit numquam expedita minima beatae provident laudantium quaerat atque explicabo praesentium nesciunt iste hic?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus temporibus repudiandae doloribus asperiores nesciunt veritatis commodi ut, maiores veniam reprehenderit quasi similique corporis laboriosam autem quod. Distinctio dolore deleniti, aspernatur asperiores cum mollitia natus repellendus explicabo aut earum? Sed quas quibusdam animi eius modi atque unde voluptatum expedita. Harum, at!</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta quod perspiciatis pariatur deleniti, totam nulla dolorum cupiditate doloremque quis blanditiis dignissimos maxime quo cumque adipisci eos recusandae ducimus ex, assumenda distinctio? Harum veniam ut maxime? Quos inventore minima explicabo libero quam temporibus natus soluta. Repudiandae ipsa fugit molestiae assumenda eaque?</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia veniam, voluptatem accusamus optio nesciunt delectus nobis! Inventore maxime explicabo illum, doloribus laboriosam nemo. Corporis animi error quos unde libero quidem repellat? Ipsa aliquam sit nesciunt repellat porro. Asperiores quibusdam eaque non perferendis tenetur deleniti nam hic ullam, consectetur quaerat soluta?</p>

        <p><a href="#">Selengkapnya</a></p>
    </div>



</div>








@endsection
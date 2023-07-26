@extends('components.template_pages')

@section('title', "Halaman Contact")
@section('mainContainer')

<link rel="stylesheet" href="{{ asset('css/pages/contact.css')}} ">

{{-- Bagian List contact --}}
        <section class="content">
            <div class="container-fluid">
                <div class="text-center mt-5 text-darkblue">
                    <h1>LIST CONTACT</h1>
                </div>
                <div class="row justify-content-center">
                    <ul class="list-group list-group-unbordered mb-3 col-sm-10 mt-3">
                        <li class="list-group-item">
                        <b>Kepala Sekolah</b> <span class="float-right">+62 813-8638-0481</span>
                        </li>
                        <li class="list-group-item">
                        <b>Tata Usaha</b> <span class="float-right">+62 813-8638-0481</span>
                        </li>
                        <li class="list-group-item">
                        <b>Penanggung Jawab IT</b> <span class="float-right">+62 813-8638-0481</span>
                        </li>
                    </ul>
                    <!-- /.card-body -->
                    
                    <div class="container-jam-kerja mt-3">
                        <h4 class="text-muted">
                          <i class="far fa-clock text-muted"></i> 
                          <span class="transparan">JAM KERJA</span> 10.00 - 20.00
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

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.9120209215215!2d106.67810345537558!3d-6.1852755502622845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9aa395dbbbf%3A0x4f45b2c2865f40ca!2sPAUD%20Bunda%20Kasih%20Bangsa!5e0!3m2!1sid!2sid!4v1690116271440!5m2!1sid!2sid"  height="450" style="border:0; width: 100vw;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
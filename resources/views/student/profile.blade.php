@extends('components.template_student')

@section('title', "Profile")
@section('mainContainer')

{{-- Link Css --}}
<link rel="stylesheet" href="{{ asset('css/teacher/profile.css') }}">

{{-- MAIN --}}

  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
          <div class="col-sm-6">
              <h1>Profile</h1>
          </div>
          {{-- tombol pilihan --}}
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item active">Profile</li>
              </ol>
          </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="card col-md-4">
              <!-- Profile Card -->
              <div class="card-body row">
                  <div class="col-sm-12 d-flex justify-content-center avatar-container" id="bungkus_foto">
                      <img class="img-circle avatar-img img-fluid" src="{{ asset('assets/'.Auth::user()->foto_profile ?? 'Kosong...') }}" alt="Foto Profil" id="foto_profile" style="height: 12rem">
                      
                      <!-- Tombol Ubah Avatar -->
                      <div class="edit-avatar">
                          <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#avatarModal">Ganti</button>
                      </div>
                  </div>
                  <div class="col-sm-12 d-flex justify-content-center mt-4">
                      <h3 class="font-weight-light">{{ Auth::user()->nama_lengkap ?? 'Kosong...' }}</h3>
                  </div>
                  <div class="col-sm-12 d-flex justify-content-center">
                      <h5 class="text-muted">{{ Auth::user()->token ?? 'Kosong...' }}</h5>
                  </div>
              </div>
              </div>
              <div class="col-md-8">

              <!-- Detail Profile -->
              <div class="card">
                  <div class="card-body">
                    <a href="{{ route('teacher.edit-profile') }}" class="btn btn-primary">
                      <i class="fas fa-pencil-alt"></i>
                      Edit Informasi
                    </a>
                    <a href="{{ route('teacher.change-password') }}" class="btn btn-success ml-2">
                      <i class="fas fa-lock"></i>
                      Ganti Password
                    </a>
                  <h4 class="mb-4 mt-4">Informasi Pribadi</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Tanggal Lahir</strong>
                      <p>{{ Auth::user()->nama_panggilan ?? 'Kosong...' }}</p>
                      <hr>
                      <strong>Nomor Telepon</strong>
                      <p>{{ Auth::user()->nomor_telepon ?? 'Kosong...' }}</p>
                    </div>
                    <div class="col-md-6">
                      <strong>Email</strong>
                      <p>{{ Auth::user()->email ?? 'Kosong...' }}</p>
                      <hr>
                      <strong>Gedung</strong>
                      <p>{{ ['Gedung 1 (gondrong)', 'Gedung 2 (sipon)'][Auth::user()->gedung] }}</p>
                    </div>
                  </div>
                  </div>
              </div>
              </div>
          </div>
      </div>

      <!-- Avatar Modal -->
      <div class="modal fade" id="avatarModal">
          <div class="modal-dialog">
            <form class="modal-content" method="POST" action="{{ route('student.ubah_foto_profile') }}" enctype="multipart/form-data">
              @csrf
              <div class="modal-header">
                <h4 class="modal-title">Pilih Avatar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="avatar-list">
                  @for ($i = 1; $i <= 8; $i++)
                      <button type="submit" value="{{ 'avatar/guru-'.$i.'.jpg' }}" name="foto_profile" class="bg-white" style="border:none;">
                          <img class="img-circle img-fluid" src="{{ asset('assets/avatar/guru-'.$i.'.jpg') }}" alt="Avatar 1" style="height: 6.5rem">
                      </button>
                  @endfor
                  <!-- ... (tambahkan avatar lainnya sesuai kebutuhan) ... -->
                </div>
                <hr>
                <!-- Fitur Unggah Foto -->
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputFoto" accept="image/*" name="foto_profile">
                  <label class="custom-file-label" for="customFile">Pilih foto</label>
                </div>
                <div id="imagePreview" style="display: none;">
                  <img src="#" alt="Foto Profil Guru" class="img-thumbnail">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" name="upload" value="ada">Simpan</button>
              </div>
            </form>
          </div>
        </div>
  </section><!-- /.content -->
<script>
  function munculkanTombolUbahProfile () {
      let tombol = document.createElement('button');
      tombol.id = 'tombol_ganti_avatar';
      $('foto_profile').add(tombol);
  }

  function readURL(input) {
    if (input.files && input.files[0]) {
      $('#icon-upload-foto').remove();
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#imagePreview img').attr('src', e.target.result);
        $('#imagePreview').show();
      }s

      reader.readAsDataURL(input.files[0]);
    }
  }

  // Ketika input file dipilih, panggil fungsi readURL
  $('#inputFoto').change(function() {
    readURL(this);
  });
</script>
@endsection
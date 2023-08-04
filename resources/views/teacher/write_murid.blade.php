@extends('components.template_teacher')

@section('title', "Materi")
@section('mainContainer')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Materi</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Materi</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid row">
      <form method="post" class="col-sm-12" action="{{ route('teacher.write-murid') }}">
          @csrf
          <!-- general form -->
          <div class="card card-primary card-outline">
              <div class="card-header">
                  <h3 class="card-title">Insert Data Guru</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!-- input states -->
                  <div class="form-group">
                      <label class="col-form-label" for="nama_lengkap">Nama Lengkap:</label>
                      <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." value="{{ old('nama_lengkap') }}">
                      @error('nama_lengkap')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <!-- inline input -->
                  <div class="row">
                      <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                              <label for="token">
                                  Token:
                              </label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-shield-alt"></i></span>
                                  </div>
                                  <input type="text" class="form-control @error('token') is-invalid @enderror" placeholder="Token..." id="token" name="token" value="{{ old('token') }}" @error('token') title="{{ $message }}" @enderror>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                              <label for="password">
                                  Password:
                              </label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                  </div>
                                  <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder="Password..." id="password" name="password" value="{{ old('password') }}">
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                              <label for="no_telp">
                                  Email:
                              </label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                  </div>
                                  <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email..." id="email" name="email" value="{{ old('email') }}" @error('email') title="{{ $message }}" @enderror>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- inline input -->
                  <div class="row">
                      <div class="col-sm-12">
                          <!-- radio -->
                          <div class="form-group">
                              <h5>Gedung</h5>
                              <div class="form-check">
                                  <input value="0" class="form-check-input" type="radio" name="gedung" id="gedung" checked>
                                  <label class="form-check-label">Gedung 1</label>
                              </div>
                              <div class="form-check">
                                  <input value="1" class="form-check-input" type="radio" name="gedung" id="gedung">
                                  <label class="form-check-label">Gedung 2</label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Input Gambar Profile Guru -->
                  <div class="row">
                    <div class="col-md-6">
                      <label for="inputFoto">
                          Foto Profile:
                      </label>
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="mt-2">
                              <input type="file" class="custom-file-input" id="inputFoto" accept="image/*" name="foto_profile">
                              <label class="custom-file-label" for="inputFoto">Upload Foto</label>
                            </div>
                            <label id="icon-upload-foto" for="inputFoto">
                                <i class="text-primary fas fa-upload fa-3x"></i>
                            </label>
                              <div id="imagePreview" style="display: none;">
                                  <img src="#" alt="Foto Profil Guru" class="img-thumbnail">
                                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Input Gambar Profile Guru -->
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <!-- /.card-body -->
          </div>
              <!-- /.card-body -->
      </form>
  </div>
</section>
@if(Session::has('success_message'))
    <script>
      Swal.fire({{ Session::get('success_message') }}, '', 'success');
    </script>
@endif
<!-- Page specific script -->
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      $('#icon-upload-foto').remove();
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#imagePreview img').attr('src', e.target.result);
        $('#imagePreview').show();
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  // Ketika input file dipilih, panggil fungsi readURL
  $('#inputFoto').change(function() {
    readURL(this);
  });
</script>
@endsection
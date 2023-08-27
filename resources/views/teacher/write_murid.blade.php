@extends('components.template_teacher')

@section('title', "Menambah Data Murid")
@section('mainContainer')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Menambah Data Murid</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Menambah Data Murid</li>
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
                  <h3 class="card-title">Insert Data Murid</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!-- input states -->
                  <div class="form-group">
                      <label class="col-form-label" for="nama_lengkap">Nama Lengkap:</label>
                      <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." value="{{ old('nama_lengkap') }}">
                      <sup class="text-danger">* Wajib diisi</sup>
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
                              <sup class="text-danger">* Wajib diisi</sup>
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
                              <sup class="text-danger">* Wajib diisi</sup>
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
                                  <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Boleh dikosongkan..." id="email" name="email" value="{{ old('email') }}" @error('email') title="{{ $message }}" @enderror>
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
                                  <label class="form-check-label">Gedung 1 (Gondrong)</label>
                              </div>
                              <div class="form-check">
                                  <input value="1" class="form-check-input" type="radio" name="gedung" id="gedung">
                                  <label class="form-check-label">Gedung 2 (Sipon)</label>
                              </div>
                          </div>
                      </div>
                  </div>
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
@endsection
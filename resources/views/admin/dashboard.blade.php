@extends('components.template_admin')

@section('title', "dashboard")
@section('mainContainer')
<style>
  .dataTables_filter {
    float: right;
  }
  .dataTables_paginate {
    float: right;
  }
</style>
<!-- Tambahkan CSRF token untuk keamanan -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Update Data</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid row">
        <form method="post" class="col-sm-7">
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
                                <label for="nama_panggilan">
                                    Nama Panggilan:
                                </label>
                                <input type="text" class="form-control @error('nama_panggilan') is-invalid @enderror" placeholder="Nama Panggilan..." id="nama_panggilan" name="nama_panggilan" value="{{ old('nama_panggilan') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="nomor_telepon">
                                    Nomor Telepon:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                    </div>
                                    <input type="number" class="form-control @error('nomor_telepon') is-invalid @enderror" placeholder="Nomor Telepon..." id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="jabatan" id="jabatan">
                                    <option value="Pengajar" selected="selected">Pengajar</option>
                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                </select>
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
                        <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <h5>Gender</h5>
                                <div class="form-check">
                                    <input value="1" class="form-check-input" type="radio" name="gender" id="gender" checked>
                                    <label class="form-check-label">Pria</label>
                                </div>
                                <div class="form-check">
                                    <input value="0" class="form-check-input" type="radio" name="gender" id="gender">
                                    <label class="form-check-label">Wanita</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <h5>Gedung</h5>
                                <div class="form-check">
                                    <input value="0" class="form-check-input" type="radio" name="gedung" id="gedung" checked>
                                    <label class="form-check-label">Gedung 1 (gondrong)</label>
                                </div>
                                
                                <div class="form-check">
                                    <input value="1" class="form-check-input" type="radio" name="gedung" id="gedung">
                                    <label class="form-check-label">Gedung 2 (sipon)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pengalaman Mengajar</label>
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="pengalaman_mengajar" id="pengalaman_mengajar">
                                    <option value="" selected="selected">Kosong</option>
                                    <option value="Kurang dari 1 Tahun">Kurang dari 1 Tahun</option>
                                    <option value="1 Tahun - 3 Tahun">1 Tahun - 3 Tahun</option>
                                    <option value="3 Tahun - 5 Tahun">3 Tahun - 5 Tahun</option>
                                    <option value="5 Tahun - 10 Tahun">5 Tahun - 10 Tahun</option>
                                    <option value="Lebih dari 10 Tahun">Lebih dari 10 Tahun</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="nama_panggilan">
                                    Password:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder="Password..." id="password" name="password">
                                </div>
                                @error('password')
                                    <sup>{{$message}}</sup>
                                    @enderror
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
        <div class="col-sm-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title my-2">Data Guru Tersedia</h3>
                      </div>
                      <div class="card-body">
                          <div class="row">
                              <a href="{{ url('dashboard/export_excel') }}" class="btn bg-primary btn-sm col-sm-3 p-2 ml-2">
                                  Export Data (Excel)
                              </a>
                              <a href="" class="btn bg-primary btn-sm col-sm-3 p-2 ml-2">
                                  Import Data (Excel)
                              </a>
                          </div>
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                  <tr>
                                      <td>No</td>
                                      <td>Nama Lengkap</td>
                                      <td>Email</td>
                                      <td>Action</td>
                                  </tr>
                              </thead>
                              <tbody>
                                    @foreach($data_guru as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama_lengkap }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>
                                            <a href="{{ url('/dashboard/update') }}/{{ $data->id }}" class="btn bg-primary btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a onclick="deleteData({{ $data->id }}, '{{ $data->email }}')" class="btn bg-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            </td>
                                        </tr>
                                    @endforeach
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard-admin.js"></script>
<script>
    function deleteData(id, email) {
        Swal.fire({
            title: 'Hapus akun '+ email +'?',
            showConfirmButton: false,
            showDenyButton: true,
            showCancelButton: true,
            denyButtonText: `Hapus`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isDenied) {
                let data = {id: id};
                $.ajax({
                    url: '{{ route("delete.teacher") }}',
                    type: 'post',
                    data: data,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ambil token CSRF dari meta tag
                    },
                    success: function(response) {
                        window.location.href = '{{ url('/admin') }}';
                    }, error: function(xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: "Data gagal dihapus: " + xhr.status + "\n" + xhr.responseText + "\n" + error,
                        });
                    }
                });
            }
        });
    }
</script>
@endsection
@extends('components.template_teacher')

@section('title', "Profile")
@section('mainContainer')
<style>
    .avatar-container {
      position: relative;
      overflow: hidden;
    }

    .avatar-container:hover .avatar-img {
      filter: brightness(50%);
    }

    .avatar-list {
      list-style: none;
      padding: 0;
    }

    .avatar-list li {
      display: inline-block;
      margin-right: 10px;
      cursor: pointer;
    }

    .avatar-list li:last-child {
      margin-right: 0;
    }

    .edit-avatar {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: none;
    }

    .avatar-container:hover .edit-avatar {
      display: block;
    }

    .edit-avatar .btn {
      background-color: transparent;
      color: #fff;
      border-radius: 20px;
      padding: 3rem;
      font-size: 2rem;
      border: none;
    }
  </style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Profile</h1>
        </div>
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
                    <img class="img-circle avatar-img img-fluid" src="{{ asset('assets/'.Auth::user()->foto_profile) }}" alt="Foto Profil" id="foto_profile" style="height: 12rem">
                    
                    <!-- Tombol Ubah Avatar -->
                    <div class="edit-avatar">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#avatarModal">Ganti</button>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center mt-4">
                    <h3 class="font-weight-light">{{ Auth::user()->nama_lengkap }}</h3>
                </div>
                <div class="col-sm-12 d-flex justify-content-center">
                    <h5 class="text-muted">{{ Auth::user()->jabatan }}</h5>
                </div>
            </div>
            </div>
            <div class="col-md-8">
            <!-- Detail Profile -->
            <div class="card">
                <div class="card-body">
                <h4 class="mb-4">Informasi Pribadi</h4>
                <div class="row">
                    <div class="col-md-6">
                    <strong>Nama Panggilan</strong>
                    <p>{{ Auth::user()->pengalaman_mengajar }}</p>
                    <hr>
                    <strong>Nomor Telepon</strong>
                    <p>{{ Auth::user()->nomor_telepon }}</p>
                    </div>
                    <div class="col-md-6">
                    <strong>Email</strong>
                    <p>{{ Auth::user()->email }}</p>
                    <hr>
                    <strong>Gender</strong>
                    <p>{{ ['Wanita', 'Pria'][Auth::user()->gender] }}</p>
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
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Pilih Avatar</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form class="avatar-list" method="POST" action="{{ route('teacher.ubah_foto_profile') }}">
                @csrf
                @for ($i = 1; $i <= 5; $i++)
                    <button type="submit" value="{{ 'avatar/guru-'.$i.'.jpg' }}" name="foto_profile" class="bg-white" style="border:none;">
                        <img class="img-circle img-fluid" src="{{ asset('assets/avatar/guru-'.$i.'.jpg') }}" alt="Avatar 1" style="height: 7rem">
                    </button>
                @endfor
                <!-- ... (tambahkan avatar lainnya sesuai kebutuhan) ... -->
              </form>
              <hr>
              <!-- Fitur Unggah Foto -->
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Pilih foto</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
            </div>
          </div>
        </div>
      </div>
</section><!-- /.content -->
<script>
    function munculkanTombolUbahProfile () {
        let tombol = document.createElement('button');
        tombol.id = 'tombol_ganti_avatar';
        $('foto_profile').add(tombol);
    }
</script>
@endsection
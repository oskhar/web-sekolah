@extends('components.template_teacher')

@section('title', "Berita & Event")
@section('mainContainer')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Berita & Event</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Berita & Event</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <form method="post">
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
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." value="{{ old('nama_lengkap') ?? Auth::user()->nama_lengkap }}">
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
                            <input type="text" class="form-control @error('nama_panggilan') is-invalid @enderror" placeholder="Nama Panggilan..." id="nama_panggilan" name="nama_panggilan" value="{{ old('nama_panggilan') ?? Auth::user()->nama_panggilan }}">
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
                                <input type="number" class="form-control @error('nomor_telepon') is-invalid @enderror" placeholder="Nomor Telepon..." id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') ?? Auth::user()->nomor_telepon }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="jabatan" id="jabatan">
                                <option value="Pengajar" @if (Auth::user()->jabatan == "Pengajar") selected="selected" @endif>Pengajar</option>
                                <option value="Kepala Sekolah" @if (Auth::user()->jabatan == "Kepala Sekolah") selected="selected" @endif>Kepala Sekolah</option>
                                <option value="Bendahara" @if (Auth::user()->jabatan == "Bendahara") selected="selected" @endif>Bendahara</option>
                                <option value="Sekretaris" @if (Auth::user()->jabatan == "Sekretaris") selected="selected" @endif>Sekretaris</option>
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
                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email..." id="email" name="email" value="{{ old('email') ?? Auth::user()->email }}" @error('email') title="{{ $message }}" @enderror>
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
                                <input value="1" class="form-check-input" type="radio" name="gender" id="gender" @if (Auth::user()->gender == 1) checked @endif>
                                <label class="form-check-label">Pria</label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="gender" id="gender" @if (Auth::user()->gender == 0) checked @endif>
                                <label class="form-check-label">Wanita</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- radio -->
                        <div class="form-group">
                            <h5>Gedung</h5>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="gedung" id="gedung" @if (Auth::user()->gedung == 0) checked @endif>
                                <label class="form-check-label">Gedung 1 (gondrong)</label>
                            </div>
                            <div class="form-check">
                                <input value="1" class="form-check-input" type="radio" name="gedung" id="gedung" @if (Auth::user()->gedung == 1) checked @endif>
                                <label class="form-check-label">Gedung 1 (sipon)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Pengalaman Mengajar</label>
                            <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="pengalaman_mengajar" id="pengalaman_mengajar">
                                <option value="Kurang dari 1 Tahun" selected="selected">Kurang dari 1 Tahun</option>
                                <option value="1 Tahun - 3 Tahun">1 Tahun - 3 Tahun</option>
                                <option value="3 Tahun - 5 Tahun">3 Tahun - 5 Tahun</option>
                                <option value="5 Tahun - 10 Tahun">5 Tahun - 10 Tahun</option>
                                <option value="Lebih dari 10 Tahun">Lebih dari 10 Tahun</option>
                            </select>
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
    <!-- /.card -->
  </div>
</section>
@if(Session::has('success_message'))
    <script>
      Swal.fire({{ Session::get('success_message') }}, '', 'success');
    </script>
@endif
<!-- Page specific script -->
<script>
  $(function () {
    // Tambahkan teks editor
    $('#compose-textarea').summernote();

    // Tambahkan placeholder secara manual ketika editor pertama kali diinisialisasi
    $('#compose-textarea').siblings('.note-editor').find('.note-placeholder').text('Tulis teks disini...');

    // Tambahkan placeholder ketika konten editor kosong
    $('#compose-textarea').on('summernote.change', function () {
      var content = $(this).summernote('getText').trim();
      if (content === '') {
        $(this).siblings('.note-editor').find('.note-placeholder').text('Tulis teks disini...');
      } else {
        $(this).siblings('.note-editor').find('.note-placeholder').text('');
      }
    });
  });

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
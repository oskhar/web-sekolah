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
  <div class="container-fluid">
    <form class="card card-primary card-outline" enctype="multipart/form-data" method="POST" action="{{ route('teacher.write-materi') }}">
      @csrf
      <div class="card-header">
        <h3 class="card-title">Membuat Materi atau Blog</h3>
      </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Input Gambar Profile Guru -->
            <div class="row">
              <div class="col-md-12">
                <div class="card @error('gambar') bg-danger @enderror">
                  <div class="card-body">
                    <div class="text-center">
                      <div class="mt-2">
                        <input type="file" class="custom-file-input" id="inputFoto" accept="image/*" name="gambar">
                        <label class="custom-file-label" for="inputFoto">Upload Foto Materi (Jika Ada)</label>
                        @error('gambar')
                              <label class="custom-file-label text-danger" for="inputFoto">{{ $message }}</label>
                        @enderror
                      </div>
                      <label id="icon-upload-foto" for="inputFoto">
                          <i class="@error('gambar') text-white @else text-primary @enderror fas fa-upload fa-3x"></i>
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
            <div class="form-group">
              <label for="judul">Judul Materi:</label>
              <input class="form-control @error('judul') is-invalid @enderror" placeholder="Judul..." name="judul" value="{{ old('judul') ?? $data->judul }}">
              @error('judul')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="judul">Text Penjelasan Materi:</label>
                <textarea id="compose-textarea" class="form-control @error('isi') is-invalid @enderror" style="height: 300px" name="isi" placeholder="tesdoang">
                  {{ old('isi') ?? $data->isi }}
                </textarea>
                @error('isi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="float-right">
                <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
            </div>
        </div>
        <!-- /.card-footer -->
    </form>
    <!-- /.card -->
  </div>
</section>
<!-- Page specific script -->
<script>
  $(function () {
      $('#icon-upload-foto').remove();
    $('#imagePreview img').attr('src', '{{asset('assets')."/$data->gambar"}}');
    $('#imagePreview').show();
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
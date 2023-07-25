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
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Compose New Message</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Input Gambar Profile Guru -->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="text-center">
                              <div class="mt-2">
                                <input type="file" class="custom-file-input" id="inputFoto" accept="image/*">
                                <label class="custom-file-label" for="inputFoto">Upload Foto Materi (Jika Ada)</label>
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
                <div class="form-group">
                    <label for="judul">Judul Materi:</label>
                    <input class="form-control" placeholder="Judul...">
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
                    </textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="float-right">
                    <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                </div>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div>
</section>
<!-- Page specific script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
@endsection
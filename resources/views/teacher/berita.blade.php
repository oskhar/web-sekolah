@extends('components.template_teacher')

@section('title', "Berita dan Acara")
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
            <h1>Berita dan Acara</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Berita dan Acara</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title my-2">Kumpulan Berita dan Acara</h3>
            </div>
            {{-- Tambah berita & acara --}}
            <div class="card-body">
                <div class="row">
                  <a href="{{ url('/teacher/write-berita') }}" class="btn border-primary text-primary btn-sm col-sm-2 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">
                    Tambah Berita atau Acara
                  </a>
                </div>
                {{-- isi berita dan acara --}}
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Gambar</td>
                            <td>Judul</td>
                            <td>Waktu Dibuat</td>
                            <td>Mulai Acara</td>
                            <td>Durasi</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    {{-- fungsi pada berita dan acara --}}
                    <tbody>
                      @foreach ($data_berita as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('/assets/'.$data->gambar) }}" class="img-fluid" alt="Ini Gambar" style="height: 5rem"></td>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->tanggal_acara }}</td>
                            <td>{{ $data->durasi_hari }} Hari</td>
                            <td>
                              <a onmouseover="this.classList.add('btn-info');this.classList.remove('text-info')" onmouseout="this.classList.remove('btn-info');this.classList.add('text-info')" href="{{ url('sel-berita-acara?id='.$data->id) }}" class="btn border-info text-info btn-sm">
                                <i class="fas fa-eye"></i>
                              </a>
                              <a onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')" href="{{ route('teacher.edit-berita')."?id=$data->id" }}" class="btn border-primary text-primary btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                              </a>
                              <a onmouseover="this.classList.add('btn-danger');this.classList.remove('text-danger')" onmouseout="this.classList.remove('btn-danger');this.classList.add('text-danger')" class="btn border-danger text-danger btn-sm" onclick="deleteData({{ $data->id }}, '{{ $data->judul }}')">
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

{{-- javaScript --}}
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "language": {
                "info": ''
            }
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    })

    function deleteData(id, judul) {
          Swal.fire({
              title: 'Hapus berita '+ judul +'?',
              showConfirmButton: false,
              showDenyButton: true,
              showCancelButton: true,
              denyButtonText: `Hapus`,
          }).then((result) => {
              /* Read more about isConfirmed, isDenied below */
              if (result.isDenied) {
                  let data = {id: id};
                  $.ajax({
                      url: '{{ route("teacher.delete-berita") }}',
                      type: 'post',
                      data: data,
                      dataType: 'json',
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ambil token CSRF dari meta tag
                      },
                      success: function(response) {
                          window.location.href = '{{ route('teacher.berita') }}';
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
@extends('components.template_teacher')

@section('title', "Kumpulan Materi")
@section('mainContainer')

{{-- CSS --}}
<style>
  .dataTables_filter {
    float: right;
  }
  .dataTables_paginate {
    float: right;
  }
</style>

{{-- MAIN --}}

  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
          <div class="col-sm-6">
              <h1>Kumpulan Materi</h1>
          </div>
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item active">Kumpulan Materi</li>
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
              <h3 class="card-title my-2">Blog dan Materi</h3>
            </div>
            <div class="card-body">
                <div class="row">
                  <a href="{{ url('/teacher/write-materi') }}" class="btn border-primary text-primary btn-sm col-sm-2 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">
                    Tambah Materi
                  </a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Gambar</td>
                            <td>Judul</td>
                            <td>Tanggal</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($data_materi as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('/assets/'.$data->gambar) }}" class="img-fluid" alt="Ini Gambar" style="height: 5rem"></td>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->created_at->format('Y-m-d') }}</td>
                            <td>
                              <a onmouseover="this.classList.add('btn-info');this.classList.remove('text-info')" onmouseout="this.classList.remove('btn-info');this.classList.add('text-info')" href="{{ url('sel-materi?id='.$data->id) }}" class="btn border-info text-info btn-sm">
                                <i class="fas fa-eye"></i>
                              </a>
                              <a onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')" href="{{ route('teacher.edit-materi') }}?id={{$data->id}}" class="btn border-primary text-primary btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                              </a>
                              <a onmouseover="this.classList.add('btn-danger');this.classList.remove('text-danger')" onmouseout="this.classList.remove('btn-danger');this.classList.add('text-danger')" onclick="doSoftDelete('')" class="btn border-danger text-danger btn-sm">
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

{{-- JS --}}
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
  </script>

@endsection
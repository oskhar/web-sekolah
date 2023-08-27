@extends('components.template_teacher')

@section('title', "Pekerjaan Rumah")
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
                <h1>Pekerjaan Rumah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Pekerjaan Rumah</li>
                </ol>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <a href="{{ url('/teacher/write-pekerjaan-rumah') }}" class="btn border-primary text-primary btn-sm col-sm-2 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">
                      Tambah Pekerjaan Rumah
                    </a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Deskripsi</td>
                            <td>Tanggal Dikumpulkan</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_pekerjaan_rumah as $data)
                        <tr>
                            <td>1</td>
                            <td>Membuat gambar hewan menggunakan potongan kertas origami</td>
                            <td>10 September 2023</td>
                            <td><div class="badge bg-success">Aktif</div></td>
                            <td>
                                <a onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')" href="{{ url('/dashboard/update') }}" class="btn border-primary text-primary btn-sm">
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
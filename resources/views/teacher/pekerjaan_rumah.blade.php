@extends('components.template_teacher')

@section('title', "Pekerjaan Rumah")
@section('mainContainer')
<style>
  .dataTables_filter {
    float: right;
  }
  .dataTables_paginate {
    float: right;
  }
</style>

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
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title my-2">Pekerjaan Rumah (PR)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <a href="{{ url('dashboard/create') }}" class="btn bg-primary btn-sm col-sm-2 p-2 ml-2">
                        Tambah Tugas
                    </a>
                    <a href="{{ url('dashboard/export_excel') }}" class="btn bg-primary btn-sm col-sm-2 p-2 ml-2">
                        Export Tugas (Excel)
                    </a>
                    <a href="" class="btn bg-primary btn-sm col-sm-2 p-2 ml-2">
                        Import Tugas (Excel)
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
                        <tr>
                            <td>1</td>
                            <td>Membuat gambar hewan menggunakan potongan kertas origami</td>
                            <td>10 September 2023</td>
                            <td><div class="badge bg-success">Aktif</div></td>
                            <td>
                                <a href="{{ url('/dashboard/update') }}/{{ 'nis' }}" class="btn bg-primary btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a onclick="doSoftDelete(\'{{ 'nis' }}\')" class="btn bg-danger btn-sm">
                                <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
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
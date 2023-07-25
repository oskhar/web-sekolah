@extends('components.template_teacher')

@section('title', "Dashboard")
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
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
  
                  <p>Murid yang Terdaftar</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-graduate"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53</h3>
  
                  <p>Blog atau Materi</p>
                </div>
                <div class="icon">
                  <i class="fas fa-book"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
  
                  <p>Galeri Diupload</p>
                </div>
                <div class="icon">
                  <i class="fas fa-image"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h3>44</h3>
  
                  <p>Jumlah Acara</p>
                </div>
                <div class="icon">
                  <i class="fas fa-calendar-day"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-9 connectedSortable">
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
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-3 connectedSortable">
              <!-- Calendar -->
              <div class="card bg-gradient-secondary">
                <div class="card-header border-0">
      
                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                  </h3>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </section>
            <!-- right col -->
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
    <script src="dist/js/pages/dashboard-teacher.js"></script>
@endsection
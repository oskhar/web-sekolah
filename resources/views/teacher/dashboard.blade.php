@extends('components.template_teacher')

@section('title', "Dashboard")
@section('mainContainer')
  <!-- fullCalendar -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.css">
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
              <a href="{{ url('/teacher/materi/') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                <h3>{{ $banyak_berita }}</h3>

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
        <h4 class="text-muted mt-2">Kalender Acara</h4>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-10 connectedSortable">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
          <section class="col-lg-2 connectedSortable">
            <div class="card card-primary">
              <div class="card-body p-3 row">
                @foreach ($data_berita as $data)
                <a class="btn bg-info col-sm-12 m-1">
                  <i class="fas fa-star"></i>
                  <strong>{{ $data->judul }}</strong>
                </a>
                @endforeach
              <!-- Tambahkan item lainnya sesuai kebutuhan -->
              </div>
            </div>
          </section>
        </div>
      </div>
  </section>
  <!-- fullCalendar 2.2.5 -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/fullcalendar/main.js"></script>
  <script>
    var listAcaraPaud = [
      @foreach ($data_berita as $data)
      {
            title          : '{{ $data->judul }}',
            start          : '{{ $data->tanggal_acara }}',
            end            : '{{ \Carbon\Carbon::parse($data->tanggal)->addDays($data->durasi_hari) }}',
            allDay         : false,
            backgroundColor: 'var(--info)', //Blue
            borderColor    : 'var(--info)' //Blue
      },
      @endforeach
    ];
  </script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard-teacher.js"></script>
@endsection

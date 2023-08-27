@extends('components.template_student')

@section('title', "Dashboard")
@section('mainContainer')

<!-- fullCalendar -->
<link rel="stylesheet" href="plugins/fullcalendar/main.css">

{{-- MAIN --}}

  {{-- kumpulan card tugas - tugas --}}
  <div class="container mt-4">
    {{-- judul --}}
    <div class="judul-tugas">
      <h1 class="text-center text-primary">TUGAS - TUGAS</h1>
    </div>
    {{-- card --}}
      <div class="row mt-5">
        <div class="col-md-6">
          <div class="card mb-4">
            <h1><div class="card-header">Judul 1</div></h1>
            <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 1">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus mollitia error unde quidem, veniam harum velit cum quisquam reprehenderit in reiciendis dolores quibusdam sint ut, vero fuga quas eos quae non deleniti repudiandae quis ea! Assumenda quod corrupti numquam odio consequatur sapiente vel nam ut? Consectetur autem dolorum cupiditate aperiam.</p>
              <div class="alert alert-primary">Pengumpulan tugas sampai 12 juli 2023</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <h1><div class="card-header">Judul 3</div></h1>
            <img src="{{ asset('assets/images/profile3.jpg')}}" class="img-fluid" alt="Gambar 1">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus mollitia error unde quidem, veniam harum velit cum quisquam reprehenderit in reiciendis dolores quibusdam sint ut, vero fuga quas eos quae non deleniti repudiandae quis ea! Assumenda quod corrupti numquam odio consequatur sapiente vel nam ut? Consectetur autem dolorum cupiditate aperiam.</p>
              <div class="alert alert-primary">Pengumpulan tugas sampai 12 juli 2023</div>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Pagination -->
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-4">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>

    {{-- Kalender --}}
    <section class="connectedSortable" style="margin-top: 150px;>
      <div class="card card-primary">
        <div class="card-body p-0">
          <!-- THE CALENDAR -->
          <div id="calendar"></div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
  
  <!-- fullCalendar 2.2.5 -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/fullcalendar/main.js"></script>
  <script>
    var currentDate = new Date();
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
      // Ambil data API menggunakan AJAX
      $.ajax({
        url: 'https://api-harilibur.vercel.app/api',
        method: 'get',
        dataType: 'json',
        success: function(response) {
          for (let i = 0; i < response.length; i++) {
            if (response[i].is_national_holiday) {
              let data_tmp = {
                title          : response[i].holiday_name,
                start          : response[i].holiday_date,
                allDay         : false,
                backgroundColor: 'var(--danger)', //Blue
                borderColor    : 'var(--danger)' //Blue
              };
              listAcaraPaud.push(data_tmp);
            }
          };
          inisialisasiKalender();
        },
        error: function(xhr, status, error) {
          alert("Gagal mengakses tanggal merah: ");
          inisialisasiKalender();
        }
      });
      // Ambil data API menggunakan AJAX
      $.ajax({
        url: 'https://api-harilibur.vercel.app/api?month=' + (currentDate.getMonth()+1),
        method: 'get',
        dataType: 'json',
        success: function(response) {
          console.log(response);
          for (let i = 0; i < response.length; i++) {
            if (response[i].is_national_holiday) {
              $('#bungkus_list_event').append(`
                <a class="btn bg-danger col-sm-12 m-1">
                  <i class="fas fa-star"></i>
                  <strong>`+ response[i].holiday_name +`</strong>
                </a>
              `);
            }
          };
        },
        error: function(xhr, status, error) {
        }
      });
  </script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard-teacher.js"></script>
@endsection
@extends('components.template_teacher')

@section('title', "Materi")
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

  <!-- Tambahkan CSRF token untuk keamanan -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kumpulan Murid</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Murid</li>
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
                <div class="card-body">
                    <div class="row">
                      <a href="{{ url('/teacher/write-murid') }}" class="btn border-primary text-primary btn-sm col-sm-2 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">
                        Tambah Murid
                      </a>
                    </div>
                    {{-- isi data murid --}}
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Lengkap</td>
                                <td>Token</td>
                                <td>Email</td>
                                <td>Letak Gedung</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        {{-- Fungsi isi data murid --}}
                        <tbody>
                          @foreach ($data_murid as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->token }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ ['Gedung 1', 'Gedung 2'][$data->gedung] }} Hari</td>
                                <td>
                                  <a onmouseover="this.classList.add('btn-info');this.classList.remove('text-info')" onmouseout="this.classList.remove('btn-info');this.classList.add('text-info')" href="{{ url('/dashboard/detail') }}/{{ $data['nis'] }}" class="btn border-info text-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                  </a>
                                  <a onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')" href="{{ route('teacher.edit-murid')."?id=$data->id" }}/{{ $data['nis'] }}" class="btn border-primary text-primary btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                  </a>
                                  <a onmouseover="this.classList.add('btn-danger');this.classList.remove('text-danger')" onmouseout="this.classList.remove('btn-danger');this.classList.add('text-danger')" class="btn border-danger text-danger btn-sm" onclick="deleteData({{ $data->id }}, '{{ $data->nama_lengkap }}')">
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
        });

        function deleteData(id, nama_lengkap) {
            Swal.fire({
                title: 'Hapus akun '+ nama_lengkap +'?',
                showConfirmButton: false,
                showDenyButton: true,
                showCancelButton: true,
                denyButtonText: `Hapus`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isDenied) {
                    let data = {id: id};
                    $.ajax({
                        url: '{{ route("teacher.delete-murid") }}',
                        type: 'post',
                        data: data,
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ambil token CSRF dari meta tag
                        },
                        success: function(response) {
                            window.location.href = '{{ route('teacher.murid') }}';
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
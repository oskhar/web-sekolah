<link rel="stylesheet" href="{{ asset('css/components/table.css') }}">
<div class="card">
    <div class="card-body">
        {{-- Tombol aksi --}}
        <div class="row">
            <a href="{{ url('dashboard/create') }}" class="btn border-primary text-primary btn-sm col-sm-1 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">
                Tambah Data
            </a>
            <a href="{{ url('dashboard/export_excel') }}" class="btn border-primary text-primary btn-sm col-sm-1 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">
                Export Data
            </a>
            <a href="" class="btn border-primary text-primary btn-sm col-sm-1 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">
                Import Data
            </a>
        </div>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    @foreach($data->first()->toArray() as $column => $value)
                        <td>{{ $column }}</td>
                    @endforeach
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        @foreach($row->toArray() as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                        <td>
                          <a onmouseover="this.classList.add('btn-info');this.classList.remove('text-info')" onmouseout="this.classList.remove('btn-info');this.classList.add('text-info')" href="{{ base_url('/dashboard/detail') }}/{{ $data['nis'] }}" class="btn border-info text-info btn-sm">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')" href="{{ base_url('/dashboard/update') }}/{{ $data['nis'] }}" class="btn border-primary text-primary btn-sm">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a onmouseover="this.classList.add('btn-danger');this.classList.remove('text-danger')" onmouseout="this.classList.remove('btn-danger');this.classList.add('text-danger')" onclick="doSoftDelete(\'{{ $data['nis'] }}\')" class="btn border-danger text-danger btn-sm">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "language": {
            "info": 'Last updated data on'
        }
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
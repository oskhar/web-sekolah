<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Login</title>
    {{-- Template AdminLTE --}}
    <base href="{{ asset('adminLTE') }}/">
    @include('components.adminlte_dependency')
</head>
<body>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-sm-6 d-flex justify-content-center mt-5">
                    <div class="row mt-5">
                        <a href="{{route('login.murid')}}" class="row col-sm-12 mt-2 py-4 btn bg-primary">Login Murid</a>
                        <a href="{{route('login.guru')}}" class="row col-sm-12 mt-2 py-4 btn bg-primary">Login Guru</a>
                        <a href="{{route('login.admin')}}" class="row col-sm-12 mt-2 py-4 btn bg-primary">Login Admin</a>
                        <a href="{{url('/')}}" class="row col-sm-12 mt-2 py-4 btn bg-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>
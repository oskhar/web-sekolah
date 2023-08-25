<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Login</title>

    {{-- Link Css --}}
    <link rel="stylesheet" href="{{ asset('css/pages/login.css')}} ">
    {{-- Template AdminLTE --}}
    <base href="{{ asset('adminLTE') }}/">
    @include('components.adminlte_dependency')
</head>
<body>

<!-- MAIN -->

{{-- login --}}
    <div class="container text-center mt-5">
        <h3>Login sebagai :</h3>

        {{-- login murid --}}
        <div class="image-container">
            <a href="{{ route('login.murid') }}"><img src="/assets/images/imgLogin/img-murid.jpg" class="img" alt="..." ></a>
            <p>Murid</p>
        </div>

        {{-- login guru --}}
        <div class="image-container">
            <a href="{{ route('login.guru') }}"><img src="/assets/images/imgLogin/img-guru.png" class="img" alt="..." ></a>
            <p>Guru</p>
        </div>

        {{-- login admin --}}
        <div class="image-container">
            <a href="{{ route('login.admin') }}"><img src="/assets/images/imgLogin/img-admin.png" class="img" alt="..." ></a>
            <p>Admin</p>
        </div>

        {{-- tombol kembali --}}
        <div class="button-container">
            <a href="{{ url('/') }}"><button class="btn btn-warning" style="width: 250px;">
                <span class="button-icon">&#8592;</span>
                Kembali
            </button></a>
        </div>
    </div>

</body>
</html>
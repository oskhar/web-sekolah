<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <base href="{{ asset('adminLTE') }}/">
    @include('components.adminlte_dependency')
    <title>@yield('title')</title>

    {{-- Link Css --}}
    <link rel="stylesheet" href="{{ asset('css/pages/login_guru.css')}} ">
</head>
<body>

  {{-- MAIN --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="login-box col-md-12">
              {{-- Nama paud --}}
                <div class="login-logo mt-5">
                    <a href="{{ url('/') }}" class="col-sm-12"><b>PAUD KASIH BUNDA KENANGA BANGSA</b></a>
                </div>
            </div>

            {{-- Card Login --}}
            <div class="login-guru col-md-9 mt-5">
                <div class="card">
                  {{-- icon guru --}}
                    <div class="card-header text-primary text-center"><i class="fas fa-chalkboard-teacher mr-2"></i>@yield('role')</div>
                    <div class="container mt-5">
                        <div class="row justify-content-between p-3">
                          <div class="col-md-6">
                            <img src="@yield('image')" class="img-fluid" alt="..." width=300" >
                          </div>
                          <div class="col-md-6">
                              <form class="card-body" action="@yield('route_action')" method="POST">
                                @csrf

                                {{-- kolom isi login email --}}
                                <div class="form-group">
                                  <label for="@yield('up_login')">@yield('up_label')</label>
                                  <input type="text" class="form-control" id="@yield('up_login')" name="@yield('up_login')" placeholder="Enter @yield('up_login')">
                                </div>

                                {{-- kolom issi password --}}
                                <div class="form-group">
                                  <label for="password"><i class="fas fa-lock"></i> Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                </div>

                                {{-- forget password --}}
                                <div class="form-group mt-3">
                                  <button type="submit" class="btn btn-primary btn-block px-4">Login</button>
                                  <a href="#">Forgot password?</a>
                                </div>
                              </form>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('components.sweetalert')
</html>
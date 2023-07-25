<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <base href="{{ asset('adminLTE') }}/">
    @include('components.adminlte_dependency')
    <title>Login sebagai Guru</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="login-box col-md-12 mt-5">
                <div class="login-logo mt-5">
                    <a href="{{ url('/') }}" class="col-sm-12"><b>Paud</b> KASIH BUNDA</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary"><i class="fas fa-chalkboard-teacher mr-2"></i> Login sebagai Guru</div>
    
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Login for advance fiture</p>
                        <form method="POST" action="{{ url('/login/guru') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="input-group col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                      </div>
                                    </div>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="input-group col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                      </div>
                                    </div>
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@extends('components.template_teacher')

@section('title', "Berita & Event")
@section('mainContainer')

{{-- MAIN --}}

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Berita & Event</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Berita & Event</li>
                </ol>
            </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <form method="post">
            @csrf
            <!-- general form -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Insert Data Guru</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- inline input -->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="col-form-label" for="old_password"><i class="badge bg-success">Lama</i> Password lama:</label>
                                <input type="text" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="old_password" placeholder="Password lama..." value="{{ old('old_password') }}">
                                @error('old_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="col-form-label" for="new_password_a"><i class="badge bg-info">Baru</i> Password baru:</label>
                                <input type="text" class="form-control @error('new_password_a') is-invalid @enderror" name="new_password_a" id="new_password_a" placeholder="Password baru..." value="{{ old('new_password_a') }}">
                                @error('new_password_a')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="col-form-label" for="new_password_b"><i class="badge bg-info">Baru</i> Ulangi password baru:</label>
                                <input type="text" class="form-control @error('new_password_b') is-invalid @enderror" name="new_password_b" id="new_password_b" placeholder="Password baru..." value="{{ old('new_password_b') }}">
                                @error('new_password_b')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    </section>
@endsection
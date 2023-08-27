@extends('components.template_login')
@section('title', "Login Admin")
@section('route_action')
    {{ route('login.admin') }}
@endsection
@section('image')
  {{ asset('/assets/images/imgLogin/admin-admin.png') }}
@endsection

@section('role', 'Login sebagai Admin')

@section('up_label')
  <i class="fas fa-user"></i> Username
@endsection
@section('up_login', 'username')
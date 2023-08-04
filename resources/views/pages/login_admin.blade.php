@extends('components.template_login')
@section('title', "Login Guru")
@section('route_action')
    {{ route('login.murid') }}
@endsection
@section('image')
  {{ asset('/assets/images/imgLogin/admin-admin.png') }}
@endsection

@section('role', 'Login sebagai Guru')

@section('up_label')
  <i class="fas fa-user"></i> Username
@endsection
@section('up_login', 'username')
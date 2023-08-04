@extends('components.template_login')

@section('title', "Login Guru")
@section('image')
  {{ asset('/assets/images/imgLogin/guru-guru.png') }}
@endsection

@section('role', 'Login sebagai Guru')
@section('up_label')
  <i class="fas fa-envelope"></i> Email
@endsection
@section('up_login', 'email')
@section('route_action')
    {{ route('login.guru') }}
@endsection
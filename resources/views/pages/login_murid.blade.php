@extends('components.template_login')

@section('title', "Login Murid")
@section('route_action')
    {{ route('login.murid') }}
@endsection
@section('image')
  {{ asset('/assets/images/imgLogin/anak-anak.png') }}
@endsection

@section('role', 'Login sebagai Murid')

@section('up_label')
  <i class="fas fa-shield-alt"></i> Token
@endsection
@section('up_login', 'token')
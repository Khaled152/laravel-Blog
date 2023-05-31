@extends('back.layouts.auth-layout')
@section('title',isset($title)? $title : 'login')
@section('content')
<div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="error-404.html" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('back/static/logo.svg') }}" height="36" alt=""></a>
      </div>
      <div class="card card-md" >
        <div class="card-body">
          <h2 class="h2 text-center mb-4">Login to your account</h2>
          @livewire('author-login-form')
        </div>

    </div>
  </div>
@endsection
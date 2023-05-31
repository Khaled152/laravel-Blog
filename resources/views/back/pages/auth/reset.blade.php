@extends('back.layouts.auth-layout')
@section('title',isset($title)? $title : 'Reset Password')

@section('content')
<div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="error-404.html" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('back/static/logo.svg') }}" height="36" alt=""></a>
      </div>
      <div class="card card-md">
        <div class="card-body">
          <h2 class="h2 text-center mb-4">Reset Password</h2>
        </div>
        <div class="container">
            @livewire('author-reset-form')

        </div>
    </div>
  </div>
@endsection

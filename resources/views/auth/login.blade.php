@extends('layouts.login')

@section('content')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <img src="{{ URL::asset('dist/img/nusantaralogo-04.png')}}" />
      </div>
      <div class="card-body">
        <p class="login-box-msg">Nusantara Aqiqah</p>
  
        <form id="login" method="POST" action="{{ route('auth.login.post') }}">
            @include('partials.admin.errors')
          <div class="input-group mb-3">
            <input type="email" class="form-control" alue="{{ old('email') ?? '' }}" type="email" name="email" placeholder="{{ __('auth.login.email') }}" autofocus placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" placeholder="{{ __('auth.login.password') }}"class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                <button type="submit" class="btn btn-primary btn-block">{{ __('auth.login.submit') }}</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <div class="social-auth-links text-center mt-2 mb-3">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->
  
        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection

@if ($hasCaptcha)
    @section('scripts')
        {!! NoCaptcha::renderJs('en') !!}
    @endsection
@endif


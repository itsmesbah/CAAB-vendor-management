@extends('layouts.register')
@section('title','Login ')
@section('content')



<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1>{{ Project_name }}</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      @if(Session::get('fail'))
      <div class="alert alert-danger">
        {{ Session::get('fail')}}
      </div>
      @endif



      <form action="{{ route('login.check')}} " method="post" >

        @csrf
        <div class="input-group mb-3">
         <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email')}}">
         <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <span class="text-danger"> @error('email'){{ $message }} @enderror</span>

      <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password')}}">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <span class="text-danger"> @error('password'){{ $message }} @enderror</span>

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
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  
    <p class="mb-0">
      <a href="{{ route('register.create')}}" class="text-center">Register a new membership</a>
    </p>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.login-box -->




@endsection
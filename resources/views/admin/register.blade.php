@extends('layouts.register')
@section('title','Register ')
@section('content')


<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1>{{ Project_name }}</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{ route('register.store')}} " method="post" enctype="multipart/form-data">

        @csrf

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Full name" value="{{ old('name')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> @error('name'){{ $message }} @enderror</span> 

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="institution" placeholder="Institution name" value="{{ old('institution')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-warehouse"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> @error('institution'){{ $message }} @enderror</span>

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

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirm_password" placeholder="Retype password" value="{{ old('confirm_password')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> @error('confirm_password'){{ $message }} @enderror</span>


        <div class="input-group mb-3">
          <label> Profile Picture </label>
          <a href="#"> &nbsp (Must be square )</a>
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="image" placeholder="image" value="{{ old('image')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> @error('image'){{ $message }} @enderror</span>


        <div class="input-group mb-3">
          <label> Signature </label>
          <a href="#"> &nbsp (Must be 300*80 pixel )</a>
          </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="signature" placeholder="signature" value="{{ old('signature')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-signature"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> @error('signature'){{ $message }} @enderror</span>


        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
             </label>
           </div>
         </div>
         <!-- /.col -->
         <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



    <a href="login.html" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div><!-- /.card -->
</div>
<!-- /.register-box -->


@endsection
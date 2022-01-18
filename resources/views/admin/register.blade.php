@extends('layouts.register')
@section('title','Register ')
@section('content')


<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>রেজিস্ট্রেশন/নিবন্ধন </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">{{ Project_name }}</li>
        </ol>
      </div>
    </div>
  </div>
</section>



<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <!-- form start -->
          <form action="{{ route('register.store')}} " method="post" enctype="multipart/form-data">

            @csrf

            <div class="card-body">

              <div class="form-group row">


                <div class="col-md-4">
                  <label for="exampleInputEmail1">নাম</label>
                  <span class="text-danger"> @error('name'){{ $message }} @enderror</span> 

                  <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="নাম " >
                </div>


                <div class="col-md-4">
                  <label for="exampleInputEmail1">ছবি </label>   
                  <span class="text-danger"> @error('image'){{ $message }} @enderror</span> 
                  <a href="#"> &nbsp (Must be square )</a>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" value="{{ old('image')}}">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                  </div>
                </div>




                <div class="col-md-4">
                  <label for="exampleInputEmail1">স্বাক্ষর </label>     
                  <span class="text-danger"> @error('signature'){{ $message }} @enderror</span>
                  <a href="#"> &nbsp (Must be 300*80 pixel )</a>

                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="signature" value="{{ old('signature')}}">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      <span class="text-danger"> @error('signature'){{ $message }} @enderror</span>
                    </div>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-signature"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="form-group row">
               <div class="col-md-6">
                <label for="exampleInputEmail1">পিতার নাম </label>
                <span class="text-danger"> @error('father_name'){{ $message }} @enderror</span>
                <input type="text" name="father_name" value="{{ old('father_name')}}" class="form-control" id="exampleInputEmail1" placeholder="পিতার নাম ">
              </div>
              <div class="col-md-6">
                <label for="exampleInputFile">মাতার নাম </label>
                <span class="text-danger"> @error('mother_name'){{ $message }} @enderror</span>
                <div class="input-group">
                  <div class="custom-file">                 
                    <input type="text" name="mother_name" value="{{ old('mother_name')}}" class="form-control" id="exampleInputEmail1" placeholder="মাতার নাম ">
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-3">
                <label for="exampleInputEmail1">বর্তমান ঠিকানাঃ গ্রাম/রাস্তা</label>
                <span class="text-danger"> @error('present_village'){{ $message }} @enderror</span>
                <input type="text" name="present_village" value="{{ old('present_village')}}" class="form-control" id="exampleInputEmail1" placeholder="গ্রাম/রাস্তা">
              </div>
              <div class="col-md-3">
                <label for="exampleInputEmail1">ডাকঘর </label>
                <span class="text-danger"> @error('present_post'){{ $message }} @enderror</span>
                <input type="text" name="present_post" value="{{ old('present_post')}}" class="form-control" id="exampleInputEmail1" placeholder="ডাকঘর">
              </div>
              <div class="col-md-3">
                <label for="exampleInputEmail1">থানা </label>
                <span class="text-danger"> @error('present_upazila'){{ $message }} @enderror</span>
                <input type="text" name="present_upazila" value="{{ old('present_upazila')}}" class="form-control" id="exampleInputEmail1" placeholder="থানা">
              </div>
              <div class="col-md-3">
                <label for="exampleInputEmail1">জেলা </label>
                <span class="text-danger"> @error('present_zila'){{ $message }} @enderror</span>
                <input type="text" name="present_zila" value="{{ old('present_zila')}}" class="form-control" id="exampleInputEmail1" placeholder="জেলা">
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-3">
                <label for="exampleInputEmail1">স্থায়ী ঠিকানাঃ গ্রাম/রাস্তা</label>
                <span class="text-danger"> @error('parmanent_village'){{ $message }} @enderror</span>
                <input type="text" name="parmanent_village" value="{{ old('parmanent_village')}}" class="form-control" id="exampleInputEmail1" placeholder="গ্রাম/রাস্তা">
              </div>
              <div class="col-md-3">
                <label for="exampleInputEmail1">ডাকঘর </label>
                <span class="text-danger"> @error('parmanent_post'){{ $message }} @enderror</span>
                <input type="text" name="parmanent_post" value="{{ old('parmanent_post')}}" class="form-control" id="exampleInputEmail1" placeholder="ডাকঘর">
              </div>
              <div class="col-md-3">
                <label for="exampleInputEmail1">থানা </label>
                <span class="text-danger"> @error('parmanent_upazila'){{ $message }} @enderror</span>
                <input type="text" name="parmanent_upazila" value="{{ old('parmanent_upazila')}}" class="form-control" id="exampleInputEmail1" placeholder="থানা">
              </div>
              <div class="col-md-3">
                <label for="exampleInputEmail1">জেলা </label>
                <span class="text-danger"> @error('parmanent_zila'){{ $message }} @enderror</span>
                <input type="text" name="parmanent_zila" value="{{ old('parmanent_zila')}}" class="form-control" id="exampleInputEmail1" placeholder="জেলা">
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-4">
                <label for="exampleInputEmail1">বয়স</label>
                <span class="text-danger"> @error('age'){{ $message }} @enderror</span>
                <input type="text" name="age" value="{{ old('age')}}" class="form-control" id="exampleInputEmail1" placeholder="বয়স">
              </div>
              <div class="col-md-4">
                <label for="exampleInputEmail1">পেশা </label>
                <span class="text-danger"> @error('occupation'){{ $message }} @enderror</span>
                <input type="text" name="occupation" value="{{ old('occupation')}}" class="form-control" id="exampleInputEmail1" placeholder="পেশা">
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>ধর্ম</label>
                  <select name="religion" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">ইসলাম</option>
                    <option value="2">হিন্দু</option>
                    <option value="3">বৌদ্ধ</option>
                    <option value="4">খ্রিস্টান</option>
                    <option value="5">অন্যান্য</option>
                  </select>
                </div>                  
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-7">
                <label for="exampleInputEmail1">জাতীয় পরিচয়পত্র নং </label>
                <span class="text-danger"> @error('nid_no'){{ $message }} @enderror</span>
                <input type="text" class="form-control" name="nid_no" value="{{ old('nid_no')}}" placeholder="জাতীয় পরিচয়পত্র নং">
              </div>

              <div class="col-md-5">
                <div class="form-group">
                  <span class="text-danger"> @error('nationality'){{ $message }} @enderror</span>
                  <label>জাতীয়তা</label>
                  <input type="text" class="form-control" name="nationality" value="{{ old('nationality')}}" placeholder="জাতীয়তা">
                </div>                  
              </div>
            </div>

            <small>প্রতিষ্ঠানিক তথ্যাদি </small><hr>




            <div class="form-group row">
              <div class="col-md-4">
                <label for="exampleInputEmail1">প্রতিষ্ঠানের নাম </label>
                <span class="text-danger"> @error('institution'){{ $message }} @enderror</span>
                <input type="text" class="form-control" name="institution" value="{{ old('institution')}}" placeholder="প্রতিষ্ঠানের নাম">
              </div>
              <div class="col-md-8">
                <label for="exampleInputEmail1">প্রতিষ্ঠানের ঠিকানা </label>
                <span class="text-danger"> @error('institution_address'){{ $message }} @enderror</span>
                <input type="text" name="institution_address" value="{{ old('institution_address')}}" class="form-control" id="exampleInputEmail1" placeholder="প্রতিষ্ঠানের ঠিকানা">
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-5">
                <label for="exampleInputEmail1">ব্যাংক হিসাব নং </label>
                <span class="text-danger"> @error('bank_account'){{ $message }} @enderror</span>
                <input type="text" name="bank_account" value="{{ old('bank_account')}}" class="form-control" id="exampleInputEmail1" placeholder="ব্যাংক হিসাব নং ">
              </div>
              <div class="col-md-7">
                <label for="exampleInputEmail1">ব্যাংক ঠিকানা  </label>
                <span class="text-danger"> @error('bank_address'){{ $message }} @enderror</span>
                <input type="text" name="bank_address" value="{{ old('bank_address')}}" class="form-control" id="exampleInputEmail1" placeholder="ব্যাংক ঠিকানা ">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-4">
                <label for="exampleInputEmail1">মোবাইল নং</label>
                <span class="text-danger"> @error('mobile_no'){{ $message }} @enderror</span>
                <input type="text" name="mobile_no" value="{{ old('mobile_no')}}" class="form-control" id="exampleInputEmail1" placeholder="মোবাইল নং">
              </div>
              <div class="col-md-4">
                <label for="exampleInputEmail1">ফোন নং </label>
                <span class="text-danger"> @error('phone_no'){{ $message }} @enderror</span>
                <input type="text" name="phone_no" value="{{ old('phone_no')}}" class="form-control" id="exampleInputEmail1" placeholder="ফোন নং">
              </div>
              <div class="col-md-4">
                <label for="exampleInputEmail1">ফ্যাক্স নং  </label> <small style="color: blue;"> (যদি থাকে) </small>
                <span class="text-danger"> @error('fax_no'){{ $message }} @enderror</span>
                <input type="text" name="fax_no" value="{{ old('fax_no')}}" class="form-control" id="exampleInputEmail1" placeholder="ফ্যাক্স নং   ">
              </div>
            </div>



            <small>নিবন্ধনের তথ্যাদি </small><hr>

            <div class="form-group row">

              <div class="col-md-4">
                <label for="exampleInputEmail1">ই-মেইল  </label>    
                <span class="text-danger"> @error('email'){{ $message }} @enderror</span>
                <input type="email" class="form-control" name="email" value="{{ old('email')}}" placeholder="ই-মেইল">
              </div>
              <div class="col-md-4">
                <label for="exampleInputEmail1">পাসওয়ার্ড </label>
                <span class="text-danger"> @error('password'){{ $message }} @enderror</span>
                <input type="password" class="form-control" name="password"  value="{{ old('password')}}" placeholder="পাসওয়ার্ড  ">
              </div>
              <div class="col-md-4">
                <label for="exampleInputEmail1">পাসওয়ার্ড পুনরায় টাইপ করুন  </label>
                <span class="text-danger"> @error('confirm_password'){{ $message }} @enderror</span>
                <input type="password" class="form-control" name="confirm_password"  value="{{ old('confirm_password')}}" placeholder="পাসওয়ার্ড পুনরায় টাইপ করুন ">
              </div>
            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="login.html" class="text-center">I already have a membership</a>
          </div>
        </form>

      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
</section>











@endsection
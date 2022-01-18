@extends('layouts.dashboard')
@section('title','Affidavit ')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>হলফনামা</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"> Affidavit</li>
					</ol>
				</div>
			</div>
		</div>
	</section>


	@php

	$affidavit = DB::table('affidavits')
	->where('affidavits.user_id', '=',  session('LoggedUser'))
	->select('affidavits.*')
	->first();

	@endphp

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->



					@if(Session::get('fail'))
					<div class="alert alert-danger">
						{{ Session::get('fail')}}
					</div>
					@endif

					@if(Session::get('success'))
					<div class="alert alert-success">
						{{ Session::get('success')}}
					</div>
					@endif



					<div class="card card-primary">
						<!-- form start -->
						<form class="form-horizontal" action="{{ route('affidavit.update', $LoggedUserInfo->id) }} " method="POST" >
							@csrf 
							@method('PUT')

							<div class="card-body">

								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputEmail1">নাম</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ $LoggedUserInfo->name }}" disabled>
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">পিতার নাম </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ $LoggedUserInfo->father_name }}" disabled>
									</div>
									<div class="col-md-4">
										<label for="exampleInputFile">মাতার নাম </label>
										<div class="input-group">
											<div class="custom-file">									
												<input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ $LoggedUserInfo->mother_name }}" disabled>
											</div>
										</div>
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-md-3">
										<label for="exampleInputEmail1">বর্তমান ঠিকানাঃ গ্রাম/রাস্তা</label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->present_village }}" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">ডাকঘর </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->present_post }}" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">থানা </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->present_upazila }}" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">জেলা </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->present_zila }}" disabled>
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-md-3">
										<label for="exampleInputEmail1">স্থায়ী ঠিকানাঃ গ্রাম/রাস্তা</label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->parmanent_village }}" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">ডাকঘর </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->parmanent_post }}" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">থানা </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->parmanent_upazila }}" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">জেলা </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->parmanent_zila }}" disabled>
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-md-3">
										<label for="exampleInputEmail1">বয়স</label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->age }}" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">পেশা </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->occupation }}" disabled>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>ধর্ম</label>
											<select name="religion" class="form-control select2" style="width: 100%;" disabled>
												@if($LoggedUserInfo->religion == 1)
												<option value="1" selected="selected">ইসলাম</option>
												<option value="2">হিন্দু</option>
												<option value="3">বৌদ্ধ</option>
												<option value="4">খ্রিস্টান</option>
												<option value="5">অন্যান্য</option>
												@elseif($LoggedUserInfo->religion == 2)
												<option value="1">ইসলাম</option>
												<option value="2" selected="selected">হিন্দু</option>
												<option value="3">বৌদ্ধ</option>
												<option value="4">খ্রিস্টান</option>
												<option value="5">অন্যান্য</option>
												@elseif($LoggedUserInfo->religion == 3)
												<option value="1">ইসলাম</option>
												<option value="2">হিন্দু</option>
												<option value="3"  selected="selected">বৌদ্ধ</option>
												<option value="4">খ্রিস্টান</option>
												<option value="5">অন্যান্য</option>
												@elseif($LoggedUserInfo->religion == 4)
												<option value="1">ইসলাম</option>
												<option value="2">হিন্দু</option>
												<option value="3">বৌদ্ধ</option>
												<option value="4" selected="selected">খ্রিস্টান</option>
												<option value="5">অন্যান্য</option>
												@elseif($LoggedUserInfo->religion == 5)
												<option value="1">ইসলাম</option>
												<option value="2">হিন্দু</option>
												<option value="3">বৌদ্ধ</option>
												<option value="4">খ্রিস্টান</option>
												<option value="5" selected="selected">অন্যান্য</option>
												@endif
											</select>
										</div> 								
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>জাতীয়তা</label>
											<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->nationality }}" disabled>
										</div>									
									</div>
								</div>

								<small>প্রতিষ্ঠানিক তথ্যাদি </small><hr>



								
								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputEmail1">আয়কর সনদ</label>
										<span class="text-danger"> @error('income_tax'){{ $message }} @enderror</span>
										<input type="text" class="form-control" name="income_tax" id="exampleInputEmail1" value="{{ $affidavit->income_tax }}">
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">ভ্যাট নং </label>
										<span class="text-danger"> @error('vat_no'){{ $message }} @enderror</span>
										<input type="text" class="form-control" name="vat_no" id="exampleInputEmail1" value="{{ $affidavit->vat_no }}">
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">জাতীয় পরিচয়পত্র নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->nid_no }}" disabled>
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-md-5">
										<label for="exampleInputEmail1">ব্যাংক হিসাব নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->bank_account }}" disabled>
									</div>
									<div class="col-md-7">
										<label for="exampleInputEmail1">ব্যাংক ঠিকানা  </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->bank_address }}" disabled>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputEmail1">মোবাইল নং</label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->mobile_no }}" disabled>
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">ফোন নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->phone_no }}" disabled>
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">ই-মেইল  </label>
										<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="{{ $LoggedUserInfo->email }}" disabled>
									</div>
								</div>
								
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
								<a href="{{ route('affidavit.show') }}" class="btn btn-default"><i class="fas fa-eye"></i> View</a>
								<button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>





</div>
<!-- /.content-wrapper -->

@endsection
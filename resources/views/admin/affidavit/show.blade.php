@extends('layouts.dashboard')
@section('title','Contractor Form Application ')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>হলফ নামা </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">হোম </a></li>
						<li class="breadcrumb-item active">হলফ নামা </li>
					</ol>
				</div>


			</div>
		</div><!-- /.container-fluid -->
	</section>
	@php

	$affidavit = DB::table('affidavits')
	->where('affidavits.user_id', '=',  session('LoggedUser'))
	->select('affidavits.*')
	->first();

	@endphp

	<div class="col-md-10">

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
	</div>



	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">

				<!-- /.col -->
				<div class="col-md-10">
					<div class="card card-primary card-outline">

						<div class="card-body p-0">

							<!-- /.mailbox-controls -->
							<div class="mailbox-read-message">




								<div class="card-body">
									<div class="form-group">

										<center><u><b><p>নতুন কপি (জুডিসিয়াল ষ্ট্যাম্প লিখিত মূল কপি জমা দিতে হবে ) </p></b></u></center>
										<p>
											<div class="float-sm-right"> 
												<u><b><p>৩০০/- টাকার নন-জুডিসিয়াল ষ্ট্যাম্পে । </p></b></u>
											</div>
										</p>
										<center><u><b><p><h2>হলফ নামা</h2></p></b></u></center>



										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
											আমি {{ $LoggedUserInfo->name }} ,
											পিতা- {{ $LoggedUserInfo->father_name }} ,
											মাতা- {{ $LoggedUserInfo->mother_name }} ,
											স্থায়ী ঠিকানাঃ গ্রাম/রোড  {{ $LoggedUserInfo->parmanent_village }} ,
											ডাকঘর-  {{ $LoggedUserInfo->parmanent_post}} ,
											উপজেলা- {{ $LoggedUserInfo->parmanent_upazila }}  ,
											জেলা-  {{ $LoggedUserInfo->parmanent_zila }} ,
											বর্তমান ঠিকানাঃ গ্রাম/রোড  {{ $LoggedUserInfo->present_village }}  ,
											ডাকঘর- {{ $LoggedUserInfo->present_post }} , 
											উপজেলা-  {{ $LoggedUserInfo->present_upazila }} , 
											জেলা-  {{ $LoggedUserInfo->present_zila }}, 
											বয়স-  {{ $LoggedUserInfo->age }}, 
											পেশা-  {{ $LoggedUserInfo->occupation }} ,
											ধর্ম- 
											@if($LoggedUserInfo->religion == 1)
											ইসলাম
											@elseif($LoggedUserInfo->religion == 2)
											হিন্দু
											@elseif($LoggedUserInfo->religion == 3)
											বৌদ্ধ
											@elseif($LoggedUserInfo->religion == 4)
											খ্রিস্টান
											@elseif($LoggedUserInfo->religion == 5)
											অন্যান্য
											@endif
											,
											<br>
											জাতীয়তা- {{ $LoggedUserInfo->nationality }}  ,এই মর্মে হলফ পূর্বক ঘোষণা করিতেছি যে ,<br>
											১। আমি জন্মসূত্রে বাংলাদেশের নাগরিক এবং স্থায়ী বাসিন্দা । <br>
											২। আমি   , আমার বাবসায়িক প্রতিষ্ঠান    , এর একমাত্র মালিক এবং স্বত্তাধিকারী। এই প্রতিষ্ঠানের অন্য কোন মালিক বা অংশীদার নাই।  ব্যাংক ঋণ খেলাপী লিষ্টে আমার বা আমার প্রতিষ্ঠানের নাম নেই। <br>

											<center><u><b><p>পাতা-২ </p></b></u></center>

											৩। নিম্নে আমার প্রতিষ্ঠানের তথ্যাদি দেয়া হলঃ<br>					
										</p>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ক) আয়কর সনদ  &nbsp&nbsp: {{ $affidavit->income_tax }}   </p>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp খ) ভ্যাট নং   &nbsp&nbsp: {{ $affidavit->vat_no }}  </p>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp গ) জাতীয় পরিচয় পত্র নং   &nbsp&nbsp:  {{ $LoggedUserInfo->nid_no }}  </p>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ঘ) ব্যাংক হিসাব  &nbsp&nbsp:  {{ $LoggedUserInfo->bank_account }}  </p>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ঙ) ব্যাংক ঠিকানা   &nbsp&nbsp:  {{ $LoggedUserInfo->bank_address }}  </p>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp চ) মোবাইল নং  &nbsp&nbsp:  {{ $LoggedUserInfo->mobile_no }}  </p>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ছ) ফোন নং  &nbsp&nbsp:  {{ $LoggedUserInfo->phone_no }}  </p>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp জ) ফ্যাক্স নং  &nbsp&nbsp:  {{ $LoggedUserInfo->fax_no }}  </p>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ঝ) ই-মেইল  &nbsp&nbsp:  {{ $LoggedUserInfo->email }}  </p>

										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp উপরুক্ত বর্ণনা আমার জ্ঞান ও জানামতে সম্পূর্ণ  সত্য ও সঠিক  এবং উহাতে আমি স্ব-জ্ঞানে, সুস্থ শরীরে, অন্যের বিনা প্ররোচনায় উল্লেখিত বক্তব্য নিজে পড়িয়া, অন্যের দ্বারা পড়াইয়া,  </p>
										<center><u><b><p>পাতা-৩ </p></b></u></center>
										<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ইহার মর্ম বুঝিয়া অদ্য ......... তারিখে নোটারী পাব্লিকের কার্যালয়ে নিজ নামে সহি সম্পাদন করিলাম।   </p>

										<p><div class="float-sm-right"> 
											<u><b><p><img class="img-fluid img-square"
												src="{{ url('public/images/users', $LoggedUserInfo->signature) }}"alt="User profile picture"> 
												<br><center>হলফ কারীর স্বাক্ষর </center> </p></b></u>
											</div> </p>
											

										</div>



									</div>

								</div>

								<!-- /.card-footer -->
								<div class="card-footer">
									<a href="{{ route('affidavit.edit') }}" class="btn btn-default"><i class="fas fa-pen"></i> Edit</a>
									<button  class="btn btn-default"><i class="fas fa-print"></i> Print</button>
								</div>
								<!-- /.card-footer -->


								<!-- /.card -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div><!-- /.container-fluid -->
				</section>
				<!-- /.content -->

			</div>
			<!-- /.content-wrapper -->

			@endsection
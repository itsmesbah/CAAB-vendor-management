@extends('layouts.dashboard')
@section('title','Contractor Form Application ')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

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



								<form class="form-horizontal" action="{{ route('application.update', $LoggedUserInfo->id) }} " method="POST" >
									@csrf 
									@method('PUT')


									<div class="card-body">
										<div class="form-group">

											<center><u><p><b>নতুন কপি (জুডিসিয়াল ষ্ট্যাম্পে লিখিত মূল কপি জমা দিতে হবে  )</b></p></u></center>

											<div class="float-sm-right row"> 
												<p><u><b>৩০০/- টাকার নন-জুডিসিয়াল ষ্ট্যাম্পে </b></u></p>

											</div>
											<center><u><p><b><h1>হলফ নামা</h1></b></p></u></center>

										</div>
										<div class="form-group">



											
											<p>
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
												আমি {{ $LoggedUserInfo->name }}, 
												পিতা- {{ $LoggedUserInfo->father_name }}, 
												মাতা- {{ $LoggedUserInfo->mother_name }},
												স্থায়ী ঠিকানাঃ গ্রাম/রাস্তাঃ {{ $LoggedUserInfo->parmanent_village }}, 
												ডাকঘরঃ {{ $LoggedUserInfo->parmanent_post }}, 
												থানাঃ {{ $LoggedUserInfo->parmanent_upazila }},
												জেলাঃ {{ $LoggedUserInfo->parmanent_zila }}। 

												বর্তমান ঠিকানাঃ গ্রাম/রাস্তাঃ {{ $LoggedUserInfo->present_village }}, 
												ডাকঘরঃ {{ $LoggedUserInfo->present_post }}, 
												থানাঃ {{ $LoggedUserInfo->present_upazila }}, 
												জেলাঃ {{ $LoggedUserInfo->present_zila }}। 

												বয়সঃ  {{ $LoggedUserInfo->age }},
												পেশাঃ  {{ $LoggedUserInfo->occupation }}, 
												ধর্মঃ 
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
												@endif ,
												<br>
												জাতীয়তাঃ 	
												{{ $LoggedUserInfo->nationality }} , এই মর্মে হলফ পূর্বক ঘোষণা করছি যে ,
												<br>

												১। আমি জন্মসূত্রে বাংলাদেশের নাগরিক এবং স্থায়ী বাসিন্দা ।
												<br>
												২। আমি {{ $LoggedUserInfo->name }}, আমার বাবসায়িক প্রতিষ্ঠান  {{ $LoggedUserInfo->institution }}, এর একমাত্র মালিক এবং স্বত্তাধিকারী। এই প্রতিষ্ঠানের অন্য কোন মালিক বা অংশীদার নাই। ব্যাংক ঋণ খেলাপী লিষ্টে আমার বা আমার প্রতিষ্ঠানের নাম নেই।   

											</p>

											<center><u><p><b>পাতা-২</b></p></u></center>

											<p>৩। নিম্নে আমার প্রতিষ্ঠানের তথ্যাদি দেওয়া হলঃ</p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ক) আয়কর সনদ :  {{ $LoggedUserInfo->income_tax }}    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp খ) ভ্যাট নং :  {{ $LoggedUserInfo->vat_no }}    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp গ) জাতীয় পরিচয়পত্র নং :  {{ $LoggedUserInfo->nid_no }}    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ঘ) ব্যাংক হিসাব নং :  {{ $LoggedUserInfo->bank_account }}    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ঙ) ব্যাংক ঠিকানা :  {{ $LoggedUserInfo->bank_address }}    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp চ) মোবাইল নং :  {{ $LoggedUserInfo->mobile_no }}    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ছ) ফোন নং :  {{ $LoggedUserInfo->phone_no }}    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp জ) ফ্যাক্স নং :  {{ $LoggedUserInfo->fax_no }}    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ঝ) ই-মেইল :  {{ $LoggedUserInfo->email }}    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp উপরুক্ত বর্ণনা আমার জ্ঞান ও জানামতে সম্পূর্ণ সত্য ও সঠিক এবং উহাতে আমি স্ব-জ্ঞানে, সুস্থ শরীরে, অন্যের বিনা প্রচরনায় উল্লেখিত বক্তব্য নিজে পড়িয়া, অন্যের দ্বারা পড়াইয়া,    </p>
											<center><u><p><b>পাতা-৩</b></p></u></center>

											<p>ইহার মর্ম বুঝিয়া অদ্য ......... তারিখে নোটারী পাবলিকের কার্যালয়ে উপস্থিত হয়ে নিজ নামে সহি সম্পন্ন করিলাম ।     </p>




											<div class="float-sm-right row"> 
												<center>
													<p><img src="{{ url('public/images/users', $LoggedUserInfo->signature) }}"
														alt="User profile picture"><br>
													হলফকারীর স্বাক্ষর </p>
												</center>
											</div>

										</div>
										


									</div>

									<!-- /.card-footer -->
									<div class="card-footer">
										<button type="submit" class="btn btn-default"><i class="fas fa-save"></i> Save</button>
										<button type="button" class="btn btn-default"><i class="fas fa-share"></i> Send</button>
										<button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
									</div>
									<!-- /.card-footer -->

								</form>





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
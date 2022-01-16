@extends('layouts.dashboard')
@section('title','Class Develop Application ')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Class Develop Application</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Class Develop Application</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>


	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<!-- form start -->
						<form>
							<div class="card-body">

								<span><b>১। প্রতিষ্ঠানের নাম ও ঠিকানা <span style="color: red">*</span></b></span>
								<hr>
								<div class="form-group row">
									<label for="#" class="col-sm-2 col-form-label">প্রতিষ্ঠানের নাম </label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="#" placeholder="প্রতিষ্ঠানের নাম ">
									</div>							

									<label for="#" class="col-sm-2 col-form-label">ব্যবসা শুরুর তারিখ</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="#" placeholder="ব্যবসা শুরুর তারিখ">
									</div>

								</div>
								<div class="form-group row">
									<label for="#" class="col-sm-2 col-form-label">প্রতিষ্ঠানের ঠিকানা</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="#" placeholder="প্রতিষ্ঠানের ঠিকানা">
									</div>

								</div>

								<span><b>২। যোগাযোগের ঠিকানা <span style="color: red">*</span></b></span>
								<hr>
								<div class="form-group row">
									<label for="#" class="col-sm-2 col-form-label">মোবাইল নং </label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="#" placeholder="মোবাইল নং">
									</div>

									<label for="#" class="col-sm-2 col-form-label">ফ্যাক্স নং </label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="#" placeholder="ফ্যাক্স নং ">
									</div>

								</div>
								<div class="form-group row">
									<label for="#" class="col-sm-2 col-form-label">ই-মেইল</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="#" placeholder="ই-মেইল">
									</div>

									<label for="#" class="col-sm-2 col-form-label">দুরালাপনী</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="#" placeholder="দুরালাপনী">
									</div>

								</div>
								

								<span><b>৩। শপলনামা/অংশীদারিত্বের দলিল <span style="color: red">*</span></b></span>
								<hr>

								<div class="form-group row">
									<label for="#" class="col-sm-4 col-form-label">ব্যাক্তি মালিকানা প্রতিষ্ঠানের শপলনামা
										(এফিডেফিড)
										<small>(মালিকানা একক/অংশীদার/জয়েন্ট ষ্টক কোং উল্লেখ করুন</small>
									</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="#">
									</div>

								</div>
								<div class="form-group row">
									<label for="#" class="col-sm-4 col-form-label">যৌথ প্রতিষ্ঠানের অংশীদারিত্বের দলিল (পার্টনারশিপ ডিড) </label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="#" >
									</div>

								</div>


								<span><b>৪। যে শ্রেণীতে তালিকাভূক্ত হইতে ইচ্ছুক <span style="color: red">*</span></b></span>
								<hr>




								<div class="col-sm-12">

									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input" value="1" type="radio" name="radio1">
											<label for="#" class="col-sm-4 col-form-label">সিভিল(পূর্ত)</label>

											<input class="form-check-input" value="2" type="radio" name="radio1" checked>
											<label for="#" class="col-sm-4 col-form-label">বৈদ্যুতিক/যান্ত্রিক (ই/এম )</label>
										</div>
									</div>
								</div>



							


								<span><b>৫।প্রতিষ্ঠানের মালিকের জীবন বৃত্তান্ত <span style="color: red">*</span></b></span>
								<hr>

								<div class="form-group row">
									<label for="#" class="col-sm-2 col-form-label">জাতীয় পরিচয়পত্র নং</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="#" placeholder="জাতীয় পরিচয়পত্র নং">
									</div>

								</div>	
								<div class="form-group row">
									<label for="#" class="col-sm-2 col-form-label">জাতীয় পরিচয়পত্র </label>
									<div class="col-sm-4">
										<input type="file" class="form-control" id="#" placeholder="জাতীয় পরিচয়পত্র ">
									</div>							

									<label for="#" class="col-sm-2 col-form-label">মালিকের ছবি</label>
									<div class="col-sm-4">
										<input type="file" class="form-control" id="#" placeholder="মালিকের ছবি">
									</div>

								</div>

								<span><b>৬। নিম্নলিখিত তথ্য প্রদান করুন (সত্যায়িত ফটোকপি ) <span style="color: red">*</span></b></span>
								<hr>


								<div class="form-group row">
									<label for="#" class="col-sm-2 col-form-label">ট্রেড লাইসেন্স</label>
									<div class="col-sm-4">
										<input type="file" class="form-control" id="#" placeholder="ট্রেড লাইসেন্স ">
									</div>							

									<label for="#" class="col-sm-2 col-form-label">ভ্যাট রেজিস্ট্রেশন</label>
									<div class="col-sm-4">
										<input type="file" class="form-control" id="#" placeholder="ভ্যাট রেজিস্ট্রেশন">
									</div>

								</div>

								<div class="form-group row">

									<label for="#" class="col-sm-6 col-form-label">টিআইএন নম্বরসহ আয়কর সনদ ও হালনাগাদ আয়কর রিটার্নস এর সনদ</label>
									<div class="col-sm-6">
										<input type="file" class="form-control" id="#" >
									</div>
								</div>	

								<div class="form-group row">

									<label for="#" class="col-sm-6 col-form-label">তফশিলী ব্যাংক হইতে সর্বশেষ ৩ বছরের স্টেটমেন্টসহ আর্থিক স্বাবলম্বীতার সনদ এর মুলকপি </label>
									<div class="col-sm-6">
										<input type="file" class="form-control" id="#" >
									</div>
								</div>	

								<span><b>৭। প্রতিষ্ঠানে চাকুরীরত প্রকৌশলীদের তালিকা <span style="color: red">*</span></b></span>
								<hr>

								<div class="card-body">
									<table id="table7" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th id="test">ক্রমিক নং </th>
												<th>ছবি </th>
												<th>নাম</th>
												<th>শিক্ষাগত যোগ্যতা </th>
												<th>অভিজ্ঞতা</th>
												<th>যোগদানের তারিখ</th>
												<th>চাকুরীর সম্মতিপত্র</th>
												<th><button type="button" name="add" class="btn btn-success btn-sm table7"><span class="fa fa-plus"></span></button></th>
											</tr>
										</thead>
									</table>
								</div>
								<!-- /.card-body -->

								<span><b>৮। প্রতিষ্ঠানে কর্মরত প্রশিক্ষণ প্রাপ্ত ও দক্ষ জনশক্তির তালিকা নিম্নের ছক অনুসারে প্রদান করিতে হইবে যাহা নুনযতম নির্বাহী প্রকৌশলীর দ্বারা প্রত্যায়ন করিতে হইবে  <span style="color: red">*</span></b></span>
								<hr>
								<div class="card-body">
									<table id="table8" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th id="test">ক্রমিক নং </th>
												<th>নাম</th>
												<th>পদবী </th>
												<th>শিক্ষাগত যোগ্যতা </th>
												<th>অভিজ্ঞতা</th>
												<th>যোগদানের তারিখ</th>
												<th><button type="button" name="add" class="btn btn-success btn-sm table8"><span class="fa fa-plus"></span></button></th>
											</tr>
										</thead>
									</table>
								</div>
								<!-- /.card-body -->


								<span><b>৯। প্রতিষ্ঠানে বিদ্যমান নিম্নে বর্ণিত সরঞ্জাম ও যন্ত্রপাতির তালিকা প্রদান করিতে হইবে যাহা নুনযতম নির্বাহী প্রকৌশলীর দ্বারা প্রত্যায়ন করিতে হইবে  <span style="color: red">*</span></b></span>
								<hr>

								<div class="card-body">
									<table id="table9" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th id="test">ক্রমিক নং </th>
												<th>অফিস সরঞ্জাম </th>
												<th>নির্মাণ সরঞ্জাম</th>
												<th>যন্ত্রপাতি </th>
												<th>যানবাহনের বিবরণ</th>
												<th>ক্রয়ের  তারিখ</th>
												<th>মডেল নং </th>
												<th>অবস্থান</th>
												<th><button type="button" name="add" class="btn btn-success btn-sm table9"><span class="fa fa-plus"></span></button></th>
											</tr>
										</thead>
									</table>
								</div>

								<span><b>১০। অন্য কোন সরকারী/আধাসরকারী ও শ্বায়ত্বসাশিত সংস্থায় তালিকাভুক্ত
									থাকিলে তাহার সনদের সত্যায়িত আলোকলিপি সংযুক্ত করিতে হইবে  <span style="color: red">*</span></b></span>
									<hr>

									<div class="card-body">
										<table id="table10" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th id="test">ক্রমিক নং </th>
													<th>দপ্তরের নাম  </th>
													<th>তালিকাভুক্তির শ্রেণী</th>
													<th>আর্থিক ক্ষমতা </th>
													<th>মেয়াদ</th>
													<th><button type="button" name="add" class="btn btn-success btn-sm table10"><span class="fa fa-plus"></span></button></th>
												</tr>
											</thead>
										</table>
									</div>
									<!-- /.card-body -->

									<span><b>১১। বিগত ৫ বছরে যে সমস্ত কাজ ক্রমিক নং ১০ এ তালিকাভুক্ত প্রতিষ্ঠান সন্তোষজনকভাবে সুসম্পন্ন করিয়েছেন তাহার তালিকা নিম্নের ছক অনুসারে প্রদান করিতে হইবে এবং কারযাদেশ ও কারয সম্পাদনের সত্যায়িত কপি সনযোজন করিতে হইবে <span style="color: red">*</span></b></span>
									<hr>

									<div class="card-body">
										<span id="error"></span>
										<table id="table11" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th id="test">ক্রমিক নং </th>
													<th>আরম্ভের তারিখ </th>
													<th>সমাপ্তির তারিখ </th>
													<th>কাজের নাম, দপ্তরের নাম ও অবস্থান </th>
													<th>চূড়ান্ত বিলের পরিমান ( টাকায়)</th>
													<th>মন্তব্য</th>
													<th><button type="button" name="add" class="btn btn-success btn-sm table11"><span class="fa fa-plus"></span></button></th>
												</tr>
											</thead>
										</table>
									</div>
									<!-- /.card-body -->                	


								</div>
								<!-- /.card-body -->

								<div class="card-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
						<!-- /.card -->
					</div>
				</div>
			</div>
		</section>

	</div>

	<script>
		$(document).ready(function(){

			$(document).on('click', '.table7', function(){
				var html = '';
				html += '<tr>';
				html += '<td>1</td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_quantity[]" class="form-control item_name" /></td>';
				html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
				$('#table7').append(html);
			});

			$(document).on('click', '.remove', function(){
				$(this).closest('tr').remove();
			});


			$(document).on('click', '.table8', function(){
				var html = '';
				html += '<tr>';
				html += '<td>1</td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_quantity[]" class="form-control item_name" /></td>';
				html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
				$('#table8').append(html);
			});

			$(document).on('click', '.remove', function(){
				$(this).closest('tr').remove();
			});


			$(document).on('click', '.table9', function(){
				var html = '';
				html += '<tr>';
				html += '<td>1</td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_quantity[]" class="form-control item_name" /></td>';
				html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
				$('#table9').append(html);
			});

			$(document).on('click', '.remove', function(){
				$(this).closest('tr').remove();
			});

			$(document).on('click', '.table10', function(){
				var html = '';
				html += '<tr>';
				html += '<td>1</td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_quantity[]" class="form-control item_name" /></td>';
				html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
				$('#table10').append(html);
			});

			$(document).on('click', '.remove', function(){
				$(this).closest('tr').remove();
			});

			$(document).on('click', '.table11', function(){
				var html = '';
				html += '<tr>';
				html += '<td>1</td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
				html += '<td><input type="text" name="item_quantity[]" class="form-control item_name" /></td>';
				html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
				$('#table11').append(html);
			});

			$(document).on('click', '.remove1', function(){
				$(this).closest('tr').remove();
			});               			

		});
	</script>

	@endsection
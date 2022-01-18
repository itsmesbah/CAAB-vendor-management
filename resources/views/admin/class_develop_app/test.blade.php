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

	

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">



			<div class="card card-default">
				<div class="card-header">
					<h3 class="card-title">ঠিকাদার/নির্মাণ প্রতিষ্ঠানের তালিকাভুক্তি/শ্রেণী উন্নয়ন আবেদন ফরম </h3>
				</div>
				<div class="card-body">


					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>১। প্রতিষ্ঠানের নাম ও ঠিকানা</b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form class="form-horizontal">
							<div class="card-body">
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
							</div>
							<!-- /.card-body -->
						</form>
					</div>
					<!-- /.card -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>২। যোগাযোগের ঠিকানা</b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form class="form-horizontal">
							<div class="card-body">
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
							</div>
							<!-- /.card-body -->
						</form>
					</div>
					<!-- /.card -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>৩। শপলনামা/অংশীদারিত্বের দলিল</b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form class="form-horizontal">
							<div class="card-body">
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
							</div>
							<!-- /.card-body -->
						</form>
					</div>
					<!-- /.card -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>৪। যে শ্রেণীতে তালিকাভূক্ত হইতে ইচ্ছুক </b></h3>
						</div>
						<!-- /.card-header -->

						<!-- form start -->
						<form class="form-horizontal">
							<div class="card-body">
								<div class="form-group row">
									<label for="#" class="col-sm-4 col-form-label">সিভিল(পূর্ত)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="#">
									</div>

								</div>
								<div class="form-group row">
									<label for="#" class="col-sm-4 col-form-label">বৈদ্যুতিক/যান্ত্রিক (ই/এম )</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="#" >
									</div>

								</div>
							</div>
							<!-- /.card-body -->
						</form>
					</div>
					<!-- /.card -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>৫।প্রতিষ্ঠানের মালিকের জীবন বৃত্তান্ত </b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form class="form-horizontal">
							<div class="card-body">

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
							</div>
							<!-- /.card-body -->
						</form>
					</div>
					<!-- /.card -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>৬। নিম্নলিখিত তথ্য প্রদান করুন (সত্যায়িত ফটোকপি ) </b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form class="form-horizontal">
							<div class="card-body">

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

							</div>
							<!-- /.card-body -->
						</form>
					</div>
					<!-- /.card -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>৭। প্রতিষ্ঠানে চাকুরীরত প্রকৌশলীদের তালিকা  </b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->

						<form class="form-horizontal">
							<div class="card-body">

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

							</div>
							<!-- /.card-body -->
						</form>
					</div>
					<!-- /.card -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>৭। প্রতিষ্ঠানে চাকুরীরত প্রকৌশলীদের তালিকা  </b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->

						<div class="card">
							<div class="card-header">
								<button class="btn btn-primary" onclick='addTableRow()'>Add Row</button>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table id="vendorstbl" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th id="test">ক্রমিক নং </th>
											<th>ছবি </th>
											<th>নাম</th>
											<th>শিক্ষাগত যোগ্যতা </th>
											<th>অভিজ্ঞতা</th>
											<th>যোগদানের তারিখ</th>
											<th>চাকুরীর সম্মতিপত্র</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>Trident</td>
											<td>Internet</td>
											<td>Win 95+</td>
											<td>Internet</td>
											<td>Internet</td>
											<td>Win 95+</td>
											<td> 4</td>
											<td><a href="" class="btn btn-danger"> Remove</a></td>
										</tr>

										<script>
											function addTableRow() {

												var len = $('#vendorstbl tr').length
												var table = document.getElementById("vendorstbl");
												var row = table.insertRow(len);
												var cell0 = row.insertCell(0);
												var cell1 = row.insertCell(1);
												var cell2 = row.insertCell(2);
												var cell3 = row.insertCell(3);
												var cell4 = row.insertCell(4);
												var cell5 = row.insertCell(5);
												var cell6 = row.insertCell(6);
												var cell7 = row.insertCell(7);
												cell0.innerHTML = "<input type='text'>";
												cell1.innerHTML = "<input type='file' name=''>";
												cell2.innerHTML = "<input type='text'>";
												cell3.innerHTML = "<input type='text'>";
												cell4.innerHTML = "<input type='text'>";
												cell5.innerHTML = "<input type='text'>";
												cell6.innerHTML = "<input type='text'>";
												cell7.innerHTML = "<input type='text' >";
											}
										</script>
									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.card-body -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>৮। প্রতিষ্ঠানে কর্মরত প্রশিক্ষণ প্রাপ্ত ও দক্ষ জনশক্তির তালিকা নিম্নের ছক অনুসারে প্রদান করিতে হইবে যাহা নুনযতম নির্বাহী প্রকৌশলীর দ্বারা প্রত্যায়ন করিতে হইবে  </b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->

						<div class="card">
							<div class="card-header">
								<button class="btn btn-primary" >button</button>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table id="" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th id="test">ক্রমিক নং </th>
											<th>নাম</th>
											<th>পদবী </th>
											<th>শিক্ষাগত যোগ্যতা </th>
											<th>অভিজ্ঞতা</th>
											<th>যোগদানের তারিখ</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>Trident</td>
											<td>Internet</td>
											<td>Win 95+</td>
											<td> 4</td>
											<td>X</td>
											<td> 4</td>
											<td><a href="" class="btn btn-danger"> Remove</a></td>
										</tr>

									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.card-body -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>৯। প্রতিষ্ঠানে বিদ্যমান নিম্নে বর্ণিত সরঞ্জাম ও যন্ত্রপাতির তালিকা প্রদান করিতে হইবে যাহা নুনযতম নির্বাহী প্রকৌশলীর দ্বারা প্রত্যায়ন করিতে হইবে </b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->

						<div class="card">
							<div class="card-header">
								<button class="btn btn-primary" >button</button>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table id="" class="table table-bordered table-striped">
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
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>Trident</td>
											<td>Internet</td>
											<td>Win 95+</td>
											<td>Win 95+</td>
											<td> 4</td>
											<td>X</td>
											<td>X</td>
											<td> 4</td>
											<td><a href="" class="btn btn-danger"> Remove</a></td>
										</tr>

									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.card-body -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>১০। অন্য কোন সরকারী/আধাসরকারী ও শ্বায়ত্বসাশিত সংস্থায় তালিকাভুক্ত
							থাকিলে তাহার সনদের সত্যায়িত আলোকলিপি সংযুক্ত করিতে হইবে  </b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->

						<div class="card">
							<div class="card-header">
								<button class="btn btn-primary" >button</button>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table id="" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th id="test">ক্রমিক নং </th>
											<th>দপ্তরের নাম  </th>
											<th>তালিকাভুক্তির শ্রেণী</th>
											<th>আর্থিক ক্ষমতা </th>
											<th>মেয়াদ</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>Trident</td>
											<td>Internet</td>
											<td>Win 95+</td>
											<td> 4</td>
											<td>X</td>
											<td><a href="" class="btn btn-danger"> Remove</a></td>
										</tr>

									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.card-body -->

					<!-- Horizontal Form -->
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title"><b>১১। বিগত ৫ বছরে যে সমস্ত কাজ ক্রমিক নং ১০ এ তালিকাভুক্ত প্রতিষ্ঠান সন্তোষজনকভাবে সুসম্পন্ন করিয়েছেন তাহার তালিকা নিম্নের ছক অনুসারে প্রদান করিতে হইবে এবং কারযাদেশ ও কারয সম্পাদনের সত্যায়িত কপি সনযোজন করিতে হইবে </b></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->

						<div class="card">
							<div class="card-header">
								<button class="btn btn-primary" >button</button>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table id="" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th id="test">ক্রমিক নং </th>
											<th>আরম্ভের তারিখ </th>
											<th>সমাপ্তির তারিখ </th>
											<th>কাজের নাম, দপ্তরের নাম ও অবস্থান </th>
											<th>চূড়ান্ত বিলের পরিমান ( টাকায়)</th>
											<th>মন্তব্য</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>Trident</td>
											<td>Internet</td>
											<td>Win 95+</td>
											<td>X</td>
											<td>X</td>
											<td> 4</td>
											<td><a href="" class="btn btn-danger"> Remove</a></td>
										</tr>

									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.card-body -->

				</div>
				<!-- /.card -->		
				<button type="submit" class="btn btn-primary"> Submit</button>

			</div>

		</section>
		<!-- /.content -->



		<!-- Horizontal Form -->
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title"><b>১১। বিগত ৫ বছরে যে সমস্ত কাজ ক্রমিক নং ১০ এ তালিকাভুক্ত প্রতিষ্ঠান সন্তোষজনকভাবে সুসম্পন্ন করিয়েছেন তাহার তালিকা নিম্নের ছক অনুসারে প্রদান করিতে হইবে এবং কারযাদেশ ও কারয সম্পাদনের সত্যায়িত কপি সনযোজন করিতে হইবে </b></h3>
			</div>
			<!-- /.card-header -->
			<script>
				function addRow() {
					var table = document.getElementById('myTable');
            //var row = document.getElementById("myTable");
            var x = table.insertRow(0);
            var e = table.rows.length-1;
            var l = table.rows[e].cells.length;
            //x.innerHTML = "&nbsp;";

            for (var c=0, m=l; c < m; c++) {
            	table.rows[0].insertCell(c);
            	table.rows[0].cells[c].innerHTML = "&nbsp;&nbsp;";
            }
        }



        function deleteRow() {
        	document.getElementById("myTable").deleteRow(0);
        }


    </script>
    <!-- form start -->
    <div class="card">
    	<div class="card-header">
    		<button type="button" value="row +" onClick="addRow()" class="btn btn-primary" >button</button>

    	</div>
    	<!-- /.card-header -->
    	<div class="card-body">
    		<table id="myTable" class="table table-bordered table-striped">
    			<thead>
    				<tr>
    					<th id="test">ক্রমিক নং </th>
    					<th>আরম্ভের তারিখ </th>
    					<th>সমাপ্তির তারিখ </th>
    					<th>কাজের নাম, দপ্তরের নাম ও অবস্থান </th>
    					<th>চূড়ান্ত বিলের পরিমান ( টাকায়)</th>
    					<th>মন্তব্য</th>
    					<th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr >
    					<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp; 		
    						<input type="file" class="form-control" id="#" placeholder="ট্রেড লাইসেন্স ">
    					</td>

    					<td>X</td>
    					<td>X</td>
    					<td> 4</td>
    					<td><a href="" class="btn btn-danger"> Remove</a></td>
    				</tr>

    			</tbody>
    		</table>
    	</div>
    	<!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.card-body -->










</div>
<!-- /.content-wrapper -->








@endsection

<?php $__env->startSection('title','Renewal  '); ?>
<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>বাৎসরিক তালিকাভুক্তি নবায়ন ফরম</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"> Renewal </li>
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
						<form>
							<div class="card-body">

								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputEmail1">প্রতিষ্ঠানের  নাম</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->institution); ?>" disabled>
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">মালিকের নাম </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->name); ?>" disabled>
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">জাতীয় পরিচয়পত্র নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->nid_no); ?>" disabled>
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-md-12">
										<label for="exampleInputEmail1">প্রতিষ্ঠানের ঠিকানা</label>
										<textarea class="form-control" rows="2" placeholder="প্রতিষ্ঠানের ঠিকানা "></textarea>
									</div>
								</div>


								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputEmail1">মোবাইল নং</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="মোবাইল নং">
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">ফোন নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="ফোন নং">
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">ফ্যাক্স নং</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="ফ্যাক্স নং">
									</div>
								</div>

								<div class="form-group row">									
									<div class="col-md-5">
										<label for="exampleInputEmail1">ই-মেইল  </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="ই-মেইল ">
									</div>
									<div class="col-md-7">
										<label for="exampleInputEmail1">ওয়েব সাইটের ঠিকানা  </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="ওয়েব সাইটের ঠিকানা ......  ">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputFile">বিদ্যুৎ কন্ট্রাকটরী সনদ (ই/এম এর ক্ষেত্রে )</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="exampleInputFile">
												<label class="custom-file-label" for="exampleInputFile">Choose file</label>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<label for="exampleInputFile">বিদ্যুৎ সুপারভাইজারী সনদ (ই/এম এর ক্ষেত্রে )</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="exampleInputFile">
												<label class="custom-file-label" for="exampleInputFile">Choose file</label>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<label for="exampleInputFile">নবায়নকৃত ট্রেড লাইসেন্সের সত্যায়িত কপি  </label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="exampleInputFile">
												<label class="custom-file-label" for="exampleInputFile">Choose file</label>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-5">
										<label for="exampleInputEmail1">টিন নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="টিন নং ">
									</div>
									<div class="col-md-7">
										<label for="exampleInputEmail1">সর্বশেষ আয়কর সনদের সত্যায়িত কপি  </label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="exampleInputFile">
												<label class="custom-file-label" for="exampleInputFile">Choose file</label>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-5">
										<label for="exampleInputEmail1">ব্যাংক হিসাব নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="ব্যাংক হিসাব নং ">
									</div>
									<div class="col-md-7">
										<label for="exampleInputEmail1">ব্যাংক ঠিকানা  </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="ব্যাংক ঠিকানা ">
									</div>
								</div>


								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputEmail1">গত বছর নবায়নের রসিদ নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="রসিদ নং">
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">গত বছর নবায়নের তারিখ </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="তারিখ">
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">গত বছর নবায়নের কপি  </label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="exampleInputFile">
												<label class="custom-file-label" for="exampleInputFile">Choose file</label>
											</div>
										</div>
									</div>
								</div>


								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputEmail1">যে বছরের জন্য নবায়নের আবেদন </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="আবেদন সাল ">
									</div>
								</div>

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
<!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caab\resources\views/admin/renewal/create.blade.php ENDPATH**/ ?>
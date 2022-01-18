
<?php $__env->startSection('title','Affidavit '); ?>
<?php $__env->startSection('content'); ?>

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

	<?php if(Session::get('fail')): ?>
	<div class="alert alert-danger">
		<?php echo e(Session::get('fail')); ?>

	</div>
	<?php endif; ?>

	<?php if(Session::get('success')): ?>
	<div class="alert alert-success">
		<?php echo e(Session::get('success')); ?>

	</div>
	<?php endif; ?>


	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<!-- form start -->
						<form action="<?php echo e(route('affidavit.store')); ?> " method="post" >

							<?php echo csrf_field(); ?>
							<div class="card-body">

								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputEmail1">নাম</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->name); ?>" disabled>
									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">পিতার নাম </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->father_name); ?>" disabled>
									</div>
									<div class="col-md-4">
										<label for="exampleInputFile">মাতার নাম </label>
										<div class="input-group">
											<div class="custom-file">									
												<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->mother_name); ?>" disabled>
											</div>
										</div>
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-md-3">
										<label for="exampleInputEmail1">বর্তমান ঠিকানাঃ গ্রাম/রাস্তা</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->present_village); ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">ডাকঘর </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->present_post); ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">থানা </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->present_upazila); ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">জেলা </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->present_zila); ?>" disabled>
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-md-3">
										<label for="exampleInputEmail1">স্থায়ী ঠিকানাঃ গ্রাম/রাস্তা</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->parmanent_village); ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">ডাকঘর </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->parmanent_post); ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">থানা </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->parmanent_upazila); ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">জেলা </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->parmanent_zila); ?>" disabled>
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-md-3">
										<label for="exampleInputEmail1">বয়স</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->age); ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">পেশা </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->occupation); ?>" disabled>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>ধর্ম</label>
											<select name="religion" class="form-control select2" style="width: 100%;" disabled>
												<?php if($LoggedUserInfo->religion == 1): ?>
												<option value="1" selected="selected">ইসলাম</option>
												<option value="2">হিন্দু</option>
												<option value="3">বৌদ্ধ</option>
												<option value="4">খ্রিস্টান</option>
												<option value="5">অন্যান্য</option>
												<?php elseif($LoggedUserInfo->religion == 2): ?>
												<option value="1">ইসলাম</option>
												<option value="2" selected="selected">হিন্দু</option>
												<option value="3">বৌদ্ধ</option>
												<option value="4">খ্রিস্টান</option>
												<option value="5">অন্যান্য</option>
												<?php elseif($LoggedUserInfo->religion == 3): ?>
												<option value="1">ইসলাম</option>
												<option value="2">হিন্দু</option>
												<option value="3"  selected="selected">বৌদ্ধ</option>
												<option value="4">খ্রিস্টান</option>
												<option value="5">অন্যান্য</option>
												<?php elseif($LoggedUserInfo->religion == 4): ?>
												<option value="1">ইসলাম</option>
												<option value="2">হিন্দু</option>
												<option value="3">বৌদ্ধ</option>
												<option value="4" selected="selected">খ্রিস্টান</option>
												<option value="5">অন্যান্য</option>
												<?php elseif($LoggedUserInfo->religion == 5): ?>
												<option value="1">ইসলাম</option>
												<option value="2">হিন্দু</option>
												<option value="3">বৌদ্ধ</option>
												<option value="4">খ্রিস্টান</option>
												<option value="5" selected="selected">অন্যান্য</option>
												<?php endif; ?>
											</select>
										</div>									
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>জাতীয়তা</label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->nationality); ?>" disabled>
											
										</div> 									
									</div>
								</div>

								<small>প্রতিষ্ঠানিক তথ্যাদি </small><hr>



								
								<div class="form-group row">
									<div class="col-md-4">
										<label for="exampleInputEmail1">আয়কর সনদ</label>
										<input type="text" name="income_tax" class="form-control" id="exampleInputEmail1" placeholder="আয়কর সনদ">
										<span class="text-danger"> <?php $__errorArgs = ['income_tax'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 

									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">ভ্যাট নং </label>
										<input type="text" name="vat_no" class="form-control" id="exampleInputEmail1" placeholder="ভ্যাট নং">       
										<span class="text-danger"> <?php $__errorArgs = ['vat_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 

									</div>
									<div class="col-md-4">
										<label for="exampleInputEmail1">জাতীয় পরিচয়পত্র নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->nid_no); ?>" disabled>
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-md-5">
										<label for="exampleInputEmail1">ব্যাংক হিসাব নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->bank_account); ?>" disabled>
									</div>
									<div class="col-md-7">
										<label for="exampleInputEmail1">ব্যাংক ঠিকানা  </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->bank_address); ?>" disabled>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-3">
										<label for="exampleInputEmail1">মোবাইল নং</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->mobile_no); ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">ফোন নং </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->phone_no); ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="exampleInputEmail1">ই-মেইল  </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->email); ?>" disabled>
									</div>

									<div class="col-md-3">
										<label for="exampleInputEmail1">ফ্যাক্স নং  </label> <small style="color: blue;"> (যদি থাকে) </small>
										<span class="text-danger"> <?php $__errorArgs = ['fax_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
										<input type="text" name="fax_no" class="form-control" id="exampleInputEmail1" placeholder="<?php echo e($LoggedUserInfo->fax_no); ?>" disabled>
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
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caab\resources\views/admin/affidavit/create.blade.php ENDPATH**/ ?>
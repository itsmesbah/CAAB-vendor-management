
<?php $__env->startSection('title','Profile '); ?>
<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>প্রোফাইল</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">User Profile</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">

					<!-- Profile Image -->
					<div class="card card-primary card-outline">
						<div class="card-body box-profile">
							<div class="text-center">
								<img class="profile-user-img img-fluid img-circle"
								src="<?php echo e(url('public/images/users', $LoggedUserInfo->image)); ?>"
								alt="User profile picture">
							</div>

							<h3 class="profile-username text-center"><?php echo e($LoggedUserInfo->name); ?></h3>
							<p class="text-muted text-center"><?php echo e($LoggedUserInfo->occupation); ?></p>

							<ul class="list-group list-group-unbordered mb-3">

								<li class="list-group-item">
									<b>ই- মেইল</b> <a class="float-right"><?php echo e($LoggedUserInfo->email); ?></a>
								</li>
								<li class="list-group-item">
									<b>মোবাইল নং </b> <a class="float-right"><?php echo e($LoggedUserInfo->mobile_no); ?></a>
								</li>
								<li class="list-group-item">
									<b>বয়স</b> <a class="float-right"><?php echo e($LoggedUserInfo->age); ?></a>
								</li>	
								<li class="list-group-item">
									<div class="text-center">
										<img class="img-fluid img-square"
										src="<?php echo e(url('public/images/users', $LoggedUserInfo->signature)); ?>"alt="User profile picture">
									</div>
								</li>
							</ul>

							<?php if($LoggedUserInfo->status == 1): ?>
							<span class="btn btn-primary btn-block"><b> সচল একাউন্ট </b></span>
							<?php else: ?>
							<span class="btn btn-danger btn-block"><b> বন্ধ একাউন্ট </b></span>
							<?php endif; ?>
							<a href="<?php echo e(route('login.logout')); ?>" class="btn btn-danger btn-block"><b> লগ আউট  </b></a>

						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

					<!-- About Me Box -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">আমার সম্পর্কে</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<strong><i class="fas fa-building mr-1"></i> প্রতিষ্ঠান</strong>

							<p class="text-muted">
								<?php echo e($LoggedUserInfo->institution); ?>

							</p>

							<hr>

							<strong><i class="fas fa-map-marker-alt mr-1"></i> ঠিকানা </strong>

							<p class="text-muted"><?php echo e($LoggedUserInfo->institution_address); ?></p>

							<hr>

							<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

							<p class="text-muted">
								<span class="tag tag-danger">UI Design</span>
								<span class="tag tag-success">Coding</span>
								<span class="tag tag-info">Javascript</span>
								<span class="tag tag-warning">PHP</span>
								<span class="tag tag-primary">Node.js</span>
							</p>

							<hr>

							<strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

				</div>

				<!-- /.col -->
				<div class="col-md-9">
					<div class="card">
						<div class="card-header p-2">
							<ul class="nav nav-pills">
								<li class="nav-item"><a class="nav-link" href="#edit_profile" data-toggle="tab">প্রোফাইল পরিবর্তন</a></li>
								<li class="nav-item"><a class="nav-link active" href="#change_password" data-toggle="tab">পাসওয়ার্ড পরিবর্তন </a></li>
								<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">প্রতিষ্ঠানিক তথ্যাদি পরিবর্তন </a></li>
							</ul>
						</div>
						<!-- /.card-header -->


						<div class="card-body">
							<div class="tab-content">
								<div class="tab-pane" id="edit_profile">









									<!-- form start -->
									<form class="form-horizontal" action="<?php echo e(route('profile.update', $LoggedUserInfo->id)); ?> " method="POST" enctype="multipart/form-data"  >
										<?php echo csrf_field(); ?>
										<?php echo method_field('PUT'); ?>

										<div class="card-body">

											<div class="form-group row">


												<div class="col-md-4">
													<label for="exampleInputEmail1">নাম</label>
													<span class="text-danger"> <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 

													<input type="text" class="form-control" name="name" value="<?php echo e($LoggedUserInfo->name); ?>" placeholder="নাম " >
												</div>


												<div class="col-md-4">													
													<label for="exampleInputEmail1">পিতার নাম </label>
													<span class="text-danger"> <?php $__errorArgs = ['father_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="father_name" value="<?php echo e($LoggedUserInfo->father_name); ?>" class="form-control" id="exampleInputEmail1" placeholder="পিতার নাম ">
												</div>




												<div class="col-md-4">
													<label for="exampleInputFile">মাতার নাম </label>
													<span class="text-danger"> <?php $__errorArgs = ['mother_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<div class="input-group">
														<div class="custom-file">                 
															<input type="text" name="mother_name" value="<?php echo e($LoggedUserInfo->mother_name); ?>" class="form-control" id="exampleInputEmail1" placeholder="মাতার নাম ">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group row">
												<div class="col-md-3">
													<label for="exampleInputEmail1">বর্তমান ঠিকানাঃ গ্রাম/রাস্তা</label>
													<span class="text-danger"> <?php $__errorArgs = ['present_village'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="present_village" value="<?php echo e($LoggedUserInfo->present_village); ?>" class="form-control" id="exampleInputEmail1" placeholder="গ্রাম/রাস্তা">
												</div>
												<div class="col-md-3">
													<label for="exampleInputEmail1">ডাকঘর </label>
													<span class="text-danger"> <?php $__errorArgs = ['present_post'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="present_post" value="<?php echo e($LoggedUserInfo->present_post); ?>" class="form-control" id="exampleInputEmail1" placeholder="ডাকঘর">
												</div>
												<div class="col-md-3">
													<label for="exampleInputEmail1">থানা </label>
													<span class="text-danger"> <?php $__errorArgs = ['present_upazila'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="present_upazila" value="<?php echo e($LoggedUserInfo->present_upazila); ?>" class="form-control" id="exampleInputEmail1" placeholder="থানা">
												</div>
												<div class="col-md-3">
													<label for="exampleInputEmail1">জেলা </label>
													<span class="text-danger"> <?php $__errorArgs = ['present_zila'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="present_zila" value="<?php echo e($LoggedUserInfo->present_zila); ?>" class="form-control" id="exampleInputEmail1" placeholder="জেলা">
												</div>
											</div>


											<div class="form-group row">
												<div class="col-md-3">
													<label for="exampleInputEmail1">স্থায়ী ঠিকানাঃ গ্রাম/রাস্তা</label>
													<span class="text-danger"> <?php $__errorArgs = ['parmanent_village'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="parmanent_village" value="<?php echo e($LoggedUserInfo->parmanent_village); ?>" class="form-control" id="exampleInputEmail1" placeholder="গ্রাম/রাস্তা">
												</div>
												<div class="col-md-3">
													<label for="exampleInputEmail1">ডাকঘর </label>
													<span class="text-danger"> <?php $__errorArgs = ['parmanent_post'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="parmanent_post" value="<?php echo e($LoggedUserInfo->parmanent_post); ?>" class="form-control" id="exampleInputEmail1" placeholder="ডাকঘর">
												</div>
												<div class="col-md-3">
													<label for="exampleInputEmail1">থানা </label>
													<span class="text-danger"> <?php $__errorArgs = ['parmanent_upazila'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="parmanent_upazila" value="<?php echo e($LoggedUserInfo->parmanent_upazila); ?>" class="form-control" id="exampleInputEmail1" placeholder="থানা">
												</div>
												<div class="col-md-3">
													<label for="exampleInputEmail1">জেলা </label>
													<span class="text-danger"> <?php $__errorArgs = ['parmanent_zila'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="parmanent_zila" value="<?php echo e($LoggedUserInfo->parmanent_zila); ?>" class="form-control" id="exampleInputEmail1" placeholder="জেলা">
												</div>
											</div>


											<div class="form-group row">
												<div class="col-md-4">
													<label for="exampleInputEmail1">বয়স</label>
													<span class="text-danger"> <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="age" value="<?php echo e($LoggedUserInfo->age); ?>" class="form-control" id="exampleInputEmail1" placeholder="বয়স">
												</div>
												<div class="col-md-4">
													<label for="exampleInputEmail1">পেশা </label>
													<span class="text-danger"> <?php $__errorArgs = ['occupation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" name="occupation" value="<?php echo e($LoggedUserInfo->occupation); ?>" class="form-control" id="exampleInputEmail1" placeholder="পেশা">
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>ধর্ম</label>
														<select name="religion" class="form-control select2" style="width: 100%;">
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
											</div>

											<div class="form-group row">
												<div class="col-md-7">
													<label for="exampleInputEmail1">জাতীয় পরিচয়পত্র নং </label>
													<span class="text-danger"> <?php $__errorArgs = ['nid_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
													<input type="text" class="form-control" name="nid_no" value="<?php echo e($LoggedUserInfo->nid_no); ?>" placeholder="জাতীয় পরিচয়পত্র নং">
												</div>

												<div class="col-md-5">
													<div class="form-group">
														<label>জাতীয়তা</label>
														<span class="text-danger"> <?php $__errorArgs = ['nid_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
														<input type="text" class="form-control" id="exampleInputEmail1" placeholder="জাতীয়তা" value="<?php echo e($LoggedUserInfo->nationality); ?>">
													</div>                  
												</div>
											</div>



											<div class="form-group row">
												<div class="col-md-7">
													<label for="image">ছবি </label><br>
													<img class="profile-user-img img-fluid img-square"
													src="<?php echo e(url('public/images/users', $LoggedUserInfo->image)); ?>"
													alt="User profile picture">
													<input type="file"  value="<?php echo e($LoggedUserInfo->image); ?>" class="form-control" name="image" id="image">
												</div>

												<div class="col-md-5">
													<label for="signature" >স্বাক্ষর </label><br>
													<img class="img-fluid img-square"
													src="<?php echo e(url('public/images/users', $LoggedUserInfo->signature)); ?>"alt="User profile picture">
													<input type="file" value="<?php echo e($LoggedUserInfo->signature); ?>" class="form-control" name="signature" id="signature">
												</div>
											</div>



										</div>
										<!-- /.card-body -->

										<div class="card-footer">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</form>
















								</div>
								<!-- /.tab-pane -->
								<div class="active tab-pane" id="change_password">

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

									<!-- The change_password -->
									<form class="form-horizontal" action="<?php echo e(route('password.update', $LoggedUserInfo->id)); ?> " method="POST" >
										<?php echo csrf_field(); ?>
										<?php echo method_field('PUT'); ?>
										<div class="form-group row">
											<div class="col-sm-10">
												<input type="hidden" class="form-control" name="email" selected value="<?php echo e($LoggedUserInfo->email); ?>" id="email" placeholder="Email">
											</div>
										</div>
										<div class="form-group row">
											<label for="password" class="col-sm-2 col-form-label">পাসওয়ার্ড </label>
											<div class="col-sm-10">
												<input type="password" class="form-control" name="password" id="password" placeholder="পাসওয়ার্ড">
											</div>
										</div>

										<div class="form-group row">
											<label for="new_password" class="col-sm-2 col-form-label">নতুন পাসওয়ার্ড </label>
											<div class="col-sm-10">
												<input type="password" class="form-control" name="new_password" id="new_password" placeholder=" নতুন পাসওয়ার্ড ">
											</div>
										</div>

										<div class="form-group row">
											<label for="new_confirm_password" class="col-sm-2 col-form-label">নতুন পাসওয়ার্ড পুনরায় টাইপ করুন </label>
											<div class="col-sm-10">
												<input type="password" class="form-control" name="new_confirm_password" id="new_confirm_password" placeholder="নতুন পাসওয়ার্ড পুনরায় টাইপ করুন " value="<?php echo e(old('new_confirm_password')); ?>">
											</div>
											<span class="text-danger"> <?php $__errorArgs = ['new_confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

										</div>

										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->

								<div class="tab-pane" id="settings">


									<form class="form-horizontal" action="<?php echo e(route('institution.update', $LoggedUserInfo->id)); ?> " method="POST" >
										
										<?php echo csrf_field(); ?>
										<?php echo method_field('PUT'); ?>

										<div class="form-group row">
											<div class="col-md-4">
												<label for="exampleInputEmail1">প্রতিষ্ঠানের নাম </label>
												<span class="text-danger"> <?php $__errorArgs = ['institution'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
												<input type="text" class="form-control" name="institution" value="<?php echo e($LoggedUserInfo->institution); ?>" placeholder="প্রতিষ্ঠানের নাম">
											</div>
											<div class="col-md-8">
												<label for="exampleInputEmail1">প্রতিষ্ঠানের ঠিকানা </label>
												<span class="text-danger"> <?php $__errorArgs = ['institution_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
												<input type="text" name="institution_address" value="<?php echo e($LoggedUserInfo->institution_address); ?>" class="form-control" id="exampleInputEmail1" placeholder="প্রতিষ্ঠানের ঠিকানা">
											</div>
										</div>


										<div class="form-group row">
											<div class="col-md-5">
												<label for="exampleInputEmail1">ব্যাংক হিসাব নং </label>
												<span class="text-danger"> <?php $__errorArgs = ['bank_account'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
												<input type="text" name="bank_account" value="<?php echo e($LoggedUserInfo->bank_account); ?>" class="form-control" id="exampleInputEmail1" placeholder="ব্যাংক হিসাব নং ">
											</div>
											<div class="col-md-7">
												<label for="exampleInputEmail1">ব্যাংক ঠিকানা  </label>
												<span class="text-danger"> <?php $__errorArgs = ['bank_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
												<input type="text" name="bank_address" value="<?php echo e($LoggedUserInfo->bank_address); ?>" class="form-control" id="exampleInputEmail1" placeholder="ব্যাংক ঠিকানা ">
											</div>
										</div>

										<div class="form-group row">
											<div class="col-md-4">
												<label for="exampleInputEmail1">মোবাইল নং</label>
												<span class="text-danger"> <?php $__errorArgs = ['mobile_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
												<input type="text" name="mobile_no" value="<?php echo e($LoggedUserInfo->mobile_no); ?>" class="form-control" id="exampleInputEmail1" placeholder="মোবাইল নং">
											</div>
											<div class="col-md-4">
												<label for="exampleInputEmail1">ফোন নং </label>
												<span class="text-danger"> <?php $__errorArgs = ['phone_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
												<input type="text" name="phone_no" value="<?php echo e($LoggedUserInfo->phone_no); ?>" class="form-control" id="exampleInputEmail1" placeholder="ফোন নং">
											</div>
											<div class="col-md-4">
												<label for="exampleInputEmail1">ফ্যাক্স নং  </label> <small style="color: blue;"> (যদি থাকে) </small>
												<span class="text-danger"> <?php $__errorArgs = ['fax_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
												<input type="text" name="fax_no" value="<?php echo e($LoggedUserInfo->fax_no); ?>" class="form-control" id="exampleInputEmail1" placeholder="ফ্যাক্স নং   ">
											</div>
										</div>

										<div class="card-footer">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</form>



								</div>


								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div><!-- /.card-body -->
					</div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caab\resources\views/admin/profile.blade.php ENDPATH**/ ?>
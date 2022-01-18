
<?php $__env->startSection('title','Profile '); ?>
<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Profile</h1>
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


							<ul class="list-group list-group-unbordered mb-3">
								<li class="list-group-item">
									<p class="text-muted text-center"><?php echo e($LoggedUserInfo->email); ?></p>
								</li>
								<li class="list-group-item">
									<div class="text-center">
										<img class="img-fluid img-square"
										src="<?php echo e(url('public/images/users', $LoggedUserInfo->signature)); ?>"alt="User profile picture">
									</div>
								</li>
							</ul>

							<?php if($LoggedUserInfo->status == 1): ?>
							<span class="btn btn-primary btn-block"><b> Activated </b></span>
							<?php else: ?>
							<span class="btn btn-danger btn-block"><b> Deactivated </b></span>
							<?php endif; ?>
							<a href="<?php echo e(route('login.logout')); ?>" class="btn btn-danger btn-block"><b> LogOut </b></a>

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
								<li class="nav-item"><a class="nav-link" href="#edit_profile" data-toggle="tab">Edit profile</a></li>
								<li class="nav-item"><a class="nav-link active" href="#change_password" data-toggle="tab">Change Password</a></li>
								<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
							</ul>
						</div><!-- /.card-header -->
						<div class="card-body">
							<div class="tab-content">
								<div class="tab-pane" id="edit_profile">

									<form class="form-horizontal" action="<?php echo e(route('profile.update', $LoggedUserInfo->id)); ?> " method="POST" enctype="multipart/form-data"  >
										<?php echo csrf_field(); ?>
										<?php echo method_field('PUT'); ?>

										<div class="form-group row">
											<label for="name" class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" value="<?php echo e($LoggedUserInfo->name); ?>" name="name" id="name" placeholder="Name">
											</div>
										</div>

										<div class="form-group row">
											<label for="image" class="col-sm-2 col-form-label">Profile Picture </label>
											<div class="col-sm-10">
												<img class="profile-user-img img-fluid img-square"
												src="<?php echo e(url('public/images/users', $LoggedUserInfo->image)); ?>"
												alt="User profile picture">
												<input type="file"  value="<?php echo e($LoggedUserInfo->image); ?>" class="form-control" name="image" id="image">
											</div>
										</div>

										<div class="form-group row">
											<label for="signature" class="col-sm-2 col-form-label">Signature </label>
											<div class="col-sm-10">
												<img class="img-fluid img-square"
												src="<?php echo e(url('public/images/users', $LoggedUserInfo->signature)); ?>"alt="User profile picture">
												<input type="file" value="<?php echo e($LoggedUserInfo->signature); ?>" class="form-control" name="signature" id="signature">
											</div>
										</div>

										
										
										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
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
											<label for="password" class="col-sm-2 col-form-label">Password </label>
											<div class="col-sm-10">
												<input type="password" class="form-control" name="password" id="password" placeholder="Password">
											</div>
										</div>

										<div class="form-group row">
											<label for="new_password" class="col-sm-2 col-form-label">New Password </label>
											<div class="col-sm-10">
												<input type="password" class="form-control" name="new_password" id="new_password" placeholder=" New Password ">
											</div>
										</div>

										<div class="form-group row">
											<label for="new_confirm_password" class="col-sm-2 col-form-label">Retype New Password </label>
											<div class="col-sm-10">
												<input type="password" class="form-control" name="new_confirm_password" id="new_confirm_password" placeholder="Retype New Password " value="<?php echo e(old('new_confirm_password')); ?>">
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
									<form class="form-horizontal">
										<div class="form-group row">
											<label for="inputName" class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="inputName" placeholder="Name">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="inputEmail" placeholder="Email">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputName2" class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputName2" placeholder="Name">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
											<div class="col-sm-10">
												<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
											</div>
										</div>
										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<div class="checkbox">
													<label>
														<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
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
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bcaa\resources\views/admin/profile.blade.php ENDPATH**/ ?>
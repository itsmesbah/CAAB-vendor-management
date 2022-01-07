@extends('layouts.dashboard')
@section('title','Profile ')
@section('content')

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
								src="{{ url('public/images/users', $LoggedUserInfo->image) }}"
								alt="User profile picture">
							</div>

							<h3 class="profile-username text-center">{{ $LoggedUserInfo->name }}</h3>


							<ul class="list-group list-group-unbordered mb-3">
								<li class="list-group-item">
									<p class="text-muted text-center">{{ $LoggedUserInfo->email }}</p>
								</li>
								<li class="list-group-item">
									<div class="text-center">
										<img class="img-fluid img-square"
										src="{{ url('public/images/users', $LoggedUserInfo->signature) }}"alt="User profile picture">
									</div>
								</li>
							</ul>

							@if($LoggedUserInfo->status == 1)
							<span class="btn btn-primary btn-block"><b> Activated </b></span>
							@else
							<span class="btn btn-danger btn-block"><b> Deactivated </b></span>
							@endif
							<a href="{{ route('login.logout')}}" class="btn btn-danger btn-block"><b> LogOut </b></a>

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

									<form class="form-horizontal" action="{{ route('profile.update', $LoggedUserInfo->id)}} " method="POST" enctype="multipart/form-data"  >
										@csrf
										@method('PUT')

										<div class="form-group row">
											<label for="name" class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" value="{{ $LoggedUserInfo->name }}" name="name" id="name" placeholder="Name">
											</div>
										</div>

										<div class="form-group row">
											<label for="institution" class="col-sm-2 col-form-label">Institution Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" value="{{ $LoggedUserInfo->institution }}" name="institution" id="institution" placeholder="Institution Name">
											</div>
										</div>


										<div class="form-group row">
											<label for="image" class="col-sm-2 col-form-label">Profile Picture </label>
											<div class="col-sm-10">
												<img class="profile-user-img img-fluid img-square"
												src="{{ url('public/images/users', $LoggedUserInfo->image) }}"
												alt="User profile picture">
												<input type="file"  value="{{ $LoggedUserInfo->image }}" class="form-control" name="image" id="image">
											</div>
										</div>

										<div class="form-group row">
											<label for="signature" class="col-sm-2 col-form-label">Signature </label>
											<div class="col-sm-10">
												<img class="img-fluid img-square"
												src="{{ url('public/images/users', $LoggedUserInfo->signature) }}"alt="User profile picture">
												<input type="file" value="{{ $LoggedUserInfo->signature }}" class="form-control" name="signature" id="signature">
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

									<!-- The change_password -->
									<form class="form-horizontal" action="{{ route('password.update', $LoggedUserInfo->id)}} " method="POST" >
										@csrf
										@method('PUT')
										<div class="form-group row">
											<div class="col-sm-10">
												<input type="hidden" class="form-control" name="email" selected value="{{ $LoggedUserInfo->email }}" id="email" placeholder="Email">
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
												<input type="password" class="form-control" name="new_confirm_password" id="new_confirm_password" placeholder="Retype New Password " value="{{ old('new_confirm_password')}}">
											</div>
											        <span class="text-danger"> @error('new_confirm_password'){{ $message }} @enderror</span>

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

@endsection
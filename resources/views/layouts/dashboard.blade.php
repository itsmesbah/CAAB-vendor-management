<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') | {{ Project_name }} </title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="public/admin/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="public/admin/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="public/admin/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="public/admin/plugins/daterangepicker/daterangepicker.css">

 <script src="{{ asset('public/admin/ckeditor/ckeditor.js') }}"></script>

 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">   </script>

 <!-- summernote -->
 <link rel="stylesheet" href="public/admin/plugins/summernote/summernote-bs4.min.css">

 <!-- table row inserting link -->
<!-- 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
 
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="public/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="admin/index3.html" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>

        <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{ route('profile.index')}}" class="dropdown-item">
           <i class="fas fa-user mr-2"></i> Profile
         </a> 
         <div class="dropdown-divider"></div>
         <a href="{{ route('login.logout')}}" class="dropdown-item">
           <i class="fas fa-share mr-2"></i> Logout
         </a>

       </div>
     </li>
   </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="public/images/logo/logo_1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{ Project_name }}  </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ url('public/images/users', $LoggedUserInfo->image) }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
       <a href="{{ route('profile.index')}}" class="d-block">
         {{ $LoggedUserInfo['name'] }}
       </a>
     </div>
   </div>

   <!-- SidebarSearch Form -->
   <div class="form-inline">
     <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
       <button class="btn btn-sidebar">
        <i class="fas fa-search fa-fw"></i>
      </button>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          	with font-awesome or any other icon font library -->


          <!-- 	<li class="nav-item menu-open">
          		<a href="#" class="nav-link active">
          			<i class="nav-icon fas fa-tachometer-alt"></i>
          			<p>
          				Dashboard
          				<i class="right fas fa-angle-left"></i>
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="./index.html" class="nav-link active">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Dashboard v1</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="./index2.html" class="nav-link">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Dashboard v2</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="./index3.html" class="nav-link">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Dashboard v3</p>
          				</a>
          			</li>
          		</ul>
          	</li> -->


          	<li class="nav-item">
          		<a href="{{ route('dashboard.index')}}" class="nav-link">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 ড্যাশবোর্ড
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="{{ route('affidavit')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               হলফনামা
             </p>
           </a>
         </li>

      
       <li class="nav-item">
         <a href="{{ route('application_form')}}" class="nav-link">
          <i class="nav-icon fas fa-box-open"></i>
          <p>
           ঠিকাদার ফরমের আবেদন 
         </p>
       </a>
     </li>


     <li class="nav-item">
       <a href="{{ route('class_app.create') }}" class="nav-link">
        <i class="nav-icon fas fa-pencil-alt"></i>
        <p>
          <!-- শ্রেণী উন্নায়ন আবেদন ফরম --> ভেন্ডর আবেদন 
        </p>
      </a>
    </li>



    <li class="nav-item">
     <a href="{{ route('renewal.create') }}" class="nav-link">
      <i class="nav-icon fas fa-pen-nib"></i>
      <p>
        বাৎসরিক তালিকাভুক্তি নবায়ন ফরম 
      </p>
    </a>
  </li>


</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>



@yield('content')



<footer class="main-footer">
	<strong>Copyright &copy; 2018-2022 <a href="#">Execution</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.1.0
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="public/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="public/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="public/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="public/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="public/admin/plugins/moment/moment.min.js"></script>
<script src="public/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="public/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/admin/dist/js/pages/dashboard.js"></script>
</body>
</html>

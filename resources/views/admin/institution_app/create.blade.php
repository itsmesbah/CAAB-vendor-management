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
					<h1>Contractor Form Application </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Contractor Form Application </li>
					</ol>
				</div>


			</div>
		</div><!-- /.container-fluid -->
	</section>

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



               <form class="form-horizontal" action="{{ route('application.store')}} " method="POST" >
                @csrf

                <div class="card-body">
                  <div class="form-group">

                    <p>প্রতি,</p>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp প্রধান প্রকৌশলী </p>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp বাংলাদেশ বেসামরিক বিমান চলাচল কর্তৃপক্ষ </p>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp সদর দপ্তর, কুর্মিটোলা</p>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ঢাকা-১২২৯।</p>

                    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp [মনোযোগঃপ্রশাসনিক কর্মকর্তা, বাংলাদেশ বেসামরিক বিমান চলাচল কর্তৃপক্ষ ]</p>

                    <p> বিষয়ঃ <b>ঠিকাদার তালিকাভূক্ততির ফরমের জন্য আবেদন প্রসঙ্গে ।</b> </p>

                    <p>মহোদয়,</p>

                    <div class="form-group">
                     <textarea class="form-control" name="body" id="editor">
                              বিনীত নিবেদন এই যে, আমি নিম্নস্বাক্ষরকারী দীর্ঘদিন যাবত ঠিকাদারী বযবসার সাথে জড়িত এবং অত্যন্ত সুনাম ও দক্ষতার সাথে বিভিন্ন প্রতিষ্ঠানে কাজ করে যাচ্ছি । এখন আপনার প্রতিষ্ঠানেও ঠিকাদার হিসাবে তালিকাভূক্ত হয়ে কাজ করতে চাই । এ কারনে আপনার প্রতিষ্ঠানে তালিকাভুক্তির জন্য আমার প্রতিষ্ঠানের নামে তালিকাভূক্তি ফরম প্রয়োজন ।

                            এমতাবস্থায়, আমার প্রতিষ্ঠানের নামে একটি ফরম প্রদান করলে জনামের নিকট চিরকৃতজ্ঞ থাকব ।


                     </textarea>

                     <script>
                      CKEDITOR.replace( 'editor' );
                    </script>
                  </div>

                  <div class="float-sm-right"> 
                   <p>আপনার বিশ্বস্ত,<br>{{ $LoggedUserInfo->name }}<br>{{ $LoggedUserInfo->institution }}</p>

                 </div>

               </div>

             </div>

             <!-- /.card-footer -->
             <div class="card-footer">
              <button type="submit" class="btn btn-default"><i class="fas fa-save"></i> Save</button>
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

<?php $__env->startSection('title','Contractor Form Application '); ?>
<?php $__env->startSection('content'); ?>

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
  <?php

  $body = DB::table('contractor_form_applications')
  ->where('contractor_form_applications.user_id', '=',  session('LoggedUser'))
  ->select('contractor_form_applications.*')
  ->first();

  ?>

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



                <form class="form-horizontal" action="<?php echo e(route('application.update', $LoggedUserInfo->id)); ?> " method="POST" >
                  <?php echo csrf_field(); ?> 
                  <?php echo method_field('PUT'); ?>


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
                       <textarea class="form-control" name="body" id="editor1">
                        <?php echo e($body->body); ?>

                      </textarea>

                      <script>
                        CKEDITOR.replace( 'editor1' );
                      </script>
                    </div>




                    <div class="float-sm-right"> 
                      <p>আপনার বিশ্বস্ত,<br><?php echo e($LoggedUserInfo->name); ?><br><?php echo e($LoggedUserInfo->institution); ?></p>

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

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caab\resources\views/admin/application/edit.blade.php ENDPATH**/ ?>
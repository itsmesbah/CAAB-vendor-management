
<?php $__env->startSection('title','Contractor Form Application '); ?>
<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<div class="col-md-10">

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



								<form class="form-horizontal" action="<?php echo e(route('application.update', $LoggedUserInfo->id)); ?> " method="POST" >
									<?php echo csrf_field(); ?> 
									<?php echo method_field('PUT'); ?>


									<div class="card-body">
										<div class="form-group">

											<center><u><p><b>নতুন কপি (জুডিসিয়াল ষ্ট্যাম্পে লিখিত মূল কপি জমা দিতে হবে  )</b></p></u></center>

											<div class="float-sm-right row"> 
												<p><u><b>৩০০/- টাকার নন-জুডিসিয়াল ষ্ট্যাম্পে </b></u></p>

											</div>
											<center><u><p><b><h1>হলফ নামা</h1></b></p></u></center>

										</div>
										<div class="form-group">



											
											<p>
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
												আমি <?php echo e($LoggedUserInfo->name); ?>, 
												পিতা- <?php echo e($LoggedUserInfo->father_name); ?>, 
												মাতা- <?php echo e($LoggedUserInfo->mother_name); ?>,
												স্থায়ী ঠিকানাঃ গ্রাম/রাস্তাঃ <?php echo e($LoggedUserInfo->parmanent_village); ?>, 
												ডাকঘরঃ <?php echo e($LoggedUserInfo->parmanent_post); ?>, 
												থানাঃ <?php echo e($LoggedUserInfo->parmanent_upazila); ?>,
												জেলাঃ <?php echo e($LoggedUserInfo->parmanent_zila); ?>। 

												বর্তমান ঠিকানাঃ গ্রাম/রাস্তাঃ <?php echo e($LoggedUserInfo->present_village); ?>, 
												ডাকঘরঃ <?php echo e($LoggedUserInfo->present_post); ?>, 
												থানাঃ <?php echo e($LoggedUserInfo->present_upazila); ?>, 
												জেলাঃ <?php echo e($LoggedUserInfo->present_zila); ?>। 

												বয়সঃ  <?php echo e($LoggedUserInfo->age); ?>,
												পেশাঃ  <?php echo e($LoggedUserInfo->occupation); ?>, 
												ধর্মঃ 
												<?php if($LoggedUserInfo->religion == 1): ?>
												ইসলাম
												<?php elseif($LoggedUserInfo->religion == 2): ?>
												হিন্দু
												<?php elseif($LoggedUserInfo->religion == 3): ?>
												বৌদ্ধ
												<?php elseif($LoggedUserInfo->religion == 4): ?>
												খ্রিস্টান
												<?php elseif($LoggedUserInfo->religion == 5): ?>
												অন্যান্য
												<?php endif; ?> ,
												<br>
												জাতীয়তাঃ 	
												<?php echo e($LoggedUserInfo->nationality); ?> , এই মর্মে হলফ পূর্বক ঘোষণা করছি যে ,
												<br>

												১। আমি জন্মসূত্রে বাংলাদেশের নাগরিক এবং স্থায়ী বাসিন্দা ।
												<br>
												২। আমি <?php echo e($LoggedUserInfo->name); ?>, আমার বাবসায়িক প্রতিষ্ঠান  <?php echo e($LoggedUserInfo->institution); ?>, এর একমাত্র মালিক এবং স্বত্তাধিকারী। এই প্রতিষ্ঠানের অন্য কোন মালিক বা অংশীদার নাই। ব্যাংক ঋণ খেলাপী লিষ্টে আমার বা আমার প্রতিষ্ঠানের নাম নেই।   

											</p>

											<center><u><p><b>পাতা-২</b></p></u></center>

											<p>৩। নিম্নে আমার প্রতিষ্ঠানের তথ্যাদি দেওয়া হলঃ</p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ক) আয়কর সনদ :  <?php echo e($LoggedUserInfo->income_tax); ?>    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp খ) ভ্যাট নং :  <?php echo e($LoggedUserInfo->vat_no); ?>    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp গ) জাতীয় পরিচয়পত্র নং :  <?php echo e($LoggedUserInfo->nid_no); ?>    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ঘ) ব্যাংক হিসাব নং :  <?php echo e($LoggedUserInfo->bank_account); ?>    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ঙ) ব্যাংক ঠিকানা :  <?php echo e($LoggedUserInfo->bank_address); ?>    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp চ) মোবাইল নং :  <?php echo e($LoggedUserInfo->mobile_no); ?>    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ছ) ফোন নং :  <?php echo e($LoggedUserInfo->phone_no); ?>    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp জ) ফ্যাক্স নং :  <?php echo e($LoggedUserInfo->fax_no); ?>    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp ঝ) ই-মেইল :  <?php echo e($LoggedUserInfo->email); ?>    </p>
											<p>&nbsp&nbsp&nbsp&nbsp&nbsp উপরুক্ত বর্ণনা আমার জ্ঞান ও জানামতে সম্পূর্ণ সত্য ও সঠিক এবং উহাতে আমি স্ব-জ্ঞানে, সুস্থ শরীরে, অন্যের বিনা প্রচরনায় উল্লেখিত বক্তব্য নিজে পড়িয়া, অন্যের দ্বারা পড়াইয়া,    </p>
											<center><u><p><b>পাতা-৩</b></p></u></center>

											<p>ইহার মর্ম বুঝিয়া অদ্য ......... তারিখে নোটারী পাবলিকের কার্যালয়ে উপস্থিত হয়ে নিজ নামে সহি সম্পন্ন করিলাম ।     </p>




											<div class="float-sm-right row"> 
												<center>
													<p><img src="<?php echo e(url('public/images/users', $LoggedUserInfo->signature)); ?>"
														alt="User profile picture"><br>
													হলফকারীর স্বাক্ষর </p>
												</center>
											</div>

										</div>
										<hr>
										


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
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caab\resources\views/admin/affidavit/show.blade.php ENDPATH**/ ?>
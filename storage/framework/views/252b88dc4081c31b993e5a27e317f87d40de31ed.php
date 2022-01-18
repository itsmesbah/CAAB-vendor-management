
<?php $__env->startSection('title','Register '); ?>
<?php $__env->startSection('content'); ?>


<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>রেজিস্ট্রেশন/নিবন্ধন </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><?php echo e(Project_name); ?></li>
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
          <form action="<?php echo e(route('register.store')); ?> " method="post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

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

                  <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="নাম " >
                </div>


                <div class="col-md-4">
                  <label for="exampleInputEmail1">ছবি </label>   
                  <span class="text-danger"> <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 
                  <a href="#"> &nbsp (Must be square )</a>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" value="<?php echo e(old('image')); ?>">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                  </div>
                </div>




                <div class="col-md-4">
                  <label for="exampleInputEmail1">স্বাক্ষর </label>     
                  <span class="text-danger"> <?php $__errorArgs = ['signature'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                  <a href="#"> &nbsp (Must be 300*80 pixel )</a>

                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="signature" value="<?php echo e(old('signature')); ?>">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      <span class="text-danger"> <?php $__errorArgs = ['signature'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-signature"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="form-group row">
               <div class="col-md-6">
                <label for="exampleInputEmail1">পিতার নাম </label>
                <span class="text-danger"> <?php $__errorArgs = ['father_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <input type="text" name="father_name" value="<?php echo e(old('father_name')); ?>" class="form-control" id="exampleInputEmail1" placeholder="পিতার নাম ">
              </div>
              <div class="col-md-6">
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
                    <input type="text" name="mother_name" value="<?php echo e(old('mother_name')); ?>" class="form-control" id="exampleInputEmail1" placeholder="মাতার নাম ">
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
                <input type="text" name="present_village" value="<?php echo e(old('present_village')); ?>" class="form-control" id="exampleInputEmail1" placeholder="গ্রাম/রাস্তা">
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
                <input type="text" name="present_post" value="<?php echo e(old('present_post')); ?>" class="form-control" id="exampleInputEmail1" placeholder="ডাকঘর">
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
                <input type="text" name="present_upazila" value="<?php echo e(old('present_upazila')); ?>" class="form-control" id="exampleInputEmail1" placeholder="থানা">
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
                <input type="text" name="present_zila" value="<?php echo e(old('present_zila')); ?>" class="form-control" id="exampleInputEmail1" placeholder="জেলা">
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
                <input type="text" name="parmanent_village" value="<?php echo e(old('parmanent_village')); ?>" class="form-control" id="exampleInputEmail1" placeholder="গ্রাম/রাস্তা">
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
                <input type="text" name="parmanent_post" value="<?php echo e(old('parmanent_post')); ?>" class="form-control" id="exampleInputEmail1" placeholder="ডাকঘর">
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
                <input type="text" name="parmanent_upazila" value="<?php echo e(old('parmanent_upazila')); ?>" class="form-control" id="exampleInputEmail1" placeholder="থানা">
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
                <input type="text" name="parmanent_zila" value="<?php echo e(old('parmanent_zila')); ?>" class="form-control" id="exampleInputEmail1" placeholder="জেলা">
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
                <input type="text" name="age" value="<?php echo e(old('age')); ?>" class="form-control" id="exampleInputEmail1" placeholder="বয়স">
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
                <input type="text" name="occupation" value="<?php echo e(old('occupation')); ?>" class="form-control" id="exampleInputEmail1" placeholder="পেশা">
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>ধর্ম</label>
                  <select name="religion" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">ইসলাম</option>
                    <option value="2">হিন্দু</option>
                    <option value="3">বৌদ্ধ</option>
                    <option value="4">খ্রিস্টান</option>
                    <option value="5">অন্যান্য</option>
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
                <input type="text" class="form-control" name="nid_no" value="<?php echo e(old('nid_no')); ?>" placeholder="জাতীয় পরিচয়পত্র নং">
              </div>

              <div class="col-md-5">
                <div class="form-group">
                  <label>জাতীয়তা</label>
                  <input type="text" class="form-control" name="nationality" value="<?php echo e(old('nationality')); ?>" placeholder="জাতীয়তা ...">

                </div>                  
              </div>
            </div>

            <small>প্রতিষ্ঠানিক তথ্যাদি </small><hr>




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
                <input type="text" class="form-control" name="institution" value="<?php echo e(old('institution')); ?>" placeholder="প্রতিষ্ঠানের নাম">
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
                <input type="text" name="institution_address" value="<?php echo e(old('institution_address')); ?>" class="form-control" id="exampleInputEmail1" placeholder="প্রতিষ্ঠানের ঠিকানা">
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
                <input type="text" name="bank_account" value="<?php echo e(old('bank_account')); ?>" class="form-control" id="exampleInputEmail1" placeholder="ব্যাংক হিসাব নং ">
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
                <input type="text" name="bank_address" value="<?php echo e(old('bank_address')); ?>" class="form-control" id="exampleInputEmail1" placeholder="ব্যাংক ঠিকানা ">
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
                <input type="text" name="mobile_no" value="<?php echo e(old('mobile_no')); ?>" class="form-control" id="exampleInputEmail1" placeholder="মোবাইল নং">
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
                <input type="text" name="phone_no" value="<?php echo e(old('phone_no')); ?>" class="form-control" id="exampleInputEmail1" placeholder="ফোন নং">
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
                <input type="text" name="fax_no" value="<?php echo e(old('fax_no')); ?>" class="form-control" id="exampleInputEmail1" placeholder="ফ্যাক্স নং   ">
              </div>
            </div>



            <small>নিবন্ধনের তথ্যাদি </small><hr>

            <div class="form-group row">

              <div class="col-md-4">
                <label for="exampleInputEmail1">ই-মেইল  </label>    
                <span class="text-danger"> <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="ই-মেইল">
              </div>
              <div class="col-md-4">
                <label for="exampleInputEmail1">পাসওয়ার্ড </label>
                <span class="text-danger"> <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <input type="password" class="form-control" name="password"  value="<?php echo e(old('password')); ?>" placeholder="পাসওয়ার্ড  ">
              </div>
              <div class="col-md-4">
                <label for="exampleInputEmail1">পাসওয়ার্ড পুনরায় টাইপ করুন  </label>
                <span class="text-danger"> <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <input type="password" class="form-control" name="confirm_password"  value="<?php echo e(old('confirm_password')); ?>" placeholder="পাসওয়ার্ড পুনরায় টাইপ করুন ">
              </div>
            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="login.html" class="text-center">I already have a membership</a>
          </div>
        </form>

      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
</section>











<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\caab\resources\views/admin/register.blade.php ENDPATH**/ ?>
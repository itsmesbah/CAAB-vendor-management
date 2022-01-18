
<?php $__env->startSection('title','Register '); ?>
<?php $__env->startSection('content'); ?>


<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><?php echo e(Project_name); ?></h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?php echo e(route('register.store')); ?> " method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Full name" value="<?php echo e(old('name')); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo e(old('password')); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirm_password" placeholder="Retype password" value="<?php echo e(old('confirm_password')); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>


        <div class="input-group mb-3">
          <label> Profile Picture </label>
          <a href="#"> &nbsp (Must be square )</a>
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="image" placeholder="image" value="<?php echo e(old('image')); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>


        <div class="input-group mb-3">
          <label> Signature </label>
          <a href="#"> &nbsp (Must be 300*80 pixel )</a>
          </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="signature" placeholder="signature" value="<?php echo e(old('signature')); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-signature"></span>
            </div>
          </div>
        </div>
        <span class="text-danger"> <?php $__errorArgs = ['signature'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>


        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
             </label>
           </div>
         </div>
         <!-- /.col -->
         <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



    <a href="login.html" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div><!-- /.card -->
</div>
<!-- /.register-box -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bcaa\resources\views/admin/register.blade.php ENDPATH**/ ?>
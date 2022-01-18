
<?php $__env->startSection('title','Login '); ?>
<?php $__env->startSection('content'); ?>



<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><?php echo e(Project_name); ?></h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php if(Session::get('fail')): ?>
      <div class="alert alert-danger">
        <?php echo e(Session::get('fail')); ?>

      </div>
      <?php endif; ?>



      <form action="<?php echo e(route('login.check')); ?> " method="post" >

        <?php echo csrf_field(); ?>
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

      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



    <p class="mb-1">
      <a href="forgot-password.html">I forgot my password</a>
    </p>
    <p class="mb-0">
      <a href="register.html" class="text-center">Register a new membership</a>
    </p>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.login-box -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bcaa\resources\views/admin/login.blade.php ENDPATH**/ ?>
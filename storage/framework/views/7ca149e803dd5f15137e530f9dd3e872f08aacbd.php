
<?php $__env->startSection('title', 'Term & Conditions'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <br>

  <center>
    <h2>Register </h2>
    <hr>
  </center>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <?php if($errors->any()): ?>
        <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if(Session::has('success')): ?>
        <p><?php echo e(Session::get('success')); ?></p>
    <?php endif; ?>
        <form method="POST" action="<?php echo e(Route('airfpt.mem_postRegister')); ?>" class="px-3 py-3 bg-light">
        <?php echo e(csrf_field()); ?>

        <label for="username">First Name</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-user"></i></span>
            </small>
            <input name="mem_first_name" id="" type="text" class="form-control" required placeholder="First name">
          </div>
          <label for="username">Last Name</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-user"></i></span>
            </small>
            <input name="mem_last_name" id="" type="text" class="form-control" required placeholder="Last name">
          </div>
          <label for="username">Email</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-envelope"></i></span>
            </small>
            <input name="mem_email" id="" type="email" class="form-control" required placeholder="Email">
          </div>
          <label for="username">Username</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-user"></i></span>
            </small>
            <input name="mem_username" id="" type="text" class="form-control" required placeholder="Username">
          </div>
          <label for="username">Password</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-key"></i></span>
            </small>
            <input name="mem_password" id="" type="password" class="form-control" required placeholder="Password">
          </div>
          <label for="username">Phone Number</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-phone"></i></span>
            </small>
            <input name="mem_phone" id="" type="text" class="form-control" required placeholder="Phone number">
          </div>
          <label for="gender">How should we call you?</label>
          <div class="form-group input-group">
            <small class="input-group-prepend">
              <span class="input-group-text text-secondary"><i class="fa fa-user"></i></span>
            </small>
            <input name="mem_title" id="" type="text" class="form-control" required placeholder="Mr/Ms/Mrs">
          </div>
          <div class="form-group input-group">
            <label class="checkbox-inline">
              <input type="checkbox" name="subscribe" value="yes" required> I have read and agreed with the <a href="<?php echo e(Route('airfpt.term_con')); ?>">terms and conditions</a>.
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
      </div>
      <div class="col-md-6">
        <div class="px-3 py-3 bg-light" style="border-style: double;">
          <p>Don't have an account? <a href="<?php echo e(Route('airfpt.mem_register')); ?>">Sign up</a>.</p>
          <p>Already have an account? <a href="<?php echo e(Route('airfpt.mem_login')); ?>">Sign in</a>.</p>
          <p><a href="<?php echo e(Route('airfpt.mem_pass')); ?>">Forgot your password?</a>
          <p><a href="<?php echo e(Route('airfpt.customer_service')); ?>">Help.</a></p>
        </div>
      </div>
    </div>
  </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('airfpt.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/mem_register.blade.php ENDPATH**/ ?>
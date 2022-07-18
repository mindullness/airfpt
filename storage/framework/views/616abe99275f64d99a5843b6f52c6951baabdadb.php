
<?php $__env->startSection('title', 'Member Update'); ?>
<?php $__env->startSection('content'); ?>
<?php if(auth()->guard()->check()): ?>
<div class="container">
  <br>
  <center>
    <h2>Account Update</h2>
    <hr>
  </center>
  <div class="container px-3 py-3 bg-light">
    <div class="card-body">
    <?php if($errors->any()): ?>
        <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
      <div class="card-header">
        <h3 class="card-title">Update Account Information</h3>
      </div>
      <form role="form" action="<?php echo e(Route('airfpt.mem_postUpdate',['airfpt'=>Auth::user()->id])); ?>" method="post"
        enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="card-body">
        <div class="form-group">
            <label for="username">First Name</label>
            <input value="<?php echo e(Auth::user()->first_name); ?>" id="" name="mem_first_name" type="text" class="form-control"
              placeholder="<?php echo e(Auth::user()->first_name); ?>">
          </div>
          <div class="form-group">
            <label for="username">Last Name</label>
            <input value="<?php echo e(Auth::user()->last_name); ?>" id="" name="mem_last_name" type="text" class="form-control"
              placeholder="<?php echo e(Auth::user()->last_name); ?>">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input value="<?php echo e(Auth::user()->username); ?>" id="" name="mem_username" type="text" class="form-control"
              placeholder="<?php echo e(Auth::user()->username); ?>">
          </div>
          <div class="form-group">
            <label for="name">Password</label>
            <input value="" type="password" class="form-control" id="" name="mem_password"
              placeholder="*******">
          </div>
          <div class="form-group">
            <label for="city">Email</label>
            <input value="<?php echo e(Auth::user()->email); ?>" type="text" class="form-control" id="" name="mem_email"
              placeholder="<?php echo e(Auth::user()->password); ?>">
          </div>
          <div class="form-group">
            <label for="city">Phone</label>
            <input value="<?php echo e(Auth::user()->phone); ?>" type="text" class="form-control" id=""
              name="mem_phone" placeholder="<?php echo e(Auth::user()->phone); ?>">
          </div>
          <div class="form-group">
            <label for="city">Title</label>
            <input value="<?php echo e(Auth::user()->title); ?>" type="text" class="form-control" id=""
              name="mem_title" placeholder="<?php echo e(Auth::user()->title); ?>">
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Submit</button>
          <a href="<?php echo e(Route('airfpt.mem_detail')); ?>">Return</a>
        </div>
        <div>
          <a href=""></a>
        </div>
      </form>
    </div>



<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>
<script src="<?php echo e(asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('airfpt.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/mem_update.blade.php ENDPATH**/ ?>
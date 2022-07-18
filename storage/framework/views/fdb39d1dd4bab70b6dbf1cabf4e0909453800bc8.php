
<?php $__env->startSection('title', 'Member Detail'); ?>
<?php $__env->startSection('content'); ?>
<?php if(auth()->guard()->check()): ?>
<div class="container" style="margin-top: 90px;">
  <br>

  <center>
    <h2>Account Detail</h2>
    <hr>
  </center>
  <div class="container px-3 py-3 bg-light">
    <div class="card-body">
      <table id="product" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Information</th>
            <td>
              <a class="btn btn-info btn-sm" href="<?php echo e(Route('airfpt.mem_update')); ?>">
                <i class="fas fa-pencil-alt"></i> Edit
              </a>
            </td>
          </tr>
          <tr>
            <th>First Name</th>
            <td><?php echo e(Auth::user()->first_name); ?></td>
          </tr>
          <tr>
            <th>Last Name</th>
            <td><?php echo e(Auth::user()->last_name); ?></td>
          </tr>
          <tr>
            <th>Username</th>
            <td><?php echo e(Auth::user()->username); ?></td>
          </tr>
          <tr>
            <th>Password</th>
            <td>********</td>
          </tr>
          <tr>
            <th>Email</th>
            <td><?php echo e(Auth::user()->email); ?></td>
          </tr>
          <tr>
            <th>Phone</th>
            <td><?php echo e(Auth::user()->phone); ?></td>
          </tr>
          <tr>
            <th>Title</th>
            <td><?php echo e(Auth::user()->title); ?></td>
          </tr>
        </thead>
      </table>
    </div>
  </div>



  <?php endif; ?>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('airfpt.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/mem_detail.blade.php ENDPATH**/ ?>
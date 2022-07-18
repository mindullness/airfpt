
<?php $__env->startSection('title', 'manage booking'); ?>
<?php $__env->startSection('content'); ?>
<div class="container d-flex justify-content-center form-wrapper mt-5" ">
    <div class="form-container col-md-5 mt-5">
        <h1 class="form-title mb-4 text-center">Manage my Booking</h1>
        <form role="form" action="<?php echo e(Route('manageBooking.show')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="form-box d-flex flex-column">
                <label for="" class="form-label">Booking reference</label>
                <input type="text" name="pnr" id="pnr" class="form-input">
                <?php if($errors->has('pnr')): ?>
                <p class="form-error text-danger"><?php echo e($errors->first('pnr')); ?></p>
                <?php endif; ?>
            </div>
            <div class="form-box d-flex flex-column">
                <label for="" class="form-label">Last name</label>
                <input type="text" name="lastname" class="form-input">
                <?php if($errors->has('lastname')): ?>
                <p class="form-error text-danger"><?php echo e($errors->first('lastname')); ?></p>
                <?php endif; ?>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">Show booking</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('airfpt.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/manageBooking/index.blade.php ENDPATH**/ ?>
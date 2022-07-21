<!-- lưu tại /resources/views/product/create.blade.php -->

<?php $__env->startSection('title', 'AirFpt Routes'); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-info mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Add New Flight</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo e(Route('admin.flights.postCreate')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="card-body">
                            <!-- <div class="form-group">
                                <label for="txt-id">ID</label>
                                <input type="text" class="form-control" id="txt-id" name="id">
                            </div> -->
                            <div class="form-group">
                                <label for="txt-number">Flight number</label>
                                <select name="number" id="txt-number" class="form-control ">
                                    <option value="">Select flight number</option>
                                    <?php $__currentLoopData = $flight_num; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($num->id); ?>"><?php echo e($num->id); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txt-date">Date</label>
                                <input type="date" class="form-control" id="txt-date" name="date">
                            </div>
                            <div class="form-group">
                                <label for="txt-etd">Estimated Time of Departure (ETD)</label>
                                <input type="time" class="form-control" id="txt-etd" name="etd" placeholder="hh:mm">
                            </div>
                            <div class="form-group">
                                <label for="txt-gate">Gate</label>
                                <input type="text" class="form-control" id="txt-gate" name="gate">
                            </div>
                            <div class="form-group">
                                <label for="txt-acid">Aircraft</label>
                                <select name="acid" id="txt-acid"  class="form-control">
                                    <?php $__currentLoopData = $aircrafts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($a->id); ?>">ID: <?php echo e($a->id); ?> - <?php echo e($a->reg); ?> - <?php echo e($a->config); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txt-status">Flight status</label>
                                <select name="status" id="txt-status" class="form-control">
                                    <option value="open" selected>Open</option>
                                    <option value="closed">Closed</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Price</label>
                                <input type="text" class="form-control" id="txt-price" name="price">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>
<script src="<?php echo e(asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/admin/flights/create.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title', 'AirFPT'); ?>
<?php $__env->startSection('content'); ?>
<div class="container bg-light py-3 px-5 rounded" style="margin-top: 120px;">
    <div class="d-flex justify-content-between">
        <img width="390" src="<?php echo e(asset('img/logo/prj_logo.png')); ?>" alt="">
        <h1 class="align-self-center " style="font-family: 'Courier New', monospace;">Travel Itinerary</h1>
    </div>
    <div class="row mt-4 d-flex justify-content-between px-3 ">
        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
        <table class="col-6 mr-auto">
            <tr>
                <th>Name </th>
                <td>: <?php echo e($b->last_name); ?> &nbsp;<?php echo e($b->first_name); ?><small> (primary passenger)</small> </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>: <?php echo e($b->email); ?></td>
            </tr>
            <tr>
                <th>Booking date</th>
                <td>: <?php echo e(date("l, d M Y", strtotime("$b->created_at"))); ?></td>
            </tr>
            <tr>
                <?php $totalPaid = 0;
                foreach ($bookings as $b) {
                    $totalPaid += $b->price;
                }
                ?>
                <th>Total paid</th>
                <td>:  <?php echo e(number_format("$totalPaid",0, "," , ".")); ?><sub class="align-top">đ &nbsp;</sub>VND</td>
            </tr>
        </table>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-auto text-center">
            <h5><b> Booking number </b></h5>
            <img class="mt-0 pt-0" width="120" src="<?php echo e(asset('img/logo/barcode_test.jpg')); ?>" alt="">
            <h1 class="text-primary font-weight-bold"><?php echo e($b->PNR); ?></h1>
        </div>
    </div>
</div>
<!-- End header of Itinerary -->
<!-- Body of Itinerary -->
<div class="container bg-light py-3 px-5 rounded mt-2">
<a href="#" class="text-primary d-flex justify-content-end"><b> Itinerary details </b><small>&nbsp;<li class="fa fa-arrow-down align-bottom"></li></small></a>
</div>



<?php echo $__env->make('airfpt.subcribe_panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('airfpt.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/booking/travelItinerary.blade.php ENDPATH**/ ?>
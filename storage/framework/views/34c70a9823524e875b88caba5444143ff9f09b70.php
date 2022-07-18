
<?php $__env->startSection('title', 'boarding pass'); ?>
<?php $__env->startSection('content'); ?>
<div class="container boardingpass" style="margin-top: 120px;" id="boardingpass">
    <div class="row">
        <div class="col-md-6" style="text-transform: uppercase; font-weight: bold; font-size: 25px;">Passenger's Boarding pass</div>
        <div class="col-md-6" style="display: flex;flex-direction: column;align-items: flex-end; ">
            <div style="text-transform: uppercase; font-weight: bold; color: red; font-size: 17px;">for verification of entry requirements</div>
            <div>Please proceed to our Document Check Counter.</div>
        </div>
    </div>
    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="boardingpass-container">
        <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="boardingpass-left">
            <div class="boardingpass-left-item">
                <div class="boardingpass-name"><?php echo e($booking -> first_name); ?> <?php echo e($booking -> last_name); ?></div>
            </div>
            <div class="boardingpass-left-item">
                <div class="boardingpass-label">Departure</div>
                <div class="boardingpass-detail">
                    <?php echo e($booking -> origin); ?>

                </div>
            </div>
            <div class="boardingpass-left-item">
                <div class="boardingpass-label">Arrive</div>
                <div class="boardingpass-detail"><?php echo e($booking -> destination); ?></div>
            </div>
            <div class="boardingpass-left-item">
                <div class="boardingpass-label">Booking no.</div>
                <div class="boardingpass-detail"><?php echo e($booking -> PNR); ?></div>
            </div>
        </div>
        <div class="boardingpass-right">
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Flight no.</div>
                <div class="boardingpass-detail">AF <?php echo e($booking -> flight_number); ?></div>
            </div>
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Date</div>
                <div class="boardingpass-detail"><?php echo e($booking -> date); ?></div>
            </div>
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Boarding time</div>
                <div class="boardingpass-detail"><?php echo e($booking -> depart_time); ?></div>
            </div>
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Gate no.</div>
                <div class="boardingpass-detail"><?php echo e($booking -> gate); ?></div>
            </div>
            <div class="boardingpass-right-item">
                <div class="boardingpass-label">Seat no.</div>
                <div class="boardingpass-detail"><?php echo e($booking -> seat_no); ?></div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="row" style="display: flex; align-items: center;">
        <div style="width: 100%; border-right: 1px solid #000;" class="col-md-6">
            <div style="font-size: 20px; margin-bottom: 10px; font-weight: bold;">Carry-on baggage</div>
            <img style="width: 100%; margin-bottom: 30px;" src="<?php echo e(asset('images/1image-removebg-preview.png')); ?>" alt="">
        </div>
        <div style="width: 100%;" class="col-md-6">
            <div style="font-size: 20px; margin-bottom: 10px; font-weight: bold;">Airport guide: 4 easy steps!</div>
            <img style="width: 100%;" src="<?php echo e(asset('images/image-removebg-preview.png')); ?>" alt="">
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('airfpt.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/manageBooking/boardingpass.blade.php ENDPATH**/ ?>
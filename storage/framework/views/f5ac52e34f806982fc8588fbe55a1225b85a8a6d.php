<?php $__env->startSection('title', 'show booking'); ?>
<?php $__env->startSection('content'); ?>
<div style="margin-top:98px;">
<?php if (count($booking) === 0) { ?>
    <div class="container mt-5">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">No booking available!</h4>
            <p>Please make sure you have entered your Booking reference and Last name correctly.</p>
            <hr>
            <a class="btn btn-danger" href="<?php echo e(Route('manageBooking.index')); ?>" role="button">Cancel</a>
        </div>
    </div>
<?php } else { ?>
    <h3 class="text-center mt-4">Passenger name record: <?php echo e($pnr); ?></h3>
    <div class="container mt-4" style="display: flex; flex-direction: column-reverse;">
        <table class="table table-tripped table-bordered">
            <thead class="table-header">
                <tr>
                    <!-- <th>Passenger Name Record</th> -->
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Flight number</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Departure time</th>
                    <th>Duration</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-body">
                <form action="<?php echo e(Route('manageBooking.seat')); ?>">
                    <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input class="inputFltNum" style="display: none;" type="text" name="flightNum" value="<?php echo e($booking->flight_number); ?>">
                    <?php if($booking->status === "confirmed"): ?>
                    <tr>
                        <!-- <td><?php echo e($booking -> PNR); ?></td> -->
                        <td><?php echo e($booking -> first_name); ?></td>
                        <td><?php echo e($booking -> last_name); ?></td>
                        <td><?php echo e($booking -> flight_number); ?></td>
                        <td><?php echo e($booking -> origin); ?></td>
                        <td><?php echo e($booking -> destination); ?></td>
                        <td><?php echo e($booking -> depart_time); ?></td>
                        <td><?php echo e($booking -> duration); ?></td>
                        <td>
                            <input class="checkboxInput inputFltNum<?php echo e($booking->flight_number); ?>" type="checkbox" data-fltNum="<?php echo e($booking->flight_number); ?>" name="bookingId[]" value="<?php echo e($booking->id); ?>">
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button type="submit" class="btn btn-primary col-md-4 offset-md-4">Continue</button>
                </form>
            </tbody>
        </table>
    </div>
<?php } ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('airfpt.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/manageBooking/show.blade.php ENDPATH**/ ?>
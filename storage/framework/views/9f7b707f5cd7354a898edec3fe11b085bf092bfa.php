
<?php $__env->startSection('title', 'Term & Conditions'); ?>
<?php $__env->startSection('content'); ?>
<div style="padding-top: 70px; padding-bottom: 70px;">
    <div class="container" style="max-width:900px">
        <h2 style="background-color: #FDF4A8; text-align: center; margin-top: 20px; margin-bottom: 20px;"><b> Discover the news of Air FPT </b></h2>
        <div class="row">

            <?php $__currentLoopData = $allNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6 col-md-6">

                <div>
                    <a href="<?php echo e(route('airfpt.user.details',$news->id)); ?>"><img src="<?php echo e(url('./img/trucduy/'.$news->image)); ?>" style="width:100%" class="mx-auto d-block" alt=""></a>
                </div>
                <div style="background-color: #6F55E4; text-align: center; color: whitesmoke;">
                    <p style="font-size: 20px;"><?php echo e($news->topic); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
</div>

<?php $__env->stopSection(); ?> <?php $__env->startSection('script-section'); ?> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('airfpt.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/airfpt/user/homeNews.blade.php ENDPATH**/ ?>
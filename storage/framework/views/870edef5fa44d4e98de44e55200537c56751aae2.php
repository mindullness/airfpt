<!-- lưu tại /resources/views/product/create.blade.php -->

<?php $__env->startSection('title', 'AirFpt News'); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Reply Feedback</h3>
                    </div>
                    <!-- /.card-header -->
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <!-- form start -->
                    <form role="form" action="<?php echo e(Route('admin.comment.addReply',$c->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Id</label>
                                <input type="text" class="form-control" id="txt-id" name="id" placeholder="1" value="<?php echo e($c->id); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-id">Member Id</label>
                                <input type="text" class="form-control" id="txt-id" name="mem_id" placeholder="1" value="<?php echo e($c->mem_id); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-user_name">User name</label>
                                <input type="text" class="form-control" id="txt-user_name" name="user_name" placeholder="admin" value="<?php echo e($c->user_name); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-comment">Feedback</label>
                                <input type="text" class="form-control" id="comment" name="comment" placeholder="feedback" value="<?php echo e($c->comment); ?>"  >
                            </div>
                            <div class="form-group">
                                <label for="txt-reply">Reply feedback</label>
                                <input type="text" class="form-control" id="reply" name="reply" placeholder="input reply feedback" placeholder="Reply feedback" >
                            </div>
                            <div class="form-group">
                                <label for="post_date">Update Date:</label>
                                <input type="date" id="created_at" name="created_at" value="<?php echo e($c->created_at); ?>">

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

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/admin/comment/reply.blade.php ENDPATH**/ ?>
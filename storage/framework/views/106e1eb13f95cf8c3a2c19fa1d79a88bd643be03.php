<!-- lưu tại /resources/views/product/create.blade.php -->

<?php $__env->startSection('title', 'AirFpt Airports'); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-info mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Add New Member</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo e(url('admin/member/postCreate')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="card-body">
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                                <input id="member_username" name="last_name" type="text" class="form-control" placeholder="last name">
                            </div>
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input id="member_username" name="first_name" type="text" class="form-control" placeholder="first name">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="member_username" name="username" type="text" class="form-control" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="member_username" name="email" type="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input value="" type="password" class="form-control" id="password" name="password" required placeholder="password">
                            </div>
                            <div class="form-group">
                                <label for="username">Phone</label>
                                <input id="member_username" name="phone" type="text" class="form-control" placeholder="phone">
                            </div>
                            <div class="form-group">
                                <label for="city">Role (0-1)</label>
                                <input type="text" class="form-control" id="member_role" name="role" placeholder="role (0-1)">
                            </div>
                            <div class="form-group">
                                <label for="city">Points</label>
                                <input type="text" class="form-control" id="member_points" name="points" placeholder="points">
                            </div>
                            <div class="form-group">
                                <label for="">Discount Rate</label>
                                <input id="member_username" name="discount" type="text" class="form-control" placeholder="discount rate">
                            </div>
                            <div class="form-group">
                                <label for="">Title</label>
                                <input id="member_username" name="title" type="text" class="form-control" placeholder="mr/ms/mrs">
                            </div>
     
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
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
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/admin/member/create.blade.php ENDPATH**/ ?>
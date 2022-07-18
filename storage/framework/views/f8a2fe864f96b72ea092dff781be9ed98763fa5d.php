<!-- Lưu tại resources/views/product/index.blade.php -->

<?php $__env->startSection('title', 'AirFpt Member'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><img src="<?php echo e(asset('img/airport-icon.jpg')); ?>" alt="" width="50" height="45" style="border-radius: 50%; padding-left:2px; opacity:0.8;"> Member Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Air-FPT</a></li>
                    <li class="breadcrumb-item active">Member List</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(Route('admin.member.create')); ?>" class="card-title btn btn-info shadow">Add New Member</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="product" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>MEMBER</th>
                                <th>ROLE</th>
                                <th>POINTS</th>
                                <th>EMAIL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$key); ?></td>
                                <td><?php echo e($member->username); ?></td>
                                <td><?php echo e($member->role); ?></td>
                                <td><?php echo e($member->points); ?></td>
                                <td><?php echo e($member->email); ?></td>
                                <td class="text-right">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="<?php echo e(Route('admin.member.update', $member->id)); ?>">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="<?php echo e(Route('admin.member.delete', $member->id)); ?>">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>#</th>
                                <th>ADMIN</th>
                                <th>ROLE</th>
                                <th>PERMISSION</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>
<script>
    $(function() {
        $('#admin').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/admin/member/index.blade.php ENDPATH**/ ?>
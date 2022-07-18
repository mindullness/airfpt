<!-- Lưu tại resources/views/product/index.blade.php -->

<?php $__env->startSection('title', 'AirFpt Routes'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1><img src="<?php echo e(asset('img/route-icon.jpg')); ?>" alt="" width="50" height="45" style="border-radius: 50%; padding-left:2px; opacity:0.8;"> &nbsp; Route Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Routes</li>
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
                    <a href="<?php echo e(Route('admin.routes.create')); ?>" class="card-title btn btn-info shadow">Add New Route</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <span class="d-flex justify-content-start">
                        <span>Destinations: &nbsp;</span>
                        <?php $__currentLoopData = $dest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span>'<?php echo e($d->iata_code); ?>' &nbsp;</span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </span>
                    <table id="routes" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>FLIGHT NUMBER</th>
                                <th>ORIGIN</th>
                                <th>DESTINATION</th>
                                <th>SCHEDULE TIME OF DEPARTURE</th>
                                <th>DURATION (Minutes)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$key); ?></td>
                                <td><?php echo e($r->id); ?></td>
                                <td><?php echo e($r->origin); ?></td>
                                <td><?php echo e($r->destination); ?></td>
                                <td><?php echo e($r->depart_time); ?></td>
                                <td><?php echo e($r->duration); ?></td>
                                <td class="text-right">
                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a> -->
                                    <a class="btn btn-info btn-sm" href="<?php echo e(Route('admin.routes.update', $r->id)); ?>">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="<?php echo e(Route('admin.routes.delete', $r->id)); ?>">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>FLIGHT NUMBER</th>
                                <th>ORIGIN</th>
                                <th>DESTINATION</th>
                                <th>SCHEDULE TIME OF DEPARTURE</th>
                                <th>DURATION (Minutes)</th>
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
        $('#routes').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/admin/routes/index.blade.php ENDPATH**/ ?>
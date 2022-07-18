<!-- Lưu tại resources/views/product/index.blade.php -->

<?php $__env->startSection('title', 'AirFpt Airports'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><img src="<?php echo e(asset('img/airport-icon.jpg')); ?>" alt="" width="50" height="45" style="border-radius: 50%; padding-left:2px; opacity:0.8;"> Airport Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Airports</li>
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
                    <a href="<?php echo e(Route('admin.airports.create')); ?>" class="card-title btn btn-info shadow">Add New Airport</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="airports" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>IATA CODE</th>
                                <th>AIRPORT NAME</th>
                                <th>CITY/PROVINCE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $airports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $airport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$key); ?></td>
                                <td><?php echo e($airport->iata_code); ?></td>
                                <td><?php echo e($airport->name); ?></td>
                                <td><?php echo e($airport->city); ?></td>
                                <td class="text-right">
                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a> -->
                                    <a class="btn btn-info btn-sm" href="<?php echo e(Route('admin.airports.update', $airport->iata_code)); ?>">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="<?php echo e(Route('admin.airports.delete', $airport->iata_code)); ?>">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>IATA CODE</th>
                                <th>AIRPORT NAME</th>
                                <th>CITY/PROVINCE</th>
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
        $('#airports').DataTable({
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
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/admin/airports/index.blade.php ENDPATH**/ ?>
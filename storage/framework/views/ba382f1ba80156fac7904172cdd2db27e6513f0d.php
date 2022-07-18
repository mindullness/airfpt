<!-- Lưu tại resources/views/product/index.blade.php -->

<?php $__env->startSection('title', 'Passenger Booking'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row my-2">
            <div class="col-sm-6">
                <h1><i class="fa fa-ticket-alt"></i> &nbsp; Passenger Name Record</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Passenger</a></li>
                    <li class="breadcrumb-item active">Bookings</li>
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

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="adminbookings" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>PNR</th>
                                <th>LAST NAME</th>
                                <th>MID/FIRST NAME</th>
                                <th>GENDER</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$key); ?></td>
                                <td><?php echo e($b->PNR); ?></td>
                                <td><?php echo e($b->last_name); ?></td>
                                <td><?php echo e($b->first_name); ?></td>
                                <td><?php echo e(strtoupper($b->gender)); ?></td>
                                <td><?php echo e(number_format("$b->price", 0, "," , ".")); ?></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>PNR</th>
                                <th>LAST NAME</th>
                                <th>MID/FIRST NAME</th>
                                <th>GENDER</th>
                                <th>PRICE</th>
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
        $('#adminbookings').DataTable({
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
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/admin/passenger/index.blade.php ENDPATH**/ ?>
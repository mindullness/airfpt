<!-- Lưu tại resources/views/product/index.blade.php -->

<?php $__env->startSection('title', 'AirFpt Flights'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1><img src="<?php echo e(asset('img/flight-icon.png')); ?>" alt="" width="50" height="45" style="border-radius: 10px; padding-left:2px; opacity:0.8;"> &nbsp; Flight Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Flights</li>
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
                    <a href="<?php echo e(Route('admin.flights.create')); ?>" class="card-title btn btn-info shadow">Add New Flight</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="flights" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FLIGHT NUMBER</th>
                                <th>DEPARTURE DATE</th>
                                <th>ETD</th>
                                <th>GATE</th>
                                <th>A/C ID</th>
                                <th>FLIGHT STATUS</th>
                                <th>BASE PRICE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($f->id); ?></td>
                                <td><?php echo e($f->flight_number); ?></td>
                                <td><?php echo e($f->date); ?></td>
                                <td><?php echo e($f->etd); ?></td>
                                <td><?php echo e($f->gate); ?></td>
                                <td><?php echo e($f->ac_id); ?></td>
                                <td><?php echo e($f->flight_status); ?></td>
                                <td><?php echo e($f->base_price); ?></td>
                                <td class="text-right">
                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i> View
                                    </a> -->
                                    <a class="btn btn-info btn-sm" href="<?php echo e(Route('admin.flights.update', $f->id)); ?>">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" id="deleteBtn<?php echo e($f->id); ?>" onclick="myFunc(this.id)">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>FLIGHT NUMBER</th>
                                <th>DEPARTURE DATE</th>
                                <th>ETD</th>
                                <th>GATE</th>
                                <th>A/C ID</th>
                                <th>FLIGHT STATUS</th>
                                <th>BASE PRICE</th>
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
        $('#flights').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });
    });
    myFunc = (id) => {
        console.log(id);
        var href = ''
        const deleteBtn = document.getElementById(id)
        if (confirm("Are you sure")) {
            href = "<?php echo e(Route('admin.flights.delete', $f->id)); ?>"
            console.log(href);
        } else {
            href = ''
        }
        deleteBtn.setAttribute('href', href)
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/admin/flights/index.blade.php ENDPATH**/ ?>
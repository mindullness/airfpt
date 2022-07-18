
<?php $__env->startSection('title', 'Elequent Products Site'); ?>
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TOi LA TOANNNNNNNNNNNNNNNNNNNNNNNN</h1>
    <h1>TOi LA TOANNNNNNNNNNNNNNNNNNNNNNNN</h1>
    <h1>TOi LA TOANNNNNNNNNNNNNNNNNNNNNNNN</h1>
    <h1>TOi LA TOANNNNNNNNNNNNNNNNNNNNNNNN</h1>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>
<script>
    $(function() {
        $('#product').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/index.blade.php ENDPATH**/ ?>
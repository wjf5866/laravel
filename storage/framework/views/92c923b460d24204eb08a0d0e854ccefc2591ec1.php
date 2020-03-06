<?php $__env->startSection('content'); ?>

<?php

dump( Auth::guard('admin')->user() );

?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\laravel1024\resources\views/admin/index.blade.php ENDPATH**/ ?>
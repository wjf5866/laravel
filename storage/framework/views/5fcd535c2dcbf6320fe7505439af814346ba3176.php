<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <title><?php echo $__env->yieldContent('title', '首页'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo e(asset('static/css/bootstrap.min.css')); ?>">
    <link href="https://cdn.bootcss.com/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('static/css/admin.css')); ?>?<?php echo e(time()); ?>">

</head>

<body>
    <?php echo $__env->make('admin.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class='d-flex'>
        <div class="sidebar navbar-nav">
            <?php echo $__env->yieldContent('sidebar'); ?>
        </div>
        <div class='container-fluid'>
            <?php echo $__env->make('admin.layouts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <script src="<?php echo e(asset('static/js/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('static/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('static/js/bootstrap.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH F:\xampp\htdocs\laravel1024\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>
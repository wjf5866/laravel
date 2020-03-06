<?php $__env->startSection('title'); ?>
登陆
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
我是内容
<?php echo config('project.admin.state')[1]; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
css
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
js
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\laravel1024\resources\views/welcome.blade.php ENDPATH**/ ?>
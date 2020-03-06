<?php 
// session()->flash('success','test');
//alert('ok');
?>
<?php $__currentLoopData = ['success', 'danger']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if( session()->has($message) ): ?>
<div class='message mt-2'>
    <div class="alert alert-<?php echo e($message); ?>">
        <?php echo e(session()->get($message)); ?>

    </div>
    <script>
    setTimeout(() => {
        $(".alert").alert('close');
    }, 5000);
    </script>
</div> 
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH F:\xampp\htdocs\laravel1024\resources\views/admin/layouts/message.blade.php ENDPATH**/ ?>
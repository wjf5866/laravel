<?php $__env->startSection('title'); ?>
管理员登录
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class='row'>
    <div class="offset-3"></div>
    <div class='col-6 mt-5 p-5 bg-light rounded'>
        <h3>管理员登录</h3>
        <form action="<?php echo e(route('admin.login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class='form-group row'>
                <label for="username" class="col-2 col-form-label">用户</label>
                <div class="col-10">
                    <input type="text" name="username" class="form-control" id="username" placeholder="请输入用户名">
                    <small class="form-text text-muted">
                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert- alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </small>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-2 col-form-label">密码</label>
                <div class="col-10">
                    <input type="password" name="password" class="form-control" id="password" placeholder="请输入密码">
                    <small class="form-text text-muted">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert- alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </small>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2"></div>
                <div class="col-10">
                    <button type="submit" class="btn btn-primary">登录</button>
                </div>

            </div>
        </form>

    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\laravel1024\resources\views/admin/login.blade.php ENDPATH**/ ?>
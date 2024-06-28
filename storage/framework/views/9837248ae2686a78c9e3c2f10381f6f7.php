<?php $__env->startSection('page-title', ''); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <?php echo $__env->make('admin.partials.crumb', [
        'crumbs' => [
            route('admin.dashboard') => __('default.dashboard'),
            '#' => isset($pageTitle) ? $pageTitle : '',
        ],
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-body">


            <form method="post" action="<?php echo e(adminUrl(['controller' => 'account', 'action' => 'password'])); ?>">
                <?php echo csrf_field(); ?>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('New Password')); ?></label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="password" required autocomplete="new-password">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm New Password')); ?></label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>


                <div class="form-footer">
                    <button type="submit" class="btn btn-primary float-right"><?php echo e(__lang('submit')); ?></button>
                </div>

            </form>


        </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lms\Resources\views/admin/account/password.blade.php ENDPATH**/ ?>
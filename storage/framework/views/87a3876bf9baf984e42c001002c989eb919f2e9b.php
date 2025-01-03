<?php $__env->startSection('pagename'); ?>
    - <?php echo e($package->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-description', !empty($package) ? $package->meta_keywords : ''); ?>
<?php $__env->startSection('meta-keywords', !empty($package) ? $package->meta_description : ''); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <?php echo e($package->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-link'); ?>
    <?php echo e($package->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  
    <div class="authentication-area pt-90 pb-120">
        <div class="container">
            <div class="main-form">
                <form id="#authForm" action="<?php echo e(route('front.checkout.view')); ?>" method="post"
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="title">
                        <h3><?php echo e(__('Signup')); ?></h3>
                    </div>
                    <div class="form-group mb-30">
                        <input type="text" class="form-control" name="username" placeholder="<?php echo e(__('Username')); ?>"
                               value="<?php echo e(old('username')); ?>" required>
                        <?php if($hasSubdomain): ?>
                            <p class="mb-0">
                                <?php echo e(__('Your subdomain based website URL will be')); ?>:
                                <strong class="text-primary"><span
                                        id="username">{username}</span>.<?php echo e(env('WEBSITE_HOST')); ?></strong>
                            </p>
                        <?php endif; ?>
                        <p class="text-danger mb-0" id="usernameAvailable"></p>
                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger mb-2 mt-2"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group mb-30">
                        <input class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>"
                               placeholder="<?php echo e(__('Email Address')); ?>" >
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger mb-2 mt-2"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group mb-30">
                        <input class="form-control" type="password" name="password" value="<?php echo e(old('password')); ?>"
                               placeholder="<?php echo e(__('Password')); ?>" >
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger mb-2 mt-2"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group mb-30">
                        <input class="form-control" id="password-confirm" type="password"
                               placeholder="<?php echo e(__('Confirm Password')); ?>" name="password_confirmation" 
                               autocomplete="new-password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger mb-2 mt-2"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div>
                        <input type="hidden" name="status" value="<?php echo e($status); ?>">
                        <input type="hidden" name="id" value="<?php echo e($id); ?>">
                    </div>
                    <button type="submit" class="btn primary-btn w-100"> <?php echo e(__('Continue')); ?> </button>
                </form>
            </div>
        </div>
    </div>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  
<script>
 let hasSubdomain = "<?php echo e($hasSubdomain); ?>";
</script>
<script src="<?php echo e(asset('assets/front/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eorder\resources\views/front/step.blade.php ENDPATH**/ ?>
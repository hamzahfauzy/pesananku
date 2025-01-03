<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <h4 class="page-title">General Settings</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="<?php echo e(route('user.dashboard')); ?>">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Settings</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">General Settings</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="" action="<?php echo e(route('user.basic.info.update', $lang_id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-title">Update General Settings</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-5 pb-5">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Website Title **</label>
                                            <input class="form-control" name="website_title"
                                                value="<?php echo e($abs->website_title ?? null); ?>">
                                            <?php if($errors->has('website_title')): ?>
                                                <p class="mb-0 text-danger"><?php echo e($errors->first('website_title')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Office Time **</label>
                                            <input class="form-control" name="office_time"
                                                value="<?php echo e($abs->office_time ?? null); ?>" placeholder="Office Time">
                                            <?php if($errors->has('office_time')): ?>
                                                <p class="mb-0 text-danger"><?php echo e($errors->first('office_time')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Timezone **</label>
                                            <select class="form-control select2" name="timezone">
                                                <option value="" selected disabled>Select a Timezone</option>
                                                <?php $__currentLoopData = $timezones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timezone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($timezone->timezone); ?>"
                                                        <?php echo e($userBe->timezone == $timezone->timezone ? 'selected' : ''); ?>>
                                                        <?php echo e($timezone->timezone); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('timezone')): ?>
                                                <p class="mb-0 text-danger"><?php echo e($errors->first('timezone')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">

                                            <label>Base Color Code **</label>
                                            <input class="jscolor form-control ltr" name="base_color"
                                                value="<?php echo e($abs->base_color ?? null); ?>">
                                            <?php if($errors->has('base_color')): ?>
                                                <p class="mb-0 text-danger"><?php echo e($errors->first('base_color')); ?></p>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <br>
                                            <h3 class="text-warning">Currency Settings</h3>
                                            <hr class="divider">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Base Currency Symbol **</label>
                                            <input type="text" class="form-control ltr" name="base_currency_symbol"
                                                value="<?php echo e($abe->base_currency_symbol ?? null); ?>">
                                            <?php if($errors->has('base_currency_symbol')): ?>
                                                <p class="mb-0 text-danger"><?php echo e($errors->first('base_currency_symbol')); ?>

                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Base Currency Symbol Position **</label>
                                            <select name="base_currency_symbol_position" class="form-control ltr">
                                                <?php if(empty($abe->base_currency_symbol_position)): ?>
                                                    <option value="left" selected>Left</option>
                                                    <option value="right">Right</option>
                                                <?php elseif($abe->base_currency_symbol_position == 'left'): ?>
                                                    <option value="left" selected>Left</option>
                                                    <option value="right">Right</option>
                                                <?php elseif($abe->base_currency_symbol_position == 'right'): ?>
                                                    <option value="left">Left</option>
                                                    <option value="right" selected>Right</option>
                                                <?php endif; ?>
                                            </select>
                                            <?php if($errors->has('base_currency_symbol_position')): ?>
                                                <p class="mb-0 text-danger">
                                                    <?php echo e($errors->first('base_currency_symbol_position')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Base Currency Text **</label>
                                            <input type="text" class="form-control ltr" name="base_currency_text"
                                                value="<?php echo e($abe->base_currency_text ?? null); ?>">
                                            <?php if($errors->has('base_currency_text')): ?>
                                                <p class="mb-0 text-danger"><?php echo e($errors->first('base_currency_text')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Base Currency Text Position **</label>
                                            <select name="base_currency_text_position" class="form-control ltr">
                                                <?php if(empty($abe->base_currency_text_position)): ?>
                                                    <option value="left" selected>Left</option>
                                                    <option value="right">Right</option>
                                                <?php elseif($abe->base_currency_text_position == 'left'): ?>
                                                    <option value="left" selected>Left</option>
                                                    <option value="right">Right</option>
                                                <?php elseif($abe->base_currency_text_position == 'right'): ?>
                                                    <option value="left">Left</option>
                                                    <option value="right" selected>Right</option>
                                                <?php endif; ?>
                                            </select>
                                            <?php if($errors->has('base_currency_text_position')): ?>
                                                <p class="mb-0 text-danger">
                                                    <?php echo e($errors->first('base_currency_text_position')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Base Currency Rate **</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">1 USD =</span>
                                                </div>
                                                <input type="text" name="base_currency_rate" class="form-control ltr"
                                                    value="<?php echo e($abe->base_currency_rate ?? null); ?>">
                                                <div class="input-group-append">
                                                    <span
                                                        class="input-group-text"><?php echo e($abe->base_currency_text ?? null); ?></span>
                                                </div>
                                            </div>

                                            <?php if($errors->has('base_currency_rate')): ?>
                                                <p class="mb-0 text-danger"><?php echo e($errors->first('base_currency_rate')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form">
                            <div class="form-group from-show-notify row">
                                <div class="col-12 text-center">
                                    <button type="submit" id="displayNotif" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eorder\resources\views/user/basic/basicinfo.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <h4 class="page-title">Themes</h4>
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
                <a href="#">Themes</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-title"><?php echo e(__('Theme Settings')); ?></div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-5 pb-5">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <form id="ajaxForm" action="<?php echo e(route("user.theme.update")); ?>" method="post">
                                <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <label class="form-label"><?php echo e(__('Theme')); ?> *</label>
                                    <div class="row">
                                        <div class="col-4 col-sm-4">
                                            <label class="imagecheck mb-2">
                                                <input name="theme" type="radio" value="fastfood"
                                                    class="imagecheck-input"
                                                    <?php echo e(!empty($abs->theme) && $abs->theme == 'fastfood' ? 'checked' : ''); ?>>
                                                <figure class="imagecheck-figure">
                                                    <img src="<?php echo e(asset('assets/tenant/img/themes/multipurpose.png')); ?>"
                                                        alt="title" class="imagecheck-image">
                                                </figure>
                                            </label>
                                           

                                            <h5 class="text-center"><?php echo e(__('Fastfood Theme')); ?></h5>
                                        </div>
                                        <div class="col-4 col-sm-4">
                                            <label class="imagecheck mb-2">
                                                <input name="theme" type="radio" value="bakery"
                                                    class="imagecheck-input"
                                                    <?php echo e(!empty($abs->theme) && $abs->theme == 'bakery' ? 'checked' : ''); ?>>
                                                <figure class="imagecheck-figure">
                                                    <img src="<?php echo e(asset('assets/tenant/img/themes/bakery.png')); ?>"
                                                        alt="title" class="imagecheck-image">
                                                </figure>
                                            </label>
                                            <h5 class="text-center"><?php echo e(__('Bakery Theme')); ?></h5>
                                        </div>
                                        <div class="col-4 col-sm-4">
                                            <label class="imagecheck mb-2">
                                                <input name="theme" type="radio" value="pizza"
                                                    class="imagecheck-input"
                                                    <?php echo e(!empty($abs->theme) && $abs->theme == 'pizza' ? 'checked' : ''); ?>>
                                                <figure class="imagecheck-figure">
                                                    <img src="<?php echo e(asset('assets/tenant/img/themes/pizza.png')); ?>"
                                                        alt="title" class="imagecheck-image">
                                                </figure>
                                            </label>
                                            <h5 class="text-center"><?php echo e(__('Pizza Theme')); ?></h5>
                                        </div>
                                        <div class="col-4 col-sm-4">
                                            <label class="imagecheck mb-2">
                                                <input name="theme" type="radio" value="coffee"
                                                    class="imagecheck-input"
                                                    <?php echo e(!empty($abs->theme) && $abs->theme == 'coffee' ? 'checked' : ''); ?>>
                                                <figure class="imagecheck-figure">
                                                    <img src="<?php echo e(asset('assets/tenant/img/themes/coffee.png')); ?>"
                                                        alt="title" class="imagecheck-image">
                                                </figure>
                                            </label>
                                            <h5 class="text-center"><?php echo e(__('Coffee Theme')); ?></h5>
                                        </div>
                                        <div class="col-4 col-sm-4">
                                            <label class="imagecheck mb-2">
                                                <input name="theme" type="radio" value="medicine"
                                                    class="imagecheck-input"
                                                    <?php echo e(!empty($abs->theme) && $abs->theme == 'medicine' ? 'checked' : ''); ?>>
                                                <figure class="imagecheck-figure">
                                                    <img src="<?php echo e(asset('assets/tenant/img/themes/medicine.png')); ?>"
                                                        alt="title" class="imagecheck-image">
                                                </figure>
                                            </label>
                                            <h5 class="text-center"><?php echo e(__('Medicine Theme')); ?></h5>
                                        </div>
                                        <div class="col-4 col-sm-4">
                                            <label class="imagecheck mb-2">
                                                <input name="theme" type="radio" value="grocery"
                                                    class="imagecheck-input"
                                                    <?php echo e(!empty($abs->theme) && $abs->theme == 'grocery' ? 'checked' : ''); ?>>
                                                <figure class="imagecheck-figure">
                                                    <img src="<?php echo e(asset('assets/tenant/img/themes/grocery.png')); ?>"
                                                        alt="title" class="imagecheck-image">
                                                </figure>
                                            </label>
                                            <h5 class="text-center"><?php echo e(__('Grocery Theme')); ?></h5>
                                        </div>
                                        <div class="col-4 col-sm-4">
                                            <label class="imagecheck mb-2">
                                                <input name="theme" type="radio" value="beverage"
                                                    class="imagecheck-input"
                                                    <?php echo e(!empty($abs->theme) && $abs->theme == 'beverage' ? 'checked' : ''); ?>>
                                                <figure class="imagecheck-figure">
                                                    <img src="<?php echo e(asset('assets/tenant/img/themes/beverage.png')); ?>"
                                                        alt="title" class="imagecheck-image">
                                                </figure>
                                            </label>
                                            <h5 class="text-center"><?php echo e(__('Beverage Theme')); ?></h5>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" id="submitBtn" class="btn btn-success">
                                <?php echo e(__('Update')); ?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
$(document).ready(function(){

   

    function themeExtrafeature(){
        const selectedTheme = $('input[name="theme"]:checked').val();
        if(selectedTheme == "multipurpose"){
            $('.Home_version').css({'display':'block'});
        }
        else{
            $('.Home_version').css({'display':'none'});
        }
    }
    themeExtrafeature();

    $(".imagecheck").on("change",function(){
        themeExtrafeature();
    });



});

    
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eorder\resources\views/user/basic/themes.blade.php ENDPATH**/ ?>
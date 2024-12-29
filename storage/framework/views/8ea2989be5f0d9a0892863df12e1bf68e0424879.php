<?php
    use Illuminate\Support\Facades\Auth;use Illuminate\Support\Facades\Session;
?>

<div class="row">
    <div class="col-12">
        <div class="form billing-info">
            <div class="shop-title-box">
                <h3><?php echo e($keywords['Information'] ?? __('Information')); ?></h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="field-label"><?php echo e($keywords['Name'] ?? __('Name')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $bname = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $bname = Auth::guard('client')->user()->billing_fname;
                                }
                            } else {
                                $bname = old('billing_fname');
                            }
                        ?>
                        <input type="text" name="billing_fname" value="<?php echo e($bname); ?>">
                        <?php $__errorArgs = ['billing_fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e(convertUtf8($message)); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="field-label"><?php echo e($keywords["Contact Email"] ?? __('Contact Email')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $bmail = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $bmail = Auth::guard('client')->user()->billing_email;
                                }
                            } else {
                                $bmail = old('billing_email');
                            }
                        ?>
                        <input type="text" name="billing_email" value="<?php echo e($bmail); ?>">
                        <?php $__errorArgs = ['billing_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e(convertUtf8($message)); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="field-label"><?php echo e($keywords['Phone'] ?? __('Phone')); ?> *</div>

                    <?php
                        $bnumber = '';
                        if(empty(old())) {
                            if (Auth::guard('client')->check()) {
                                $bnumber = Auth::guard('client')->user()->billing_number;
                            }
                        } else {
                            $bnumber = old('billing_number');
                        }

                        $bccode = '';
                        if(empty(old())) {
                            if (Auth::guard('client')->check()) {
                                $bccode = Auth::guard('client')->user()->billing_country_code;
                            }
                        } else {
                            $bccode = old('billing_country_code');
                        }
                    ?>
                    <div class="input-group" >
                        <input type="hidden" name="billing_country_code" value="<?php echo e($bccode); ?>">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle billing_country_code" type="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><?php echo e(!empty($bccode) ? $bccode : $keywords['Select'] ?? __('Select')); ?></button>
                            <div class="dropdown-menu country-codes" id="billing_country_code">
                                <?php $__currentLoopData = $ccodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ccode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="dropdown-item" data-billing_country_code="<?php echo e($ccode['code']); ?>"
                                       href="#"><?php echo e($ccode['name']); ?> (<?php echo e($ccode['code']); ?>)</a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <input type="text" name="billing_number" value="<?php echo e($bnumber); ?>">
                    </div>
                    <?php $__errorArgs = ['billing_country_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger mb-2"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php $__errorArgs = ['billing_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger mb-2"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <?php
                    if(empty(old()) && Session::has('table')) {
                        $table = Session::get('table');
                    } elseif (!empty(old())) {
                        $table = old('table_number');
                    } else {
                        $table = '';
                    }
                ?>
                <div class="col-md-6">
                    <div class="field-label"><?php echo e($keywords['Table Number'] ?? __('Table Number')); ?> *</div>
                    <div class="field-input">
                        <input type="text" name="table_number" value="<?php echo e($table); ?>" autocomplete="off">
                        <?php $__errorArgs = ['table_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e(convertUtf8($message)); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="field-label"><?php echo e($keywords["Waiter Name"] ?? __('Waiter Name')); ?></div>
                    <div class="field-input">
                        <input type="text" name="waiter_name" value="<?php echo e(old('waiter_name')); ?>" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\laragon\www\eorder\resources\views/user-front/qrmenu/partials/on_table_form.blade.php ENDPATH**/ ?>
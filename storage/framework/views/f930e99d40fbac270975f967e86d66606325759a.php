<?php use Illuminate\Support\Facades\Auth; ?>
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="form shipping-info">
            <div class="shop-title-box">
                <h3><?php echo e($keywords['Shipping Address'] ?? __('Shipping Address')); ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="field-label"><?php echo e($keywords['Country'] ?? __('Country')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $scountry = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $scountry = Auth::guard('client')->user()->shipping_country;
                                }
                            } else {
                                $scountry = old('shipping_country');
                            }
                        ?>
                        <input type="text" name="shipping_country" value="<?php echo e($scountry); ?>">
                        <?php $__errorArgs = ['shipping_country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger mb-0"><?php echo e(convertUtf8($message)); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="field-label"><?php echo e($keywords['First Name'] ?? __('First Name')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $sfname = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $sfname = Auth::guard('client')->user()->shipping_fname;
                                }
                            } else {
                                $sfname = old('shipping_fname');
                            }
                        ?>
                        <input type="text" name="shipping_fname" value="<?php echo e($sfname); ?>">
                        <?php $__errorArgs = ['shipping_fname'];
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
                    <div class="field-label"><?php echo e($keywords['Last Name'] ?? __('Last Name')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $slname = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $slname = Auth::guard('client')->user()->shipping_lname;
                                }
                            } else {
                                $slname = old('shipping_lname');
                            }
                        ?>
                        <input type="text" name="shipping_lname" value="<?php echo e($slname); ?>">
                        <?php $__errorArgs = ['shipping_lname'];
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
                <div class="col-md-12">
                    <div class="field-label"><?php echo e($keywords['Address'] ?? __('Address')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $saddress = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $saddress = Auth::guard('client')->user()->shipping_address;
                                }
                            } else {
                                $saddress = old('shipping_address');
                            }
                        ?>
                        <input type="text" name="shipping_address" value="<?php echo e($saddress); ?>">
                        <?php $__errorArgs = ['shipping_address'];
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
                <div class="col-md-12">
                    <div class="field-label"><?php echo e($keywords["Town / City"] ??__('Town / City')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $scity = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $scity = Auth::guard('client')->user()->shipping_city;
                                }
                            } else {
                                $scity = old('shipping city');
                            }
                        ?>
                        <input type="text" name="shipping_city" value="<?php echo e($scity); ?>">
                        <?php $__errorArgs = ['shipping_city'];
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
                <div class="col-md-12">
                    <div class="field-label"><?php echo e($keywords["Contact Email"] ?? __('Contact Email')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $smail = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $smail = Auth::guard('client')->user()->shipping_email;
                                }
                            } else {
                                $smail = old('shipping_email');
                            }
                        ?>
                        <input type="text" name="shipping_email" value="<?php echo e($smail); ?>">
                        <?php $__errorArgs = ['shipping_email'];
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

                <div class="col-md-12">
                    <div class="field-label"><?php echo e($keywords["Phone"] ?? __('Phone')); ?> *</div>

                    <?php
                        $snumber = '';
                        if(empty(old())) {
                            if (Auth::guard('client')->check()) {
                                $snumber = Auth::guard('client')->user()->shipping_number;
                            }
                        } else {
                            $snumber = old('shipping_number');
                        }

                        $sccode = '';
                        if(empty(old())) {
                            if (Auth::guard('client')->check()) {
                                $sccode = Auth::guard('client')->user()->shipping_country_code;
                            }
                        } else {
                            $sccode = old('shipping_country_code');
                        }
                    ?>
                    <div class="input-group mb-3">
                        <input type="hidden" name="shipping_country_code" value="<?php echo e($sccode); ?>">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle shipping_country_code" type="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><?php echo e(!empty($sccode) ? $sccode : $keywords['Select'] ?? __('Select')); ?></button>
                            <div class="dropdown-menu country-codes" id="shipping_country_code">
                                <?php $__currentLoopData = $ccodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ccode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="dropdown-item" data-shipping_country_code="<?php echo e($ccode['code']); ?>"
                                       href="#"><?php echo e($ccode['name']); ?> (<?php echo e($ccode['code']); ?>)</a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <input type="text" name="shipping_number" class="form-control" value="<?php echo e($snumber); ?>">
                    </div>
                    <?php $__errorArgs = ['shipping_country_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger mb-2"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php $__errorArgs = ['shipping_number'];
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

                <?php if(($userBs->postal_code == 0 && count($scharges) > 0) || (is_array($packagePermissions) && !in_array('Postal Code Based Delivery Charge',$packagePermissions)) ): ?>

                    <div class="col-md-12 mb-4">
                        <div id="shippingCharges">
                            <div class="field-label mb-2"><?php echo e($keywords["Shipping Charges"] ?? __('Shipping Charges')); ?>

                                *
                            </div>
                            <?php $__currentLoopData = $scharges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scharge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check form-check">
                                    <input class="form-check-input" type="radio"
                                           data="<?php echo e(!empty($scharge->free_delivery_amount) && cartTotal() >= $scharge->free_delivery_amount ? 0 : $scharge->charge); ?>"
                                           name="shipping_charge" id="scharge<?php echo e($scharge->id); ?>"
                                           value="<?php echo e($scharge->id); ?>" <?php echo e($loop->first ? 'checked' : ''); ?>>
                                    <label class="form-check-label"
                                           for="scharge<?php echo e($scharge->id); ?>"><?php echo e($scharge->title); ?></label>
                                    +
                                    <strong>
                                        <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?><?php echo e($scharge->charge); ?><?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>

                                    </strong>
                                    <?php if(!empty($scharge->free_delivery_amount)): ?>
                                        (<?php echo app('translator')->get('Free Delivery for Orders over'); ?>
                                        <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?><?php echo e($scharge->free_delivery_amount - 1); ?><?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>

                                        )
                                    <?php endif; ?>
                                </div>
                                <p class="mb-0 text-secondary pl-3 mb-1"><small><?php echo e($scharge->text); ?></small></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="col-md-12">
                    <div class="form-check form-check-inline mb-3">
                        <input name="same_as_shipping" class="form-check-input ml-0 mr-2" type="checkbox"
                               id="sameAsSHipping" value="1"
                               <?php if(auth()->guard()->guest()): ?>
                                   <?php if(empty(old())): ?>
                                       checked
                               <?php elseif(old('same_as_shipping') == 1): ?>
                                   checked
                               <?php endif; ?>
                               <?php endif; ?>
                               <?php if(auth()->guard()->check()): ?>
                                   <?php if(old('same_as_shipping') == 1): ?>
                                       checked
                            <?php endif; ?>
                            <?php endif; ?>
                        >
                        <label class="form-check-label"
                               for="sameAsSHipping"><?php echo e($keywords["Billing Address will be Same as Shipping Address"] ?? __('Billing Address will be Same as Shipping Address')); ?></label>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" id="billingAddress"
         style="display: <?php echo e(empty(old()) || old('same_as_shipping') == 1 ? 'none' : 'block'); ?>;">
        <div class="form billing-info">
            <div class="shop-title-box">
                <h3><?php echo e($keywords["Billing Address"] ?? __('Billing Address')); ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="field-label"><?php echo e($keywords["Country"] ?? __('Country')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $bcountry = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $bcountry = Auth::guard('client')->user()->billing_country;
                                }
                            } else {
                                $bcountry = old('billing country');
                            }
                        ?>
                        <input type="text" name="billing_country" value="<?php echo e($bcountry); ?>">
                        <?php $__errorArgs = ['billing_country'];
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
                    <div class="field-label"><?php echo e($keywords["First Name"] ?? __('First Name')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $bfname = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $bfname = Auth::guard('client')->user()->billing_fname;
                                }
                            } else {
                                $bfname = old('billing_fname');
                            }
                        ?>
                        <input type="text" name="billing_fname" value="<?php echo e($bfname); ?>">
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
                <div class="col-md-6">
                    <div class="field-label"><?php echo e($keywords["Last Name"] ?? __('Last Name')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $blname = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $blname = Auth::guard('client')->user()->billing_lname;
                                }
                            } else {
                                $blname = old('billing_lname');
                            }
                        ?>
                        <input type="text" name="billing_lname" value="<?php echo e($blname); ?>">
                        <?php $__errorArgs = ['billing_lname'];
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
                <div class="col-md-12">
                    <div class="field-label"><?php echo e($keywords["Address"] ?? __('Address')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $baddress = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $baddress = Auth::guard('client')->user()->billing_address;
                                }
                            } else {
                                $baddress = old('billing_address');
                            }
                        ?>
                        <input type="text" name="billing_address" value="<?php echo e($baddress); ?>">
                        <?php $__errorArgs = ['billing_address'];
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
                <div class="col-md-12">
                    <div class="field-label"><?php echo e($keywords["Town / City"] ?? __('Town / City')); ?> *</div>
                    <div class="field-input">
                        <?php
                            $bcity = '';
                            if(empty(old())) {
                                if (Auth::guard('client')->check()) {
                                    $bcity = Auth::guard('client')->user()->billing_city;
                                }
                            } else {
                                $bcity = old('billing_city');
                            }
                        ?>
                        <input type="text" name="billing_city" value="<?php echo e($bcity); ?>">
                        <?php $__errorArgs = ['billing_city'];
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
                <div class="col-md-12">
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

                <div class="col-md-12">
                    <div class="field-label"><?php echo e($keywords["Phone"] ?? __('Phone')); ?> *</div>

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
                    <div class="input-group mb-3">
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
                        <input type="text" name="billing_number" class="form-control" value="<?php echo e($bnumber); ?>">
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
            </div>
        </div>
    </div>


</div>


<?php if($userBs->postal_code == 1 && !empty($pfeatures) && in_array('Postal Code Based Delivery Charge',$pfeatures)): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="field-label"><?php echo e($keywords["Postal Code"] ?? __('Postal Code')); ?>

                (<?php echo e($keywords["Delivery Area"] ?? __('Delivery Area')); ?>) *
            </div>
            <div class="field-input">
                <?php
                    $snumber = '';
                    if(empty(old())) {
                        if (Auth::guard('client')->check()) {
                            $snumber = Auth::guard('client')->user()->shipping_number;
                        }
                    } else {
                        $snumber = old('shipping_number');
                    }
                ?>
                <select name="postal_code" class="select2">
                    <option value="" selected
                            disabled><?php echo e($keywords["Select_a_postal_code"] ?? __('Select a postal code')); ?></option>
                    <?php $__currentLoopData = $postcodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postcode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($postcode->id); ?>"
                                data="<?php echo e(!empty($postcode->free_delivery_amount) && (cartTotal() >= $postcode->free_delivery_amount) ? 0 : $postcode->charge); ?>">
                            <?php if(!empty($postcode->title)): ?>
                                <?php echo e($postcode->title); ?> -
                            <?php endif; ?>
                            <?php echo e($postcode->postcode); ?>


                            (<?php echo e($keywords["Delivery Charge"] ?? __('Delivery Charge')); ?>

                            - <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?><?php echo e($postcode->charge); ?><?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>

                            <?php if(!empty($postcode->free_delivery_amount)): ?>
                                ,  <?php echo app('translator')->get('Free Delivery for Orders over'); ?>
                                <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?><?php echo e($postcode->free_delivery_amount - 1); ?><?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>

                            <?php endif; ?>
                            )

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['postal_code'];
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
    </div>
<?php endif; ?>
<?php if($userBe->delivery_date_time_status == 1): ?>
    <div class="row">
        <div class="col-md-6">
            <div
                class="field-label"><?php echo e($keywords["Delivery Date"] ?? __('Delivery Date')); ?> <?php echo e($userBe->delivery_date_time_required == 1 ? '*' : ''); ?></div>
            <div class="field-input cross <?php echo e(!empty(old('delivery_date')) ? 'cross-show' : ''); ?>">
                <input class="form-control delivery-datepicker" type="text" name="delivery_date" autocomplete="off"
                       value="<?php echo e(old('delivery_date')); ?>">
                <i class="far fa-times-circle"></i>
                <?php $__errorArgs = ['delivery_date'];
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
            <div
                class="field-label"><?php echo e($keywords["Delivery Time"] ??  __('Delivery Time')); ?> <?php echo e($userBe->delivery_date_time_required == 1 ? '*' : ''); ?></div>
            <div class="field-input">
                <select id="deliveryTime" class="form-control" name="delivery_time" disabled>
                    <option value="" selected disabled>
                        <?php echo e($keywords['Select a time frame'] ?? __('Select a time frame')); ?>

                    </option>
                </select>
                <?php $__errorArgs = ['delivery_time'];
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
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\eorder\resources\views/user-front/qrmenu/partials/home_delivery_form.blade.php ENDPATH**/ ?>
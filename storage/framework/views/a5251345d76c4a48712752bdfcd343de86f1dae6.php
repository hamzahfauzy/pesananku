<?php if($paypal?->status == 1): ?>
    <div class="option-block">
        <div class="radio-block">
            <div class="checkbox">
                <label>
                    <input name="gateway" type="radio" class="input-check" value="paypal" data-tabid="paypal"
                        data-action="<?php echo e(route('product.paypal.submit', getParam())); ?>">
                    <span><?php echo e($keywords['Paypal'] ?? __('Paypal')); ?></span>
                </label>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($stripe?->status == 1): ?>
    <div class="option-block">
        <div class="checkbox">
            <label>
                <input name="gateway" class="input-check" type="radio" value="stripe" data-tabid="stripe"
                    data-action="<?php echo e(route('product.stripe.submit', getParam())); ?>">
                <span><?php echo e($keywords['Stripe'] ?? __('Stripe')); ?></span>
            </label>
        </div>
    </div>


    <div class="row gateway-details" id="tab-stripe">
        <div class="col">
            <div id="stripe-element" class="mb-3">

            </div>
            <div id="stripe-errors" class="text-danger"></div>
        </div>
    </div>
<?php endif; ?>


<?php if($paystack?->status == 1): ?>
    <div class="option-block">
        <div class="radio-block">
            <div class="checkbox">
                <label>
                    <input name="gateway" type="radio" class="input-check" value="paystack" data-tabid="paystack"
                        data-action="<?php echo e(route('product.paystack.submit', getParam())); ?>">
                    <span><?php echo e($keywords['Paystack'] ?? __('Paystack')); ?></span>
                </label>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($flutterwave?->status == 1): ?>
    <div class="option-block">
        <div class="radio-block">
            <div class="checkbox">
                <label>
                    <input name="gateway" type="radio" class="input-check" value="flutterwave"
                        data-tabid="flutterwave" data-action="<?php echo e(route('product.flutterwave.submit', getParam())); ?>">
                    <span><?php echo e($keywords['Flutterwave'] ?? __('Flutterwave')); ?></span>
                </label>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($razorpay?->status == 1): ?>
    <div class="option-block">
        <div class="radio-block">
            <div class="checkbox">
                <label>
                    <input name="gateway" type="radio" class="input-check" value="razorpay" data-tabid="razorpay"
                        data-action="<?php echo e(route('product.razorpay.submit', getParam())); ?>">
                    <span><?php echo e($keywords['Razorpay'] ?? __('Razorpay')); ?></span>
                </label>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($instamojo?->status == 1): ?>
    <div class="option-block">
        <div class="radio-block">
            <div class="checkbox">
                <label>
                    <input name="gateway" type="radio" class="input-check" value="instamojo" data-tabid="instamojo"
                        data-action="<?php echo e(route('product.instamojo.submit', getParam())); ?>">
                    <span><?php echo e($keywords['Instamojo'] ?? __('Instamojo')); ?></span>
                </label>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($paytm?->status == 1): ?>
    <div class="option-block">
        <div class="radio-block">
            <div class="checkbox">
                <label>
                    <input name="gateway" type="radio" class="input-check" value="paytm" data-tabid="paytm"
                        data-action="<?php echo e(route('product.paytm.submit', getParam())); ?>">
                    <span><?php echo e($keywords['Paytm'] ?? __('Paytm')); ?></span>
                </label>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($anet?->status == 1): ?>

    <div class="option-block">
        <div class="checkbox">
            <label>
                <input name="gateway" class="input-check" type="radio" value="authorize.net" data-tabid="anet"
                    data-action="<?php echo e(route('product.anet.submit', getParam())); ?>">
                <span><?php echo e($keywords['Authorize'] ?? __('Authorize.net')); ?></span>
            </label>
        </div>
    </div>


    <div class="row gateway-details" id="tab-anet">
        <div class="col-lg-12 mb-4">
            <div class="field-input">
                <input id="anetCardNumber" class="card-elements mb-0" name="anetCardNumber" type="text"
                    placeholder="<?php echo e($keywords['Enter your card number'] ?? __('Enter Your Card Number')); ?>"
                    value="<?php echo e(old('anetCardNumber')); ?>" autocomplete="off" />
            </div>
            <?php if($errors->has('anetCardNumber')): ?>
                <p class="text-danger mb-0"><?php echo e($errors->first('anetCardNumber')); ?></p>
            <?php endif; ?>
        </div>

        <div class="col-lg-12 mb-4">
            <div class="field-input">
                <input id="anetExpMonth" class="card-elements mb-0" name="anetExpMonth" type="text"
                    placeholder="<?php echo e($keywords['Enter expiry month'] ?? __('Enter Expiry Month')); ?>"
                    value="<?php echo e(old('anetExpMonth')); ?>" autocomplete="off" />
            </div>
            <?php if($errors->has('anetExpMonth')): ?>
                <p class="text-danger mb-0"><?php echo e($errors->first('anetExpMonth')); ?></p>
            <?php endif; ?>
        </div>

        <div class="col-lg-12 mb-4">
            <div class="field-input">
                <input id="anetExpYear" class="card-elements mb-0" name="anetExpYear" type="text"
                    placeholder="<?php echo e($keywords['Enter expiry year'] ?? __('Enter Expiry Year')); ?>"
                    value="<?php echo e(old('anetExpYear')); ?>" autocomplete="off" />
            </div>
            <?php if($errors->has('anetExpYear')): ?>
                <p class="text-danger mb-0"><?php echo e($errors->first('anetExpYear')); ?></p>
            <?php endif; ?>
        </div>
        <div class="col-lg-12 mb-4">
            <div class="field-input">
                <input id="anetCardCode" class="card-elements mb-0" name="anetCardCode" type="text"
                    placeholder="<?php echo e($keywords['Enter card code'] ?? __('Enter Card Code')); ?>"
                    value="<?php echo e(old('anetCardCode')); ?>" autocomplete="off" />
            </div>
            <?php if($errors->has('anetCardCode')): ?>
                <p class="text-danger mb-0"><?php echo e($errors->first('anetCardCode')); ?></p>
            <?php endif; ?>
        </div>
        <input type="hidden" name="opaqueDataValue" id="opaqueDataValue" />
        <input type="hidden" name="opaqueDataDescriptor" id="opaqueDataDescriptor" />
        <ul id="anetErrors" class="dis-none"></ul>
    </div>
<?php endif; ?>

<?php if($mollie?->status == 1): ?>
    <div class="option-block">
        <div class="radio-block">
            <div class="checkbox">
                <label>
                    <input name="gateway" type="radio" class="input-check" value="mollie" data-tabid="mollie"
                        data-action="<?php echo e(route('product.mollie.submit', getParam())); ?>">
                    <span><?php echo e($keywords['Mollie'] ?? __('Mollie')); ?></span>
                </label>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($mercadopago?->status == 1): ?>
    <div class="option-block">
        <div class="radio-block">
            <div class="checkbox">
                <label>
                    <input name="gateway" type="radio" class="input-check" value="mercadopago"
                        data-tabid="mercadopago" data-action="<?php echo e(route('product.mercadopago.submit', getParam())); ?>">
                    <span><?php echo e($keywords['Mercadopago'] ?? __('Mercadopago')); ?></span>
                </label>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $__currentLoopData = $ogateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ogateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="offline-gateway" id="offline<?php echo e($ogateway->id); ?>">
        <div class="option-block">
            <div class="checkbox">
                <label>
                    <input name="gateway" class="input-check" type="radio" value="<?php echo e($ogateway->id); ?>"
                        data-tabid="<?php echo e($ogateway->id); ?>"
                        data-action="<?php echo e(route('product.offline.submit', [getParam(), $ogateway->id])); ?>">
                    <span><?php echo e($ogateway->name); ?></span>
                </label>
            </div>
        </div>

        <?php if(!empty($ogateway->short_description)): ?>
            <p class="gateway-desc"><?php echo e($ogateway->short_description); ?></p>
        <?php endif; ?>

        <div class="gateway-details row" id="tab-<?php echo e($ogateway->id); ?>">
            <?php if(!empty(strip_tags($ogateway->instructions))): ?>
                <div class="col-12">
                    <div class="gateway-instruction">
                        <?php echo replaceBaseUrl($ogateway->instructions); ?>

                    </div>
                </div>
            <?php endif; ?>

            <?php if($ogateway->is_receipt == 1): ?>
                <div class="col-12 mb-4">
                    <label for="" class="d-block"><?php echo e($keywords['Receipt'] ?? __('Receipt')); ?> **</label>
                    <input type="file" name="receipt">
                    <p class="mb-0 text-warning">**
                        <?php echo e($keywords['Receipt image must be .jpg / .jpeg / .png'] ?? __('Receipt image must be .jpg / .jpeg / .png')); ?>

                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php if($errors->has('receipt')): ?>
    <p class="text-danger mb-4"><?php echo e($errors->first('receipt')); ?></p>
<?php endif; ?>
<?php /**PATH C:\laragon\www\eorder\resources\views/user-front/product/payment-gateways.blade.php ENDPATH**/ ?>
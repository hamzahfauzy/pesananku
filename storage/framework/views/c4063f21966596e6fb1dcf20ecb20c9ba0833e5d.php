<div class="cart-total" id="orderTotal">
    <div class="shop-title-box">
        <h3><?php echo e($keywords['Order Total'] ?? __('Order Total')); ?></h3>
    </div>

    <div id="cartTotal">
        <?php
            $dataTax = tax();
            $dataTax = json_decode($dataTax, true);
            $subtoal = cartTotal() - $discount;
            ?>
          
        <ul class="cart-total-table">
            <li>
                <span class="col-title"><?php echo e($keywords['Cart Total'] ?? __('Cart Total')); ?></span>
                <span>

                    <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?>

                    <span data="<?php echo e(cartTotal()); ?>" class="subtotal"><?php echo e(cartTotal()); ?></span>
                    <?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>


                </span>
            </li>
            <li>
                <span class="col-title"><?php echo e($keywords['Discount'] ?? __('Discount')); ?></span>
                <span>
                    <i class="fas fa-minus"></i>
                    <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?>

                    <span data="<?php echo e($discount); ?>"><?php echo e($discount); ?></span>
                    <?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>


                </span>

            </li>
            <li>
                <span class="col-title"><?php echo e($keywords['Cart Subtotal'] ?? __('Cart Subtotal')); ?></span>
                <span>

                    <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?>

                    <span data="<?php echo e(cartTotal() - $discount); ?>" class="subtotal"
                        id="subtotal"><?php echo e($subtoal); ?></span>
                    <?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>



                </span>
            </li>
            <li>

                <span class="col-title"><?php echo e($keywords['Tax'] ?? __('Tax')); ?></span>
                <span>
                    <i class="fas fa-plus"></i>
                    <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?>

                    <span data-tax="<?php echo e($dataTax['tax']); ?>" id="tax"><?php echo e($dataTax['tax']); ?></span>
                    <?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>


                </span>
            </li>
            <li>
                <span class="col-title"><?php echo e($keywords['Shipping Charge'] ?? __('Shipping Charge')); ?></span>
                <span>
                    <i class="fas fa-plus"></i>
                    <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?>

                    <span data="0" class="shipping">0</span>
                    <?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>

                </span>
            </li>
            <li>
                <span class="col-title"><?php echo e($keywords['Total'] ?? __('Total')); ?></span>
                <span>
                   <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?>

                    <span
                        data=""
                        class="grandTotal">
                    </span>

                 <?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>

                </span>
            </li>
        </ul>
    </div>
    <?php if(!empty($packagePermissions) && in_array('Coupon', $packagePermissions)): ?>
        <div class="coupon">
            <h4 class="mb-3"><?php echo e($keywords['Coupon'] ?? __('Coupon')); ?></h4>
            <div class="form-group d-flex">
                <input type="text" class="form-control" name="coupon" value="">
                <button class="btn btn-primary base-btn" type="button"
                    onclick="applyCoupon();"><?php echo e($keywords['Apply'] ?? __('Apply')); ?></button>
            </div>
        </div>
    <?php endif; ?>

    <div class="payment-options">
        <h4 class="mb-4"><?php echo e($keywords['Pay Via'] ?? __('Pay Via')); ?></h4>
        <?php if ($__env->exists('user-front.product.payment-gateways')) echo $__env->make('user-front.product.payment-gateways', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php $__errorArgs = ['gateway'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger mb-0"><?php echo e(convertUtf8($message)); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="placeorder-button mt-4">
            <button class="main-btn w-100" type="button" form="payment" id="placeOrderBtn">
                <span class="btn-title">
                    <?php echo e($keywords['Place Order'] ?? __('Place Order')); ?>

                </span>
            </button>
        </div>
    </div>
 
</div>
<?php /**PATH C:\laragon\www\eorder\resources\views/user-front/qrmenu/partials/order_total.blade.php ENDPATH**/ ?>
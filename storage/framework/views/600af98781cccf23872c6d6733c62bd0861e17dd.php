<?php
    use App\Constants\Constant;
    use App\Http\Helpers\Uploader;
    use App\Models\User\Product;
?>


<?php $__env->startSection('pageHeading'); ?>
 <?php echo e($keywords['Checkout'] ?? __('Checkout')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-keywords', !empty($userSeo) ? $userSeo->checkout_meta_keywords : ''); ?>
<?php $__env->startSection('meta-description', !empty($userSeo) ? $userSeo->checkout_meta_description : ''); ?>
<?php $__env->startSection('content'); ?>

 
    <?php echo $__env->make('user-front.breadcrum',['title' => $upageHeading?->checkout_page_title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
    <section class="checkout-area">
        <form  method="POST" id="payment" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="table">
                            <div class="shop-title-box">
                                <h3><?php echo e($keywords["Serving Method"] ?? __('Serving Method')); ?></h3>
                            </div>
                            <table class="cart-table shipping-method">
                                <thead class="cart-header">
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e($keywords["Method"] ?? __('Method')); ?></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $smethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <?php if(!empty($packagePermissions) && in_array($sm->name, $packagePermissions)): ?>
                                        <td>

                                            <input type="radio" name="serving_method" class="shipping-charge"
                                                   value="<?php echo e($sm->value); ?>"
                                                   <?php if(empty(old()) && $loop->first): ?>
                                                       checked
                                                   <?php elseif(old('serving_method') == $sm->value): ?>
                                                       checked
                                                   <?php endif; ?>
                                                   data-gateways="<?php echo e($sm->gateways); ?>">
                                        </td>
                                        <td>
                                            <?php
                                                $smname = str_replace(' ','_',$sm->name);
                                            ?>

                                            <p class="mb-1"><strong><?php echo e($keywords[$smname] ?? __($sm->name)); ?></strong></p>
                                            <p class="mb-0"><small><?php echo e(__($sm->note)); ?></small></p>
                                        </td>

                                        <?php else: ?>
                                        <td class="d-none">
                                            <input type="radio" name="serving_method" class="shipping-charge"
                                                   value="<?php echo e($sm->value); ?>"
                                                   <?php if(empty(old()) && $loop->first): ?>
                                                       checked
                                                   <?php elseif(old('serving_method') == $sm->value): ?>
                                                       checked
                                                   <?php endif; ?>
                                                   data-gateways="<?php echo e($sm->gateways); ?>">
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php $__errorArgs = ['serving_method'];
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
                </div>
                <input type="hidden" name="ordered_from" value="website">
                <div class="form-container" id="home_delivery">
                    <?php if ($__env->exists('user-front.qrmenu.partials.home_delivery_form')) echo $__env->make('user-front.qrmenu.partials.home_delivery_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="form-container d-none" id="pick_up">
                    <?php if ($__env->exists('user-front.qrmenu.partials.pick_up_form')) echo $__env->make('user-front.qrmenu.partials.pick_up_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="form-container d-none" id="on_table">
                    <?php if ($__env->exists('user-front.qrmenu.partials.on_table_form')) echo $__env->make('user-front.qrmenu.partials.on_table_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="field-label"><?php echo e($keywords["Order Notes"] ?? __('Order Notes')); ?> </div>
                        <div class="field-input">
                            <textarea name="order_notes" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div id="paymentInputs"></div>
            </div>
            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                            <div class="table">
                                <div class="shop-title-box">
                                    <h3><?php echo e($keywords["Order Summary"] ?? __('Order Summary')); ?></h3>
                                </div>
                                <?php if(!empty($cart)): ?>
                                    <table class="cart-table">
                                        <thead class="cart-header">
                                        <tr>
                                            <th class="prod-column"
                                                width="10%"><?php echo e($keywords["Product"] ?? __('Product')); ?></th>
                                            <th width="70%"><?php echo e($keywords["Product Title"] ??  __('Product Title')); ?></th>
                                            <th><?php echo e($keywords["Quantity"] ?? __('Quantity')); ?></th>
                                            <th><?php echo e($keywords["Total"] ?? __('Total')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $id = $item["id"];
                                                 if(session()->has('user_lang')){
                                                    $lang = App\Models\User\Language::where('code',session()->get('user_lang'))->where('user_id',getUser()->id)->first();
                                                }else{
                                                   $lang = App\Models\User\Language::where('is_default',1)->where('user_id',getUser()->id)->first();
                                                }
                                                $product = Product::query()
                                                    ->join('product_informations', 'product_informations.product_id', 'products.id')
                                                    ->where('product_informations.language_id', $lang->id)
                                                    ->where('products.user_id', $user->id)
                                                    ->where('products.id', $id)
                                                    ->first();
                                            ?>
                                           <tr class="remove<?php echo e($id); ?>">
                                                <td class="prod-column" width="10%">
                                                    <div class="column-box">
                                                        <div class="prod-thumb">
                                                             <a
                                                                href="<?php echo e(route('user.front.product.details', [getParam(), $product->slug, $product->product_id])); ?>" target="_blank">
                                                            <img class="lazy"
                                                                 data-src="<?php echo e(Uploader::getImageUrl(Constant::WEBSITE_PRODUCT_FEATURED_IMAGE,$item['photo'],$userBs)); ?>"
                                                                 alt="" width="100">
                                                             </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td width="70%">
                                                    <div class="title">
                                                         <a
                                                                href="<?php echo e(route('user.front.product.details', [getParam(), $product->slug, $product->product_id])); ?>" target="_blank">
                                                        <h5 class="prod-title">
                                                             <?php echo e(strlen($product->title) > 27 ? mb_substr($product->title, 0, 27, 'UTF-8') . '...' : $product->title); ?>

                                                        </h5>
                                                        <?php if(!empty($item["variations"])): ?>

                                                         <?php
                                                                    $variations = $item['variations'];
                                                                    $prokeywords = json_decode($product->keywords, true);
                                                                    $addonkeywords = json_decode($product->addon_keywords, true);
                                                                    $sessionLang = session()->get('user_lang');

                                                                ?>

                                                            <p><strong><?php echo e($keywords["Variation"] ?? __("Variation")); ?>:</strong> <br>
                                                                <?php
                                                                    $variations = $item["variations"];
                                                                ?>
                                                                <?php $__currentLoopData = $variations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vKey => $variation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                 <?php

                                                                            $vname = $userCurrentLang->code . '_' . str_replace('_', ' ', $vKey);
                                                                            $voption = $userCurrentLang->code . '_' . $variation['name'];

                                                                        $variationName = isset($prokeywords['variation_name'][$vname]) ? $prokeywords['variation_name'][$vname] : '';
                                                                        $optionName = isset($prokeywords['option_name'][$voption]) ? $prokeywords['option_name'][$voption] : '';
                                                                    ?>
                                                                    <?php if(!empty($variationName)): ?>
                                                                        <span
                                                                            class="text-capitalize font-weight-bold <?php echo e($userCurrentLang->rtl == 1 ? 'text-right' : ''); ?>"><?php echo e($variationName); ?>:</span>
                                                                            <span class="<?php echo e($userCurrentLang->rtl == 1 ? 'text-right' : ''); ?>"><?php echo e($optionName); ?></span>

                                                                        <?php if(!$loop->last): ?>
                                                                           <span class="<?php echo e($userCurrentLang->rtl == 1 ? 'text-right' : ''); ?>"> ,</span>
                                                                    <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </p>
                                                         </a>
                                                        <?php endif; ?>
                                                        <?php if(!empty($item['addons'])): ?>
                                                            <p>
                                                                <strong><?php echo e($keywords["Addons"] ?? __("Addons")); ?>:</strong>
                                                                <?php
                                                                    $addons = $item["addons"];
                                                                ?>
                                                                <?php $__currentLoopData = $addons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php
                                                                        $addonkeywords = json_decode($product->addon_keywords, true);
                                                                        if (!empty($sessionLang)) {
                                                                            $aname = $sessionLang . '_' . $addon['name'];
                                                                        } else {
                                                                            $aname = $userCurrentLang->code . '_' . $addon['name'];
                                                                        }

                                                                    ?>

                                                                    <?php echo e($addonkeywords['addon_name'][$aname]); ?>

                                                                    <?php if(!$loop->last): ?>
                                                                        ,
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </p>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                                <td class="qty">
                                                    <?php echo e($item['qty']); ?>

                                                </td>
                                                <input type="hidden" value="<?php echo e($id); ?>" class="product_id">
                                                <td class="sub-total">
                                                    <?php echo e($userBe->base_currency_symbol_position == 'left' ? $userBe->base_currency_symbol : ''); ?>

                                                    <?php echo e($item['total']); ?>

                                                    <?php echo e($userBe->base_currency_symbol_position == 'right' ? $userBe->base_currency_symbol : ''); ?>

                                                </td>
                                            </tr>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <div class="py-5 bg-light text-center">
                                                <h5><?php echo e($keywords["Cart is empty"] ?? __('Cart is empty!')); ?></h5>
                                            </div>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <div class="text-center my-4">
                                        <a href="<?php echo e(route('user.front.index',getParam())); ?>"
                                           class="main-btn main-btn-2"><?php echo e($keywords["Return to Website"] ?? __('Return to Website')); ?></a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <?php if ($__env->exists('user-front.qrmenu.partials.order_total')) echo $__env->make('user-front.qrmenu.partials.order_total', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <script src="https://js.stripe.com/v3/"></script>
  <?php if ($__env->exists('user-front.qrmenu.partials.scripts')) echo $__env->make('user-front.qrmenu.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eorder\resources\views/user-front/product/checkout.blade.php ENDPATH**/ ?>
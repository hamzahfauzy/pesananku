<div class="modal fade" id="variationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">
                    <span></span>
                    <small class="ml-2">
                        (<?php echo e($userBe->base_currency_text_position == 'left' ? $userBe->base_currency_text : ''); ?>

                        <span id="productPrice"></span>
                        <?php echo e($userBe->base_currency_text_position == 'right' ? $userBe->base_currency_text : ''); ?>)
                    </small>
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="variants">
                    
                </div>
                <div class="addon-label mt-3">
                    <h5><?php echo e(__("Select Addons")); ?>

                        (<?php echo e(__('Optional')); ?>)</h5>
                </div>
                <div id="addons">
                    
                </div>
            </div>
            <div class="modal-footer d-block">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="modal-quantity">
                            <span class="minus"><i class="fas fa-minus"></i></span>
                            <input class="form-control" type="number" name="cart-amount" value="1" min="1">
                            <span class="plus"><i class="fas fa-plus"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <button type="button" class="btn btn-primary btn-block text-uppercase modal-cart-link mt-2" >
                            <span class="d-block" ><?php echo e(__('Add to Cart')); ?></span>
                            <i class="fas fa-spinner d-none"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\eorder\resources\views/user/pos/variation-modal.blade.php ENDPATH**/ ?>
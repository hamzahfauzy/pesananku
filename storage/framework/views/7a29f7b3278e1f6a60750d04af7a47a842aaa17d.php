<?php
    $user = getUser();
    $anet = App\Models\User\PaymentGateway::query()
        ->where('user_id', $user->id)
        ->where('keyword', 'authorize.net')
        ->first();
    $stripe = App\Models\User\PaymentGateway::query()
        ->where('user_id', $user->id)
        ->where('keyword', 'Stripe')
        ->first();
    if (!is_null($stripe?->information)) {
        $stripe = json_decode($stripe?->information, true);
        $stripe_key = $stripe['key'];
    } else {
        $stripe_key = '';
    }
    
    $anetSrc = 'https://jstest.authorize.net/v1/Accept.js';
    $anetAcceptSrc = 'https://jstest.authorize.net/v1/Accept.js';
    if (!is_null($anet) && $anet->information !== null) {
        $anetInfo = $anet->convertAutoData();
        $anetTest = $anetInfo['sandbox_check'];
        if ($anetTest != 1) {
            $anetSrc = 'assets/front/js/anet.js';
            $anetAcceptSrc = 'https://js.authorize.net/v1/Accept.js';
        }
    }
?>
<script type="text/javascript" src="<?php echo e(asset("${anetSrc}")); ?>" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo e($anetAcceptSrc); ?>" charset="utf-8"></script>
<script>
    "use strict";
    const clientKey = "<?php echo e(isset($anetInfo) ? $anetInfo['public_key'] : null); ?>";
    const apiLoginID = "<?php echo e(isset($anetInfo) ? $anetInfo['login_id'] : null); ?>";
    let stripe_key = "<?php echo e($stripe_key); ?>";
</script>
<script>
    const disDays = <?php echo json_encode($disDays); ?>;
    const postalCode = <?php echo e($userBs->postal_code); ?>;
    const time_frame = "<?php echo e($keywords['Select a Time Frame'] ?? 'Select a Time Frame'); ?>"
   
    function applyCoupon() {
        $.post(
            "<?php echo e(route('user.front.coupon', getParam())); ?>", {
                coupon: $("input[name='coupon']").val()
            },
            function(data) {
                if (data.status == 'success') {
                    toastr["success"](data.message);
                    $("input[name='coupon']").val('');
                    $("#cartTotal").load(location.href + " #cartTotal", function() {
                        calcTotal();
                    });
                } else {
                    toastr["error"](data.message);
                }
            }
        );
    }
    

    function loadTimeFrames(date, time) {
        if (date.length > 0) {
            $.get(
                "<?php echo e(route('user.front.timeframes', getParam())); ?>", {
                    date: date
                },
                function(data) {
                    let options = `<option value="" selected disabled>${time_frame}</option>`;
                    if (data.status == 'success') {
                        $("#deliveryTime").removeAttr('disabled');
                        let timeframes = data.timeframes;
                        for (let i = 0; i < timeframes.length; i++) {
                            options +=
                                `<option value="${timeframes[i].id}" ${time == timeframes[i].id ? 'selected' : ''}>${timeframes[i].start} - ${timeframes[i].end}</option>`
                        }
                    } else {
                        $("#deliveryTime").attr('disabled', true);
                        toastr["error"](data.message);
                    }
                    $("#deliveryTime").html(options);
                }
            )
        }
    }

   loadTimeFrames("<?php echo e(old('delivery_date')); ?>", "<?php echo e(old('delivery_time')); ?>");
   
</script>


<script src="<?php echo e(asset('assets/restaurant/js/qr-menu-script.js')); ?>"></script>
<?php /**PATH C:\laragon\www\eorder\resources\views/user-front/qrmenu/partials/scripts.blade.php ENDPATH**/ ?>
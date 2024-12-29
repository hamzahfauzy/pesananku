<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <h4 class="page-title"><?php echo e(__('Custom Domain')); ?></h4>
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
                <a href="#"><?php echo e(__('Domains & URLs')); ?></a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#"><?php echo e(__('Custom Domain')); ?></a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
           
            <div class="modal fade" id="customDomainModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('Request Custom Domain')); ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php if(cPackageHasCdomain(Auth::guard('web')->user())): ?>
                                <?php if(Auth::user()->custom_domains()->where('status', 1)->count() > 0): ?>
                                    <div class="alert alert-warning">
                                        <?php echo e(__('You already have an custom domain')); ?> (<a target="_blank" href="//<?php echo e(getCdomain(Auth::user())); ?>"><?php echo e(getCdomain(Auth::guard('web')->user())); ?></a>) <?php echo e(__('connected with your portfolio website.')); ?> <br>
                                        <?php echo e(__('if you request another domain now & if it gets connected with our server, then your current domain')); ?> (<a target="_blank" href="//<?php echo e(getCdomain(Auth::user())); ?>"><?php echo e(getCdomain(Auth::user())); ?></a>) <?php echo e(__('will be removed.')); ?>

                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <form action="<?php echo e(route('user.domain.request')); ?>" id="customDomainRequestForm" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Custom Domain')); ?></label>
                                    <input type="text" class="form-control" name="custom_domain"
                                           placeholder="example.com" required>
                                    <p class="text-secondary mb-0"><i class="fas fa-exclamation-circle"></i> <?php echo e(__('Do not use')); ?>

                                        <strong class="text-danger">http://</strong> <?php echo e(__('or')); ?> <strong class="text-danger">https://</strong>
                                        <?php echo e(__('or')); ?> <strong class="text-danger">www.</strong></p>
                                    <p class="text-secondary mb-0"><i class="fas fa-exclamation-circle"></i> <?php echo e(__('The valid
                                        format will be exactly like this one')); ?> - <strong
                                            class="text-danger">domain.com</strong> <?php echo e(__('or')); ?> <strong class="text-danger">subdomain.domain.com</strong>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                            <button type="submit" class="btn btn-primary" form="customDomainRequestForm"><?php echo e(__('Send Request')); ?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <?php if(session()->has('domain-success')): ?>
                <div class="alert alert-success bg-success text-white">
                    <p class="mb-0"><?php echo e(session()->get('domain-success')); ?></p>
                </div>
            <?php endif; ?>

            <?php if($errors->has('custom_domain')): ?>
                <div class="alert alert-danger bg-danger text-white">
                    <p class="mb-0"><?php echo e($errors->first('custom_domain')); ?>    </p>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-title d-inline-block"><?php echo e(__('Custom Domain')); ?></div>
                        </div>
                        <div class="offset-lg-4 col-lg-4 text-right">
                            <?php if(empty($rcDomain) || $rcDomain->status != 0): ?>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#customDomainModal">
                                    <?php echo e(__('Request Custom Domain')); ?>

                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if(empty($rcDomain)): ?>
                                <h3 class="text-center"><?php echo e(__('REQUESTED / CONNECTED CUSTOM DOMAIN NOT AVAILABLE')); ?></h3>
                            <?php else: ?>
                                <div class="table-responsive">
                                    <table class="table table-striped mt-3">
                                        <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('Requested Domain')); ?></th>
                                            <th scope="col"><?php echo e(__('Current Domain')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <?php if($rcDomain->status == 0): ?>
                                                    <a href="//<?php echo e($rcDomain->requested_domain); ?>"
                                                       target="_blank"><?php echo e($rcDomain->requested_domain); ?></a>
                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(getCdomain(Auth::user())): ?>
                                                    <?php
                                                        $cdomain = getCdomain(Auth::user());
                                                    ?>
                                                    <a target="_blank" href="//<?php echo e($cdomain); ?>"><?php echo e($cdomain ?? '-'); ?></a>
                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header"><h4 class="mb-0"><strong><?php echo e($be->cname_record_section_title); ?></strong></h4>
                </div>
                <div class="card-body">
                    <?php echo $be->cname_record_section_text; ?>

                </div>
                <div class="px-4">
                    <strong><?php echo e(__('Add CNAME record (take data from below table) in your custom domain from your domain registrar panel')); ?>:</strong>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th><?php echo e(__('Type')); ?></th>
                                <th><?php echo e(__('Host')); ?></th>
                                <th><?php echo e(__('Value')); ?></th>
                                <th><?php echo e(__('TTL')); ?>TTL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>CNAME</td>
                                <td>@</td>
                                <?php
                                    $parsedUrl = parse_url(url('/'));
                                    $host =  $parsedUrl['host'];
                                ?>
                                <td><?php echo e($host); ?>.</td>
                                <td><?php echo e(__('leave it to its default value')); ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eorder\resources\views/user/domains.blade.php ENDPATH**/ ?>
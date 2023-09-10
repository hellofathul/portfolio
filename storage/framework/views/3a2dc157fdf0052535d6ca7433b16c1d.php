<?php
    $footerInfo = \App\Models\FooterInfo::first();
    $footerIcons = \App\Models\FooterSocialLink::all();
    $footerUsefulLinks = \App\Models\FooterUsefulLink::all();
    $footerHelpLinks = \App\Models\FooterHelpLink::all();
    $footerContactInfo = \App\Models\FooterContactInfo::first();
?>

<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="<?php echo e(asset($generalSetting->footer_logo)); ?>" alt="">
                    </figure>
                    <p><?php echo e($footerInfo->info); ?></p>
                    <ul class="d-flex flex-wrap">
                        <?php $__currentLoopData = $footerIcons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e($icon->url); ?>"><i class="<?php echo e($icon->icon); ?>"></i></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Useful Link</h3>
                <ul class="nav-menu">
                    <?php $__currentLoopData = $footerUsefulLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $links): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($links->url); ?>"><?php echo e($links->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Contact Info</h3>
                <ul>
                    <li><?php echo e($footerContactInfo->address); ?></li>
                    <li><a href="#"><?php echo e($footerContactInfo->phone); ?></a></li>
                    <li><a href="#"><?php echo e($footerContactInfo->email); ?></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Help</h3>
                <ul class="nav-menu">
                    <?php $__currentLoopData = $footerHelpLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $links): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($links->url); ?>"><?php echo e($links->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p><?php echo e($footerInfo->copyright); ?></p>
                        <p><?php echo e($footerInfo->powered_by); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\laragon\www\portfolio\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>
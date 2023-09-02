<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - Fathul Amin</title>
    <link rel="shortcut icon" type="image/ico" href="images/favicon.png" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/style-plugin-collection.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/responsive.css')); ?>">
</head>

<body>
    <div class="preloader">
        <img src="<?php echo e(asset('frontend/assets/images/preloader.gif')); ?>" alt="">
    </div>

   <?php echo $__env->make('frontend.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">
        <?php echo $__env->yieldContent('content'); ?>
        <!-- Footer-Area-Start -->
        <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer-Area-End -->
    </div>


    <script src="<?php echo e(asset('frontend/assets/js/vendor/jquery-min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/contact-form.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/jquery-plugin-collection.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/vendor/modernizr.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\portfolio\resources\views/frontend/layouts/layout.blade.php ENDPATH**/ ?>
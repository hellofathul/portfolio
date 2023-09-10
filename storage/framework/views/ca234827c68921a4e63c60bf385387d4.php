<?php
    $generalSetting = \App\Models\GeneralSetting::first();
    $SEOSetting = \App\Models\SEOSetting::first();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="description" content="<?php echo e(@$SEOSetting->description); ?>">
    <meta name="keywords" content="<?php echo e(@$SEOSetting->keywords); ?>">
    <title><?php echo e(@$SEOSetting->title); ?></title>
    <link rel="shortcut icon" type="image/ico" href="<?php echo e(asset($generalSetting->favicon)); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/style-plugin-collection.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/responsive.css')); ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\portfolio\resources\views/frontend/layouts/layout.blade.php ENDPATH**/ ?>
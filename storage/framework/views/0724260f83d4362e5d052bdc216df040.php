

<?php $__env->startSection('content'); ?>
    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-8">
                    <h2 class="title">Portfolio Details</h2>
                </div>
                <div class="col-sm-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio-Area-Start -->
    <section class="portfolio-details section-padding" id="portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="head-title"><?php echo e($portfolio->title); ?></h2>
                    <figure class="image-block">
                        <img src="<?php echo e(asset($portfolio->image)); ?>" alt="" class="img-fix">
                    </figure>
                    <div class="portflio-info">
                        <div class="single-info">
                            <h4 class="title">Client</h4>
                            <p><?php echo e($portfolio->client); ?></p>
                        </div>
                        <div class="single-info">
                            <h4 class="title">Date</h4>
                            <p><?php echo e(date('d M, Y', strtotime($portfolio->created_at))); ?></p>
                        </div>
                        <div class="single-info">
                            <h4 class="title">Website</h4>
                            <p><a href="<?php echo e($portfolio->website); ?>"><?php echo e($portfolio->website); ?></a></p>
                        </div>
                        <div class="single-info">
                            <h4 class="title">Category</h4>
                            <p><?php echo e($portfolio->category->name); ?></p>
                        </div>
                    </div>
                    <div class="description">
                        <?php echo $portfolio->description; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-Area-End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portfolio\resources\views/frontend/portfolio-details.blade.php ENDPATH**/ ?>
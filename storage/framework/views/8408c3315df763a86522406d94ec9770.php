<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/selectric.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/bootstrap-tagsinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/bootstrap-timepicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/daterangepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/select2.min.css')); ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>">

</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Main Content -->
            <div class="main-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="https://nauval.in/">Admin Panel
                        Fathul Amin</a>
                </div>
                <div class="footer-right">
                    1.0.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?php echo e(asset('assets/js/stisla.js')); ?>"></script>

    <!-- JS Libraies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css"
        integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?php echo e(asset('assets/js/plugins/summernote-bs4.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.selectric.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.uploadPreview.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/bootstrap-tagsinput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/bootstrap-timepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/select2.full.min.js')); ?>"></script>


    <!-- Template JS File -->
    <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo e(asset('assets/js/page/features-post-create.js')); ?>"></script>
    <!-- Page Specific JS File -->
    <script src="<?php echo e(asset('assets/js/page/forms-advanced-forms.js')); ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Show dynamic validation errors -->
    <script>
        <?php if(!empty($errors->all())): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error("<?php echo e($error); ?>")
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </script>
    <script>
        $(document).ready(function() {
            //Csrf token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // SweetAlert2
            $('body').on('click', '.delete-item', function(e) {
                e.preventDefault();
                let deleteUrl = $(this).attr('href');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'DELETE',
                            url: deleteUrl,
                            success: function(data) {
                                Swal.fire(
                                    'Deleted!',
                                    'Title has been deleted.',
                                    'success'
                                )
                                setTimeout(function() {
                                    location.reload();
                                }, 500);
                            },

                            error: function(xhr, status, error) {
                                console.log(error);
                            }
                        })
                    }
                })
            })
        })
    </script>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\portfolio\resources\views/admin/layouts/layout.blade.php ENDPATH**/ ?>
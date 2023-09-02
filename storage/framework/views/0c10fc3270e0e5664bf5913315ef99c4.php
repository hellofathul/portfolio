

<?php $__env->startSection('content'); ?>
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, <?php echo e(old('name', $user->name)); ?>!</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <h4>Profile Information</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('profile.update')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('patch'); ?>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="<?php echo e(old('name', $user->name)); ?>" required="">
                                        <?php if($errors->get('name')): ?>
                                            <code><?php echo e($errors->first('name')); ?></code>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="<?php echo e(old('email', $user->email)); ?>" required="">
                                        <?php if($errors->get('email')): ?>
                                            <code><?php echo e($errors->first('email')); ?></code>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Password</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('password.update')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control" name="current_password" required=""
                                            autocomplete="current-password">
                                        <?php if($errors->updatePassword->has('current_password')): ?>
                                            <code><?php echo e($errors->updatePassword->first('current_password')); ?></code>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" name="password" required=""
                                            autocomplete="new-password">
                                        <?php if($errors->updatePassword->has('password')): ?>
                                            <code><?php echo e($errors->updatePassword->first('password')); ?></code>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            required="" autocomplete="new-password">
                                        <?php if($errors->updatePassword->has('password_confirmation')): ?>
                                            <code><?php echo e($errors->updatePassword->first('password_confirmation')); ?></code>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portfolio\resources\views/admin/profile/profile.blade.php ENDPATH**/ ?>
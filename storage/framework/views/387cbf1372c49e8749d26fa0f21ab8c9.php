<?php $__env->startSection('content'); ?>
    <div class="max-w-4xl mx-auto mt-8 space-y-8 bg-white ">

        <!-- Profile Header -->
        <div class="p-6 dark:bg-gray-800 sm:p-8">
            <h2 class="text-2xl lg:text-3xl font-bold text-center text-[#9a031fdd]">
                <?php echo e(__('My Profile Information')); ?>

            </h2>
        </div>

        <!-- Update Profile Information Form -->
        <div class="p-6 bg-white shadow-md dark:bg-gray-800 sm:p-8">
            <div class="w-full">

                <?php echo $__env->make('profile.partials.update-profile-information-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

        <!-- Update Password Form -->
        <div class="p-6 bg-white shadow-md dark:bg-gray-800 sm:p-8">
            <div class="w-full">

                <?php echo $__env->make('profile.partials.update-password-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

        <!-- Delete Account Form -->
        <div class="p-6 bg-white shadow-md dark:bg-gray-800 sm:p-8">
            <div class="w-full">

                <?php echo $__env->make('profile.partials.delete-user-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pKyouka\Documents\project\Kiddo_Bazzar2025\resources\views/profile/edit.blade.php ENDPATH**/ ?>
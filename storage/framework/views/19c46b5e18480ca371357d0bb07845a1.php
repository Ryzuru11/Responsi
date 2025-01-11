<div class="max-w-3xl p-6 mx-auto bg-white border border-gray-200 shadow dark:bg-gray-800 md:p-8 lg:p-10">

    <header>
        <h2 class="mb-4 text-xl font-bold text-yellow-600 underline lg:text-2xl dark:text-gray-100">
            <?php echo e(__('Delete Your Account')); ?>

        </h2>
        <p class="text-sm text-yellow-500 dark:text-gray-400">
            <?php echo e(__(' This action is permanent and cannot be
                                                                                                                                                                                                                                                                                                                        undone !')); ?>

        </p>
    </header>

    <?php if(session('status')): ?>
        <div
            class="p-4 mb-6 text-sm text-green-700 bg-green-100 border border-green-200 rounded-lg dark:bg-green-900 dark:text-green-400 dark:border-green-600">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('profile.destroy')); ?>" method="POST" class="space-y-6 ">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>

        <!-- Password Confirmation Field -->
        <div class="mb-6">
            <label for="password" class="block text-sm font-semibold text-gray-900 dark:text-gray-300">
                Confirm Your Password
            </label>
            <input type="password" name="password" id="password"
                class="w-full p-3 mt-2 text-gray-800 placeholder-gray-400 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 "
                placeholder="Enter your password" required>

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="mt-2 text-xs text-red-500"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Delete Account Button -->
        <div class="mb-6">
            <button type="submit" class="px-6 py-2 text-white bg-red-600 rounded-lg hover:bg-red-700 ">
                Delete Account
            </button>
        </div>
    </form>



</div>
<?php /**PATH C:\Users\pKyouka\Documents\project\Kiddo_Bazzar2025\resources\views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>
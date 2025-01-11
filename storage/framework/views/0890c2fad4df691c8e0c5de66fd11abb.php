<?php $__env->startSection('content'); ?>
    <div class="flex flex-col w-full max-h-screen overflow-y-auto ">


        <div class="flex items-center justify-around w-full mt-2 lg:justify-between">
            <span class="text-3xl font-semibold ml-5  text-[#9a031f] lg:font-bold lg:text-4xl">Categories
            </span>

        </div>
        <hr class="my-2 border-b-2 border-yellow-500">


        <div class="mx-5">
            <form action="<?php echo e(route('category.store')); ?>" method="POST" class="mt-5" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
                    <input type="text" id="priority" name="priority" placeholder="Enter Priority"
                        class="w-full p-2 mt-1 border-gray-300 shadow-sm" value="<?php echo e(old('priority')); ?>">
                    <?php $__errorArgs = ['priority'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-2 text-sm text-red-500"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Category Name"
                        class="w-full p-2 mt-1 border-gray-300 shadow-sm" value="<?php echo e(old('name')); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-2 text-sm text-red-500"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-4">
                    <label for="photopath" class="block text-sm font-medium text-gray-700">Photo</label>
                    <input type="file" id="photopath" name="photopath"
                        class="w-full p-2 mt-1 border-gray-300 shadow-sm ">
                    <?php $__errorArgs = ['photopath'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-2 text-sm text-red-500"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="flex justify-center gap-4 mt-4">
                    <input type="submit" value="Add Category"
                        class="px-5 py-3 text-white bg-blue-600 rounded-lg cursor-pointer">
                    <a href="<?php echo e(route('category.index')); ?>" class="px-10 py-3 text-white bg-red-600 rounded-lg">Exit</a>
                </div>
            </form>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pKyouka\Documents\project\Kiddo_Bazzar2025\resources\views/category/create.blade.php ENDPATH**/ ?>
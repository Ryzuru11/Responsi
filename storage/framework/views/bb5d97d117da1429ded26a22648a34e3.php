<?php $__env->startSection('content'); ?>
    <div class="flex flex-col w-full max-h-screen overflow-y-auto">
        <div class="flex items-center justify-around w-full mt-2 lg:justify-between">
            <span class="text-3xl font-semibold ml-5 text-[#9a031f] lg:font-bold lg:text-4xl">Categories</span>
        </div>
        <hr class="my-2 border-b-2 border-yellow-500">

        <div class="mx-5">
            <form action="<?php echo e(route('category.update', $category->id)); ?>" method="POST" enctype="multipart/form-data"
                class="mt-5">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <!-- Priority Input -->
                <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
                <input type="text" placeholder="Enter Priority" name="priority" class="w-full p-2 my-2"
                    value="<?php echo e(old('priority', $category->priority)); ?>">
                <?php $__errorArgs = ['priority'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <!-- Category Name Input -->
                <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" placeholder="Enter Category Name" name="name" class="w-full p-2 my-2"
                    value="<?php echo e(old('name', $category->name)); ?>">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <!-- Photo Input -->
                <label for="photopath" class="block text-sm font-medium text-gray-700">Photo</label>
                <input type="file" name="photopath" class="w-full p-2 my-2">
                <?php $__errorArgs = ['photopath'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <!-- Current Photo Display -->
                <p>Current photo:</p>
                <img src="<?php echo e(asset('images/categories/' . $category->photopath)); ?>" alt=""
                    class="object-cover w-16 h-16">

                <!-- Form Actions -->
                <div class="flex justify-center gap-4 mt-4">
                    <input type="submit" value="Update Category"
                        class="px-5 py-3 text-white bg-blue-600 rounded-lg cursor-pointer">
                    <a href="<?php echo e(route('category.index')); ?>" class="px-10 py-3 text-white bg-red-600 rounded-lg">Exit</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pKyouka\Documents\project\Kiddo_Bazzar2025\resources\views/category/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="flex flex-col w-full max-h-screen overflow-y-auto">

        
        <div class="flex items-center justify-around w-full mt-2 lg:justify-between">
            <span class="text-3xl font-semibold ml-5 text-[#9a031f] lg:font-bold lg:text-4xl">Products</span>
            <a href="<?php echo e(route('product.create')); ?>" class="px-3 py-1 text-white bg-yellow-500 rounded-lg">Add</a>
        </div>
        <hr class="my-2 border-b-2 border-yellow-500">

        
        <div class="container px-2 py-5 text-white sm:px-5">
            <div class="overflow-x-auto bg-white rounded shadow-md">
                <table class="min-w-full text-gray-800 table-auto">
                    <thead>
                        <tr class="text-white bg-gray-400">
                            <th class="p-2 border">S.N</th>
                            <th class="p-2 border">Product Picture</th>
                            <th class="p-2 border">Product Name</th>
                            <th class="p-2 border">Description</th>
                            <th class="p-2 border">Price</th>
                            <th class="p-2 border">Age Range</th>
                            <th class="p-2 border">Size</th>
                            <th class="p-2 border">Discounted Price</th>
                            <th class="p-2 border">Stock</th>
                            <th class="p-2 border">Status</th>
                            <th class="p-2 border">Category</th>
                            <th class="p-2 border">Brand</th>
                            <th class="p-2 border">Product Type</th>
                            <th class="p-2 border">Season</th>
                            <th class="p-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="transition duration-300 border-b bg-gray-50 hover:bg-blue-100">
                                <td class="p-2 border"><?php echo e($loop->iteration); ?></td>
                                <td class="p-2 border">
                                    <img src="<?php echo e(asset('images/products/' . $product->photopath)); ?>"
                                        alt="<?php echo e($product->name); ?>" class="object-cover w-16 h-16">
                                </td>
                                <td class="p-2 border"><?php echo e($product->name); ?></td>
                                <td class="p-2 border"><?php echo e(Str::limit($product->description, 30)); ?></td>
                                <td class="p-2 border"><?php echo e($product->price); ?></td>
                                <td class="p-2 border"><?php echo e($product->age_range); ?></td>
                                <td class="p-2 border"><?php echo e($product->size); ?></td>
                                <td class="p-2 border"><?php echo e($product->discounted_price); ?></td>
                                <td class="p-2 border"><?php echo e($product->stock); ?></td>
                                <td class="p-2 border"><?php echo e($product->status); ?></td>
                                <td class="p-2 border"><?php echo e($product->category->name); ?></td>
                                <td class="p-2 border"><?php echo e($product->brand); ?></td>
                                <td class="p-2 border"><?php echo e($product->product_type); ?></td>
                                <td class="p-2 border"><?php echo e($product->season); ?></td>
                                <td class="p-2 border">
                                    <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">
                                        <a href="<?php echo e(route('product.edit', $product->id)); ?>"
                                            class="w-full px-3 py-1 text-xs font-bold text-white bg-blue-600 rounded sm:w-auto sm:text-sm md:text-base lg:text-sm">Edit</a>
                                        <a href="<?php echo e(route('product.destroy', $product->id)); ?>"
                                            class="w-full px-3 py-1 text-xs font-bold text-white bg-red-600 rounded sm:w-auto sm:text-sm md:text-base lg:text-sm"
                                            onclick="return confirm('Are you sure to Delete?')">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pKyouka\Documents\project\Kiddo_Bazzar2025\resources\views/product/index.blade.php ENDPATH**/ ?>
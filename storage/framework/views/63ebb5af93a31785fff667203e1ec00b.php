<?php $__env->startSection('content'); ?>
    <div class="flex flex-col w-full max-h-screen px-4 overflow-y-auto sm:px-8">
        
        <div class="flex justify-around w-full mt-2 items -center lg:justify-between">
            <span class="text-3xl font-semibold ml-5 text-[#9a031f] lg:font-bold lg:text-4xl">Product</span>
        </div>
        <hr class="my-2 border-b-2 border-yellow-500">
        <!-- Product Form FOR EDIT -->
        <form action="<?php echo e(route('product.update', $product->id)); ?>" method="POST" class="space-y-4"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category_id" id="category_id" class="w-full p-2 mt-1 border-gray-300 ">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php if($category->id == $product->category_id): ?> selected <?php endif; ?>>
                            <?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <div>
                <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                <input type="text" name="brand" placeholder="Enter Brand" class="w-full p-2 my-2 rounded-lg"
                    value="<?php echo e(old('brand', $product->brand)); ?>">
                <?php $__errorArgs = ['brand'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div>
                <label for="product_type" class="block text-sm font-medium text-gray-700">Product Type</label>
                <input type="text" name="product_type" placeholder="Enter Product Type"
                    class="w-full p-2 my-2 rounded-lg" value="<?php echo e(old('product_type', $product->product_type)); ?>">
                <?php $__errorArgs = ['product_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div>
                <label for="season" class="block text-sm font-medium text-gray-700">Season</label>
                <select name="season" id="season" class="w-full p-2 my-2 border-gray-300 ">
                    <option value="summer" <?php if($product->season == 'summer'): ?> selected <?php endif; ?>>Summer</option>
                    <option value="winter" <?php if($product->season == 'winter'): ?> selected <?php endif; ?>>Winter</option>
                    <option value="autumn" <?php if($product->season == 'autumn'): ?> selected <?php endif; ?>>Autumn</option>
                    <option value="spring" <?php if($product->season == 'spring'): ?> selected <?php endif; ?>>Spring</option>
                    <option value="none" <?php if($product->season == 'none'): ?> selected <?php endif; ?>>None</option>
                </select>
            </div>
            
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" name="name" placeholder="Enter Product Name" class="w-full p-2 my-2 rounded-lg"
                    value="<?php echo e(old('name', $product->name)); ?>">
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
            </div>
            
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" placeholder="Enter Description" class="w-full p-2 my-2 rounded-lg"><?php echo e(old('description', $product->description)); ?></textarea>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="text" name="price" placeholder="Enter Price" class="w-full p-2 my-2 rounded-lg"
                    value="<?php echo e(old('price', $product->price)); ?>">
                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text -red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div>
                <label for="age_range" class="block text-sm font-medium text-gray-700">Age Range</label>
                <input type="text" name="age_range" placeholder="Enter Age Range" class="w-full p-2 my-2 rounded-lg"
                    value="<?php echo e(old('age_range', $product->age_range)); ?>">
                <?php $__errorArgs = ['age_range'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div>
                <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
                <input type="text" name="size" placeholder="Enter Size" class="w-full p-2 my-2 rounded-lg"
                    value="<?php echo e(old('size', $product->size)); ?>">
                <?php $__errorArgs = ['size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text -red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div>
                <label for="discounted_price" class="block text-sm font-medium text-gray-700">Discounted Price</label>
                <input type="text" name="discounted_price" placeholder="Enter Discounted Price"
                    class="w-full p-2 my-2 rounded-lg" value="<?php echo e(old('discounted_price', $product->discounted_price)); ?>">
                <?php $__errorArgs = ['discounted_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div>
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input type="text" name="stock" placeholder="Enter Stock" class="w-full p-2 my-2 rounded-lg"
                    value="<?php echo e(old('stock', $product->stock)); ?>">
                <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text -red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="w-full p-2 my-2 border-gray-300 ">
                    <option value="show" <?php if($product->status == 'show'): ?> selected <?php endif; ?>>Show</option>
                    <option value="hidden" <?php if($product->status == 'hidden'): ?> selected <?php endif; ?>>Hide</option>
                </select>
            </div>
            
            <div>
                <label for="photopath" class="block text-sm font-medium text-gray-700">Photo</label>
                <input type="file" name="photopath" class="w-full p-2 my-2 rounded-lg">
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
                <p>Current photo:</p>
                <img src="<?php echo e(asset('images/products/' . $product->photopath)); ?>" alt=""
                    class="object-cover w-16 h-16">
            </div>
            
            <div class="flex justify-center gap-4 mt-4">
                <input type="submit" value="Update Product"
                    class="px-5 py-3 text-white bg-blue-600 rounded-lg cursor-pointer">
                <a href="<?php echo e(route('product.index')); ?>" class="px-10 py-3 text-white bg-red-600 rounded-lg">Exit</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko_figure\toko_figure\resources\views/product/edit.blade.php ENDPATH**/ ?>
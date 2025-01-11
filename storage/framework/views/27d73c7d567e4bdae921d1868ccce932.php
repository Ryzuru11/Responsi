<?php $__env->startSection('content'); ?>
    <div class="px-4 md:px-16">
        <div class="pl-4 mt-5 mb-4 border-l-4 border-yellow-500">
            <h1 class="lg:text-3xl text-2xl font-bold text-[#a1c181]">SEARCH RESULTS</h1>
        </div>

        <div class="mx-3 mt-5">
            <!-- Responsive grid for all devices -->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Product Loop -->
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('viewproduct', $product->id)); ?>" class="flex flex-col">
                        <!-- Product card with responsive design -->
                        <div
                            class="overflow-hidden transition-transform duration-200 border rounded-lg shadow-lg hover:scale-105">
                            <img src="<?php echo e(asset('images/products/' . $product->photopath)); ?>" alt="<?php echo e($product->name); ?>"
                                class="object-cover w-full h-64">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold"><?php echo e(Str::limit($product->name, 20)); ?></h3>
                                <p class="text-sm text-gray-500"><?php echo e(Str::limit($product->description, 40)); ?></p>
                                <div class="mt-2">
                                    <span class="text-lg font-bold text-gray-900">Rs. <?php echo e($product->price); ?></span>
                                    <?php if($product->discounted_price): ?>
                                        <span class="text-sm text-gray-400 line-through">Rs.
                                            <?php echo e($product->discounted_price); ?></span>
                                        <span
                                            class="text-sm font-bold text-red-500">(<?php echo e(round((($product->discounted_price - $product->price) / $product->discounted_price) * 100)); ?>%
                                            OFF)</span>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="flex items-center mt-2">
                                    <div class="flex items-center">
                                        <?php
                                            // Use the average rating calculated from the model
                                            $averageRating = $product->reviews_avg_rating ?? 0; // Use 0 if no reviews
                                            $fullStars = floor($averageRating);
                                            $halfStars = $averageRating - $fullStars >= 0.5 ? 1 : 0;
                                            $emptyStars = 5 - ($fullStars + $halfStars);
                                        ?>

                                        
                                        <?php for($i = 0; $i < $fullStars; $i++): ?>
                                            <i class='text-yellow-500 bx bxs-star'></i>
                                        <?php endfor; ?>

                                        
                                        <?php if($halfStars): ?>
                                            <i class='text-yellow-500 bx bxs-star-half'></i>
                                        <?php endif; ?>

                                        
                                        <?php for($i = 0; $i < $emptyStars; $i++): ?>
                                            <i class='text-yellow-500 bx bx-star'></i>
                                        <?php endfor; ?>
                                    </div>

                                    
                                    <span class="ml-2 text-sm text-yellow-500"><?php echo e(number_format($averageRating, 1)); ?></span>
                                    <span class="ml-2 text-sm text-gray-400"><?php echo e($product->reviews->count()); ?> reviews</span>
                                </div>

                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="flex flex-col items-center justify-center h-full py-20 -mt-8">
                        <img src="<?php echo e(asset('images/no.png')); ?>" alt="No Products Found" class="w-40 h-40 mb-4">
                        <h1 class="text-2xl font-bold text-gray-900">ga Ada Produk yang Ditemukan</h1>
                        <p class="text-gray-500">Coba sesuaikan pencarian atau filter Anda untuk menemukan apa yang Anda cari.</p>
                        <a href="<?php echo e(route('home')); ?>"
                            class="px-4 py-2 mt-4 text-white bg-yellow-500 rounded hover:bg-yellow-600">Kembali ke tampilan Home</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    
    <div class="mt-10">
        <?php echo e($products->links()); ?>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko_figure\toko_figure\resources\views/search.blade.php ENDPATH**/ ?>
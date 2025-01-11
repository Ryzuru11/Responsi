<?php $__env->startSection('content'); ?>
    <div class="mx-auto mt-5 ">
        <!-- Product Details Grid -->
        <div class="grid grid-cols-1 gap-6 px-4 lg:px-16 md:grid-cols-4">
            <!-- Product Image -->
            <div class="md:col-span-1">
                <img src="<?php echo e(asset('images/products/' . $product->photopath)); ?>" alt="<?php echo e($product->name); ?>"
                    class="object-cover w-full transition-transform duration-300 transform rounded-lg shadow-lg h-72 md:h-96 hover:scale-105">
            </div>

            <!-- Product Info -->
            <div class="col-span-2 px-4 border-gray-200 border-x">


                <h2 class="text-2xl font-bold text-gray-600"><?php echo e($product->name); ?></h2>
                <p class="mt-2 text-lg font-bold text-gray-600">
                    <?php if($product->discounted_price != ''): ?>
                        Rp. <?php echo e($product->discounted_price); ?>

                        <span class="text-sm font-thin text-red-600 line-through">Rp. <?php echo e($product->price); ?></span>
                    <?php else: ?>
                        Rp. <?php echo e($product->price); ?>

                    <?php endif; ?>
                </p>

                <!-- Quantity and Add to Cart -->
                <form action="<?php echo e(route('cart.store')); ?>" method="POST" class="mt-5">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                    <div class="flex items-center space-x-1">
                        <button class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300" onclick="return dec()">-</button>
                        <input type="text" class="px-4 py-2 text-center bg-gray-100 border-none w-14" value="1"
                            id="qty" name="qty" readonly>
                        <button class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300" onclick="return inc()">+</button>
                    </div>
                    <p class="mt-2 text-gray-500">In Stock: <?php echo e($product->stock); ?></p>



                    <div class="flex items-center mt-2">
                        
                        <div class="flex items-center">
                            <?php
                                // Calculate the number of full stars, half stars, and empty stars
                                $fullStars = floor($averageRating); // Full stars based on rating
                                $halfStars = $averageRating - $fullStars >= 0.5 ? 1 : 0; // Half star if remaining rating is >= 0.5
                                $emptyStars = 5 - ($fullStars + $halfStars); // Remaining empty stars
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
                        <span class="ml-2 text-sm text-gray-400"><?php echo e($reviews->count()); ?> reviews</span>
                    </div>


                    <?php if($product->stock <= 0): ?>
                        <p class="text-red-600">Stok Habis</p>
                        <button type="submit" class="bg-[#9a031fdd] text-white px-4 py-2 mt-5 rounded" disabled>
                            Tambah Ke Keranjang <i class="text-lg bx bx-cart"></i>
                        </button>
                    <?php else: ?>
                        <button type="submit" class="bg-[#9a031fdd] text-white px-4 py-2 mt-5 rounded">
                        Tambah Ke Keranjang <i class="text-lg bx bx-cart"></i>
                        </button>
                    <?php endif; ?>
                    

                </form>
            </div>

            <!-- Delivery & Support Info -->
            <div class="px-4 py-4 rounded-lg shadow-sm bg-gray-50">
                <div class="space-y-4">
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-indigo-600 bx bxs-truck"></i>
                        <span class="text-sm text-gray-600">Pengiriman dalam 5 hari</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-green-600 bx bx-refresh"></i>
                        <span class="text-sm text-gray-600">Kebijakan pengembalian 7 hari</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-orange-600 bx bx-credit-card"></i>
                        <span class="text-sm text-gray-600">Pembayaran tunai saat pengiriman tersedia</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-red-600 bx bx-shield"></i>
                        <span class="text-sm text-gray-600">Garansi tersedia</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-blue-600 bx bx-headphone"></i>
                        <span class="text-sm text-gray-600">dukungan pelanggan 24/7</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-teal-600 bx bx-lock-alt"></i>
                        <span class="text-sm text-gray-600">Pembayaran aman 100%.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Description -->
        <div class="px-4 mt-10 lg:px-16">
            <h2 class="text-2xl font-bold text-black">Tentang Produk</h2>
            <p class="mt-2 text-lg text-gray-600"><?php echo e($product->description); ?></p>
        </div>

        <!-- Reviews Section -->
        <div class="px-4 mt-10 lg:px-16">
            <h2 class="pl-2 mb-4 text-2xl font-semibold border-l-4 border-yellow-500">Review costumer</h2>
            <?php if($reviews->isEmpty()): ?>
                <p class="text-gray-500">Belum ada ulasan. Jadilah orang pertama yang mengulas produk ini🥺!</p>
            <?php else: ?>
                <div class="h-56 mt-2 space-y-4 overflow-y-auto "> 
                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-6 mb-4 bg-white rounded-lg shadow-lg review">
                            <div class="flex items-center">
                                <div
                                    class="flex items-center justify-center w-12 h-12 text-xl font-semibold text-white bg-[#9a031fdd] rounded-full user-avatar">
                                    <?php echo e(strtoupper(substr($review->user->name, 0, 1))); ?>

                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold"><?php echo e($review->user->name); ?></h4>
                                    <div class="flex items-center">
                                        <!-- Display star rating based on review rating -->
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <svg class="w-6 h-6 <?php echo e($i <= $review->rating ? 'text-yellow-400' : 'text-gray-300'); ?>"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927C9.362 2.015 10.639 2.015 10.951 2.927l1.163 3.587 3.897.022c.998.006 1.412 1.285.611 1.846l-3.145 2.204 1.194 3.73c.322.986-.846 1.81-1.696 1.267L10 13.347l-3.174 2.236c-.85.543-2.018-.281-1.696-1.267l1.194-3.73-3.145-2.204c-.801-.561-.387-1.84.611-1.846l3.897-.022L9.049 2.927z" />
                                            </svg>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">Posted on
                                        <?php echo e($review->created_at->format('M d, Y')); ?></p>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-700"><?php echo e($review->review); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>


        

        <!-- Allow authenticated user to submit a review -->
        <!-- Review Form Section -->
        <?php if(auth()->guard()->check()): ?>


            <div class="px-4 mt-10 review-form lg:px-16">
                <h2 class="pl-2 mb-4 text-2xl font-semibold border-l-4 border-yellow-500">Leave a Review</h2>
                <form action="<?php echo e(route('review.store', $product->id)); ?>" method="POST"
                    class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <?php echo csrf_field(); ?>
                    <div class="flex items-center mb-4">
                        <label for="rating" class="mr-4">Rating:</label>
                        <select name="rating" id="rating" class="p-2 border rounded-md">
                            <option value="1">1 ⭐</option>
                            <option value="2">2 ⭐</option>
                            <option value="3">3 ⭐</option>
                            <option value="4">4 ⭐</option>
                            <option value="5">5 ⭐</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="review" class="block mb-2">Review:</label>
                        <textarea name="review" id="review" rows="4" class="w-full p-2 border rounded-md" required></textarea>
                    </div>
                    <button type="submit" class="p-2 text-white bg-[#9a031fdd] rounded-lg ">Submit
                        Review</button>
                </form>
            </div>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
            <div class="px-4 mt-5 lg:px-16">
                <p class="text-sm text-gray-600">Please <a href="<?php echo e(route('login')); ?>" class="text-yellow-500 underline">log
                        in</a> to leave a review.</p>
            </div>
        <?php endif; ?>

    </div>
    </div>


    </div>






    <!-- Related Products Section -->
    <div class="px-4 mt-10 lg:px-16">
        <div class="pl-2 border-l-4 border-yellow-500">
            <h1 class="text-2xl font-bold text-gray-900">Related Products</h1>
        </div>
        <div class="grid grid-cols-1 gap-6 mt-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <?php $__currentLoopData = $relatedproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <a href="<?php echo e(route('viewproduct', $rproduct->id)); ?>" class="flex-shrink-0">
                    <!-- Product card with fixed min-width for small/medium devices -->
                    <div class="overflow-hidden border rounded-lg shadow-lg min-w-[16rem]">
                        <img src="<?php echo e(asset('images/products/' . $rproduct->photopath)); ?>" alt="<?php echo e($rproduct->name); ?>"
                            class="object-cover w-full h-64">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold"><?php echo e(Str::limit($rproduct->name, 20)); ?></h3>
                            <p class="text-sm text-gray-500"><?php echo e(Str::limit($rproduct->description, 20)); ?></p>
                            <div class="mt-2">
                                <span class="text-lg font-bold text-gray-900">Rs. <?php echo e($rproduct->price); ?></span>
                                <?php if($rproduct->discounted_price): ?>
                                    <span class="text-sm text-gray-400 line-through">Rs.
                                        <?php echo e($rproduct->discounted_price); ?></span>
                                    <span
                                        class="text-sm font-bold text-red-500">(<?php echo e(round((($rproduct->discounted_price - $rproduct->price) / $rproduct->discounted_price) * 100)); ?>%
                                        OFF)</span>
                                <?php endif; ?>
                            </div>

                            <!-- Display the average rating for the related product -->
                            <div class="flex items-center mt-2">
                                <?php
                                    // Calculate the number of full stars, half stars, and empty stars for related products
                                    $fullStars = floor($relatedProductRatings[$rproduct->id] ?? 0);
                                    $halfStars =
                                        ($relatedProductRatings[$rproduct->id] ?? 0) - $fullStars >= 0.5 ? 1 : 0;
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

                                
                                <span
                                    class="ml-2 text-sm text-yellow-500"><?php echo e(number_format($relatedProductRatings[$rproduct->id] ?? 0, 1)); ?></span>
                                <span class="ml-2 text-sm text-gray-400"><?php echo e($rproduct->reviews()->count()); ?>

                                    reviews</span>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>



    <script>
        function inc() {
            let qty = document.getElementById('qty');
            if (parseInt(qty.value) < <?php echo e($product->stock); ?>)
                qty.value = parseInt(qty.value) + 1;
            return false;
        }

        function dec() {
            let qty = document.getElementById('qty');
            if (parseInt(qty.value) > 1)
                qty.value = parseInt(qty.value) - 1;
            return false;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko_figure\toko_figure\resources\views/viewproduct.blade.php ENDPATH**/ ?>
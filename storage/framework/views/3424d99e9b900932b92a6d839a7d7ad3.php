<?php $__env->startSection('content'); ?>
    <div class="flex flex-col flex-1">
        <!-- Header Section -->
        <div class="mb-6">
            <h1 class="text-4xl font-bold text-center text-[#9a031f] mt-4 lg:mt-0">Dashboard</h1>
            <hr class="h-1 mt-3 bg-yellow-500">
        </div>

        <!-- Dashboard Cards Section -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-4">
            <!-- Card: Total Categories -->
            <div class="p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                <div class="flex items-center space-x-4">
                    <i class="bx bx-category text-5xl text-[#9a031f]"></i>
                    <div class="flex flex-col text-center lg:text-left">
                        <h2 class="text-xl font-semibold text-[#9a031f]">Total Categories</h2>
                        <p class="text-4xl font-bold text-[#9a031f]"><?php echo e($categories); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card: Total Products -->
            <div class="p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                <div class="flex items-center space-x-4">
                    <i class="bx bx-box text-5xl text-[#9a031f]"></i>
                    <div class="flex flex-col text-center lg:text-left">
                        <h2 class="text-xl font-semibold text-[#9a031f]">Total Products</h2>
                        <p class="text-4xl font-bold text-[#9a031f]"><?php echo e($products); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card: Total Orders -->
            <div class="p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                <div class="flex items-center space-x-4">
                    <i class="bx bx-receipt text-5xl text-[#9a031f]"></i>
                    <div class="flex flex-col text-center lg:text-left">
                        <h2 class="text-xl font-semibold text-[#9a031f]">Total Orders</h2>
                        <p class="text-4xl font-bold text-[#9a031f]"><?php echo e($order); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card: Total Users -->
            <div class="p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                <div class="flex items-center space-x-4">
                    <i class="bx bx-user text-5xl text-[#9a031f]"></i>
                    <div class="flex flex-col text-center lg:text-left">
                        <h2 class="text-xl font-semibold text-[#9a031f]">Total Users</h2>
                        <p class="text-4xl font-bold text-[#9a031f]"><?php echo e($users); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card: Pending Orders -->
            <div class="p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                <div class="flex items-center space-x-4">
                    <i class="bx bx-hourglass text-5xl text-[#9a031f]"></i>
                    <div class="flex flex-col text-center lg:text-left">
                        <h2 class="text-xl font-semibold text-[#9a031f]">Pending Orders</h2>
                        <p class="text-4xl font-bold text-[#9a031f]"><?php echo e($pending); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card: Processing Orders -->
            <div class="p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                <div class="flex items-center space-x-4">
                    <i class="bx bx-loader text-5xl text-[#9a031f]"></i>
                    <div class="flex flex-col text-center lg:text-left">
                        <h2 class="text-xl font-semibold text-[#9a031f]">Processing Orders</h2>
                        <p class="text-4xl font-bold text-[#9a031f]"><?php echo e($processing); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card: Total Shipping -->
            <div class="p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                <div class="flex items-center space-x-4">
                    <i class="bx bx-truck text-5xl text-[#9a031f]"></i>
                    <div class="flex flex-col text-center lg:text-left">
                        <h2 class="text-xl font-semibold text-[#9a031f]">Total Shipping</h2>
                        <p class="text-4xl font-bold text-[#9a031f]"><?php echo e($shipping); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card: Completed Orders -->
            <div class="p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                <div class="flex items-center space-x-4">
                    <i class="bx bx-check-circle text-5xl text-[#9a031f]"></i>
                    <div class="flex flex-col text-center lg:text-left">
                        <h2 class="text-xl font-semibold text-[#9a031f]">Completed Orders</h2>
                        <p class="text-4xl font-bold text-[#9a031f]"><?php echo e($completed); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pKyouka\Documents\project\Kiddo_Bazzar2025\resources\views/dashboard.blade.php ENDPATH**/ ?>
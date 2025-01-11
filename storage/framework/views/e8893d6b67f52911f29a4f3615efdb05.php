<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>

    
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>


<body class="bg-gray-100">
    <?php echo $__env->make('layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Toggle Button for Small Screens -->
    <button id="sidebarToggle" class="fixed top-0 left-0 z-50 p-4 lg:hidden">
        <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <div class="flex ">



        <!-- Sidebar -->
        <div id="sidebar"
            class="fixed lg:relative bg-[#9a031f] w-44 h-full lg:h-screen z-40 lg:block lg:translate-x-0 transform -translate-x-full transition-transform duration-300 ease-in-out text-white">
            <div class="flex items-center justify-center py-2 -mb-10">
                <img src="<?php echo e(asset('images/kiddo_bazzar_logo.png')); ?>" alt="Logo" class="w-24 h-24">

            </div>
            <nav class="mt-10">
                <a href="<?php echo e(route('dashboard')); ?>"
                    class="block py-2.5 px-4 hover:bg-gray-200 rounded-lg hover:text-[#9a031f] font-semibold">Dashboard</a>
                <a href="<?php echo e(route('category.index')); ?>"
                    class="block py-2.5 px-4 hover:bg-gray-200 rounded-lg hover:text-[#9a031f] font-semibold">Categories</a>
                <a href="<?php echo e(route('product.index')); ?>"
                    class="block py-2.5 px-4 hover:bg-gray-200 rounded-lg 9a031f font-semibold hover:text-[#9a031f] ">Products</a>
                <a href="<?php echo e(route('banner.index')); ?>"
                    class="block py-2.5 px-4 hover:bg-gray-200 rounded-lg hover:text-[#9a031f] font-semibold">Banners</a>
                <a href="<?php echo e(route('order.index')); ?>"
                    class="block py-2.5 px-4 hover:bg-gray-200 rounded-lg hover:text-[#9a031f] font-semibold">Orders</a>
                <a href="<?php echo e(route('user.index')); ?>"
                    class="block py-2.5 px-4 hover:bg-gray-200 rounded-lg hover:text-[#9a031f] font-semibold">Users</a>
                <a href="<?php echo e(route('report')); ?>"
                    class="block py-2.5 px-4 hover:bg-gray-200 rounded-lg hover:text-[#9a031f] font-semibold">Report</a>


                <form action="<?php echo e(route('logout')); ?>" method="POST" class="">
                    <?php echo csrf_field(); ?>
                    <button type="submit" onclick="return confirm('Are you sure to logout?')" class="w-full ">
                        <span
                            class="block py-2.5 px-4 hover:bg-gray-200 rounded-lg hover:text-[#9a031f] font-semibold text-left ">Logout</span></button>
                </form>
            </nav>
        </div>

        <!-- Content -->
        <?php echo $__env->yieldContent('content'); ?>

    </div>





    <!-- JavaScript for Toggle -->
    <script>
        const sidebarToggle = document.getElementById("sidebarToggle");
        const sidebar = document.getElementById("sidebar");

        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
            sidebar.classList.toggle("translate-x-0");
        });
    </script>

</body>

</html>
<?php /**PATH C:\Users\pKyouka\Documents\project\Kiddo_Bazzar2025\resources\views/layouts/app.blade.php ENDPATH**/ ?>
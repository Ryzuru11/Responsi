<?php $__env->startSection('content'); ?>
    <div class="flex flex-col w-full max-h-screen px-4 overflow-y-auto sm:px-8">
        
        <div class="flex items-center justify-around w-full mt-2 lg:justify-between">
            <span class="text-3xl font-semibold ml-5 text-[#9a031f] lg:font-bold lg:text-4xl">Orders</span>
        </div>
        <hr class="my-2 border-b-2 border-yellow-500">

        
        <div class="overflow-x-auto bg-white rounded shadow-md">
            <table class="min-w-full text-gray-800 table-auto">
                <thead>
                    <tr class="text-gray-900 bg-gray-200">
                        <th class="p-2 border"> tanggal</th>
                        <th class="p-2 border"> gambar</th>
                        <th class="p-2 border">Produk </th>
                        <th class="p-2 border"> pelanggan</th>
                        <th class="p-2 border">Phone</th>
                        <th class="p-2 border">Alamat</th>
                        <th class="p-2 border">Harga</th>
                        <th class="p-2 border">Kualitas</th>
                        <th class="p-2 border">Total</th>
                        <th class="p-2 border">Metode Pembayaran </th>
                        <th class="p-2 border">Status</th>
                        <th class="p-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center ">
                            <td class="p-2 "><?php echo e($order->created_at->format('Y-m-d')); ?></td>
                            <td class="p-2 ">
                                <img src="<?php echo e(asset('images/products/' . $order->product->photopath)); ?>"
                                    alt="<?php echo e($order->product->name); ?>" class="object-cover w-20 h-20 mx-auto rounded-md">
                            </td>
                            <td class="p-2 "><?php echo e($order->product->name); ?></td>
                            <td class="p-2 "><?php echo e($order->name); ?></td>
                            <td class="p-2 "><?php echo e($order->phone); ?></td>
                            <td class="p-2 "><?php echo e($order->address); ?></td>
                            <td class="p-2 "><?php echo e($order->price); ?></td>
                            <td class="p-2 "><?php echo e($order->qty); ?></td>
                            <td class="p-2 "><?php echo e($order->qty * $order->price); ?></td>
                            <td class="p-2 "><?php echo e($order->payment_method); ?></td>
                            <td class="p-2 "><?php echo e($order->status); ?></td>
                            <td class="p-2 ">
                                <div class="grid gap-1 md:flex md:space-x-2">
                                    <a href="<?php echo e(route('order.status', [$order->id, 'Pending'])); ?>"
                                        class="px-2 py-1 text-xs text-white bg-blue-600 rounded-lg md:text-sm">Pending</a>
                                    <a href="<?php echo e(route('order.status', [$order->id, 'Processing'])); ?>"
                                        class="px-2 py-1 text-xs text-white bg-green-600 rounded-lg md:text-sm">Processing</a>
                                    <a href="<?php echo e(route('order.status', [$order->id, 'Shipping'])); ?>"
                                        class="px-2 py-1 text-xs text-white rounded-lg bg-amber-600 md:text-sm">Shipping</a>
                                    <a href="<?php echo e(route('order.status', [$order->id, 'Delivered'])); ?>"
                                        class="px-2 py-1 text-xs text-white bg-red-600 rounded-lg md:text-sm">Delivered</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko_figure\toko_figure\resources\views/orders/index.blade.php ENDPATH**/ ?>
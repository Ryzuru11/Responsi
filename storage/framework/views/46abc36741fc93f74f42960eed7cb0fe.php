<?php $__env->startSection('content'); ?>
    <div class="container px-4 py-8 mx-auto">
        <h1 class="px-4 mb-6 text-2xl text-[#9a031fdd] font-bold border-l-4 border-yellow-500">My Orders</h1>

        <?php if($orders->isEmpty()): ?>
            <div class="p-4 mb-6 text-yellow-700 bg-yellow-100 border-l-4 border-yellow-500" role="alert">
                <p>You have no orders.</p>
            </div>
        <?php else: ?>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                    <thead>
                        <tr class="text-sm text-gray-700 uppercase bg-gray-100">
                            <th class="px-4 py-3 text-left">ID</th>
                            <th class="px-4 py-3 text-left">Product</th>
                            <th class="px-4 py-3 text-left">Quantity</th>
                            <th class="px-4 py-3 text-left">Price</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-left">Payment Method</th>
                            <th class="px-4 py-3 text-left">Order Date</th>
                            <th class="px-4 py-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-b hover:bg-gray-100">
                                <td class="px-4 py-3"><?php echo e($order->id); ?></td>
                                <td class="px-4 py-3">
                                    <?php if($order->product): ?>
                                        <?php echo e($order->product->name); ?>

                                    <?php else: ?>
                                        <span class="text-red-500">Product not available</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3"><?php echo e($order->qty); ?></td>
                                <td class="px-4 py-3">Rs.<?php echo e(number_format($order->price, 2)); ?></td>
                                <td class="px-4 py-3">
                                    <span
                                        class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold
                                        <?php echo e($order->status == 'Pending'
                                            ? 'bg-yellow-600 text-white'
                                            : ($order->status == 'Shipping'
                                                ? 'bg-blue-200 text-blue-800'
                                                : ($order->status == 'Processing'
                                                    ? 'bg-orange-200 text-orange-800'
                                                    : ($order->status == 'Completed'
                                                        ? 'bg-green-200 text-green-800'
                                                        : 'bg-red-200 text-red-800')))); ?>">
                                        <?php echo e($order->status); ?>

                                    </span>
                                </td>
                                <td class="px-4 py-3"><?php echo e($order->payment_method); ?></td>
                                <td class="px-4 py-3"><?php echo e($order->created_at->format('d-m-Y')); ?></td>
                                <td class="p-2">
                                    <a class="px-3 py-1 text-white bg-[#9a031fdd] rounded cursor-pointer"
                                        onclick="showPopup('<?php echo e($order->id); ?>')">Cancel</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>

    
    <div class="fixed inset-0 items-center justify-center hidden bg-gray-600 bg-opacity-50 backdrop-blur-sm" id="popup">
        <form action="<?php echo e(route('order.destroy', '')); ?>" method="POST" class="px-10 py-5 text-center bg-white rounded-lg">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <h3 class="mb-5 text-lg font-bold">Are you sure to Delete?</h3>
            <input type="hidden" id="dataid" name="dataid">
            <div class="flex gap-3">
                <button type="submit" class="px-3 py-1 text-white bg-yellow-500 rounded">Yes! Delete</button>
                <a class="px-3 py-1 text-white bg-red-600 rounded cursor-pointer" onclick="hidePopup()">Cancel</a>
            </div>
        </form>
    </div>
    

    <script>
        function showPopup(id) {
            document.getElementById('popup').classList.remove('hidden');
            document.getElementById('popup').classList.add('flex');
            document.getElementById('dataid').value = id;
        }

        function hidePopup() {
            document.getElementById('popup').classList.remove('flex');
            document.getElementById('popup').classList.add('hidden');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pKyouka\Documents\project\Kiddo_Bazzar2025\resources\views/myorder.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="w-full max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-lg">
        <!-- Logo Section -->
        <div class="flex justify-center mb-6">
            <img src="<?php echo e(asset('images/kiddo_bazzar_logo.png')); ?>" alt="Kiddo Bazzar" class="object-contain w-20 h-20">
        </div>

        <h2 class="text-xl sm:text-xl font-bold text-[#051923] text-center mb-6">Register for Kiddo Bazzar</h2>

        <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data" class="space-y-6">
            <?php echo csrf_field(); ?>

            <!-- Profile Picture -->
            <div>
                <label for="profilePicture" class="block text-[#051923] font-medium mb-2">Profile Picture</label>
                <input type="file" id="profilePicture" name="profilePicture" value="" accept="image/*"
                    class="w-full border border-gray-300 rounded-md  text-[#051923]">
            </div>

            <!-- Full Name -->
            <div>
                <label for="name" class="block text-[#051923] font-medium mb-2">Full Name</label>
                <input id="name"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                    placeholder="Enter your full name" />

                
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            <!-- Phone Number -->
            <div>
                <label for="phone" class="block text-[#051923] font-medium mb-2">Phone Number</label>
                <input type="tel" id="phone" name="phone"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    placeholder="Enter your phone number" required>
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-[#051923] font-medium mb-2">Email</label>

                <input id="email"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    type="email" name="email" :value="old('email')" required autocomplete="username"
                    placeholder="Enter your email" />

                
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            <!-- Gender -->
            <div>
                <label class="block text-[#051923] font-medium mb-2">Gender</label>
                <div class="flex items-center space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="gender" value="male" class="text-[#051923] focus:ring-[#051923]"
                            required>
                        <span class="ml-2 text-[#051923]">Male</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="gender" value="female" class="text-[#051923] focus:ring-[#051923]"
                            required>
                        <span class="ml-2 text-[#051923]">Female</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="gender" value="other" class="text-[#051923] focus:ring-[#051923]"
                            required>
                        <span class="ml-2 text-[#051923]">Other</span>
                    </label>
                </div>
            </div>


            <!-- Address -->

            <div>
                <label for="address" class="block text-[#051923] font-medium mb-2">Address</label>
                <input id="address"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    type="text" name="address" required autocomplete="address" placeholder="Enter your address" />

                
                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            <!-- Password -->
            <div>
                <label for="password" class="block text-[#051923] font-medium mb-2">Password</label>

                <input id="password"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    type="password" name="password" required autocomplete="new-password"
                    placeholder="Enter your password" />


                
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            <!-- Confirm Password -->
            <div>
                <?php if (isset($component)) { $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'password_confirmation','value' => __('Confirm Password')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password_confirmation','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Confirm Password'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $attributes = $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $component = $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'password_confirmation','class' => 'block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]','type' => 'password','name' => 'password_confirmation','required' => true,'autocomplete' => 'new-password','placeholder' => 'Confirm your password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'password_confirmation','class' => 'block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]','type' => 'password','name' => 'password_confirmation','required' => true,'autocomplete' => 'new-password','placeholder' => 'Confirm your password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('password_confirmation'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('password_confirmation')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full py-2 text-white transition duration-300 bg-[#9a031fdd] rounded-md ">
                    Register
                </button>
            </div>
        </form>

        <!-- Login Link -->
        <p class="mt-4 text-center text-yellow-500">Already have an account?
            <a href="<?php echo e(route('login')); ?>" class="text-[#051923] hover:underline">Login here</a>
        </p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pKyouka\Documents\project\Kiddo_Bazzar2025\resources\views/auth/register.blade.php ENDPATH**/ ?>
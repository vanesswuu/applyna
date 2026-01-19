<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Applyna</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <a href="/" class="inline-block">
                <h1 class="text-3xl font-bold text-[#001F3F] mb-2">Applyna</h1>
            </a>
            <p class="text-gray-600">Welcome back! Please login to your account.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-6">
                <?php echo csrf_field(); ?>

                <?php if($errors->any()): ?>
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                        <ul class="list-disc list-inside text-sm">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="<?php echo e(old('email')); ?>"
                        required 
                        autofocus
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20 transition-all duration-300"
                        placeholder="you@example.com"
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20 transition-all duration-300"
                        placeholder="••••••••"
                    >
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            class="w-4 h-4 text-[#001F3F] border-gray-300 rounded focus:ring-[#001F3F]"
                        >
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-[#001F3F] hover:text-red-600 transition-colors">Forgot password?</a>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-[#001F3F] text-white px-6 py-3 rounded-xl font-semibold hover:bg-[#002a52] transition-all duration-300 hover:shadow-lg transform hover:-translate-y-0.5"
                >
                    Sign In
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account? 
                    <a href="<?php echo e(route('register')); ?>" class="text-[#001F3F] font-semibold hover:text-red-600 transition-colors">Sign up</a>
                </p>
            </div>
        </div>

        <div class="mt-6 text-center">
            <a href="/" class="text-sm text-gray-500 hover:text-[#001F3F] transition-colors">← Back to home</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\marlo\applyna\resources\views/auth/login.blade.php ENDPATH**/ ?>
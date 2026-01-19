<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Applyna</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-white min-h-screen flex items-center justify-center py-12">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <a href="/" class="inline-block">
                <h1 class="text-3xl font-bold text-[#001F3F] mb-2">Applyna</h1>
            </a>
            <p class="text-gray-600">Create your account and start your career journey.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            <form method="POST" action="<?php echo e(route('register')); ?>" class="space-y-6">
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
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="<?php echo e(old('name')); ?>"
                        required 
                        autofocus
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20 transition-all duration-300"
                        placeholder="John Doe"
                    >
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="<?php echo e(old('email')); ?>"
                        required
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
                    <p class="mt-1 text-xs text-gray-500">Must be at least 8 characters</p>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        required
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20 transition-all duration-300"
                        placeholder="••••••••"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">I am a</label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-[#001F3F] transition-all duration-300 has-[:checked]:border-[#001F3F] has-[:checked]:bg-[#001F3F]/5">
                            <input type="radio" name="role" value="job_seeker" class="sr-only peer" <?php echo e(old('role') === 'job_seeker' ? 'checked' : ''); ?> required>
                            <div class="text-center w-full">
                                <svg class="w-8 h-8 mx-auto mb-2 text-[#001F3F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Job Seeker</span>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-red-600 transition-all duration-300 has-[:checked]:border-red-600 has-[:checked]:bg-red-50">
                            <input type="radio" name="role" value="company" class="sr-only peer" <?php echo e(old('role') === 'company' ? 'checked' : ''); ?> required>
                            <div class="text-center w-full">
                                <svg class="w-8 h-8 mx-auto mb-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Company</span>
                            </div>
                        </label>
                    </div>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-[#001F3F] text-white px-6 py-3 rounded-xl font-semibold hover:bg-[#002a52] transition-all duration-300 hover:shadow-lg transform hover:-translate-y-0.5"
                >
                    Create Account
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Already have an account? 
                    <a href="<?php echo e(route('login')); ?>" class="text-[#001F3F] font-semibold hover:text-red-600 transition-colors">Sign in</a>
                </p>
            </div>
        </div>

        <div class="mt-6 text-center">
            <a href="/" class="text-sm text-gray-500 hover:text-[#001F3F] transition-colors">← Back to home</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\marlo\applyna\resources\views/auth/register.blade.php ENDPATH**/ ?>
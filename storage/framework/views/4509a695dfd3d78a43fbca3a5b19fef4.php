<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job - Company</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-50">
    <nav class="bg-[#001F3F] text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-6">
                    <a href="<?php echo e(route('company.dashboard')); ?>" class="text-2xl font-bold">Applyna Company</a>
                    <a href="<?php echo e(route('company.jobs.index')); ?>" class="text-sm text-gray-200 hover:text-white">Jobs</a>
                </div>
                <div class="flex items-center space-x-6">
                    <span class="text-sm text-gray-300">Welcome, <?php echo e(Auth::user()->name); ?></span>
                    <form method="POST" action="<?php echo e(route('logout')); ?>" class="inline">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-all duration-300">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-[#001F3F]">Create Job</h1>
                <p class="text-gray-600">Post an opening for your company.</p>
            </div>
            <a href="<?php echo e(route('company.jobs.index')); ?>" class="text-sm text-gray-600 hover:text-gray-900">← Back</a>
        </div>

        <?php if($errors->any()): ?>
            <div class="mt-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                <ul class="list-disc list-inside text-sm">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('company.jobs.store')); ?>" class="mt-6 bg-white rounded-xl shadow-lg p-6 border border-gray-100 space-y-5">
            <?php echo csrf_field(); ?>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                <input name="title" value="<?php echo e(old('title')); ?>" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20" placeholder="e.g., Sales Associate" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Province</label>
                    <input name="province" value="<?php echo e(old('province')); ?>" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20" placeholder="e.g., Cebu" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">City/Municipality</label>
                    <input name="city" value="<?php echo e(old('city')); ?>" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20" placeholder="e.g., Cebu City" />
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Location text (optional)</label>
                <input name="location_text" value="<?php echo e(old('location_text')); ?>" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20" placeholder="Displayed location, if different" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Employment type</label>
                    <input name="employment_type" value="<?php echo e(old('employment_type')); ?>" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20" placeholder="Full-time, Part-time, etc." />
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                <textarea name="description" rows="6" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20" placeholder="Describe responsibilities, requirements, perks..."><?php echo e(old('description')); ?></textarea>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-[#001F3F] text-white px-6 py-3 rounded-xl font-semibold hover:bg-[#002a52] transition-all">
                    Post Job
                </button>
                <a href="<?php echo e(route('company.jobs.index')); ?>" class="bg-white text-gray-800 px-6 py-3 rounded-xl font-semibold border-2 border-gray-200 hover:bg-gray-50 transition-all">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</body>
</html>

<?php /**PATH C:\Users\marlo\applyna\resources\views/company/jobs/create.blade.php ENDPATH**/ ?>
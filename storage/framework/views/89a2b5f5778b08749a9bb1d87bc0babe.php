<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications - Company</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-50">
    <nav class="bg-[#001F3F] text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-6">
                    <a href="<?php echo e(route('company.dashboard')); ?>" class="text-2xl font-bold">Applyna Company</a>
                    <a href="<?php echo e(route('company.jobs.index')); ?>" class="text-sm text-gray-200 hover:text-white">Jobs</a>
                    <a href="<?php echo e(route('company.applications.index')); ?>" class="text-sm text-gray-200 hover:text-white">Applications</a>
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

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-[#001F3F]">Applications</h1>
                <p class="text-gray-600">All submissions for your posted jobs.</p>
            </div>
        </div>

        <div class="mt-6 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="text-left text-xs font-semibold text-gray-600 uppercase tracking-wider px-6 py-3">Job</th>
                            <th class="text-left text-xs font-semibold text-gray-600 uppercase tracking-wider px-6 py-3">Applicant</th>
                            <th class="text-left text-xs font-semibold text-gray-600 uppercase tracking-wider px-6 py-3">Applied</th>
                            <th class="text-left text-xs font-semibold text-gray-600 uppercase tracking-wider px-6 py-3">Status</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php $__empty_1 = true; $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="px-6 py-4 text-gray-900 font-semibold"><?php echo e($app->job?->title); ?></td>
                                <td class="px-6 py-4 text-gray-700"><?php echo e($app->user?->name ?? 'Applicant'); ?></td>
                                <td class="px-6 py-4 text-gray-600"><?php echo e(optional($app->created_at)->diffForHumans()); ?></td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-800">
                                        <?php echo e(ucfirst(str_replace('_', ' ', $app->status))); ?>

                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right whitespace-nowrap">
                                    <a href="<?php echo e(route('company.applications.show', $app)); ?>" class="text-[#001F3F] hover:underline font-semibold">View</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5" class="px-6 py-8 text-center text-gray-600">No applications yet.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-6">
            <?php echo e($applications->links()); ?>

        </div>
    </div>
</body>
</html>

<?php /**PATH C:\Users\marlo\applyna\resources\views/company/applications/index.blade.php ENDPATH**/ ?>
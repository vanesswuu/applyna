<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Seeker Dashboard - Applyna</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <style>
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 31, 63, 0.15);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-[#001F3F] text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <h1 class="text-2xl font-bold">Applyna</h1>
                    <a href="/" class="text-gray-300 hover:text-white transition-colors">Home</a>
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
        <!-- Header -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-[#001F3F] mb-2">Job Seeker Dashboard</h2>
            <p class="text-gray-600">Track your applications and discover new opportunities</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#001F3F]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Applied Jobs</p>
                        <p class="text-3xl font-bold text-[#001F3F]"><?php echo e(number_format($stats['applied_jobs'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-[#001F3F]/10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-[#001F3F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-red-600">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Saved Jobs</p>
                        <p class="text-3xl font-bold text-red-600"><?php echo e(number_format($stats['saved_jobs'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#001F3F]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Interviews</p>
                        <p class="text-3xl font-bold text-[#001F3F]"><?php echo e(number_format($stats['interviews'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-[#001F3F]/10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-[#001F3F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-red-600">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Profile Views</p>
                        <p class="text-3xl font-bold text-red-600"><?php echo e(number_format($stats['profile_views'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Applications & Saved -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-[#001F3F] mb-4">Recent Applications</h3>
                <div class="space-y-4">
                    <?php $__empty_1 = true; $__currentLoopData = $recentApplications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="border-l-4 border-[#001F3F] pl-4 py-2">
                        <h4 class="font-semibold text-gray-900"><?php echo e($application['job']); ?></h4>
                        <p class="text-sm text-gray-600"><?php echo e($application['company']); ?></p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xs text-gray-500"><?php echo e($application['date']); ?></span>
                            <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                <?php echo e($application['status'] === 'Under Review' ? 'bg-yellow-100 text-yellow-800' : 
                                   ($application['status'] === 'Interview Scheduled' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800')); ?>">
                                <?php echo e($application['status']); ?>

                            </span>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-gray-600">No applications yet.</p>
                    <?php endif; ?>
                    <div class="mt-3">
                        <a href="<?php echo e(route('jobseeker.applications')); ?>" class="text-sm text-[#001F3F] hover:text-red-600 font-semibold">View all applications →</a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-[#001F3F] mb-4">Saved Jobs</h3>
                <div class="space-y-4">
                    <?php $__empty_1 = true; $__currentLoopData = $savedJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saved): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-[#001F3F] transition-all duration-300">
                            <h4 class="font-semibold text-gray-900 mb-1"><?php echo e($saved->job?->title); ?></h4>
                            <p class="text-sm text-gray-600 mb-2"><?php echo e($saved->job?->company_name); ?> • <?php echo e($saved->job?->city); ?>, <?php echo e($saved->job?->province); ?></p>
                            <a href="<?php echo e($saved->job ? route('jobs.show', $saved->job) : '#'); ?>" class="text-sm text-[#001F3F] hover:text-red-600 font-semibold">View Details →</a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-gray-600">No saved jobs yet.</p>
                    <?php endif; ?>
                    <div class="mt-3">
                        <a href="<?php echo e(route('jobseeker.saved')); ?>" class="text-sm text-[#001F3F] hover:text-red-600 font-semibold">View all saved →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\marlo\applyna\resources\views/jobseeker/dashboard.blade.php ENDPATH**/ ?>
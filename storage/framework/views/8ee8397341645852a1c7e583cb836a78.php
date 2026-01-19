<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Dashboard - Applyna</title>
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
            <a href="<?php echo e(route('company.jobs.index')); ?>" class="text-sm text-gray-200 hover:text-white">Manage Jobs</a>
            <a href="<?php echo e(route('company.applications.index')); ?>" class="text-sm text-gray-200 hover:text-white">Applications</a>
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
            <h2 class="text-3xl font-bold text-[#001F3F] mb-2">Company Dashboard</h2>
            <p class="text-gray-600">Manage your job postings and applications</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#001F3F]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Posted Jobs</p>
                        <p class="text-3xl font-bold text-[#001F3F]"><?php echo e(number_format($stats['posted_jobs'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-[#001F3F]/10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-[#001F3F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-red-600">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Applications</p>
                        <p class="text-3xl font-bold text-red-600"><?php echo e(number_format($stats['total_applications'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#001F3F]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Active Jobs</p>
                        <p class="text-3xl font-bold text-[#001F3F]"><?php echo e(number_format($stats['active_jobs'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-[#001F3F]/10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-[#001F3F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-red-600">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Pending Reviews</p>
                        <p class="text-3xl font-bold text-red-600"><?php echo e(number_format($stats['pending_reviews'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="mb-8">
            <a href="<?php echo e(route('company.jobs.create')); ?>" class="bg-[#001F3F] text-white px-6 py-3 rounded-xl font-semibold hover:bg-[#002a52] transition-all duration-300 inline-flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Post New Job</span>
            </a>
        </div>

        <!-- Recent Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-[#001F3F] mb-4">Recent Applications</h3>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Job Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Applicant</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php $__currentLoopData = $recentApplications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo e($application['job']); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo e($application['applicant']); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo e($application['date']); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    <?php echo e($application['status'] === 'New' ? 'bg-blue-100 text-blue-800' : 
                                       ($application['status'] === 'Reviewed' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800')); ?>">
                                    <?php echo e($application['status']); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <a href="<?php echo e(route('company.applications.index')); ?>" class="text-[#001F3F] hover:text-red-600">View</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\marlo\applyna\resources\views/company/dashboard.blade.php ENDPATH**/ ?>
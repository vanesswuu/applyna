<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Browse Jobs - Applyna</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-start justify-between gap-6 flex-col sm:flex-row">
            <div>
                <a href="/" class="text-sm text-gray-600 hover:text-gray-900">← Back to home</a>
                <h1 class="text-3xl font-bold text-[#001F3F] mt-2">Browse Jobs</h1>
                <p class="text-gray-600 mt-1">Search by job title/company and a PH location (city or province).</p>
            </div>
        </div>

        <div class="bg-white border border-gray-200 rounded-2xl p-5 mt-6 shadow-sm">
            <form method="GET" action="<?php echo e(route('jobs.index')); ?>" class="grid grid-cols-1 md:grid-cols-12 gap-3">
                <div class="md:col-span-5">
                    <input
                        name="q"
                        value="<?php echo e($q); ?>"
                        placeholder="Job title, keywords, or company"
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20"
                    />
                </div>
                <div class="md:col-span-5">
                    <input
                        name="where"
                        value="<?php echo e($where); ?>"
                        placeholder="Location (e.g., Cebu, Pampanga, Manila)"
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20"
                    />
                </div>
                <div class="md:col-span-2">
                    <button type="submit" class="w-full bg-[#001F3F] text-white px-6 py-3 rounded-xl font-semibold hover:bg-[#002a52] transition-all">
                        Search
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-6 space-y-4">
            <?php if($jobs->count() === 0): ?>
                <div class="bg-white border border-gray-200 rounded-2xl p-6 text-center text-gray-600">
                    No jobs found. Try a different keyword or location.
                </div>
            <?php endif; ?>

            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('jobs.show', $job)); ?>" class="block bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-md transition-all">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <div class="text-xl font-bold text-gray-900"><?php echo e($job->title); ?></div>
                            <div class="text-gray-700 mt-1"><?php echo e($job->company_name); ?></div>
                            <div class="text-gray-600 mt-2">
                                <?php echo e($job->city); ?>, <?php echo e($job->province); ?>

                                <?php if($job->employment_type): ?>
                                    <span class="mx-2 text-gray-300">•</span>
                                    <?php echo e($job->employment_type); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500">
                            Posted <?php echo e(optional($job->created_at)->diffForHumans()); ?>

                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="mt-8">
            <?php echo e($jobs->links()); ?>

        </div>
    </div>
</body>
</html>

<?php /**PATH C:\Users\marlo\applyna\resources\views/jobs/index.blade.php ENDPATH**/ ?>
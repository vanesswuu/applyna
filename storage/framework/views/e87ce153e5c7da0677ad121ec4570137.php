<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Details</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-50">
    <nav class="bg-[#001F3F] text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-6">
                    <a href="<?php echo e(route('company.dashboard')); ?>" class="text-2xl font-bold">Applyna Company</a>
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

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <a href="<?php echo e(route('company.applications.index')); ?>" class="text-sm text-gray-600 hover:text-gray-900">← Back to applications</a>

        <div class="bg-white border border-gray-200 rounded-2xl p-6 mt-4 shadow-sm space-y-4">
            <div class="flex items-start justify-between">
                <div>
                    <div class="text-sm text-gray-500">Job</div>
                    <div class="text-2xl font-bold text-gray-900"><?php echo e($application->job?->title); ?></div>
                    <div class="text-gray-700"><?php echo e($application->job?->city); ?>, <?php echo e($application->job?->province); ?></div>
                </div>
                <div class="text-right">
                    <div class="text-sm text-gray-500">Status</div>
                    <div class="font-semibold text-gray-900"><?php echo e(ucfirst(str_replace('_', ' ', $application->status))); ?></div>
                    <?php if($application->interview_at): ?>
                        <div class="text-sm text-gray-600">Interview: <?php echo e($application->interview_at->format('M d, Y H:i')); ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <div class="text-sm text-gray-500">Applicant</div>
                    <div class="text-lg font-semibold text-gray-900"><?php echo e($application->user?->name ?? 'Applicant'); ?></div>
                    <div class="text-sm text-gray-500">Applied <?php echo e(optional($application->created_at)->diffForHumans()); ?></div>
                </div>
                <div class="text-right">
                    <a href="<?php echo e(Storage::url($application->resume_path)); ?>" target="_blank" class="text-sm text-[#001F3F] font-semibold hover:underline">View Resume</a>
                </div>
            </div>

            <?php if($application->cover_letter): ?>
                <div>
                    <div class="text-sm font-semibold text-gray-800 mb-1">Cover Letter</div>
                    <div class="whitespace-pre-line text-gray-700"><?php echo e($application->cover_letter); ?></div>
                </div>
            <?php endif; ?>

            <?php if($application->answers): ?>
                <div class="space-y-2">
                    <div class="text-sm font-semibold text-gray-800">Screening Answers</div>
                    <?php $__currentLoopData = $application->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-3">
                            <div class="text-xs text-gray-500">Q<?php echo e($idx + 1); ?></div>
                            <div class="text-gray-800 whitespace-pre-line"><?php echo e($answer); ?></div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <?php if($application->assessment_score): ?>
                <div>
                    <div class="text-sm font-semibold text-gray-800">Assessment Score</div>
                    <div class="text-gray-900"><?php echo e($application->assessment_score); ?></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

<?php /**PATH C:\Users\marlo\applyna\resources\views/company/applications/show.blade.php ENDPATH**/ ?>
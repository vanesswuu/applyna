<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($job->title); ?> - Applyna</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <a href="<?php echo e(route('jobs.index')); ?>" class="text-sm text-gray-600 hover:text-gray-900">← Back to search</a>

        <div class="bg-white border border-gray-200 rounded-2xl p-7 mt-3 shadow-sm">
            <h1 class="text-3xl font-bold text-gray-900"><?php echo e($job->title); ?></h1>
            <div class="text-gray-700 mt-2"><?php echo e($job->company_name); ?></div>
            <div class="text-gray-600 mt-2">
                <?php echo e($job->city); ?>, <?php echo e($job->province); ?>

                <?php if($job->employment_type): ?>
                    <span class="mx-2 text-gray-300">•</span>
                    <?php echo e($job->employment_type); ?>

                <?php endif; ?>
            </div>

            <div class="mt-6">
                <h2 class="text-lg font-semibold text-[#001F3F]">Job description</h2>
                <div class="prose max-w-none text-gray-800 mt-2 whitespace-pre-line">
                    <?php echo e($job->description ?: 'No description provided.'); ?>

                </div>
            </div>

            <div class="mt-8 space-y-4">
                <?php if(auth()->guard()->check()): ?>
                    <form method="POST" action="<?php echo e(route('jobs.apply', $job)); ?>" enctype="multipart/form-data" class="bg-gray-50 border border-gray-200 rounded-xl p-5 space-y-4">
                        <?php echo csrf_field(); ?>
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-[#001F3F]">Apply Now</h3>
                            <p class="text-sm text-gray-500">Only <?php echo e($job->company_name); ?> can view your submission.</p>
                        </div>

                        <?php if(session('error')): ?>
                            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Resume (PDF/DOC, max 5MB)</label>
                            <input required name="resume" type="file" accept=".pdf,.doc,.docx" class="w-full text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Cover Letter (optional)</label>
                            <textarea name="cover_letter" rows="4" class="w-full px-3 py-2 rounded-lg border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20"></textarea>
                        </div>

                        <?php if($job->questions): ?>
                            <div class="space-y-3">
                                <h4 class="text-sm font-semibold text-gray-800">Screening Questions</h4>
                                <?php $__currentLoopData = $job->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                        <label class="block text-sm text-gray-700 mb-1"><?php echo e($question); ?></label>
                                        <textarea name="answers[<?php echo e($idx); ?>]" rows="2" class="w-full px-3 py-2 rounded-lg border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20"></textarea>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-red-700 transition-all">
                            Submit Application
                        </button>
                    </form>

                    <div class="flex gap-3">
                        <form method="POST" action="<?php echo e(route('jobs.save', $job)); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="bg-white text-[#001F3F] px-6 py-3 rounded-xl font-semibold border-2 border-[#001F3F] hover:bg-[#001F3F] hover:text-white transition-all">
                                Save Job
                            </button>
                        </form>
                        <form method="POST" action="<?php echo e(route('jobs.unsave', $job)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="bg-white text-gray-700 px-6 py-3 rounded-xl font-semibold border-2 border-gray-200 hover:bg-gray-50 transition-all">
                                Unsave
                            </button>
                        </form>
                    </div>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="bg-red-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-red-700 transition-all inline-block">
                        Sign in to apply
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php /**PATH C:\Users\marlo\applyna\resources\views/jobs/show.blade.php ENDPATH**/ ?>
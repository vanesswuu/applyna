<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Announcement - Admin</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-50">
    <nav class="bg-[#001F3F] text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-6">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="text-2xl font-bold">Applyna Admin</a>
                    <a href="<?php echo e(route('admin.announcements.index')); ?>" class="text-sm text-gray-200 hover:text-white">Announcements</a>
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
                <h1 class="text-2xl font-bold text-[#001F3F]">Edit Announcement</h1>
                <p class="text-gray-600">Update title/body and publish window.</p>
            </div>
            <a href="<?php echo e(route('admin.announcements.index')); ?>" class="text-sm text-gray-600 hover:text-gray-900">← Back</a>
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

        <form method="POST" action="<?php echo e(route('admin.announcements.update', $announcement)); ?>" class="mt-6 bg-white rounded-xl shadow-lg p-6 border border-gray-100 space-y-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                <input name="title" value="<?php echo e(old('title', $announcement->title)); ?>" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20" />
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Body</label>
                <textarea name="body" rows="6" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20"><?php echo e(old('body', $announcement->body)); ?></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Starts at (optional)</label>
                    <input
                        type="datetime-local"
                        name="starts_at"
                        value="<?php echo e(old('starts_at', $announcement->starts_at?->format('Y-m-d\\TH:i'))); ?>"
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20"
                    />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Ends at (optional)</label>
                    <input
                        type="datetime-local"
                        name="ends_at"
                        value="<?php echo e(old('ends_at', $announcement->ends_at?->format('Y-m-d\\TH:i'))); ?>"
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none focus:ring-2 focus:ring-[#001F3F]/20"
                    />
                </div>
            </div>

            <label class="flex items-center gap-2">
                <input type="checkbox" name="is_published" value="1" class="w-4 h-4 text-[#001F3F] border-gray-300 rounded focus:ring-[#001F3F]" <?php echo e(old('is_published', $announcement->is_published) ? 'checked' : ''); ?>>
                <span class="text-sm text-gray-700">Published</span>
            </label>

            <div class="flex gap-3">
                <button type="submit" class="bg-[#001F3F] text-white px-6 py-3 rounded-xl font-semibold hover:bg-[#002a52] transition-all">
                    Save
                </button>
                <a href="<?php echo e(route('admin.announcements.index')); ?>" class="bg-white text-gray-800 px-6 py-3 rounded-xl font-semibold border-2 border-gray-200 hover:bg-gray-50 transition-all">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</body>
</html>

<?php /**PATH C:\Users\marlo\applyna\resources\views/admin/announcements/edit.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements - Admin</title>
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

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-[#001F3F]">Announcements</h1>
                <p class="text-gray-600">These show on the landing page when published.</p>
            </div>
            <a href="<?php echo e(route('admin.announcements.create')); ?>" class="bg-[#001F3F] text-white px-4 py-2 rounded-lg hover:bg-[#002a52] transition-all">
                + New Announcement
            </a>
        </div>

        <?php if(session('success')): ?>
            <div class="mt-4 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="mt-6 bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="text-left text-xs font-semibold text-gray-600 uppercase tracking-wider px-6 py-3">Title</th>
                            <th class="text-left text-xs font-semibold text-gray-600 uppercase tracking-wider px-6 py-3">Published</th>
                            <th class="text-left text-xs font-semibold text-gray-600 uppercase tracking-wider px-6 py-3">Window</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-gray-900"><?php echo e($a->title); ?></div>
                                    <div class="text-sm text-gray-500">Created <?php echo e(optional($a->created_at)->diffForHumans()); ?></div>
                                </td>
                                <td class="px-6 py-4">
                                    <?php if($a->is_published): ?>
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">Published</span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-700">Draft</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-700">
                                    <div>Start: <?php echo e($a->starts_at?->format('Y-m-d H:i') ?? '—'); ?></div>
                                    <div>End: <?php echo e($a->ends_at?->format('Y-m-d H:i') ?? '—'); ?></div>
                                </td>
                                <td class="px-6 py-4 text-right whitespace-nowrap">
                                    <a href="<?php echo e(route('admin.announcements.edit', $a)); ?>" class="text-[#001F3F] hover:underline font-semibold">Edit</a>
                                    <form method="POST" action="<?php echo e(route('admin.announcements.destroy', $a)); ?>" class="inline" onsubmit="return confirm('Delete this announcement?');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="ml-3 text-red-600 hover:underline font-semibold">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if($announcements->count() === 0): ?>
                            <tr>
                                <td colspan="4" class="px-6 py-8 text-center text-gray-600">No announcements yet.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-6">
            <?php echo e($announcements->links()); ?>

        </div>
    </div>
</body>
</html>

<?php /**PATH C:\Users\marlo\applyna\resources\views/admin/announcements/index.blade.php ENDPATH**/ ?>
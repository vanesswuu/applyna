<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard - Applyna</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
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
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold">Applyna Admin</h1>
                </div>
                <div class="flex items-center space-x-6">
                    <span class="text-sm text-gray-300">Welcome, <?php echo e(Auth::user()->name); ?></span>
                    <a href="<?php echo e(route('admin.announcements.index')); ?>" class="text-sm text-gray-200 hover:text-white">Announcements</a>
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
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#001F3F]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Users</p>
                        <p class="text-3xl font-bold text-[#001F3F]"><?php echo e(number_format($stats['total_users'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-[#001F3F]/10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-[#001F3F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-red-600">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Jobs</p>
                        <p class="text-3xl font-bold text-red-600"><?php echo e(number_format($stats['total_jobs'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stat-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-[#001F3F]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Applications</p>
                        <p class="text-3xl font-bold text-[#001F3F]"><?php echo e(number_format($stats['active_applications'])); ?></p>
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
                        <p class="text-sm text-gray-600 mb-1">Companies</p>
                        <p class="text-3xl font-bold text-red-600"><?php echo e(number_format($stats['companies'])); ?></p>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- User Growth Chart -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-[#001F3F] mb-4">User Growth</h3>
                <canvas id="userGrowthChart" height="100"></canvas>
            </div>

            <!-- Application Status Chart -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-[#001F3F] mb-4">Application Status</h3>
                <canvas id="applicationStatusChart" height="100"></canvas>
            </div>
        </div>

        <!-- Revenue Chart -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-[#001F3F] mb-4">Quarterly Revenue</h3>
                <canvas id="revenueChart" height="80"></canvas>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-[#001F3F] mb-4">Recent Activity</h3>
                <div class="space-y-4">
                    <?php $__currentLoopData = $recentActivity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-0">
                        <div class="w-2 h-2 bg-red-600 rounded-full mt-2"></div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900"><?php echo e($activity['type']); ?></p>
                            <p class="text-xs text-gray-600"><?php echo e($activity['message']); ?></p>
                            <p class="text-xs text-gray-400 mt-1"><?php echo e($activity['time']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        // User Growth Chart
        const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
        new Chart(userGrowthCtx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($monthlyUsers['labels'], 15, 512) ?>,
                datasets: [{
                    label: 'Users',
                    data: <?php echo json_encode($monthlyUsers['data'], 15, 512) ?>,
                    borderColor: '#001F3F',
                    backgroundColor: 'rgba(0, 31, 63, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Application Status Chart
        const applicationStatusCtx = document.getElementById('applicationStatusChart').getContext('2d');
        new Chart(applicationStatusCtx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($applicationStatus['labels'], 15, 512) ?>,
                datasets: [{
                    data: <?php echo json_encode($applicationStatus['data'], 15, 512) ?>,
                    backgroundColor: [
                        '#001F3F',
                        '#1e3a5f',
                        '#3d5a7f',
                        '#7f9fbf',
                        '#ef4444'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });

        // Revenue Chart
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($revenue['labels'], 15, 512) ?>,
                datasets: [{
                    label: 'Revenue ($)',
                    data: <?php echo json_encode($revenue['data'], 15, 512) ?>,
                    backgroundColor: '#ef4444',
                    borderColor: '#dc2626',
                    borderWidth: 2,
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            callback: function(value) {
                                return '$' + value.toLocaleString();
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\marlo\applyna\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
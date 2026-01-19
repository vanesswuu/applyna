<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applyna - Find Your Dream Job Today</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(0, 31, 63, 0.3); }
            50% { box-shadow: 0 0 40px rgba(0, 31, 63, 0.6); }
        }
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        .animate-slide-in-left {
            animation: slideInLeft 0.8s ease-out forwards;
        }
        .animate-slide-in-right {
            animation: slideInRight 0.8s ease-out forwards;
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .animate-pulse-glow {
            animation: pulse-glow 3s ease-in-out infinite;
        }
        .gradient-animated {
            background-size: 200% 200%;
            animation: gradient-shift 8s ease infinite;
        }
        .nav-scrolled {
            background-color: rgba(0, 31, 63, 0.95);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .nav-scrolled .nav-logo,
        .nav-scrolled .nav-link {
            color: white !important;
        }
        .nav-scrolled .nav-link:hover {
            color: #fca5a5 !important;
        }
        .nav-scrolled .nav-menu-btn {
            color: white !important;
        }
        .navy-bg { background-color: #001F3F; }
        .navy-text { color: #001F3F; }
        .navy-border { border-color: #001F3F; }
        .stat-number {
            transition: all 0.3s ease;
        }
        .feature-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .feature-card:hover {
            transform: translateY(-10px) scale(1.02);
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 border-b border-gray-200 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center animate-slide-in-left">
                    <h1 class="text-2xl font-bold navy-text nav-logo">
                        Applyna
                    </h1>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-700 hover:text-[#001F3F] transition-all duration-300 hover:scale-110 nav-link">Features</a>
                    <a href="#how-it-works" class="text-gray-700 hover:text-[#001F3F] transition-all duration-300 hover:scale-110 nav-link">How It Works</a>
                    <a href="#jobs" class="text-gray-700 hover:text-[#001F3F] transition-all duration-300 hover:scale-110 nav-link">Browse Jobs</a>
                    <a href="<?php echo e(route('login')); ?>" class="bg-[#001F3F] text-white px-4 py-2 rounded-lg hover:bg-[#002a52] transition-all duration-300 hover:scale-105 hover:shadow-lg">Sign In</a>
                    <a href="<?php echo e(route('register')); ?>" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-all duration-300 hover:scale-105 hover:shadow-lg">Get Started</a>
                </div>
                <button class="md:hidden text-gray-700 nav-menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 bg-white relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-72 h-72 bg-[#001F3F] rounded-full mix-blend-multiply filter blur-xl opacity-5 animate-float"></div>
            <div class="absolute top-40 right-10 w-72 h-72 bg-red-200 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-float" style="animation-delay: 2s;"></div>
            <div class="absolute -bottom-8 left-1/2 w-72 h-72 bg-[#001F3F] rounded-full mix-blend-multiply filter blur-xl opacity-5 animate-float" style="animation-delay: 4s;"></div>
        </div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-[#001F3F] mb-6 leading-tight animate-fade-in-up">
                    Find Your
                    <span class="text-red-600">
                        Dream Job
                    </span>
                    Today
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s; opacity: 0;">
                    Connect with top employers and discover opportunities that match your skills and passion. 
                    Your next career move starts here.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-up" style="animation-delay: 0.4s; opacity: 0;">
                    <a href="#" class="bg-[#001F3F] text-white px-8 py-4 rounded-xl text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 hover:scale-105 animate-pulse-glow">
                        Start Job Search
                    </a>
                    <a href="#" class="bg-white text-[#001F3F] px-8 py-4 rounded-xl text-lg font-semibold border-2 border-[#001F3F] hover:bg-[#001F3F] hover:text-white transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        Post a Job
                    </a>
                </div>
                <div class="mt-12 flex flex-wrap justify-center gap-8 text-gray-600 animate-fade-in-up" style="animation-delay: 0.6s; opacity: 0;">
                    <div class="text-center stat-number">
                        <div class="text-3xl font-bold text-[#001F3F]" data-target="10000">0</div>
                        <div class="text-sm text-gray-500">Active Jobs</div>
                    </div>
                    <div class="text-center stat-number">
                        <div class="text-3xl font-bold text-[#001F3F]" data-target="50000">0</div>
                        <div class="text-sm text-gray-500">Job Seekers</div>
                    </div>
                    <div class="text-center stat-number">
                        <div class="text-3xl font-bold text-[#001F3F]" data-target="5000">0</div>
                        <div class="text-sm text-gray-500">Companies</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Bar -->
    <section class="py-8 px-4 sm:px-6 lg:px-8 -mt-12 animate-fade-in-up" style="animation-delay: 0.8s; opacity: 0;">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-2xl shadow-2xl p-6 md:p-8 border border-gray-100 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                <form class="flex flex-col md:flex-row gap-4" method="GET" action="<?php echo e(route('jobs.index')); ?>">
                    <div class="flex-1">
                        <input 
                            type="text" 
                            placeholder="Job title, keywords, or company"
                            name="q"
                            class="w-full px-6 py-4 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none text-lg transition-all duration-300 focus:ring-2 focus:ring-[#001F3F]/20"
                        >
                    </div>
                    <div class="flex-1">
                        <input 
                            type="text" 
                            placeholder="Location or Remote"
                            name="where"
                            class="w-full px-6 py-4 rounded-xl border-2 border-gray-200 focus:border-[#001F3F] focus:outline-none text-lg transition-all duration-300 focus:ring-2 focus:ring-[#001F3F]/20"
                        >
                    </div>
                    <button type="submit" class="bg-[#001F3F] text-white px-8 py-4 rounded-xl font-semibold hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300 hover:scale-105 hover:bg-[#002a52]">
                        Search Jobs
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Announcements + Top Hiring Locations -->
    <section class="py-10 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold text-[#001F3F]">Announcements</h3>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->role === 'admin'): ?>
                            <a href="<?php echo e(route('admin.announcements.index')); ?>" class="text-sm font-semibold text-[#001F3F] hover:underline">Manage</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <?php if(isset($announcements) && $announcements->count()): ?>
                    <div class="space-y-4">
                        <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-4 rounded-xl border border-gray-200 hover:border-[#001F3F] transition-all">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <div class="font-bold text-gray-900"><?php echo e($a->title); ?></div>
                                        <div class="text-sm text-gray-600 mt-1 whitespace-pre-line"><?php echo e($a->body); ?></div>
                                    </div>
                                    <div class="text-xs text-gray-500 whitespace-nowrap">
                                        <?php echo e(optional($a->created_at)->diffForHumans()); ?>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <div class="text-gray-600">No announcements yet.</div>
                <?php endif; ?>
            </div>

            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                <h3 class="text-2xl font-bold text-[#001F3F] mb-2">Top 10 Hiring Locations</h3>
                <p class="text-gray-600 mb-4">Based on open jobs and companies currently hiring.</p>

                <?php if(isset($topLocations) && count($topLocations)): ?>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="text-left text-xs font-semibold text-gray-600 uppercase tracking-wider px-4 py-3">Location</th>
                                    <th class="text-right text-xs font-semibold text-gray-600 uppercase tracking-wider px-4 py-3">Open Jobs</th>
                                    <th class="text-right text-xs font-semibold text-gray-600 uppercase tracking-wider px-4 py-3">Companies Hiring</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <?php $__currentLoopData = $topLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="font-semibold text-gray-900"><?php echo e($row->city); ?>, <?php echo e($row->province); ?></div>
                                        </td>
                                        <td class="px-4 py-3 text-right font-semibold text-gray-900"><?php echo e(number_format($row->open_jobs)); ?></td>
                                        <td class="px-4 py-3 text-right text-gray-700"><?php echo e(number_format($row->hiring_companies)); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="text-gray-600">No hiring data yet. Add job posts to populate this list.</div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-[#001F3F] mb-4">
                    Why Choose <span class="text-red-600">Applyna</span>?
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Everything you need to find your perfect job or hire the best talent
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card p-8 rounded-2xl bg-gradient-to-br from-navy-50 to-navy-100 border border-navy-200 hover:border-navy-400">
                    <div class="w-16 h-16 bg-navy-600 rounded-xl flex items-center justify-center mb-6 transform hover:rotate-12 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Smart Job Matching</h3>
                    <p class="text-gray-600">
                        Our AI-powered algorithm matches you with jobs that fit your skills, experience, and career goals.
                    </p>
                </div>
                <div class="feature-card p-8 rounded-2xl bg-white border-2 border-gray-200 hover:border-red-600 hover:shadow-xl">
                    <div class="w-16 h-16 bg-red-600 rounded-xl flex items-center justify-center mb-6 transform hover:rotate-12 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#001F3F] mb-3">Secure & Private</h3>
                    <p class="text-gray-600">
                        Your data is protected with enterprise-grade security. Control who sees your profile and applications.
                    </p>
                </div>
                <div class="feature-card p-8 rounded-2xl bg-gradient-to-br from-slate-50 to-blue-50 border border-slate-200 hover:border-slate-400">
                    <div class="w-16 h-16 bg-slate-600 rounded-xl flex items-center justify-center mb-6 transform hover:rotate-12 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Quick Applications</h3>
                    <p class="text-gray-600">
                        Apply to multiple jobs in seconds with our one-click application system. Save time and apply smarter.
                    </p>
                </div>
                <div class="feature-card p-8 rounded-2xl bg-white border-2 border-gray-200 hover:border-red-600 hover:shadow-xl">
                    <div class="w-16 h-16 bg-red-600 rounded-xl flex items-center justify-center mb-6 transform hover:rotate-12 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#001F3F] mb-3">Expert Support</h3>
                    <p class="text-gray-600">
                        Get personalized career advice from our team of experts. We're here to help you succeed.
                    </p>
                </div>
                <div class="feature-card p-8 rounded-2xl bg-white border-2 border-gray-200 hover:border-[#001F3F] hover:shadow-xl">
                    <div class="w-16 h-16 bg-[#001F3F] rounded-xl flex items-center justify-center mb-6 transform hover:rotate-12 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#001F3F] mb-3">Verified Employers</h3>
                    <p class="text-gray-600">
                        All companies are verified to ensure you're applying to legitimate opportunities with real employers.
                    </p>
                </div>
                <div class="feature-card p-8 rounded-2xl bg-white border-2 border-gray-200 hover:border-red-600 hover:shadow-xl">
                    <div class="w-16 h-16 bg-red-600 rounded-xl flex items-center justify-center mb-6 transform hover:rotate-12 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#001F3F] mb-3">Real-Time Updates</h3>
                    <p class="text-gray-600">
                        Get instant notifications when new jobs match your profile or when employers view your application.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 px-4 sm:px-6 lg:px-8 bg-white relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 right-0 w-96 h-96 bg-[#001F3F] rounded-full mix-blend-multiply filter blur-3xl opacity-5 animate-float"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-red-200 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-float" style="animation-delay: 3s;"></div>
        </div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-[#001F3F] mb-4">
                    How It <span class="text-red-600">Works</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Get started in three simple steps
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center animate-fade-in-up" style="animation-delay: 0.2s; opacity: 0;">
                    <div class="w-20 h-20 bg-[#001F3F] rounded-full flex items-center justify-center mx-auto mb-6 text-3xl font-bold text-white shadow-lg hover:scale-110 transition-transform duration-300 animate-float">
                        1
                    </div>
                    <h3 class="text-2xl font-bold text-[#001F3F] mb-4">Create Your Profile</h3>
                    <p class="text-gray-600">
                        Sign up in seconds and build your professional profile. Add your skills, experience, and career preferences.
                    </p>
                </div>
                <div class="text-center animate-fade-in-up" style="animation-delay: 0.4s; opacity: 0;">
                    <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl font-bold text-white shadow-lg hover:scale-110 transition-transform duration-300 animate-float" style="animation-delay: 1s;">
                        2
                    </div>
                    <h3 class="text-2xl font-bold text-[#001F3F] mb-4">Discover Opportunities</h3>
                    <p class="text-gray-600">
                        Browse thousands of job listings or let our AI match you with perfect opportunities based on your profile.
                    </p>
                </div>
                <div class="text-center animate-fade-in-up" style="animation-delay: 0.6s; opacity: 0;">
                    <div class="w-20 h-20 bg-[#001F3F] rounded-full flex items-center justify-center mx-auto mb-6 text-3xl font-bold text-white shadow-lg hover:scale-110 transition-transform duration-300 animate-float" style="animation-delay: 2s;">
                        3
                    </div>
                    <h3 class="text-2xl font-bold text-[#001F3F] mb-4">Apply & Get Hired</h3>
                    <p class="text-gray-600">
                        Apply with one click, track your applications, and connect directly with employers. Land your dream job!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-[#001F3F] relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="max-w-4xl mx-auto text-center relative z-10 animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Ready to Start Your Career Journey?
            </h2>
            <p class="text-xl text-gray-200 mb-8">
                Join thousands of job seekers who found their dream jobs on Applyna
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-white text-[#001F3F] px-8 py-4 rounded-xl text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 hover:scale-105">
                    Create Free Account
                </a>
                <a href="#" class="bg-red-600 text-white px-8 py-4 rounded-xl text-lg font-semibold hover:bg-red-700 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    Browse Jobs
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="animate-fade-in-up">
                    <h3 class="text-2xl font-bold text-white mb-4">Applyna</h3>
                    <p class="text-gray-400">
                        Connecting talent with opportunity. Your career journey starts here.
                    </p>
                </div>
                <div class="animate-fade-in-up" style="animation-delay: 0.1s; opacity: 0;">
                    <h4 class="text-white font-semibold mb-4">For Job Seekers</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Browse Jobs</a></li>
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Career Resources</a></li>
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Salary Calculator</a></li>
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Resume Builder</a></li>
                    </ul>
                </div>
                <div class="animate-fade-in-up" style="animation-delay: 0.2s; opacity: 0;">
                    <h4 class="text-white font-semibold mb-4">For Employers</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Post a Job</a></li>
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Search Resumes</a></li>
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Success Stories</a></li>
                    </ul>
                </div>
                <div class="animate-fade-in-up" style="animation-delay: 0.3s; opacity: 0;">
                    <h4 class="text-white font-semibold mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition-all duration-300 hover:translate-x-1 inline-block">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; <?php echo e(date('Y')); ?> Applyna. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.animate-fade-in-up').forEach(el => {
            if (el.style.opacity === '0') {
                observer.observe(el);
            }
        });

        // Number counting animation
        function animateValue(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.textContent = value.toLocaleString() + (end >= 1000 ? '+' : '');
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Trigger number animation when stats come into view
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number > div[data-target]');
                    statNumbers.forEach(stat => {
                        const target = parseInt(stat.getAttribute('data-target'));
                        animateValue(stat, 0, target, 2000);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.querySelector('.stat-number')?.closest('div');
        if (statsSection) {
            statsObserver.observe(statsSection.parentElement);
        }

        // Navbar scroll effect
        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 50) {
                navbar.classList.add('nav-scrolled');
            } else {
                navbar.classList.remove('nav-scrolled');
            }
            lastScroll = currentScroll;
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\marlo\applyna\resources\views/home.blade.php ENDPATH**/ ?>
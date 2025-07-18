@extends('layouts.public')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-cyan-100 dark:from-[#18192a] dark:via-[#23243a] dark:to-[#18192a] transition-colors duration-500 py-10 px-6">
    <div class="w-full max-w-7xl mx-auto">
        <!-- Hero Section -->
        <div class="flex flex-col items-center justify-center text-center mb-12">
            <h1 class="text-4xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-700 via-purple-500 to-cyan-400 bg-clip-text text-transparent mb-4 drop-shadow-lg">Welcome to ProjectTracko</h1>
            <p class="text-lg md:text-xl text-gray-700 dark:text-gray-200 mb-8 max-w-2xl mx-auto">Track, manage, and analyze infrastructure projects in Kisumu County with real-time updates, analytics, and transparency. Empowering admins, managers, contractors, and the public.</p>
            <div class="flex flex-col sm:flex-row gap-4 mb-12 justify-center">
                <a href="{{ route('login') }}" class="px-8 py-3 bg-gradient-to-r from-purple-500 to-cyan-400 text-white rounded-lg font-semibold shadow-lg hover:scale-105 hover:from-purple-600 hover:to-cyan-500 transition-all duration-300 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/></svg>
                    Login
                </a>
                <a href="{{ route('public.portal') }}" class="px-8 py-3 bg-white dark:bg-gray-800 text-blue-700 dark:text-cyan-300 rounded-lg font-semibold shadow-lg border border-blue-200 dark:border-cyan-700 hover:scale-105 hover:bg-blue-50 dark:hover:bg-cyan-900 transition-all duration-300 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                    View Public Portal
                </a>
            </div>
        </div>
        <!-- Features Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-blue-600 dark:text-cyan-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-6 0h6m-6 0a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2m-6 0a2 2 0 01-2-2"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-blue-600 dark:text-blue-300 mb-2">Project Management</h2>
                <p class="text-gray-600 dark:text-gray-300">Create, update, and track projects with milestones, budgets, and document uploads.</p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-purple-500 dark:text-purple-300 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 17a2 2 0 002 2m-2-2a2 2 0 01-2-2m2 2V7m0 10a2 2 0 002-2m-2 2a2 2 0 01-2-2m2 2a2 2 0 002-2m-2 2a2 2 0 01-2-2"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-purple-600 dark:text-purple-300 mb-2">Analytics & Reports</h2>
                <p class="text-gray-600 dark:text-gray-300">Visualize progress, budget usage, and generate downloadable reports for transparency.</p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-cyan-500 dark:text-cyan-300 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8s-9-3.582-9-8a9 9 0 1 1 18 0z"/></svg>
                </div>
                <h2 class="text-2xl font-bold text-cyan-600 dark:text-cyan-300 mb-2">Public Transparency</h2>
                <p class="text-gray-600 dark:text-gray-300">Public portal for citizens to view project details, progress, and provide feedback.</p>
            </div>
        </div>
    </div>
</section>
@endsection 
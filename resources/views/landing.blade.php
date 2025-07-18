<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectTracko - Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    @include('layouts.navigation')
    <section class="relative flex flex-col items-center justify-center min-h-screen text-center px-4">
        <h1 class="text-5xl font-extrabold text-blue-700 dark:text-blue-300 mb-4">Welcome to ProjectTracko</h1>
        <p class="text-lg text-gray-700 dark:text-gray-200 mb-8 max-w-2xl">Track, manage, and analyze infrastructure projects in Kisumu County with real-time updates, analytics, and transparency. Empowering admins, managers, contractors, and the public.</p>
        <div class="flex flex-col sm:flex-row gap-4 mb-12">
            <a href="{{ route('login') }}" class="px-8 py-3 bg-blue-600 text-white rounded-lg font-semibold shadow hover:bg-blue-700 transition">Login</a>
            <a href="{{ route('public.portal') }}" class="px-8 py-3 bg-gray-200 dark:bg-gray-700 text-blue-700 dark:text-blue-200 rounded-lg font-semibold shadow hover:bg-gray-300 dark:hover:bg-gray-600 transition">View Public Portal</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold text-blue-600 dark:text-blue-300 mb-2">Project Management</h2>
                <p class="text-gray-600 dark:text-gray-300">Create, update, and track projects with milestones, budgets, and document uploads.</p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold text-blue-600 dark:text-blue-300 mb-2">Analytics & Reports</h2>
                <p class="text-gray-600 dark:text-gray-300">Visualize progress, budget usage, and generate downloadable reports for transparency.</p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold text-blue-600 dark:text-blue-300 mb-2">Public Transparency</h2>
                <p class="text-gray-600 dark:text-gray-300">Public portal for citizens to view project details, progress, and provide feedback.</p>
            </div>
        </div>
    </section>
</body>
</html> 
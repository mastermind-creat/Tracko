<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Portal - ProjectTracko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    @include('layouts.navigation')
    <section class="max-w-6xl mx-auto py-8 px-4">
        <h1 class="text-3xl font-bold text-blue-700 dark:text-blue-300 mb-4">Public Project Dashboard</h1>
        <p class="mb-6 text-gray-700 dark:text-gray-200">Explore ongoing and completed projects in Kisumu County. Search, filter, and give your feedback to help improve transparency and accountability.</p>
        <!-- Search and Filter -->
        <form method="GET" class="flex flex-col md:flex-row gap-4 mb-6">
            <input type="text" name="search" placeholder="Search by project title or area" class="border rounded px-3 py-2 w-full md:w-1/3">
            <select name="sector" class="border rounded px-3 py-2 w-full md:w-1/4">
                <option value="">All Sectors</option>
                <option value="infrastructure">Infrastructure</option>
                <option value="health">Health</option>
                <option value="education">Education</option>
                <option value="water">Water</option>
            </select>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Search</button>
        </form>
        <!-- Project Status Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <span class="text-2xl font-bold text-blue-700">--</span>
                <span class="text-gray-600">Ongoing Projects</span>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <span class="text-2xl font-bold text-green-700">--</span>
                <span class="text-gray-600">Completed Projects</span>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <span class="text-2xl font-bold text-yellow-700">--</span>
                <span class="text-gray-600">Pending Projects</span>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <span class="text-2xl font-bold text-red-700">--</span>
                <span class="text-gray-600">Delayed Projects</span>
            </div>
        </div>
        <!-- Map Section -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <div class="text-xl font-bold mb-4">Project Map</div>
            <div class="w-full h-96 bg-gray-100 flex items-center justify-center rounded">
                <span class="text-gray-400">(Interactive map of project locations will appear here.)</span>
            </div>
        </div>
        <!-- Feedback/Comment Section -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <div class="text-xl font-bold mb-4">Share Your Feedback</div>
            <form method="POST" action="#">
                <textarea name="feedback" rows="3" class="w-full border rounded px-3 py-2 mb-2" placeholder="Your comments or suggestions..."></textarea>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Submit Feedback</button>
            </form>
        </div>
    </section>
</body>
</html> 
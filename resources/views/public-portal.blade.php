@extends('layouts.public')

@section('content')
<section class="max-w-7xl mx-auto py-12 px-4 bg-white dark:bg-[#18192a] rounded-xl shadow">
    <h1 class="text-4xl font-extrabold text-blue-700 dark:text-cyan-400 mb-4">Public Project Dashboard</h1>
    <p class="mb-8 text-lg text-gray-700 dark:text-gray-200 max-w-2xl">Explore ongoing and completed projects in Kisumu County. Search, filter, and give your feedback to help improve transparency and accountability.</p>
    <!-- Search and Filter -->
    <form method="GET" class="flex flex-col md:flex-row gap-4 mb-10">
        <input type="text" name="search" placeholder="Search by project title or area" class="border border-gray-300 dark:border-gray-700 rounded px-3 py-2 w-full md:w-1/3 bg-white dark:bg-[#23243a] text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
        <select name="sector" class="border border-gray-300 dark:border-gray-700 rounded px-3 py-2 w-full md:w-1/4 bg-white dark:bg-[#23243a] text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
            <option value="">All Sectors</option>
            <option value="infrastructure">Infrastructure</option>
            <option value="health">Health</option>
            <option value="education">Education</option>
            <option value="water">Water</option>
        </select>
        <button type="submit" class="rounded py-2 px-6 bg-gradient-to-r from-blue-600 to-cyan-400 text-white font-semibold hover:from-blue-700 hover:to-cyan-500 transition">Search</button>
    </form>
    <!-- Project Status Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
        <div class="bg-gray-100 dark:bg-[#23243a] rounded-xl shadow p-8 flex flex-col items-center">
            <span class="text-3xl font-extrabold text-blue-700 dark:text-cyan-400">--</span>
            <span class="text-gray-600 dark:text-gray-300 mt-2">Ongoing Projects</span>
        </div>
        <div class="bg-gray-100 dark:bg-[#23243a] rounded-xl shadow p-8 flex flex-col items-center">
            <span class="text-3xl font-extrabold text-green-700 dark:text-green-400">--</span>
            <span class="text-gray-600 dark:text-gray-300 mt-2">Completed Projects</span>
        </div>
        <div class="bg-gray-100 dark:bg-[#23243a] rounded-xl shadow p-8 flex flex-col items-center">
            <span class="text-3xl font-extrabold text-yellow-700 dark:text-yellow-400">--</span>
            <span class="text-gray-600 dark:text-gray-300 mt-2">Pending Projects</span>
        </div>
        <div class="bg-gray-100 dark:bg-[#23243a] rounded-xl shadow p-8 flex flex-col items-center">
            <span class="text-3xl font-extrabold text-red-700 dark:text-red-400">--</span>
            <span class="text-gray-600 dark:text-gray-300 mt-2">Delayed Projects</span>
        </div>
    </div>
    <!-- Map Section -->
    <div class="bg-gray-100 dark:bg-[#23243a] rounded-xl shadow p-8 mb-10">
        <div class="text-2xl font-bold mb-4 text-blue-700 dark:text-cyan-400">Project Map</div>
        <div class="w-full h-96 bg-gray-200 dark:bg-[#23243a] flex items-center justify-center rounded">
            <span class="text-gray-400">(Interactive map of project locations will appear here.)</span>
        </div>
    </div>
    <!-- Feedback/Comment Section -->
    <div class="bg-gray-100 dark:bg-[#23243a] rounded-xl shadow p-8 mb-10">
        <div class="text-2xl font-bold mb-4 text-blue-700 dark:text-cyan-400">Share Your Feedback</div>
        <form method="POST" action="#" x-data="{ loading: false }" @submit.prevent="loading = true; setTimeout(() => loading = false, 1500)">
            <textarea name="feedback" rows="3" class="w-full border border-gray-300 dark:border-gray-700 rounded px-3 py-2 mb-2 bg-white dark:bg-[#23243a] text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400" placeholder="Your comments or suggestions..."></textarea>
            <button type="submit" class="rounded py-2 px-6 bg-gradient-to-r from-blue-600 to-cyan-400 text-white font-semibold hover:from-blue-700 hover:to-cyan-500 transition flex items-center justify-center gap-2" :disabled="loading">
                <template x-if="loading">
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                    </svg>
                </template>
                <span x-text="loading ? 'Submitting...' : 'Submit Feedback'"></span>
            </button>
        </form>
    </div>
</section>
@endsection 
@extends('layouts.public')

@section('content')
<section class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-blue-50 via-white to-cyan-50 dark:from-[#18192a] dark:via-[#23243a] dark:to-[#18192a] transition-colors duration-500">
    <div class="max-w-7xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-16 animate-fade-in">
            <div class="inline-block bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg mb-6">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold bg-gradient-to-r from-blue-600 via-purple-500 to-cyan-400 bg-clip-text text-transparent mb-4">About ProjectTracko</h1>
            <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Empowering transparency, accountability, and community engagement for Kiauru County projects.
            </p>
        </div>

        <!-- Content Sections -->
        <div class="space-y-16">
            <!-- Mission Section -->
            <div class="grid md:grid-cols-12 gap-8 items-start">
                <div class="md:col-span-4 lg:col-span-3">
                    <div class="sticky top-24 p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg border-l-4 border-blue-500 transition-all duration-300 hover:shadow-xl">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Our Mission</h2>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-8 lg:col-span-9 bg-white dark:bg-gray-800 rounded-xl shadow-md p-8">
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                        To promote transparency, accountability, and community engagement by providing up-to-date information on local development initiatives in Kiauru County.
                    </p>
                    <div class="mt-6 grid sm:grid-cols-2 gap-4">
                        <div class="bg-blue-50 dark:bg-blue-900/30 p-4 rounded-lg border border-blue-100 dark:border-blue-800">
                            <h3 class="font-semibold text-blue-700 dark:text-blue-400 mb-2">Transparency</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Open access to project data and progress reports</p>
                        </div>
                        <div class="bg-purple-50 dark:bg-purple-900/30 p-4 rounded-lg border border-purple-100 dark:border-purple-800">
                            <h3 class="font-semibold text-purple-700 dark:text-purple-400 mb-2">Accountability</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Tracking project implementation and outcomes</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision Section -->
            <div class="grid md:grid-cols-12 gap-8 items-start">
                <div class="md:col-span-4 lg:col-span-3">
                    <div class="sticky top-24 p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg border-l-4 border-purple-500 transition-all duration-300 hover:shadow-xl">
                        <div class="flex items-center space-x-4">
                            <div class="bg-purple-100 dark:bg-purple-900 p-3 rounded-full">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Our Vision</h2>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-8 lg:col-span-9 bg-white dark:bg-gray-800 rounded-xl shadow-md p-8">
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                        To empower citizens and stakeholders with accessible project data, fostering trust and collaboration for sustainable development in Kiauru County.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row items-center bg-gradient-to-r from-purple-50 to-blue-50 dark:from-purple-900/20 dark:to-blue-900/20 rounded-xl p-6">
                        <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-6">
                            <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Community Focused</h3>
                            <p class="text-gray-600 dark:text-gray-300">We believe in putting the people of Kiauru County at the center of development tracking, ensuring their voices are heard and their needs are met.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How It Works Section -->
            <div class="grid md:grid-cols-12 gap-8 items-start">
                <div class="md:col-span-4 lg:col-span-3">
                    <div class="sticky top-24 p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg border-l-4 border-cyan-500 transition-all duration-300 hover:shadow-xl">
                        <div class="flex items-center space-x-4">
                            <div class="bg-cyan-100 dark:bg-cyan-900 p-3 rounded-full">
                                <svg class="w-6 h-6 text-cyan-600 dark:text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">How It Works</h2>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-8 lg:col-span-9">
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="bg-blue-100 dark:bg-blue-900 p-2 rounded-full mr-4">
                                    <span class="text-blue-600 dark:text-blue-400 font-bold">1</span>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Browse Projects</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">Explore ongoing and completed projects across various sectors in Kiauru County.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-100 dark:bg-purple-900 p-2 rounded-full mr-4">
                                    <span class="text-purple-600 dark:text-purple-400 font-bold">2</span>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Search & Filter</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">Find specific projects by title, location, sector, or status with our powerful search tools.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="bg-cyan-100 dark:bg-cyan-900 p-2 rounded-full mr-4">
                                    <span class="text-cyan-600 dark:text-cyan-400 font-bold">3</span>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">View Details</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">Access comprehensive project information including budgets, timelines, and progress updates.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <div class="bg-green-100 dark:bg-green-900 p-2 rounded-full mr-4">
                                    <span class="text-green-600 dark:text-green-400 font-bold">4</span>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Engage</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">Share feedback, report issues, and participate in community discussions about projects.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="grid md:grid-cols-12 gap-8 items-start">
                <div class="md:col-span-4 lg:col-span-3">
                    <div class="sticky top-24 p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg border-l-4 border-yellow-500 transition-all duration-300 hover:shadow-xl">
                        <div class="flex items-center space-x-4">
                            <div class="bg-yellow-100 dark:bg-yellow-900 p-3 rounded-full">
                                <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Our Team</h2>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-8 lg:col-span-9">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Team Member 1 -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                            <div class="h-40 bg-gradient-to-r from-blue-500 to-cyan-400 flex items-center justify-center">
                                <svg class="w-20 h-20 text-white opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.797.657 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0zm0 0V9a3 3 0 00-3-3h-1.5a3 3 0 00-3 3v.293m9.293-3.207l-3.593-3.593a1.5 1.5 0 00-2.12 0l-3.593 3.593a1.5 1.5 0 001.666 2.373h4.953a1.5 1.5 0 001.666-2.373z"></path>
                                </svg>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">Jane Doe</h3>
                                <p class="text-blue-600 dark:text-blue-400 font-medium mb-3">Project Lead</p>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Oversees all project tracking initiatives and community engagement.</p>
                            </div>
                        </div>
                        
                        <!-- Team Member 2 -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                            <div class="h-40 bg-gradient-to-r from-purple-500 to-pink-400 flex items-center justify-center">
                                <svg class="w-20 h-20 text-white opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">John Smith</h3>
                                <p class="text-purple-600 dark:text-purple-400 font-medium mb-3">Lead Developer</p>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Builds and maintains the ProjectTracko platform.</p>
                            </div>
                        </div>
                        
                        <!-- Team Member 3 -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                            <div class="h-40 bg-gradient-to-r from-green-500 to-teal-400 flex items-center justify-center">
                                <svg class="w-20 h-20 text-white opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">Mary Atieno</h3>
                                <p class="text-green-600 dark:text-green-400 font-medium mb-3">Community Liaison</p>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Connects with local communities to gather project updates.</p>
                            </div>
                        </div>
                        
                        <!-- Team Member 4 -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                            <div class="h-40 bg-gradient-to-r from-cyan-500 to-blue-400 flex items-center justify-center">
                                <svg class="w-20 h-20 text-white opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">Peter Otieno</h3>
                                <p class="text-cyan-600 dark:text-cyan-400 font-medium mb-3">GIS Specialist</p>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Manages project mapping and geographical data visualization.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
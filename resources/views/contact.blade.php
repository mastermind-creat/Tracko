@extends('layouts.public')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-cyan-100 dark:from-[#18192a] dark:via-[#23243a] dark:to-[#18192a] transition-colors duration-500 py-6 sm:py-8 md:py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-6 sm:mb-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 dark:text-cyan-400 mb-2">Get in Touch</h1>
            <p class="text-gray-700 dark:text-white text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
                Have questions, suggestions, or just want to say hello? We'd love to hear from you!<br>Our team is here to help and connect with our amazing community.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
            <!-- Contact Form -->
            <div class="lg:col-span-2 bg-white dark:bg-[#23243a] rounded-xl shadow-lg p-6 sm:p-8 border border-gray-200 dark:border-[#23243a] flex flex-col justify-center min-h-[24rem] sm:min-h-[28rem] lg:min-h-[32rem]">
                <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white mb-6 flex items-center">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 text-blue-700 dark:text-cyan-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8s-9-3.582-9-8a9 9 0 1 1 18 0z"/>
                    </svg>
                    <span>Send us a Message</span>
                </h2>
                <form method="POST" action="#" class="space-y-4" x-data="{ loading: false }" @submit.prevent="loading = true; $el.submit();">
                    @csrf
                    <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
                        <div class="flex-1">
                            <label class="block text-gray-900 dark:text-white text-sm sm:text-base mb-1" for="name">Full Name *</label>
                            <input type="text" id="name" name="name" class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400 text-sm sm:text-base" placeholder="Your full name" required>
                        </div>
                        <div class="flex-1">
                            <label class="block text-gray-900 dark:text-white text-sm sm:text-base mb-1" for="email">Email Address *</label>
                            <input type="email" id="email" name="email" class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400 text-sm sm:text-base" placeholder="your@email.com" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-900 dark:text-white text-sm sm:text-base mb-1" for="subject">Subject *</label>
                        <select id="subject" name="subject" class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="feedback">Feedback</option>
                            <option value="support">Support</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-900 dark:text-white text-sm sm:text-base mb-1" for="message">Message *</label>
                        <textarea id="message" name="message" rows="4 sm:rows-5" class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400 text-sm sm:text-base" placeholder="Tell us how we can help you..." required></textarea>
                    </div>
                    <button type="submit" class="w-full py-2 sm:py-3 rounded bg-gradient-to-r from-purple-500 to-cyan-400 text-white font-semibold text-sm sm:text-lg flex items-center justify-center gap-2 hover:from-purple-600 hover:to-cyan-500 transition" :disabled="loading">
                        <template x-if="loading">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                            </svg>
                        </template>
                        <span x-text="loading ? 'Sending...' : 'Send Message'"></span>
                    </button>
                </form>
            </div>

            <!-- Contact Info & Socials -->
            <div class="space-y-4 sm:space-y-6 flex flex-col justify-center min-h-[24rem] sm:min-h-[28rem] lg:min-h-[32rem]">
                <!-- Contact Information -->
                <div class="bg-white dark:bg-[#23243a] rounded-xl shadow-lg p-4 sm:p-6 border border-gray-200 dark:border-[#23243a]">
                    <h3 class="text-base sm:text-lg font-semibold text-gray-900 dark:text-white mb-4">Contact Information</h3>
                    <ul class="space-y-3 text-gray-700 dark:text-white text-sm sm:text-base">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-700 dark:text-cyan-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0a8 8 0 1 1-16 0 8 8 0 0 1 16 0z"/>
                            </svg>
                            <span>Email Us<br><span class="ml-6 sm:ml-7 text-blue-700 dark:text-cyan-300">info@projecttracko.com</span></span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-700 dark:text-cyan-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8a2  Ascent-4 4 0 0 1 2 2 2 0 0 0 0 z"/>
                            </svg>
                            <span>Live Chat<br><span class="ml-6 sm:ml-7 text-blue-700 dark:text-cyan-300">Available 24/7</span></span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-700 dark:text-cyan-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414a8 8 0 1 0-1.414 1.414l4.243 4.243a1 1 0 0 0 1.414-1.414z"/>
                            </svg>
                            <span>Location<br><span class="ml-6 sm:ml-7 text-blue-700 dark:text-cyan-300">Kisumu County, KE</span></span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-700 dark:text-cyan-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"/>
                            </svg>
                            <span>Response Time<br><span class="ml-6 sm:ml-7 text-blue-700 dark:text-cyan-300">< 24 hours</span></span>
                        </li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div class="bg-white dark:bg-[#23243a] rounded-xl shadow-lg p-4 sm:p-6 border border-gray-200 dark:border-[#23243a]">
                    <h3 class="text-base sm:text-lg font-semibold text-gray-900 dark:text-white mb-4">Follow Us</h3>
                    <div class="flex flex-wrap gap-2 sm:gap-3">
                        <a href="https://github.com/mastermind-creat" target="_blank" class="flex items-center gap-2 px-2 sm:px-3 py-1 sm:py-2 rounded bg-gray-50 dark:bg-[#18192a] text-blue-700 dark:text-white hover:bg-cyan-100 dark:hover:bg-cyan-600 transition text-sm sm:text-base">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.56v-2.01c-3.2.7-3.87-1.54-3.87-1.54-.53-1.34-1.3-1.7-1.3-1.7-1.06-.72.08-.71.08-.71 1.17.08 1.79 1.2 1.79 1.2 1.04 1.78 2.73 1.27 3.4.97.11-.75.41-1.27.74-1.56-2.55-.29-5.23-1.28-5.23-5.7 0-1.26.45-2.29 1.19-3.09-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 2.9-.39c.98.01 1.97.13 2.9.39 2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.8 1.19 1.83 1.19 3.09 0 4.43-2.69 5.41-5.25 5.7.42.36.79 1.08.79 2.18v3.24c0 .31.21.67.8.56C20.71 21.39 24 17.08 24 12c0-6.27-5.23-11.5-12-11.5z"/>
                            </svg>
                            GitHub
                        </a>
                        <a href="#" class="flex items-center gap-2 px-2 sm:px-3 py-1 sm:py-2 rounded bg-gray-50 dark:bg-[#18192a] text-blue-700 dark:text-white hover:bg-red-100 dark:hover:bg-red-600 transition text-sm sm:text-base">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a2.994 2.994 0 0 0-2.112-2.12C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.386.566a2.994 2.994 0 0 0-2.112 2.12C0 8.07 0 12 0 12s0 3.93.502 5.814a2.994 2.994 0 0 0 2.112 2.12C4.5 20.5 12 20.5 12 20.5s7.5 0 9.386-.566a2.994 2.994 0 0 0 2.112-2.12C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432l6.545 3.568-6.545 3.568z"/>
                            </svg>
                            YouTube
                        </a>
                        <a href="#" class="flex items-center gap-2 px-2 sm:px-3 py-1 sm:py-2 rounded bg-gray-50 dark:bg-[#18192a] text-blue-700 dark:text-white hover:bg-blue-100 dark:hover:bg-blue-600 transition text-sm sm:text-base">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557a9.93 9.93 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724c-.951.564-2.005.974-3.127 1.195a4.92 4.92 0 0 0-8.384 4.482C7.691 8.095 4.066 6.13 1.64 3.161c-.542.929-.856 2.01-.857 3.17 0 2.188 1.115 4.117 2.823 5.254a4.904 4.904 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 0 1 0 21.543a13.94 13.94 0 0 0 7.548 2.209c9.058 0 14.009-7.496 14.009-13.986 0-.21 0-.423-.016-.634A9.936 9.936 0 0 0 24 4.557z"/>
                            </svg>
                            Twitter
                        </a>
                        <a href="mailto:info@projecttracko.com" class="flex items-center gap-2 px-2 sm:px-3 py-1 sm:py-2 rounded bg-gray-50 dark:bg-[#18192a] text-blue-700 dark:text-white hover:bg-cyan-100 dark:hover:bg-cyan-600 transition text-sm sm:text-base">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0a8 8 0 1 1-16 0 8 8 0 0 1 16 0z"/>
                            </svg>
                            Email
                        </a>
                    </div>
                </div>

                <!-- Quick Tips -->
                <div class="bg-white dark:bg-[#23243a] rounded-xl shadow-lg p-4 sm:p-6 border border-gray-200 dark:border-[#23243a]">
                    <h3 class="text-base sm:text-lg font-semibold text-gray-900 dark:text-white mb-2 flex items-center gap-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-500 dark:text-yellow-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/>
                        </svg>
                        Quick Tips
                    </h3>
                    <ul class="list-disc pl-5 text-gray-700 dark:text-white text-xs sm:text-sm space-y-1">
                        <li>Be specific about your question or request</li>
                        <li>Include relevant details or screenshots</li>
                        <li>Check our FAQ section first</li>
                        <li>We respond within 24 hours</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
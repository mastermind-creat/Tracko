<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
        <footer class="bg-gray-100 dark:bg-[#18192a] border-t border-gray-200 dark:border-[#23243a] mt-16">
            <div class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-3 gap-8">
                <!-- Brand/About -->
                <div>
                    <div class="flex items-center mb-3">
                        <x-application-logo class="w-10 h-10 text-blue-700 dark:text-cyan-400 mr-2" />
                        <span class="text-xl font-bold text-blue-700 dark:text-cyan-400">ProjectTracko</span>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">Blending transparency, technology, and community to make project tracking accessible for everyone. Explore projects, share feedback, and stay informed!</p>
                    <div class="flex space-x-3 mt-2">
                        <a href="#" class="p-2 rounded bg-gray-200 dark:bg-[#23243a] text-blue-700 dark:text-cyan-400 hover:bg-blue-100 dark:hover:bg-cyan-600 transition" aria-label="GitHub"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.56v-2.01c-3.2.7-3.87-1.54-3.87-1.54-.53-1.34-1.3-1.7-1.3-1.7-1.06-.72.08-.71.08-.71 1.17.08 1.79 1.2 1.79 1.2 1.04 1.78 2.73 1.27 3.4.97.11-.75.41-1.27.74-1.56-2.55-.29-5.23-1.28-5.23-5.7 0-1.26.45-2.29 1.19-3.09-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 2.9-.39c.98.01 1.97.13 2.9.39 2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.8 1.19 1.83 1.19 3.09 0 4.43-2.69 5.41-5.25 5.7.42.36.79 1.08.79 2.18v3.24c0 .31.21.67.8.56C20.71 21.39 24 17.08 24 12c0-6.27-5.23-11.5-12-11.5z"/></svg></a>
                        <a href="#" class="p-2 rounded bg-gray-200 dark:bg-[#23243a] text-blue-700 dark:text-cyan-400 hover:bg-red-100 dark:hover:bg-red-600 transition" aria-label="YouTube"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a2.994 2.994 0 0 0-2.112-2.12C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.386.566a2.994 2.994 0 0 0-2.112 2.12C0 8.07 0 12 0 12s0 3.93.502 5.814a2.994 2.994 0 0 0 2.112 2.12C4.5 20.5 12 20.5 12 20.5s7.5 0 9.386-.566a2.994 2.994 0 0 0 2.112-2.12C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432l6.545 3.568-6.545 3.568z"/></svg></a>
                        <a href="#" class="p-2 rounded bg-gray-200 dark:bg-[#23243a] text-blue-700 dark:text-cyan-400 hover:bg-blue-100 dark:hover:bg-blue-600 transition" aria-label="Twitter"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557a9.93 9.93 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724c-.951.564-2.005.974-3.127 1.195a4.92 4.92 0 0 0-8.384 4.482C7.691 8.095 4.066 6.13 1.64 3.161c-.542.929-.856 2.01-.857 3.17 0 2.188 1.115 4.117 2.823 5.254a4.904 4.904 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 0 1 0 21.543a13.94 13.94 0 0 0 7.548 2.209c9.058 0 14.009-7.496 14.009-13.986 0-.21 0-.423-.016-.634A9.936 9.936 0 0 0 24 4.557z"/></svg></a>
                        <a href="#" class="p-2 rounded bg-gray-200 dark:bg-[#23243a] text-blue-700 dark:text-cyan-400 hover:bg-cyan-100 dark:hover:bg-cyan-600 transition" aria-label="Email"><svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0a8 8 0 1 1-16 0 8 8 0 0 1 16 0z"/></svg></a>
                    </div>
                </div>
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-700 dark:text-gray-300">
                        <li><a href="/" class="hover:underline">Home</a></li>
                        <li><a href="#" class="hover:underline">Projects</a></li>
                        <li><a href="/about" class="hover:underline">About</a></li>
                        <li><a href="/contact" class="hover:underline">Contact</a></li>
                    </ul>
                </div>
                <!-- Stay Updated -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Stay Updated</h3>
                    <p class="text-gray-700 dark:text-gray-300 mb-3">Get the latest project updates, transparency news, and community stories delivered to your inbox.</p>
                    <form class="flex flex-col gap-2">
                        <input type="email" placeholder="Enter your email" class="rounded px-3 py-2 bg-gray-100 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                        <button type="submit" class="rounded py-2 bg-gradient-to-r from-purple-500 to-cyan-400 text-white font-semibold hover:from-purple-600 hover:to-cyan-500 transition">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-200 dark:border-[#23243a] py-4 text-center text-gray-600 dark:text-gray-400 text-sm flex flex-col md:flex-row items-center justify-between max-w-7xl mx-auto px-6">
                <span>© 2025 ProjectTracko. Made with <span class="text-pink-500">♥</span> for the community.</span>
                <div class="space-x-4 mt-2 md:mt-0">
                    <a href="#" class="hover:underline">Privacy Policy</a>
                    <a href="#" class="hover:underline">Terms of Service</a>
                </div>
            </div>
        </footer>
    </body>
</html>

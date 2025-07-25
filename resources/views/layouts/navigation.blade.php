<nav x-data="{ open: false }" class="bg-blue-600 shadow-lg border-b border-blue-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                @guest
                    <div class="block space-x-8 sm:-my-px sm:ms-10 sm:flex justify-end">
                        <x-nav-link :href="route('landing')" class="text-blue-900 font-semibold">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link href="about" class="text-blue-900 font-semibold">
                            {{ __('About') }}
                        </x-nav-link>
                        <x-nav-link href="contact" class="text-blue-900 font-semibold">
                            {{ __('Contact Us') }}
                        </x-nav-link>
                        <x-nav-link :href="route('login')" class="text-blue-900 font-semibold">
                            {{ __('Login') }}
                        </x-nav-link>
                        <x-nav-link :href="route('register')" class="text-blue-900 font-semibold">
                            {{ __('Register') }}
                        </x-nav-link>
                        <x-nav-link :href="route('public.portal')" class="text-blue-900 font-semibold">
                            {{ __('Public Portal') }}
                        </x-nav-link>
                    </div>
                @else
                    <div class="block space-x-8 sm:-my-px sm:ms-10 sm:flex justify-end">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('projects.index')" :active="request()->routeIs('projects.*')">
                            {{ __('Projects') }}
                        </x-nav-link>
                        <x-nav-link :href="route('reports.index')" :active="request()->routeIs('reports.*')">
                            {{ __('Reports') }}
                        </x-nav-link>
                        <x-nav-link :href="route('public.portal')">
                            {{ __('Public Portal') }}
                        </x-nav-link>
                        @if(Auth::user()->role === 'admin')
                            <x-nav-link :href="route('admin.panel')">
                                {{ __('Admin Panel') }}
                            </x-nav-link>
                        @endif
                    </div>
                @endguest
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user() ? Auth::user()->name : 'Guest' }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Theme Toggler Button (right side of navbar) -->
            <div class="flex items-center ms-4">
                <button
                    x-data
                    @click="$store.theme.toggle()"
                    :aria-label="$store.theme.dark ? 'Switch to light mode' : 'Switch to dark mode'"
                    class="p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white dark:bg-gray-800"
                >
                    <template x-if="!$store.theme.dark">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m8.66-8.66l-.71.71M4.05 19.07l-.71.71M21 12h-1M4 12H3m16.24-4.24l-.71-.71M6.34 6.34l-.71-.71"/></svg>
                    </template>
                    <template x-if="$store.theme.dark">
                        <svg class="w-6 h-6 text-gray-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1 1 11.21 3a7 7 0 0 0 9.79 9.79z"/></svg>
                    </template>
                </button>
            </div>
            <script>
                // Ensure theme is set on <html> before Alpine/JS loads
                (function() {
                    const theme = localStorage.getItem('theme');
                    if(theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                })();
            </script>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user() ? Auth::user()->name : 'Guest' }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user() ? Auth::user()->email : '' }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

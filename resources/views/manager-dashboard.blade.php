<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Manager Dashboard - ProjectTracko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow flex items-center justify-between px-4 py-4 md:px-6">
        <div class="flex items-center gap-4">
            <button id="sidebarToggle" class="md:hidden focus:outline-none" aria-label="Toggle sidebar">
                <i class="fas fa-bars text-2xl text-blue-700"></i>
            </button>
            <span class="text-2xl font-bold text-blue-700">ProjectTracko</span>
        </div>
        <div class="flex items-center gap-6">
            <button class="relative" aria-label="Notifications">
                <i class="fas fa-bell text-xl text-gray-600"></i>
                <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-500 rounded-full"></span>
            </button>
            <a href="#" class="text-gray-500 hover:text-blue-700" aria-label="Settings"><i class="fas fa-cog text-xl"></i></a>
            <div class="flex items-center gap-2">
                <span class="font-semibold text-gray-700">{{ Auth::user()->name }}</span>
                <span class="text-xs text-gray-500 bg-blue-100 px-2 py-1 rounded">Project Manager</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="ml-2 text-sm text-blue-600 hover:underline">Logout</button>
                </form>
            </div>
        </div>
    </header>
    <div class="flex flex-1">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-white shadow-lg fixed md:static inset-y-0 left-0 z-30 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out md:block" aria-label="Sidebar">
            <nav class="flex flex-col h-full py-8 px-4 space-y-2">
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-blue-700 bg-blue-100 font-semibold" title="Dashboard" aria-label="Dashboard"><i class="fas fa-tachometer-alt"></i> <span class="hidden md:inline">Dashboard</span></a>
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50" title="My Projects" aria-label="My Projects"><i class="fas fa-folder-open"></i> <span class="hidden md:inline">My Projects</span></a>
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50" title="Reports" aria-label="Reports"><i class="fas fa-chart-bar"></i> <span class="hidden md:inline">Reports</span></a>
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50" title="Messages" aria-label="Messages"><i class="fas fa-comments"></i> <span class="hidden md:inline">Messages</span></a>
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50" title="Profile" aria-label="Profile"><i class="fas fa-user"></i> <span class="hidden md:inline">Profile</span></a>
            </nav>
        </aside>
        <!-- Overlay for mobile sidebar -->
        <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-30 z-20 hidden md:hidden"></div>
        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-6 overflow-y-auto">
            @include('manager.partials.assigned-projects')
            @include('manager.partials.timeline')
            @include('manager.partials.milestones')
            @include('manager.partials.budget')
            @include('manager.partials.messages')
        </main>
    </div>
    <!-- Footer -->
    <footer class="bg-white shadow text-center py-4 text-gray-500 text-sm">
        ProjectTracko v1.0 &middot; <a href="#" class="text-blue-600 hover:underline">Contact Support</a> &middot; <a href="#" class="text-blue-600 hover:underline">User Guide</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/js/all.min.js"></script>
    <script>
        // Sidebar toggle for mobile
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
                sidebarOverlay.classList.toggle('hidden');
            });
        }
        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
                sidebarOverlay.classList.add('hidden');
            });
        }
    </script>
</body>
</html> 
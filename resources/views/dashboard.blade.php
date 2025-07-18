<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ProjectTracko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow flex items-center justify-between px-6 py-4">
        <div class="flex items-center gap-4">
            <span class="text-2xl font-bold text-blue-700">ProjectTracko</span>
        </div>
        <div class="flex items-center gap-6">
            <button class="relative">
                <i class="fas fa-bell text-xl text-gray-600"></i>
                <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-500 rounded-full"></span>
            </button>
            <div class="flex items-center gap-2">
                <span class="font-semibold text-gray-700">{{ Auth::user()->name }}</span>
                <div class="w-8 h-8 bg-blue-200 rounded-full flex items-center justify-center text-blue-700 font-bold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="ml-2 text-sm text-blue-600 hover:underline">Logout</button>
                </form>
            </div>
        </div>
    </header>
    <div class="flex flex-1">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg hidden md:block">
            <nav class="flex flex-col h-full py-8 px-4 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-2 rounded-lg text-blue-700 bg-blue-100 font-semibold"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="{{ route('projects.index') }}" class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50"><i class="fas fa-folder-open"></i> Projects</a>
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50"><i class="fas fa-users"></i> Users</a>
                <a href="{{ route('reports.index') }}" class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50"><i class="fas fa-chart-bar"></i> Reports</a>
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50"><i class="fas fa-bell"></i> Notifications</a>
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50"><i class="fas fa-cog"></i> Settings</a>
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-6 overflow-y-auto">
            <!-- Summary Cards Placeholder -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <a href="{{ route('projects.index', ['status' => 'ongoing']) }}" class="bg-white rounded-lg shadow p-6 flex flex-col items-center hover:bg-blue-50 transition">
                    <i class="fas fa-spinner fa-2x text-blue-500 mb-2"></i>
                    <div class="text-lg font-bold">Ongoing Projects</div>
                    <div class="text-2xl font-extrabold text-blue-700">{{ $ongoing }}</div>
                </a>
                <a href="{{ route('projects.index', ['status' => 'completed']) }}" class="bg-white rounded-lg shadow p-6 flex flex-col items-center hover:bg-green-50 transition">
                    <i class="fas fa-check-circle fa-2x text-green-500 mb-2"></i>
                    <div class="text-lg font-bold">Completed Projects</div>
                    <div class="text-2xl font-extrabold text-green-700">{{ $completed }}</div>
                </a>
                <a href="{{ route('projects.index', ['status' => 'pending']) }}" class="bg-white rounded-lg shadow p-6 flex flex-col items-center hover:bg-yellow-50 transition">
                    <i class="fas fa-hourglass-half fa-2x text-yellow-500 mb-2"></i>
                    <div class="text-lg font-bold">Pending Projects</div>
                    <div class="text-2xl font-extrabold text-yellow-700">{{ $pending }}</div>
                </a>
                <a href="{{ route('projects.index', ['status' => 'delayed']) }}" class="bg-white rounded-lg shadow p-6 flex flex-col items-center hover:bg-red-50 transition">
                    <i class="fas fa-exclamation-triangle fa-2x text-red-500 mb-2"></i>
                    <div class="text-lg font-bold">Delayed Projects</div>
                    <div class="text-2xl font-extrabold text-red-700">{{ $delayed }}</div>
                </a>
            </div>
            <!-- Recent Activity Placeholder -->
            <div class="bg-white rounded-lg shadow p-6 mb-8">
                <div class="text-xl font-bold mb-4">Recent Activity</div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Timestamp</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">User</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Project Name</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($activityLogs as $log)
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{ $log->created_at->format('Y-m-d H:i') }}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{ $log->user->name ?? 'N/A' }}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{ $log->action }}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-700">{{ $log->project->title ?? 'N/A' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-2 text-center text-gray-400">No recent activity.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Map Placeholder -->
            <div class="bg-white rounded-lg shadow p-6 mb-8">
                <div class="text-xl font-bold mb-4">Project Map</div>
                <div class="text-gray-500">(Interactive map will appear here.)</div>
            </div>
            <!-- Analytics Placeholder -->
            <div class="bg-white rounded-lg shadow p-6 mb-8">
                <div class="text-xl font-bold mb-4">Analytics & KPIs</div>
                <div class="text-gray-500">(Charts and analytics will appear here.)</div>
            </div>
        </main>
    </div>
    <!-- Footer -->
    <footer class="bg-white shadow text-center py-4 text-gray-500 text-sm">
        ProjectTracko v1.0 &middot; <a href="#" class="text-blue-600 hover:underline">Contact Support</a> &middot; <a href="#" class="text-blue-600 hover:underline">Documentation</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/js/all.min.js"></script>
</body>
</html>

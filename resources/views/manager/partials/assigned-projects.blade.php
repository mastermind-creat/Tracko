<div class="bg-white rounded-lg shadow p-6 mb-8">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-4">
        <div class="text-xl font-bold">Assigned Projects</div>
        <form method="GET" class="flex flex-col md:flex-row gap-2">
            <input type="text" name="search" placeholder="Search by title or location" class="border rounded px-2 py-1" value="{{ request('search') }}">
            <select name="status" class="border rounded px-2 py-1">
                <option value="">All Statuses</option>
                <option value="ongoing" @if(request('status')=='ongoing') selected @endif>Ongoing</option>
                <option value="completed" @if(request('status')=='completed') selected @endif>Completed</option>
                <option value="pending" @if(request('status')=='pending') selected @endif>Pending</option>
                <option value="delayed" @if(request('status')=='delayed') selected @endif>Delayed</option>
            </select>
            <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded">Filter</button>
        </form>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">Title</th>
                    <th class="px-4 py-2 text-left">Location</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Progress</th>
                    <th class="px-4 py-2 text-left">Budget</th>
                    <th class="px-4 py-2 text-left">Start Date</th>
                    <th class="px-4 py-2 text-left">End Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse($assignedProjects as $project)
                    <tr class="border-t hover:bg-blue-50 cursor-pointer">
                        <td colspan="7" class="p-0">
                            <a href="{{ route('projects.show', $project->id) }}" class="flex w-full h-full px-4 py-2 text-left text-inherit no-underline">
                                <span class="flex-1">{{ $project->title }}</span>
                                <span class="flex-1">{{ $project->location ?? '-' }}</span>
                                <span class="flex-1">
                                    <span class="px-2 py-1 rounded text-xs font-semibold
                                        @if($project->status=='ongoing') bg-blue-100 text-blue-700
                                        @elseif($project->status=='completed') bg-green-100 text-green-700
                                        @elseif($project->status=='pending') bg-yellow-100 text-yellow-700
                                        @elseif($project->status=='delayed') bg-red-100 text-red-700
                                        @endif
                                    ">
                                        {{ ucfirst($project->status) }}
                                    </span>
                                </span>
                                <span class="flex-1">{{ $project->progress ?? '0' }}%</span>
                                <span class="flex-1">Ksh {{ number_format($project->budget_allocated,2) }} / {{ number_format($project->budget_used,2) }}</span>
                                <span class="flex-1">{{ $project->start_date ?? '-' }}</span>
                                <span class="flex-1">{{ $project->end_date ?? '-' }}</span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-2 text-center text-gray-400">No assigned projects found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-4">
            {{ $assignedProjects->withQueryString()->links() }}
        </div>
    </div>
</div> 
<div class="bg-white rounded-lg shadow p-6 mb-8">
    @if(session('success'))
        <div class="mb-4 p-2 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
    @endif
    <div class="flex items-center justify-between mb-4">
        <div class="text-xl font-bold">Milestone Tracker</div>
        <!-- Add Milestone Button triggers modal -->
        <button onclick="document.getElementById('addMilestoneModal').classList.remove('hidden')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Milestone</button>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">Milestone Name</th>
                    <th class="px-4 py-2 text-left">Description</th>
                    <th class="px-4 py-2 text-left">Due Date</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Completion Date</th>
                    <th class="px-4 py-2 text-left">Document</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($milestones as $milestone)
                    <tr>
                        <td class="px-4 py-2">{{ $milestone->name }}</td>
                        <td class="px-4 py-2">{{ $milestone->description }}</td>
                        <td class="px-4 py-2">{{ $milestone->due_date }}</td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded text-xs font-semibold
                                @if($milestone->status=='completed') bg-green-100 text-green-700
                                @elseif($milestone->status=='pending') bg-yellow-100 text-yellow-700
                                @elseif($milestone->status=='delayed') bg-red-100 text-red-700
                                @endif
                            ">
                                {{ ucfirst($milestone->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-2">{{ $milestone->completed_at ?? '-' }}</td>
                        <td class="px-4 py-2">
                            @if($milestone->document_path)
                                <a href="{{ asset('storage/'.$milestone->document_path) }}" target="_blank" class="text-blue-600 hover:underline">View</a>
                            @else
                                -
                            @endif
                        </td>
                        <td class="px-4 py-2">
                            <!-- Edit and Delete forms/buttons -->
                            <form action="{{ route('milestones.destroy', $milestone) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline ml-2" onclick="return confirm('Delete this milestone?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-2 text-center text-gray-400">No milestones found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- Add Milestone Modal -->
    <div id="addMilestoneModal" class="fixed inset-0 bg-black bg-opacity-30 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg">
            <div class="flex justify-between items-center mb-4">
                <div class="text-lg font-bold">Add Milestone</div>
                <button onclick="document.getElementById('addMilestoneModal').classList.add('hidden')" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>
            <form action="{{ route('milestones.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="project_id" value="{{ $project->id }}">
                <div class="mb-2">
                    <label class="block text-sm font-medium">Name</label>
                    <input type="text" name="name" class="w-full border rounded px-2 py-1" required>
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-medium">Description</label>
                    <textarea name="description" class="w-full border rounded px-2 py-1"></textarea>
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-medium">Due Date</label>
                    <input type="date" name="due_date" class="w-full border rounded px-2 py-1">
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-medium">Status</label>
                    <select name="status" class="w-full border rounded px-2 py-1">
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="delayed">Delayed</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label class="block text-sm font-medium">Completion Date</label>
                    <input type="date" name="completed_at" class="w-full border rounded px-2 py-1">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Document (PDF, JPG, PNG, max 2MB)</label>
                    <input type="file" name="document" class="w-full border rounded px-2 py-1">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> 
@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Projects @if(request('status')) - {{ ucfirst(request('status')) }} @endif</h1>
    <table class="min-w-full bg-white rounded shadow">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left">Title</th>
                <th class="px-4 py-2 text-left">Status</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $project->title }}</td>
                    <td class="px-4 py-2 capitalize">{{ $project->status }}</td>
                    <td class="px-4 py-2">
                        <a href="#" class="text-blue-600 hover:underline">View</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-4 py-2 text-center text-gray-400">No projects found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">
        {{ $projects->withQueryString()->links() }}
    </div>
</div>
@endsection 
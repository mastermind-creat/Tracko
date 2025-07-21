@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-cyan-50 dark:from-[#18192a] dark:via-[#23243a] dark:to-[#18192a] py-12 px-4">
    <div class="w-full max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 border border-gray-200 dark:border-[#23243a]">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="flex-shrink-0">
                @if(Auth::user()->photo)
                    <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="Profile Photo" class="w-32 h-32 rounded-full object-cover border-4 border-blue-200 dark:border-cyan-400 shadow-md">
                @else
                    <div class="w-32 h-32 rounded-full bg-gradient-to-br from-blue-400 to-cyan-400 flex items-center justify-center text-4xl text-white font-bold shadow-md">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                @endif
            </div>
            <div class="flex-1">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">{{ Auth::user()->name }}</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-1"><span class="font-semibold">Email:</span> {{ Auth::user()->email }}</p>
                <p class="text-gray-600 dark:text-gray-300 mb-1"><span class="font-semibold">Phone:</span> {{ Auth::user()->phone ?? 'N/A' }}</p>
                <p class="text-gray-600 dark:text-gray-300 mb-1"><span class="font-semibold">Role:</span> {{ ucfirst(str_replace('_', ' ', Auth::user()->role)) }}</p>
                <p class="text-gray-600 dark:text-gray-300 mb-1"><span class="font-semibold">Organization:</span> {{ Auth::user()->organization ?? 'N/A' }}</p>
                <p class="text-gray-600 dark:text-gray-300 mb-1"><span class="font-semibold">Department:</span> {{ Auth::user()->department ?? 'N/A' }}</p>
                <p class="text-gray-600 dark:text-gray-300 mb-1"><span class="font-semibold">Position:</span> {{ Auth::user()->position ?? 'N/A' }}</p>
                <p class="text-gray-600 dark:text-gray-300 mb-1"><span class="font-semibold">County:</span> {{ Auth::user()->county ?? 'N/A' }}</p>
                <p class="text-gray-600 dark:text-gray-300 mb-1"><span class="font-semibold">Subcounty:</span> {{ Auth::user()->subcounty ?? 'N/A' }}</p>
                <p class="text-gray-600 dark:text-gray-300 mb-1"><span class="font-semibold">ID Number:</span> {{ Auth::user()->id_number ?? 'N/A' }}</p>
                <a href="{{ route('profile.edit') }}" class="inline-block mt-6 px-6 py-2 rounded bg-gradient-to-r from-blue-600 to-cyan-400 text-white font-semibold hover:from-blue-700 hover:to-cyan-500 transition">Edit Profile</a>
            </div>
        </div>
    </div>
</div>
@endsection 
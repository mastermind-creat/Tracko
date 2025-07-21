@extends('layouts.public')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-cyan-100 dark:from-[#18192a] dark:via-[#23243a] dark:to-[#18192a] transition-colors duration-500 py-10 px-6">
    <div class="w-full max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 border border-gray-200 dark:border-[#23243a]">
        <h1 class="text-2xl font-bold text-center text-blue-700 dark:text-cyan-400 mb-6">Reset Password</h1>
        <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div>
                <label for="email" class="block text-gray-700 dark:text-gray-200 mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                @error('email')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-gray-700 dark:text-gray-200 mb-1">New Password</label>
                <input id="password" type="password" name="password" required class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                @error('password')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password_confirmation" class="block text-gray-700 dark:text-gray-200 mb-1">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                @error('password_confirmation')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="w-full py-2 rounded bg-gradient-to-r from-purple-500 to-cyan-400 text-white font-semibold text-lg hover:from-purple-600 hover:to-cyan-500 transition">Reset Password</button>
        </form>
        <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-300">
            <a href="{{ route('login') }}" class="text-blue-600 dark:text-cyan-400 hover:underline">Back to login</a>
        </div>
    </div>
</section>
@endsection

@extends('layouts.public')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-cyan-100 dark:from-[#18192a] dark:via-[#23243a] dark:to-[#18192a] transition-colors duration-500 py-10 px-6">
    <div class="w-full max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 border border-gray-200 dark:border-[#23243a]">
        <h1 class="text-2xl font-bold text-center text-blue-700 dark:text-cyan-400 mb-6">Sign In to ProjectTracko</h1>
        @if(session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-gray-700 dark:text-gray-200 mb-1">Email</label>
                <input id="email" type="email" name="email" required autofocus class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
            </div>
            <div>
                <label for="password" class="block text-gray-700 dark:text-gray-200 mb-1">Password</label>
                <input id="password" type="password" name="password" required class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
            </div>
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 dark:text-cyan-400 hover:underline">Forgot password?</a>
            </div>
            <button type="submit" class="w-full py-2 rounded bg-gradient-to-r from-purple-500 to-cyan-400 text-white font-semibold text-lg hover:from-purple-600 hover:to-cyan-500 transition">Sign In</button>
        </form>
        <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-300">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-blue-600 dark:text-cyan-400 hover:underline">Sign up</a>
        </div>
    </div>
</section>
@endsection

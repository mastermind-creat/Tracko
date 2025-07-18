@extends('layouts.public')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-cyan-100 dark:from-[#18192a] dark:via-[#23243a] dark:to-[#18192a] transition-colors duration-500 py-10 px-6">
    <div class="w-full max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 border border-gray-200 dark:border-[#23243a]">
        <h1 class="text-2xl font-bold text-center text-blue-700 dark:text-cyan-400 mb-6">Create Your Account</h1>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-8" x-data="{ loading: false }" @submit.prevent="loading = true; $el.submit();">
            @csrf
            <!-- Basic Account Info -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Basic Account Info</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-gray-700 dark:text-gray-200 mb-1">Full Name</label>
                        <input id="name" type="text" name="name" required autofocus class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 dark:text-gray-200 mb-1">Email Address</label>
                        <input id="email" type="email" name="email" required class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700 dark:text-gray-200 mb-1">Password</label>
                        <input id="password" type="password" name="password" required class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-gray-700 dark:text-gray-200 mb-1">Confirm Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 dark:text-gray-200 mb-1">Phone Number</label>
                        <input id="phone" type="tel" name="phone" required class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                    <div>
                        <label for="role" class="block text-gray-700 dark:text-gray-200 mb-1">Role / Account Type</label>
                        <select id="role" name="role" required class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                            <option value="">Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="project_manager">Project Manager</option>
                            <option value="contractor">Contractor</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Professional Info -->
            <div x-data="{ showDept: false }" x-init="showDept = ['admin','project_manager'].includes(document.getElementById('role')?.value)" @change="showDept = ['admin','project_manager'].includes($event.target.value)" class="space-y-4">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Professional Info</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="organization" class="block text-gray-700 dark:text-gray-200 mb-1">Organization / Company Name</label>
                        <input id="organization" type="text" name="organization" class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                    <div x-show="showDept" class="transition-all duration-300">
                        <label for="department" class="block text-gray-700 dark:text-gray-200 mb-1">Department</label>
                        <select id="department" name="department" class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                            <option value="">Select Department</option>
                            <option value="health">Health</option>
                            <option value="roads">Roads</option>
                            <option value="education">Education</option>
                            <option value="water">Water</option>
                            <option value="finance">Finance</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="position" class="block text-gray-700 dark:text-gray-200 mb-1">Position / Title</label>
                        <input id="position" type="text" name="position" class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                    <div>
                        <label for="work_id" class="block text-gray-700 dark:text-gray-200 mb-1">Work ID / Staff Number <span class="text-xs text-gray-400">(optional)</span></label>
                        <input id="work_id" type="text" name="work_id" class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                </div>
            </div>
            <!-- Location Identity -->
            <div class="space-y-4">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Location Identity</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="county" class="block text-gray-700 dark:text-gray-200 mb-1">County</label>
                        <input id="county" type="text" name="county" value="Kisumu" readonly class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                    <div>
                        <label for="subcounty" class="block text-gray-700 dark:text-gray-200 mb-1">Subcounty / Ward</label>
                        <select id="subcounty" name="subcounty" class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                            <option value="">Select Subcounty/Ward</option>
                            <option value="kisumu_east">Kisumu East</option>
                            <option value="kisumu_west">Kisumu West</option>
                            <option value="kisumu_central">Kisumu Central</option>
                            <option value="nyando">Nyando</option>
                            <option value="nyakach">Nyakach</option>
                            <option value="seme">Seme</option>
                            <option value="muhoroni">Muhoroni</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="id_number" class="block text-gray-700 dark:text-gray-200 mb-1">ID Number</label>
                        <input id="id_number" type="text" name="id_number" required class="w-full bg-gray-50 dark:bg-[#18192a] border border-gray-300 dark:border-gray-700 rounded px-3 py-2 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-cyan-400">
                    </div>
                    <div>
                        <label for="photo" class="block text-gray-700 dark:text-gray-200 mb-1">Passport Photo / ID Upload <span class="text-xs text-gray-400">(optional)</span></label>
                        <input id="photo" type="file" name="photo" accept="image/*,.pdf" class="w-full text-gray-700 dark:text-gray-200">
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full py-2 rounded bg-gradient-to-r from-purple-500 to-cyan-400 text-white font-semibold text-lg hover:from-purple-600 hover:to-cyan-500 transition flex items-center justify-center gap-2" :disabled="loading">
                <template x-if="loading">
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                    </svg>
                </template>
                <span x-text="loading ? 'Signing Up...' : 'Sign Up'"></span>
            </button>
        </form>
        <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-300">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 dark:text-cyan-400 hover:underline">Sign in</a>
        </div>
    </div>
</section>
@endsection

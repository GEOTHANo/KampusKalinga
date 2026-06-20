<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KampusKalinga - Create Account</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .bg-pattern {
            background-image: radial-gradient(rgba(255, 255, 255, 0.1) 2px, transparent 2px);
            background-size: 40px 40px;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex">

    <!-- Left Side -->
    <div class="hidden lg:flex lg:w-1/3 bg-[#106b5a] text-white flex-col justify-between p-12 relative overflow-hidden bg-pattern">
        <div class="relative z-10">
            <div class="flex items-center gap-3 mb-16">
                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#106b5a]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold leading-tight">KampusKalinga</h1>
                    <p class="text-xs text-teal-100 font-medium">Campus Safety Management</p>
                </div>
            </div>

            <div>
                <h2 class="text-4xl font-extrabold leading-tight mb-6">Join our safe campus network.</h2>
                <p class="text-teal-50 text-lg mb-8 font-medium">Create your account to start reporting incidents and staying informed.</p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center text-teal-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="text-teal-50 font-medium">Real-time incident tracking</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center text-teal-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="text-teal-50 font-medium">AI-powered analytics</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-teal-400/20 flex items-center justify-center text-teal-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="text-teal-50 font-medium">Secure role-based access</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Right Side (Register Form) -->
    <div class="w-full lg:w-2/3 flex flex-col justify-center items-center p-8 bg-white overflow-y-auto">
        <div class="w-full max-w-xl py-10">
            <!-- Mobile Header -->
            <div class="flex lg:hidden items-center gap-3 mb-10">
                <div class="w-10 h-10 bg-[#106b5a] rounded-xl flex items-center justify-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-800 leading-tight">KampusKalinga</h1>
                </div>
            </div>

            <div class="mb-8">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Create an account</h2>
                <p class="text-sm text-gray-500 font-medium">Enter your details below to register.</p>
            </div>

            <form action="{{ route('dashboard') }}" method="GET" class="space-y-6">
                <!-- Profile Photo -->
                <div>
                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Profile Photo (Optional)</label>
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-full bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                        </div>
                        <div>
                            <input type="file" id="profile_photo" class="hidden" accept="image/*">
                            <button type="button" onclick="document.getElementById('profile_photo').click()" class="px-3 py-1.5 border border-gray-200 rounded-lg text-xs font-bold text-gray-700 hover:bg-gray-50 transition">Choose File</button>
                            <p class="text-[10px] text-gray-400 mt-1 font-medium">JPG, PNG or GIF. Max size 2MB.</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="first_name" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">First Name</label>
                        <input type="text" id="first_name" class="block w-full px-3 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" required placeholder="Juan">
                    </div>
                    <div>
                        <label for="last_name" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Last Name</label>
                        <input type="text" id="last_name" class="block w-full px-3 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" required placeholder="Dela Cruz">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Email Address</label>
                    <input type="email" id="email" class="block w-full px-3 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" required placeholder="juan@kampus.edu.ph">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="password" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Password</label>
                        <input type="password" id="password" class="block w-full px-3 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" required placeholder="••••••••">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Confirm Password</label>
                        <input type="password" id="password_confirmation" class="block w-full px-3 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" required placeholder="••••••••">
                    </div>
                </div>

                <!-- Role field removed as requested -->

                <button type="button" onclick="window.location.href='{{ route('dashboard') }}'" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-[#106b5a] hover:bg-[#0c5043] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1a6b5a] transition mt-6">
                    Create Account
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                <p class="text-sm text-gray-600 font-medium">
                    Already have an account? <a href="{{ route('login') }}" class="text-[#1a6b5a] font-bold hover:underline">Log in here</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>

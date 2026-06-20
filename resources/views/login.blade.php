<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KampusKalinga - Login</title>
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
    <div class="hidden lg:flex lg:w-1/2 bg-[#106b5a] text-white flex-col justify-between p-12 relative overflow-hidden bg-pattern">
        <div class="relative z-10">
            <div class="flex items-center gap-3 mb-20">
                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#106b5a]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold leading-tight">KampusKalinga</h1>
                    <p class="text-xs text-teal-100 font-medium">Campus Safety Management</p>
                </div>
            </div>

            <div class="max-w-md">
                <h2 class="text-5xl font-extrabold leading-tight mb-6">Keeping every campus safe, every day.</h2>
                <p class="text-teal-50 text-lg mb-12 font-medium">AI-powered incident reporting and management for Philippine public schools.</p>

                <div class="flex gap-10">
                    <div>
                        <h3 class="text-3xl font-bold mb-1">128+</h3>
                        <p class="text-xs text-teal-100 font-medium">Incidents Tracked</p>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold mb-1">94%</h3>
                        <p class="text-xs text-teal-100 font-medium">AI Accuracy</p>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold mb-1">1.9h</h3>
                        <p class="text-xs text-teal-100 font-medium">Avg. Response</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative z-10 border-t border-teal-500/30 pt-8 mt-12">
            <p class="text-teal-50 font-medium italic mb-2">"KampusKalinga has transformed how we manage safety incidents on campus."</p>
            <p class="text-teal-200 text-sm">— DepEd Division of Manila</p>
        </div>
    </div>

    <!-- Right Side (Login Form) -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
        <div class="w-full max-w-md">
            <!-- Mobile Header (Visible only on small screens) -->
            <div class="flex lg:hidden items-center gap-3 mb-10">
                <div class="w-10 h-10 bg-[#106b5a] rounded-xl flex items-center justify-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-800 leading-tight">KampusKalinga</h1>
                </div>
            </div>

            <div class="mb-10">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Welcome back</h2>
                <p class="text-sm text-gray-500 font-medium">Sign in to your administrator account to continue.</p>
            </div>

            <form action="{{ route('dashboard') }}" method="GET" class="space-y-5">
                <div>
                    <label for="email" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <input type="email" id="email" value="admin@kampus.edu.ph" class="block w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" required>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block text-xs font-bold text-gray-600 uppercase tracking-wider">Password</label>
                        <a href="#" class="text-xs font-bold text-[#1a6b5a] hover:underline">Forgot password?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="password" id="password" value="password123" class="block w-full pl-10 pr-10 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-bold bg-gray-50/50" required>
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                                <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="remember" type="checkbox" checked class="w-4 h-4 text-[#1a6b5a] bg-gray-100 border-gray-300 rounded focus:ring-[#1a6b5a] focus:ring-2 cursor-pointer">
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-600 cursor-pointer">Keep me signed in for 30 days</label>
                </div>

                <button type="button" onclick="window.location.href='{{ route('dashboard') }}'" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-[#106b5a] hover:bg-[#0c5043] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1a6b5a] transition mt-6">
                    Log in
                </button>
            </form>

            <div class="mt-8">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-3 bg-white text-gray-400 font-medium">or continue with</span>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="button" onclick="window.location.href='{{ route('dashboard') }}'" class="w-full flex justify-center items-center gap-3 py-3 px-4 border border-gray-200 rounded-lg shadow-sm text-sm font-bold text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                        Log in with school email
                    </button>
                </div>
            </div>

            <div class="mt-10 text-center space-y-4">
                <p class="text-xs text-gray-500 font-medium">
                    Having trouble? Contact your <a href="#" class="text-[#1a6b5a] font-bold hover:underline">system administrator</a>.
                </p>
                <div class="border-t border-gray-100 pt-6">
                    <p class="text-sm text-gray-600 font-medium">
                        Don't have an account? <a href="{{ route('register') }}" class="text-[#1a6b5a] font-bold hover:underline">Create account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

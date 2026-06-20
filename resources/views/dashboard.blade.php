<x-layouts::app :title="__('Dashboard Overview')">

    <div class="flex flex-col gap-6 font-sans">
        <!-- Stats Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 dash-cards">
            <!-- Stat Card 1 -->
            <div onclick="window.location.href='/incidents'" class="bg-white rounded-2xl border border-gray-200 p-5 shadow-sm cursor-pointer hover:border-[#1a6b5a] hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div class="w-10 h-10 rounded-lg bg-[#1a6b5a] flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-red-600 bg-red-50 px-2 py-1 rounded-md">+12%</span>
                </div>
                <div class="mt-4">
                    <h3 class="text-3xl font-bold text-gray-900">128</h3>
                    <p class="text-sm text-gray-500 mt-1 font-medium">Total Incidents</p>
                </div>
            </div>

            <!-- Stat Card 2 -->
            <div onclick="openIncidentsModal('Open Incidents')" class="bg-white rounded-2xl border border-gray-200 p-5 shadow-sm cursor-pointer hover:border-red-500 hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center text-red-500 border border-red-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-red-600 bg-red-50 px-2 py-1 rounded-md">+5%</span>
                </div>
                <div class="mt-4">
                    <h3 class="text-3xl font-bold text-gray-900">23</h3>
                    <p class="text-sm text-gray-500 mt-1 font-medium">Open Incidents</p>
                </div>
            </div>

            <!-- Stat Card 3 -->
            <div onclick="openIncidentsModal('In Progress')" class="bg-white rounded-2xl border border-gray-200 p-5 shadow-sm cursor-pointer hover:border-yellow-500 hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div class="w-10 h-10 rounded-lg bg-yellow-50 flex items-center justify-center text-yellow-500 border border-yellow-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-md">-3%</span>
                </div>
                <div class="mt-4">
                    <h3 class="text-3xl font-bold text-gray-900">41</h3>
                    <p class="text-sm text-gray-500 mt-1 font-medium">In Progress</p>
                </div>
            </div>

            <!-- Stat Card 4 -->
            <div onclick="openIncidentsModal('Resolved This Month')" class="bg-white rounded-2xl border border-gray-200 p-5 shadow-sm cursor-pointer hover:border-green-500 hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div class="w-10 h-10 rounded-lg bg-green-50 flex items-center justify-center text-green-500 border border-green-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-md">+18%</span>
                </div>
                <div class="mt-4">
                    <h3 class="text-3xl font-bold text-gray-900">64</h3>
                    <p class="text-sm text-gray-500 mt-1 font-medium">Resolved This Month</p>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 dash-graphs">
            <!-- Monthly Incidents Chart -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm col-span-2">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-sm font-bold text-gray-800">Monthly Incidents</h3>
                    <div class="flex items-center gap-4 text-xs font-medium text-gray-500">
                        <div class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-red-500"></span> High</div>
                        <div class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-yellow-400"></span> Medium</div>
                        <div class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-green-500"></span> Low</div>
                    </div>
                </div>
                <!-- CSS Bar Chart Placeholder -->
                <div class="h-48 flex items-end justify-between px-4 gap-2">
                    <!-- Jan -->
                    <div class="flex flex-col justify-end w-full group">
                        <div class="flex gap-1 justify-center items-end h-32">
                            <div class="w-1/3 bg-red-500 rounded-t-sm h-6"></div>
                            <div class="w-1/3 bg-yellow-400 rounded-t-sm h-12"></div>
                            <div class="w-1/3 bg-green-500 rounded-t-sm h-4"></div>
                        </div>
                        <span class="text-xs text-gray-400 text-center mt-3">Jan</span>
                    </div>
                    <!-- Feb -->
                    <div class="flex flex-col justify-end w-full group">
                        <div class="flex gap-1 justify-center items-end h-32">
                            <div class="w-1/3 bg-red-500 rounded-t-sm h-4"></div>
                            <div class="w-1/3 bg-yellow-400 rounded-t-sm h-8"></div>
                            <div class="w-1/3 bg-green-500 rounded-t-sm h-6"></div>
                        </div>
                        <span class="text-xs text-gray-400 text-center mt-3">Feb</span>
                    </div>
                    <!-- Mar -->
                    <div class="flex flex-col justify-end w-full group">
                        <div class="flex gap-1 justify-center items-end h-32">
                            <div class="w-1/3 bg-red-500 rounded-t-sm h-10"></div>
                            <div class="w-1/3 bg-yellow-400 rounded-t-sm h-14"></div>
                            <div class="w-1/3 bg-green-500 rounded-t-sm h-8"></div>
                        </div>
                        <span class="text-xs text-gray-400 text-center mt-3">Mar</span>
                    </div>
                    <!-- Apr -->
                    <div class="flex flex-col justify-end w-full group">
                        <div class="flex gap-1 justify-center items-end h-32">
                            <div class="w-1/3 bg-red-500 rounded-t-sm h-5"></div>
                            <div class="w-1/3 bg-yellow-400 rounded-t-sm h-10"></div>
                            <div class="w-1/3 bg-green-500 rounded-t-sm h-9"></div>
                        </div>
                        <span class="text-xs text-gray-400 text-center mt-3">Apr</span>
                    </div>
                    <!-- May -->
                    <div class="flex flex-col justify-end w-full group">
                        <div class="flex gap-1 justify-center items-end h-32">
                            <div class="w-1/3 bg-red-500 rounded-t-sm h-14"></div>
                            <div class="w-1/3 bg-yellow-400 rounded-t-sm h-16"></div>
                            <div class="w-1/3 bg-green-500 rounded-t-sm h-10"></div>
                        </div>
                        <span class="text-xs text-gray-400 text-center mt-3">May</span>
                    </div>
                    <!-- Jun -->
                    <div class="flex flex-col justify-end w-full group">
                        <div class="flex gap-1 justify-center items-end h-32">
                            <div class="w-1/3 bg-red-500 rounded-t-sm h-3"></div>
                            <div class="w-1/3 bg-yellow-400 rounded-t-sm h-8"></div>
                            <div class="w-1/3 bg-green-500 rounded-t-sm h-4"></div>
                        </div>
                        <span class="text-xs text-gray-400 text-center mt-3">Jun</span>
                    </div>
                </div>
            </div>

            <!-- Priority Breakdown Chart -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm col-span-1">
                <h3 class="text-sm font-bold text-gray-800 mb-6">Priority Breakdown</h3>
                <div class="flex items-center justify-between h-40">
                    <!-- Donut Chart Placeholder (CSS) -->
                    <div class="relative w-32 h-32">
                        <svg viewBox="0 0 100 100" class="w-full h-full transform -rotate-90">
                            <!-- Low (Green) -->
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#22c55e" stroke-width="12" stroke-dasharray="251.2" stroke-dashoffset="0" />
                            <!-- Medium (Yellow) -->
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#facc15" stroke-width="12" stroke-dasharray="251.2" stroke-dashoffset="42" />
                            <!-- High (Red) -->
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#ef4444" stroke-width="12" stroke-dasharray="251.2" stroke-dashoffset="155" />
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                            <span class="text-2xl font-bold text-gray-900 leading-none">100</span>
                            <span class="text-[10px] text-gray-500 font-medium uppercase tracking-wider">Total</span>
                        </div>
                    </div>
                    
                    <!-- Legend -->
                    <div class="flex flex-col gap-4 text-sm font-medium w-full pl-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 text-gray-600"><span class="w-2.5 h-2.5 rounded-full bg-red-500"></span> High</div>
                            <span class="text-red-500 font-bold">38</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 text-gray-600"><span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span> Medium</div>
                            <span class="text-yellow-500 font-bold">45</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2 text-gray-600"><span class="w-2.5 h-2.5 rounded-full bg-green-500"></span> Low</div>
                            <span class="text-green-500 font-bold">17</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 dash-recent">
            <!-- Left Side (Table & Banner) -->
            <div class="col-span-2 flex flex-col gap-5">
                
                <!-- Recent Incidents Table -->
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="p-5 border-b border-gray-100 flex justify-between items-center">
                        <div>
                            <h3 class="text-sm font-bold text-gray-800">Recent Incidents</h3>
                            <p class="text-xs text-gray-400 mt-0.5">Latest 5 reports across all campuses</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <button class="flex items-center gap-1.5 px-3 py-1.5 border border-gray-200 rounded-lg text-xs font-semibold text-gray-600 hover:bg-gray-50 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
                                Filter
                            </button>
                            <a href="#" class="text-xs font-bold text-[#1a6b5a] hover:text-[#145a46] flex items-center gap-1">
                                View All 
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs">
                            <thead class="bg-gray-50/50 text-gray-400 font-semibold uppercase tracking-wider">
                                <tr>
                                    <th class="px-5 py-3 font-semibold">ID</th>
                                    <th class="px-5 py-3 font-semibold">Incident</th>
                                    <th class="px-5 py-3 font-semibold">Reporter</th>
                                    <th class="px-5 py-3 font-semibold">Date & Time</th>
                                    <th class="px-5 py-3 font-semibold">Priority</th>
                                    <th class="px-5 py-3 font-semibold">Status</th>
                                    <th class="px-5 py-3 font-semibold"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <!-- Row 1 -->
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="px-5 py-4 text-gray-400 font-medium">INC-058</td>
                                    <td class="px-5 py-4">
                                        <div class="font-semibold text-gray-800">Physical altercation near Gymnasium</div>
                                        <div class="flex items-center gap-1 text-[11px] text-gray-400 mt-1">
                                            <svg class="w-3 h-3 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                            Building A, Gym
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 text-gray-600">Juan dela Cruz</td>
                                    <td class="px-5 py-4 text-gray-500">Jun 10, 2025, 10:42 AM</td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-red-50 text-red-600">
                                            <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                        </span>
                                    </td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-red-100/50 text-red-600">Open</span>
                                    </td>
                                    <td class="px-5 py-4 text-right">
                                        <a href="#" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                                    </td>
                                </tr>
                                
                                <!-- Row 2 -->
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="px-5 py-4 text-gray-400 font-medium">INC-057</td>
                                    <td class="px-5 py-4">
                                        <div class="font-semibold text-gray-800">Theft reported in Science Laboratory</div>
                                        <div class="flex items-center gap-1 text-[11px] text-gray-400 mt-1">
                                            <svg class="w-3 h-3 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                            Building C, Lab 3
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 text-gray-600">Maria Santos</td>
                                    <td class="px-5 py-4 text-gray-500">Jun 10, 2025, 09:15 AM</td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-yellow-50 text-yellow-600">
                                            <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Medium
                                        </span>
                                    </td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-yellow-100/50 text-yellow-600">In Progress</span>
                                    </td>
                                    <td class="px-5 py-4 text-right">
                                        <a href="#" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                                    </td>
                                </tr>

                                <!-- Row 3 -->
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="px-5 py-4 text-gray-400 font-medium">INC-056</td>
                                    <td class="px-5 py-4">
                                        <div class="font-semibold text-gray-800">Broken window at Main Entrance Gate</div>
                                        <div class="flex items-center gap-1 text-[11px] text-gray-400 mt-1">
                                            <svg class="w-3 h-3 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                            Gate 1
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 text-gray-600">Carlos Reyes</td>
                                    <td class="px-5 py-4 text-gray-500">Jun 10, 2025, 08:30 AM</td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-green-50 text-green-600">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Low
                                        </span>
                                    </td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-green-100/50 text-green-600">Resolved</span>
                                    </td>
                                    <td class="px-5 py-4 text-right">
                                        <a href="#" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                                    </td>
                                </tr>

                                <!-- Row 4 -->
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="px-5 py-4 text-gray-400 font-medium">INC-055</td>
                                    <td class="px-5 py-4">
                                        <div class="font-semibold text-gray-800">Unauthorized person spotted on campus</div>
                                        <div class="flex items-center gap-1 text-[11px] text-gray-400 mt-1">
                                            <svg class="w-3 h-3 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                            Parking Lot B
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 text-gray-600">Ana Lim</td>
                                    <td class="px-5 py-4 text-gray-500">Jun 10, 2025, 07:58 AM</td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-red-50 text-red-600">
                                            <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                        </span>
                                    </td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-red-100/50 text-red-600">Open</span>
                                    </td>
                                    <td class="px-5 py-4 text-right">
                                        <a href="#" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                                    </td>
                                </tr>

                                <!-- Row 5 -->
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="px-5 py-4 text-gray-400 font-medium">INC-054</td>
                                    <td class="px-5 py-4">
                                        <div class="font-semibold text-gray-800">Vandalism reported on school property</div>
                                        <div class="flex items-center gap-1 text-[11px] text-gray-400 mt-1">
                                            <svg class="w-3 h-3 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                            Building B, Floor 2
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 text-gray-600">Jose Mendoza</td>
                                    <td class="px-5 py-4 text-gray-500">Jun 9, 2025, 08:20 PM</td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-yellow-50 text-yellow-600">
                                            <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Medium
                                        </span>
                                    </td>
                                    <td class="px-5 py-4">
                                        <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-yellow-100/50 text-yellow-600">In Progress</span>
                                    </td>
                                    <td class="px-5 py-4 text-right">
                                        <a href="#" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- AI Banner -->
                <div class="bg-[#106b5a] rounded-2xl p-5 flex items-center justify-between shadow-sm text-white">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center flex-shrink-0 text-[#106b5a]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-base">AI Priority Detection Active</h3>
                            <p class="text-xs text-teal-100 mt-1 max-w-lg leading-relaxed">Our AI model has auto-classified 94% of reports with high accuracy this month. Manual review recommended for flagged incidents.</p>
                        </div>
                    </div>
                    <button class="bg-white text-[#106b5a] hover:bg-gray-50 px-4 py-2 rounded-lg text-sm font-bold shadow-sm transition whitespace-nowrap">
                        View AI Log
                    </button>
                </div>
                
            </div>

            <!-- Right Side (Recent Activity) -->
            <div class="col-span-1">
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm h-full">
                    <h3 class="text-sm font-bold text-gray-800 mb-6">Recent Activity</h3>
                    
                    <div class="flex flex-col gap-6">
                        <!-- Activity 1 -->
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full bg-red-50 text-red-500 flex items-center justify-center flex-shrink-0 border border-red-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-700 leading-tight">New high-priority incident reported at Library</p>
                                <p class="text-[11px] text-gray-400 mt-1 font-medium">2 min ago</p>
                            </div>
                        </div>

                        <!-- Activity 2 -->
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-700 leading-tight">Incident INC-047 assigned to Security Team</p>
                                <p class="text-[11px] text-gray-400 mt-1 font-medium">15 min ago</p>
                            </div>
                        </div>

                        <!-- Activity 3 -->
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full bg-green-50 text-green-500 flex items-center justify-center flex-shrink-0 border border-green-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-700 leading-tight">Incident INC-039 marked as Resolved</p>
                                <p class="text-[11px] text-gray-400 mt-1 font-medium">1 hr ago</p>
                            </div>
                        </div>

                        <!-- Activity 4 -->
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full bg-yellow-50 text-yellow-500 flex items-center justify-center flex-shrink-0 border border-yellow-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-700 leading-tight">AI re-classified INC-052 to Medium priority</p>
                                <p class="text-[11px] text-gray-400 mt-1 font-medium">2 hr ago</p>
                            </div>
                        </div>

                        <!-- Activity 5 -->
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-700 leading-tight">New report submitted by Maria Santos</p>
                                <p class="text-[11px] text-gray-400 mt-1 font-medium">3 hr ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Student Dashboard -->
        <div class="dash-student flex flex-col gap-6 font-sans">
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-bold text-gray-800">My Reported Incidents</h2>
                    <a href="{{ route('report-incident') }}" class="bg-[#1a6b5a] text-white px-4 py-2 rounded-lg text-sm font-bold shadow-sm hover:bg-[#145a46] transition">Report New Incident</a>
                </div>
                
                <div class="space-y-4">
                    <!-- Student Row 1 -->
                    <div class="p-4 border border-gray-100 rounded-xl flex justify-between items-center bg-gray-50/50 hover:bg-gray-50 transition cursor-pointer" onclick="openIncidentsModal('INC-058 Details')">
                        <div>
                            <p class="font-bold text-gray-800">Physical altercation near Gymnasium</p>
                            <p class="text-xs text-gray-500 mt-1">Reported on Jun 10, 2025 • Building A, Gym</p>
                        </div>
                        <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-red-100/50 text-red-600">Open</span>
                    </div>
                    <!-- Student Row 2 -->
                    <div class="p-4 border border-gray-100 rounded-xl flex justify-between items-center bg-gray-50/50 hover:bg-gray-50 transition cursor-pointer">
                        <div>
                            <p class="font-bold text-gray-800">Vandalism on 2nd Floor Men's Restroom</p>
                            <p class="text-xs text-gray-500 mt-1">Reported on Jun 8, 2025 • Building B</p>
                        </div>
                        <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-yellow-100/50 text-yellow-600">In Progress</span>
                    </div>
                    <!-- Student Row 3 -->
                    <div class="p-4 border border-gray-100 rounded-xl flex justify-between items-center bg-gray-50/50 hover:bg-gray-50 transition cursor-pointer">
                        <div>
                            <p class="font-bold text-gray-800">Broken Chair in Room 301</p>
                            <p class="text-xs text-gray-500 mt-1">Reported on Jun 1, 2025 • Building C</p>
                        </div>
                        <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-green-100/50 text-green-600">Resolved</span>
                    </div>
                </div>
            </div>
        </div>

    <!-- Incidents Modal -->
    <div id="incidentsModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center font-sans backdrop-blur-sm transition-opacity opacity-0 duration-300">
        <div class="bg-white rounded-2xl w-full max-w-2xl shadow-2xl transform scale-95 transition-transform duration-300 mx-4">
            <div class="flex justify-between items-center p-6 border-b border-gray-100">
                <h2 id="modalTitle" class="text-xl font-bold text-gray-800">Incidents</h2>
                <button onclick="closeIncidentsModal()" class="text-gray-400 hover:text-gray-600 transition bg-gray-50 hover:bg-gray-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="p-6 max-h-[60vh] overflow-y-auto">
                <div class="flex flex-col gap-4" id="modalContent">
                    <!-- Sample Modal Content (Will be dynamic in future) -->
                    <div class="p-4 border border-gray-100 rounded-xl hover:bg-gray-50 transition cursor-pointer flex justify-between items-center">
                        <div>
                            <p class="font-bold text-gray-800">INC-058: Physical altercation near Gymnasium</p>
                            <p class="text-xs text-gray-500 mt-1">Reported by Juan dela Cruz • Jun 10, 2025</p>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-red-50 text-red-600">High</span>
                    </div>
                    <div class="p-4 border border-gray-100 rounded-xl hover:bg-gray-50 transition cursor-pointer flex justify-between items-center">
                        <div>
                            <p class="font-bold text-gray-800">INC-057: Theft reported in Science Laboratory</p>
                            <p class="text-xs text-gray-500 mt-1">Reported by Maria Santos • Jun 10, 2025</p>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-yellow-50 text-yellow-600">Medium</span>
                    </div>
                    <div class="p-4 border border-gray-100 rounded-xl hover:bg-gray-50 transition cursor-pointer flex justify-between items-center">
                        <div>
                            <p class="font-bold text-gray-800">INC-055: Unauthorized person spotted on campus</p>
                            <p class="text-xs text-gray-500 mt-1">Reported by Ana Lim • Jun 10, 2025</p>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-red-50 text-red-600">High</span>
                    </div>
                </div>
            </div>
            <div class="p-6 border-t border-gray-100 bg-gray-50/50 rounded-b-2xl flex justify-end">
                <button onclick="closeIncidentsModal()" class="px-5 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-bold hover:bg-gray-50 transition">Close</button>
            </div>
        </div>
    </div>

    <script>
        function openIncidentsModal(title) {
            document.getElementById('modalTitle').innerText = title;
            const modal = document.getElementById('incidentsModal');
            const modalInner = modal.querySelector('div');
            
            modal.classList.remove('hidden');
            // Small delay to allow display:block to apply before animating opacity
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalInner.classList.remove('scale-95');
            }, 10);
        }

        function closeIncidentsModal() {
            const modal = document.getElementById('incidentsModal');
            const modalInner = modal.querySelector('div');
            
            modal.classList.add('opacity-0');
            modalInner.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300); // match transition duration
        }
    </script>
</x-layouts::app>

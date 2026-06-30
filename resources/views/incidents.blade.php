<x-layouts::app :title="__('Incidents')">
    <x-slot:subtitle>View and manage all reported incidents.</x-slot:subtitle>

    <div class="flex flex-col gap-6 font-sans pb-10">
        
        <!-- Status Summary Pills -->
        <div class="flex flex-wrap items-center gap-3">
            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-[#2e524e] text-gray-900 border border-[#2e524e] font-semibold text-sm transition hover:bg-[#23403d]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                128 Total
            </button>
            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-red-50 text-red-600 border border-red-200 font-semibold text-sm transition hover:bg-red-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                23 Open
            </button>
            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-yellow-50 text-yellow-600 border border-yellow-200 font-semibold text-sm transition hover:bg-yellow-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
                41 In Progress
            </button>
            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-green-50 text-green-600 border border-green-200 font-semibold text-sm transition hover:bg-green-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                64 Resolved
            </button>
        </div>

        <!-- Toolbar -->
        <div class="bg-white rounded-2xl border border-gray-200 p-4 shadow-sm flex flex-col gap-4">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex flex-wrap items-center gap-4">
                    <!-- Status Tabs -->
                    <div class="inline-flex bg-white border border-gray-200 rounded-lg p-1 text-sm font-medium">
                        <button class="px-4 py-1.5 rounded-md bg-gray-100 text-gray-900 shadow-sm transition">All</button>
                        <button class="px-4 py-1.5 rounded-md text-gray-500 hover:text-gray-900 transition">Open</button>
                        <button class="px-4 py-1.5 rounded-md text-gray-500 hover:text-gray-900 transition">In Progress</button>
                        <button class="px-4 py-1.5 rounded-md text-gray-500 hover:text-gray-900 transition">Resolved</button>
                    </div>

                    <div class="h-6 w-px bg-gray-200"></div>

                    <!-- Dropdowns -->
                    <button class="inline-flex items-center gap-2 px-3 py-1.5 border border-gray-200 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
                        Priority
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <button class="inline-flex items-center gap-2 px-3 py-1.5 border border-gray-200 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                        Category
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <button class="inline-flex items-center gap-2 px-3 py-1.5 border border-gray-200 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        Date Range
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                </div>
                
                <button class="inline-flex items-center gap-2 px-4 py-2 border border-gray-200 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Export Report
                </button>
            </div>
            <div class="flex">
                <button class="inline-flex items-center gap-2 px-3 py-1.5 border border-gray-200 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 5h10"/><path d="M11 9h7"/><path d="M11 13h4"/><path d="M3 17l3 3 3-3"/><path d="M6 18V4"/></svg>
                    Sort: Newest First
                </button>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-50 text-gray-500 font-bold uppercase tracking-wider text-[11px] border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 cursor-pointer hover:text-gray-600 transition group">
                                <div class="flex items-center gap-1.5">ID <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-600 group-hover:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg></div>
                            </th>
                            <th class="px-6 py-4 cursor-pointer hover:text-gray-600 transition group">
                                <div class="flex items-center gap-1.5">INCIDENT <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-600 group-hover:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg></div>
                            </th>
                            <th class="px-6 py-4">REPORTER</th>
                            <th class="px-6 py-4 cursor-pointer hover:text-gray-600 transition group">
                                <div class="flex items-center gap-1.5">DATE & TIME <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-600 group-hover:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg></div>
                            </th>
                            <th class="px-6 py-4">PRIORITY</th>
                            <th class="px-6 py-4">STATUS</th>
                            <th class="px-6 py-4"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-058</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Physical altercation near Gymnasium</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Building A, Gym
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Juan dela Cruz</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 10, 2025, 10:42 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-red-50 text-red-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-red-100/50 text-red-600">Open</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-058" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-057</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Theft reported in Science Laboratory</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Building C, Lab 3
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Maria Santos</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 10, 2025, 09:15 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-yellow-50 text-yellow-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Medium
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-yellow-100/50 text-yellow-600">In Progress</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-057" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-056</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Broken window at Main Entrance Gate</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Gate 1
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Carlos Reyes</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 10, 2025, 08:30 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-green-50 text-green-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Low
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-green-100/50 text-green-600">Resolved</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-056" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-055</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Unauthorized person spotted on campus</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Parking Lot B
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Ana Lim</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 10, 2025, 07:58 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-red-50 text-red-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-red-100/50 text-red-600">Open</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-055" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-054</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Vandalism reported on school property</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Building B, Floor 2
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Jose Mendoza</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 9, 2025, 06:20 PM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-yellow-50 text-yellow-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Medium
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-yellow-100/50 text-yellow-600">In Progress</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-054" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-053</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Fire alarm triggered in Admin Building</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Admin Building
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Rosa Villanueva</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 9, 2025, 03:11 PM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-red-50 text-red-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-green-100/50 text-green-600">Resolved</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-053" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 7 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-052</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Bullying incident reported by student</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Cafeteria
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Anonymous</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 8, 2025, 12:30 PM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-yellow-50 text-yellow-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Medium
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-yellow-100/50 text-yellow-600">In Progress</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-052" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 8 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-051</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Lost and found: student bag at Gate 2</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Gate 2
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Lito Cruz</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 8, 2025, 08:05 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-green-50 text-green-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Low
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-green-100/50 text-green-600">Resolved</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-051" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 9 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-050</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Graffiti found on library wall</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Library
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Elena Santos</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 7, 2025, 07:50 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-green-50 text-green-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Low
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-red-100/50 text-red-600">Open</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-050" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 10 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">INC-049</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">Stranger approached students near gate</div>
                                <div class="flex items-center gap-1 text-xs text-gray-500 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Gate 1
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Mark Reyes</td>
                            <td class="px-6 py-4 text-gray-500 text-xs font-medium">Jun 6, 2025, 06:45 PM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-red-50 text-red-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-red-100/50 text-red-600">Open</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/incidents/INC-049" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            
            <!-- Pagination Footer -->
            <div class="px-6 py-4 border-t border-gray-200 bg-white flex flex-wrap items-center justify-between gap-4">
                <span class="text-xs text-gray-500 font-medium">Showing 1-10 of 58 incidents</span>
                <div class="flex items-center gap-1">
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 transition"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg></button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-[#1a6b5a] text-gray-900 font-bold text-xs">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">2</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">3</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">4</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">5</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 transition"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></button>
                </div>
            </div>
        </div>
    </div>

{{-- View buttons now redirect to /incidents/{id} for the full detail page. --}}

</x-layouts::app>



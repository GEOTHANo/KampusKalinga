<x-layouts::app :title="__('Incidents')">
    <x-slot:subtitle>View and manage all reported incidents.</x-slot:subtitle>

    <div class="flex flex-col gap-6 font-sans pb-10">
        
        <!-- Status Summary Pills -->
        <div class="flex flex-wrap items-center gap-3">
            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-[#2e524e] text-white border border-[#2e524e] font-semibold text-sm transition hover:bg-[#23403d]">
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
                        <button class="px-4 py-1.5 rounded-md bg-gray-100 text-gray-800 shadow-sm transition">All</button>
                        <button class="px-4 py-1.5 rounded-md text-gray-500 hover:text-gray-800 transition">Open</button>
                        <button class="px-4 py-1.5 rounded-md text-gray-500 hover:text-gray-800 transition">In Progress</button>
                        <button class="px-4 py-1.5 rounded-md text-gray-500 hover:text-gray-800 transition">Resolved</button>
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
                    Export CSV
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
                    <thead class="bg-[#f8f9fa] text-gray-400 font-bold uppercase tracking-wider text-[11px] border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 cursor-pointer hover:text-gray-600 transition group">
                                <div class="flex items-center gap-1.5">ID <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-300 group-hover:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg></div>
                            </th>
                            <th class="px-6 py-4 cursor-pointer hover:text-gray-600 transition group">
                                <div class="flex items-center gap-1.5">INCIDENT <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-300 group-hover:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg></div>
                            </th>
                            <th class="px-6 py-4">REPORTER</th>
                            <th class="px-6 py-4 cursor-pointer hover:text-gray-600 transition group">
                                <div class="flex items-center gap-1.5">DATE & TIME <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-300 group-hover:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg></div>
                            </th>
                            <th class="px-6 py-4">PRIORITY</th>
                            <th class="px-6 py-4">STATUS</th>
                            <th class="px-6 py-4"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-058</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Physical altercation near Gymnasium</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Building A, Gym
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Juan dela Cruz</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 10, 2025, 10:42 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-red-50 text-red-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-red-100/50 text-red-600">Open</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-057</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Theft reported in Science Laboratory</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Building C, Lab 3
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Maria Santos</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 10, 2025, 09:15 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-yellow-50 text-yellow-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Medium
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-yellow-100/50 text-yellow-600">In Progress</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-056</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Broken window at Main Entrance Gate</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Gate 1
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Carlos Reyes</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 10, 2025, 08:30 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-green-50 text-green-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Low
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-green-100/50 text-green-600">Resolved</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-055</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Unauthorized person spotted on campus</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Parking Lot B
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Ana Lim</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 10, 2025, 07:58 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-red-50 text-red-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-red-100/50 text-red-600">Open</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-054</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Vandalism reported on school property</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Building B, Floor 2
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Jose Mendoza</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 9, 2025, 06:20 PM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-yellow-50 text-yellow-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Medium
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-yellow-100/50 text-yellow-600">In Progress</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-053</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Fire alarm triggered in Admin Building</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Admin Building
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Rosa Villanueva</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 9, 2025, 03:11 PM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-red-50 text-red-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-green-100/50 text-green-600">Resolved</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 7 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-052</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Bullying incident reported by student</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Cafeteria
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Anonymous</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 8, 2025, 12:30 PM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-yellow-50 text-yellow-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Medium
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-yellow-100/50 text-yellow-600">In Progress</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 8 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-051</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Lost and found: student bag at Gate 2</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Gate 2
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Lito Cruz</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 8, 2025, 08:05 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-green-50 text-green-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Low
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-green-100/50 text-green-600">Resolved</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 9 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-050</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Graffiti found on library wall</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Library
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Elena Santos</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 7, 2025, 07:50 AM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-green-50 text-green-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Low
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-red-100/50 text-red-600">Open</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
                            </td>
                        </tr>

                        <!-- Row 10 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">INC-049</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">Stranger approached students near gate</div>
                                <div class="flex items-center gap-1 text-xs text-gray-400 mt-1">
                                    <svg class="w-3.5 h-3.5 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    Gate 1
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Mark Reyes</td>
                            <td class="px-6 py-4 text-gray-400 text-xs font-medium">Jun 6, 2025, 06:45 PM</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-red-50 text-red-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-3 py-1 rounded-md text-[11px] font-bold bg-red-100/50 text-red-600">Open</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" onclick="event.preventDefault(); openIncidentDetailsModal(this)" class="text-[#1a6b5a] font-bold text-xs inline-flex items-center gap-1 hover:underline">View <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
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
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-[#1a6b5a] text-white font-bold text-xs">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">2</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">3</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">4</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">5</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 transition"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Incident Details Modal -->
    <div id="incidentDetailsModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center font-sans backdrop-blur-sm transition-opacity opacity-0 duration-300">
        <div class="bg-white rounded-2xl w-full max-w-3xl shadow-2xl transform scale-95 transition-transform duration-300 mx-4 flex flex-col max-h-[90vh]">
            <div class="flex justify-between items-center p-6 border-b border-gray-100 shrink-0">
                <div class="flex items-center gap-3">
                    <h2 class="text-xl font-bold text-gray-800">Incident Details</h2>
                    <span id="modalIncidentId" class="px-2.5 py-1 bg-gray-100 text-gray-600 rounded-md text-xs font-bold">INC-XXX</span>
                </div>
                <button onclick="closeIncidentDetailsModal()" class="text-gray-400 hover:text-gray-600 transition bg-gray-50 hover:bg-gray-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            
            <div class="p-6 overflow-y-auto grow">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Left Column: Main Details -->
                    <div class="md:col-span-2 space-y-6">
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Description</h3>
                            <p id="modalIncidentDesc" class="text-gray-800 font-semibold text-lg">Incident Description</p>
                            <div class="flex items-center gap-1.5 text-sm text-gray-500 mt-2">
                                <svg class="w-4 h-4 text-red-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                <span id="modalIncidentLocation">Location</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <h3 class="text-sm font-bold text-gray-800 mb-3">Full Report</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Detailed description of the incident will appear here. The system can pull the full narrative report submitted by the user or security personnel. This section provides context, witness statements, and any other relevant information regarding the event.
                            </p>
                        </div>

                        <!-- Attachments / Media -->
                        <div>
                            <h3 class="text-sm font-bold text-gray-800 mb-3">Attachments & Media</h3>
                            <div class="flex gap-3">
                                <div class="w-24 h-24 bg-gray-200 rounded-lg border border-gray-300 flex flex-col items-center justify-center text-gray-400 cursor-pointer hover:bg-gray-300 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                                    <span class="text-[10px] font-bold">Image 1</span>
                                </div>
                                <div class="w-24 h-24 bg-gray-100 rounded-lg border border-dashed border-gray-300 flex flex-col items-center justify-center text-gray-400 cursor-pointer hover:bg-gray-200 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                                    <span class="text-[10px] font-bold">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Meta Info -->
                    <div class="space-y-5 bg-white p-5 rounded-xl border border-gray-100 shadow-sm self-start">
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Status</p>
                            <div id="modalIncidentStatusContainer"></div>
                        </div>
                        
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Priority</p>
                            <div id="modalIncidentPriorityContainer"></div>
                        </div>

                        <hr class="border-gray-100">

                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Reported By</p>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-8 h-8 rounded-full bg-[#1a6b5a] text-white flex items-center justify-center text-xs font-bold">
                                    <span id="modalReporterInitials">JD</span>
                                </div>
                                <span id="modalReporterName" class="font-bold text-sm text-gray-800">Juan dela Cruz</span>
                            </div>
                        </div>

                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Date & Time</p>
                            <p id="modalDateTime" class="text-sm font-semibold text-gray-700">Jun 10, 2025, 10:42 AM</p>
                        </div>
                        
                        <div class="pt-4 mt-4 border-t border-gray-100">
                            <button class="w-full bg-[#1a6b5a] hover:bg-[#145a46] text-white font-bold py-2.5 rounded-lg text-sm transition shadow-sm">
                                Update Status
                            </button>
                            <button class="w-full mt-2 bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 font-bold py-2.5 rounded-lg text-sm transition">
                                Add Note
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openIncidentDetailsModal(btnElement) {
            // Traverse up to the table row (tr)
            const row = btnElement.closest('tr');
            if (!row) return;

            // Extract data from the row
            const cells = row.querySelectorAll('td');
            
            // ID (Column 0)
            const id = cells[0].innerText.trim();
            
            // Incident Details & Location (Column 1)
            const descElement = cells[1].querySelector('.font-semibold');
            const locationElement = cells[1].querySelector('.text-xs.text-gray-400');
            const desc = descElement ? descElement.innerText.trim() : 'Unknown Incident';
            // Remove the icon text if any, get text node
            const location = locationElement ? locationElement.innerText.trim() : 'Unknown Location';

            // Reporter (Column 2)
            const reporter = cells[2].innerText.trim();
            const initials = reporter.split(' ').map(n => n[0]).join('').substring(0, 2).toUpperCase();

            // Date & Time (Column 3)
            const dateTime = cells[3].innerText.trim();

            // Priority (Column 4) - get the inner HTML of the span
            const priorityHtml = cells[4].innerHTML.trim();

            // Status (Column 5) - get the inner HTML of the span
            const statusHtml = cells[5].innerHTML.trim();

            // Populate Modal
            document.getElementById('modalIncidentId').innerText = id;
            document.getElementById('modalIncidentDesc').innerText = desc;
            document.getElementById('modalIncidentLocation').innerText = location;
            document.getElementById('modalReporterName').innerText = reporter;
            document.getElementById('modalReporterInitials').innerText = initials;
            document.getElementById('modalDateTime').innerText = dateTime;
            document.getElementById('modalIncidentPriorityContainer').innerHTML = priorityHtml;
            document.getElementById('modalIncidentStatusContainer').innerHTML = statusHtml;

            // Show Modal
            const modal = document.getElementById('incidentDetailsModal');
            const modalInner = modal.querySelector('div');
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalInner.classList.remove('scale-95');
            }, 10);
        }

        function closeIncidentDetailsModal() {
            const modal = document.getElementById('incidentDetailsModal');
            const modalInner = modal.querySelector('div');
            
            modal.classList.add('opacity-0');
            modalInner.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
</x-layouts::app>

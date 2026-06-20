<x-layouts::app :title="__('Analytics')">
    <x-slot:subtitle>Insights and reports on incident data.</x-slot:subtitle>

    <div class="flex flex-col gap-6 font-sans pb-10">
        
        <!-- KPI Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl border border-gray-200 p-5 flex items-center gap-4 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-[#106b5a] text-white flex items-center justify-center flex-shrink-0 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800 leading-none mb-1">128</h3>
                    <p class="text-[11px] text-gray-500 font-semibold uppercase tracking-wider">Total Reports Classified</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-2xl border border-gray-200 p-5 flex items-center gap-4 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-green-100 text-[#10b981] flex items-center justify-center flex-shrink-0 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800 leading-none mb-1">94%</h3>
                    <p class="text-[11px] text-gray-500 font-semibold uppercase tracking-wider">AI Accuracy Rate</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-2xl border border-gray-200 p-5 flex items-center gap-4 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-yellow-100 text-yellow-500 flex items-center justify-center flex-shrink-0 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800 leading-none mb-1">0.3s</h3>
                    <p class="text-[11px] text-gray-500 font-semibold uppercase tracking-wider">Avg. Classification Time</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white rounded-2xl border border-gray-200 p-5 flex items-center gap-4 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-red-100 text-red-500 flex items-center justify-center flex-shrink-0 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800 leading-none mb-1">8</h3>
                    <p class="text-[11px] text-gray-500 font-semibold uppercase tracking-wider">Manual Overrides</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <!-- Monthly Incident Trends -->
            <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-200 shadow-sm p-6 flex flex-col">
                <div class="flex items-start justify-between mb-8">
                    <div>
                        <h2 class="text-base font-bold text-gray-800 mb-1">Monthly Incident Trends</h2>
                        <p class="text-xs text-gray-400 font-medium">Stacked by priority level — Jan to Jun 2025</p>
                    </div>
                    <div class="flex items-center gap-4 text-xs font-bold text-gray-500">
                        <div class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-red-600"></span> High</div>
                        <div class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span> Medium</div>
                        <div class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-[#10b981]"></span> Low</div>
                    </div>
                </div>

                <!-- Custom CSS Stacked Bar Chart -->
                <div class="flex-1 flex items-end justify-around gap-2 pt-10 min-h-[200px]">
                    <!-- Jan -->
                    <div class="flex flex-col items-center gap-2 group w-full max-w-[60px]">
                        <span class="text-xs text-gray-400 font-bold opacity-0 group-hover:opacity-100 transition">19</span>
                        <div class="w-full flex flex-col rounded-t-lg overflow-hidden transition-all duration-300 group-hover:scale-105 group-hover:shadow-md cursor-pointer">
                            <div class="w-full bg-[#10b981]" style="height: 30px;"></div>
                            <div class="w-full bg-yellow-400" style="height: 40px;"></div>
                            <div class="w-full bg-red-600 rounded-b-md" style="height: 35px;"></div>
                        </div>
                        <span class="text-xs font-bold text-gray-400 mt-2">Jan</span>
                    </div>
                    <!-- Feb -->
                    <div class="flex flex-col items-center gap-2 group w-full max-w-[60px]">
                        <span class="text-xs text-gray-400 font-bold opacity-0 group-hover:opacity-100 transition">17</span>
                        <div class="w-full flex flex-col rounded-t-lg overflow-hidden transition-all duration-300 group-hover:scale-105 group-hover:shadow-md cursor-pointer">
                            <div class="w-full bg-[#10b981]" style="height: 25px;"></div>
                            <div class="w-full bg-yellow-400" style="height: 35px;"></div>
                            <div class="w-full bg-red-600 rounded-b-md" style="height: 25px;"></div>
                        </div>
                        <span class="text-xs font-bold text-gray-400 mt-2">Feb</span>
                    </div>
                    <!-- Mar -->
                    <div class="flex flex-col items-center gap-2 group w-full max-w-[60px]">
                        <span class="text-xs text-gray-400 font-bold opacity-0 group-hover:opacity-100 transition">25</span>
                        <div class="w-full flex flex-col rounded-t-lg overflow-hidden transition-all duration-300 group-hover:scale-105 group-hover:shadow-md cursor-pointer">
                            <div class="w-full bg-[#10b981]" style="height: 30px;"></div>
                            <div class="w-full bg-yellow-400" style="height: 50px;"></div>
                            <div class="w-full bg-red-600 rounded-b-md" style="height: 45px;"></div>
                        </div>
                        <span class="text-xs font-bold text-gray-400 mt-2">Mar</span>
                    </div>
                    <!-- Apr -->
                    <div class="flex flex-col items-center gap-2 group w-full max-w-[60px]">
                        <span class="text-xs text-gray-400 font-bold opacity-0 group-hover:opacity-100 transition">20</span>
                        <div class="w-full flex flex-col rounded-t-lg overflow-hidden transition-all duration-300 group-hover:scale-105 group-hover:shadow-md cursor-pointer">
                            <div class="w-full bg-[#10b981]" style="height: 25px;"></div>
                            <div class="w-full bg-yellow-400" style="height: 40px;"></div>
                            <div class="w-full bg-red-600 rounded-b-md" style="height: 35px;"></div>
                        </div>
                        <span class="text-xs font-bold text-gray-400 mt-2">Apr</span>
                    </div>
                    <!-- May -->
                    <div class="flex flex-col items-center gap-2 group w-full max-w-[60px]">
                        <span class="text-xs text-gray-400 font-bold opacity-0 group-hover:opacity-100 transition">33</span>
                        <div class="w-full flex flex-col rounded-t-lg overflow-hidden transition-all duration-300 group-hover:scale-105 group-hover:shadow-md cursor-pointer">
                            <div class="w-full bg-[#10b981]" style="height: 40px;"></div>
                            <div class="w-full bg-yellow-400" style="height: 55px;"></div>
                            <div class="w-full bg-red-600 rounded-b-md" style="height: 50px;"></div>
                        </div>
                        <span class="text-xs font-bold text-gray-400 mt-2">May</span>
                    </div>
                    <!-- Jun -->
                    <div class="flex flex-col items-center gap-2 group w-full max-w-[60px]">
                        <span class="text-xs text-gray-400 font-bold opacity-0 group-hover:opacity-100 transition">13</span>
                        <div class="w-full flex flex-col rounded-t-lg overflow-hidden transition-all duration-300 group-hover:scale-105 group-hover:shadow-md cursor-pointer">
                            <div class="w-full bg-[#10b981]" style="height: 15px;"></div>
                            <div class="w-full bg-yellow-400" style="height: 30px;"></div>
                            <div class="w-full bg-red-600 rounded-b-md" style="height: 20px;"></div>
                        </div>
                        <span class="text-xs font-bold text-gray-400 mt-2">Jun</span>
                    </div>
                </div>
            </div>

            <!-- Incident Categories -->
            <div class="col-span-1 bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <h2 class="text-base font-bold text-gray-800 mb-1">Incident Categories</h2>
                <p class="text-xs text-gray-400 font-medium mb-6">Distribution by type</p>

                <div class="flex flex-col gap-5">
                    <!-- Category Item -->
                    <div>
                        <div class="flex justify-between items-center text-xs font-bold text-gray-600 mb-1.5">
                            <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-red-600"></span> Physical Altercation</span>
                            <span>22%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-red-600 h-1.5 rounded-full" style="width: 22%"></div>
                        </div>
                    </div>
                    <!-- Category Item -->
                    <div>
                        <div class="flex justify-between items-center text-xs font-bold text-gray-600 mb-1.5">
                            <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-yellow-500"></span> Theft / Robbery</span>
                            <span>16%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 16%"></div>
                        </div>
                    </div>
                    <!-- Category Item -->
                    <div>
                        <div class="flex justify-between items-center text-xs font-bold text-gray-600 mb-1.5">
                            <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-teal-600"></span> Unauthorized Entry</span>
                            <span>15%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-teal-600 h-1.5 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>
                    <!-- Category Item -->
                    <div>
                        <div class="flex justify-between items-center text-xs font-bold text-gray-600 mb-1.5">
                            <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-slate-600"></span> Vandalism</span>
                            <span>14%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-slate-600 h-1.5 rounded-full" style="width: 14%"></div>
                        </div>
                    </div>
                    <!-- Category Item -->
                    <div>
                        <div class="flex justify-between items-center text-xs font-bold text-gray-600 mb-1.5">
                            <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-blue-500"></span> Bullying / Harassment</span>
                            <span>12%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-blue-500 h-1.5 rounded-full" style="width: 12%"></div>
                        </div>
                    </div>
                    <!-- Category Item -->
                    <div>
                        <div class="flex justify-between items-center text-xs font-bold text-gray-600 mb-1.5">
                            <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-pink-500"></span> Fire / Safety Hazard</span>
                            <span>11%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-pink-500 h-1.5 rounded-full" style="width: 11%"></div>
                        </div>
                    </div>
                    <!-- Category Item -->
                    <div>
                        <div class="flex justify-between items-center text-xs font-bold text-gray-600 mb-1.5">
                            <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-gray-400"></span> Other</span>
                            <span>10%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                            <div class="bg-gray-400 h-1.5 rounded-full" style="width: 10%"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-4 border-t border-gray-100">
                    <p class="text-xs text-gray-400 font-medium">Total: <span class="font-bold text-gray-700">128</span> reports</p>
                </div>
            </div>

            <!-- Average Response Time -->
            <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-200 shadow-sm p-6 flex flex-col">
                <div class="flex items-start justify-between mb-8">
                    <div>
                        <h2 class="text-base font-bold text-gray-800 mb-1">Average Response Time</h2>
                        <p class="text-xs text-gray-400 font-medium">Hours from report to first response — monthly average</p>
                    </div>
                    <div class="flex items-center gap-2 text-xs font-bold text-gray-500">
                        <span class="w-8 h-[2px] bg-[#1a6b5a]"></span> Avg. Hours
                    </div>
                </div>

                <!-- Custom SVG Line Chart -->
                <div class="relative w-full h-[180px] mb-4">
                    <!-- Grid Lines -->
                    <div class="absolute inset-0 flex flex-col justify-between text-[10px] font-bold text-gray-300">
                        <div class="flex items-center gap-3 w-full"><span class="w-4 text-right">5h</span> <div class="h-px bg-gray-100 flex-1"></div></div>
                        <div class="flex items-center gap-3 w-full"><span class="w-4 text-right">4h</span> <div class="h-px bg-gray-100 flex-1"></div></div>
                        <div class="flex items-center gap-3 w-full"><span class="w-4 text-right">3h</span> <div class="h-px bg-gray-100 flex-1"></div></div>
                        <div class="flex items-center gap-3 w-full"><span class="w-4 text-right">2h</span> <div class="h-px bg-gray-100 flex-1"></div></div>
                        <div class="flex items-center gap-3 w-full"><span class="w-4 text-right">1h</span> <div class="h-px bg-gray-100 flex-1"></div></div>
                        <div class="flex items-center gap-3 w-full"><span class="w-4 text-right">0h</span> <div class="h-px bg-gray-100 flex-1"></div></div>
                    </div>

                    <!-- Line Chart SVG & Area -->
                    <div class="absolute inset-0 pl-7 pb-[18px]">
                        <!-- Changed preserveAspectRatio to none to stretch but used vector-effect on strokes -->
                        <svg class="w-full h-full overflow-visible" preserveAspectRatio="none" viewBox="0 0 100 100">
                            <!-- Area under line -->
                            <polygon points="0,35 20,40 40,25 60,30 80,45 100,50 100,100 0,100" fill="#1a6b5a" opacity="0.08" />
                            
                            <!-- Thicker Line -->
                            <polyline points="0,35 20,40 40,25 60,30 80,45 100,50" fill="none" stroke="#1a6b5a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" vector-effect="non-scaling-stroke" class="drop-shadow-sm" />
                            
                            <!-- Large White Data Points with Green Border (matching the mockup exactly) -->
                            <circle cx="0" cy="35" r="3" fill="#1a6b5a" stroke="#fff" stroke-width="2" vector-effect="non-scaling-stroke" />
                            <circle cx="20" cy="40" r="3" fill="#1a6b5a" stroke="#fff" stroke-width="2" vector-effect="non-scaling-stroke" />
                            <circle cx="40" cy="25" r="3" fill="#1a6b5a" stroke="#fff" stroke-width="2" vector-effect="non-scaling-stroke" />
                            <circle cx="60" cy="30" r="3" fill="#1a6b5a" stroke="#fff" stroke-width="2" vector-effect="non-scaling-stroke" />
                            <circle cx="80" cy="45" r="3" fill="#1a6b5a" stroke="#fff" stroke-width="2" vector-effect="non-scaling-stroke" />
                            <circle cx="100" cy="50" r="3" fill="#1a6b5a" stroke="#fff" stroke-width="2" vector-effect="non-scaling-stroke" />
                            
                            <!-- Exact mockup styling: It's actually a green filled circle with a thick white border! (Based on the image) -->
                            <!-- Or white circle with green border? The mockup shows green circle, thick white border, maybe cutting into the line. -->
                            <!-- Re-drawing them correctly to overlap the line with a white gap: -->
                            <!-- I will use a larger white circle underneath, and a slightly smaller green circle on top to create that 'cutout' effect -->
                            <circle cx="0" cy="35" r="4.5" fill="#fff" vector-effect="non-scaling-stroke" />
                            <circle cx="0" cy="35" r="2.5" fill="#1a6b5a" vector-effect="non-scaling-stroke" />

                            <circle cx="20" cy="40" r="4.5" fill="#fff" vector-effect="non-scaling-stroke" />
                            <circle cx="20" cy="40" r="2.5" fill="#1a6b5a" vector-effect="non-scaling-stroke" />

                            <circle cx="40" cy="25" r="4.5" fill="#fff" vector-effect="non-scaling-stroke" />
                            <circle cx="40" cy="25" r="2.5" fill="#1a6b5a" vector-effect="non-scaling-stroke" />

                            <circle cx="60" cy="30" r="4.5" fill="#fff" vector-effect="non-scaling-stroke" />
                            <circle cx="60" cy="30" r="2.5" fill="#1a6b5a" vector-effect="non-scaling-stroke" />

                            <circle cx="80" cy="45" r="4.5" fill="#fff" vector-effect="non-scaling-stroke" />
                            <circle cx="80" cy="45" r="2.5" fill="#1a6b5a" vector-effect="non-scaling-stroke" />

                            <circle cx="100" cy="50" r="4.5" fill="#fff" vector-effect="non-scaling-stroke" />
                            <circle cx="100" cy="50" r="2.5" fill="#1a6b5a" vector-effect="non-scaling-stroke" />
                        </svg>
                        
                        <!-- X Axis Labels -->
                        <div class="absolute bottom-[-20px] left-7 right-0 flex justify-between text-[10px] font-bold text-gray-400">
                            <span>Jan</span>
                            <span>Feb</span>
                            <span>Mar</span>
                            <span>Apr</span>
                            <span>May</span>
                            <span>Jun</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-green-50 border border-green-100 rounded-xl p-3 flex items-center gap-3 text-green-700 text-xs font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                    Response time improved by 41% from March peak — avg now 1.9 hrs in June.
                </div>
            </div>

            <!-- AI Priority Detection -->
            <div class="col-span-1 bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <h2 class="text-base font-bold text-gray-800 mb-1">AI Priority Detection</h2>
                <p class="text-xs text-gray-400 font-medium mb-8">Classification accuracy breakdown</p>

                <div class="flex flex-col items-center mb-8">
                    <!-- Custom Donut Chart -->
                    <div class="relative w-32 h-32 flex items-center justify-center mb-4">
                        <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                            <!-- Background ring -->
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#f3f4f6" stroke-width="15" />
                            <!-- Yellow ring (manual override 6%) -->
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#eab308" stroke-width="15" stroke-dasharray="251.2" stroke-dashoffset="236.12" stroke-linecap="round" />
                            <!-- Green ring (accurate 94%) -->
                            <circle cx="50" cy="50" r="40" fill="transparent" stroke="#10b981" stroke-width="15" stroke-dasharray="251.2" stroke-dashoffset="15" stroke-linecap="round" />
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                            <span class="text-2xl font-black text-gray-800">94%</span>
                            <span class="text-[9px] font-bold text-gray-400 uppercase">Accurate</span>
                        </div>
                    </div>

                    <div class="w-full flex justify-between items-center text-xs font-bold text-gray-600 mb-2">
                        <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-[#10b981]"></span> Correctly Classified</span>
                        <span class="text-[#10b981]">120</span>
                    </div>
                    <div class="w-full flex justify-between items-center text-xs font-bold text-gray-600">
                        <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-yellow-500"></span> Manually Overridden</span>
                        <span class="text-yellow-500">8</span>
                    </div>
                </div>

                <div class="pt-6 border-t border-gray-100">
                    <h4 class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-4">By Priority Level</h4>
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold text-gray-600 w-12">High</span>
                            <div class="flex-1 bg-gray-100 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-[#1a6b5a] h-1.5 rounded-full" style="width: 97%"></div>
                            </div>
                            <span class="text-xs font-bold text-gray-700 w-8 text-right">97%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold text-gray-600 w-12">Medium</span>
                            <div class="flex-1 bg-gray-100 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-[#1a6b5a] h-1.5 rounded-full" style="width: 93%"></div>
                            </div>
                            <span class="text-xs font-bold text-gray-700 w-8 text-right">93%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold text-gray-600 w-12">Low</span>
                            <div class="flex-1 bg-gray-100 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-[#1a6b5a] h-1.5 rounded-full" style="width: 91%"></div>
                            </div>
                            <span class="text-xs font-bold text-gray-700 w-8 text-right">91%</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts::app>

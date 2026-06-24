<x-layouts::app :title="__('Analytics Dashboard')">
    <x-slot:subtitle>Comprehensive insights, trends, and AI performance metrics.</x-slot:subtitle>

    <!-- Include Chart.js for Professional Interactive Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <div class="flex flex-col gap-6 font-sans pb-10 max-w-[1400px] mx-auto">
        
        <!-- Filters Toolbar -->
        <div class="bg-white rounded-2xl border border-gray-200 p-4 shadow-sm flex flex-col sm:flex-row flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-teal-50 text-[#1a6b5a] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 3v18h18"/><path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/></svg>
                </div>
                <h2 class="text-base font-bold text-gray-800">Overview Filters</h2>
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <select class="bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] font-medium text-gray-600 transition">
                    <option>Last 30 Days</option>
                    <option>Last Quarter</option>
                    <option>This Year</option>
                    <option>All Time</option>
                </select>
                <select class="bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] font-medium text-gray-600 transition">
                    <option>All Locations</option>
                    <option>Main Campus</option>
                    <option>North Wing</option>
                </select>
                <button class="bg-[#1a6b5a] text-white px-4 py-2 rounded-lg text-sm font-bold shadow-sm hover:bg-[#145a46] transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Export Report
                </button>
            </div>
        </div>

        <!-- KPI Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Card 1 -->
            <div style="background: linear-gradient(to bottom right, #1a6b5a, #114a3e);" class="rounded-2xl p-6 shadow-md text-white relative overflow-hidden group">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-teal-100 text-xs font-bold uppercase tracking-wider mb-1">Total Incidents</p>
                        <h3 class="text-4xl font-black mb-2">1,248</h3>
                        <div class="flex items-center gap-1.5 text-xs font-bold text-white bg-white/20 px-2 py-1 rounded-md inline-flex w-max">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m18 15-6-6-6 6"/></svg>
                            12.5% vs last month
                        </div>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 relative overflow-hidden group">
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1">Avg Resolution Time</p>
                        <h3 class="text-3xl font-black text-gray-800 mb-2">1.8 <span class="text-lg text-gray-500 font-bold">hrs</span></h3>
                        <div class="flex items-center gap-1.5 text-xs font-bold text-green-600 bg-green-50 border border-green-100 px-2 py-1 rounded-md inline-flex w-max">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m6 9 6-6 6 6"/><path d="M12 3v14"/></svg>
                            Faster by 30 mins
                        </div>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-green-50 border border-green-100 text-green-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 relative overflow-hidden group">
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1">High Priority Alerts</p>
                        <h3 class="text-3xl font-black text-gray-800 mb-2">42</h3>
                        <div class="flex items-center gap-1.5 text-xs font-bold text-red-600 bg-red-50 border border-red-100 px-2 py-1 rounded-md inline-flex w-max">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m18 15-6-6-6 6"/></svg>
                            Up 4 from last week
                        </div>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-red-50 border border-red-100 text-red-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-200 relative overflow-hidden group">
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1">AI Accuracy Rate</p>
                        <h3 class="text-3xl font-black text-gray-800 mb-2">96.5%</h3>
                        <div class="flex items-center gap-1.5 text-xs font-bold text-blue-600 bg-blue-50 border border-blue-100 px-2 py-1 rounded-md inline-flex w-max">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m18 15-6-6-6 6"/></svg>
                            Consistent
                        </div>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 text-blue-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Charts Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Trend Over Time (Line Chart) -->
            <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">Incident Volume Trends</h3>
                        <p class="text-xs text-gray-500 font-medium">Monthly comparison of reported incidents</p>
                    </div>
                </div>
                <div class="relative h-[300px] w-full">
                    <canvas id="trendChart"></canvas>
                </div>
            </div>

            <!-- Categories (Doughnut Chart) -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="mb-6">
                    <h3 class="text-lg font-bold text-gray-800">Category Distribution</h3>
                    <p class="text-xs text-gray-500 font-medium">Breakdown by incident type</p>
                </div>
                <div class="relative h-[250px] w-full flex justify-center items-center">
                    <canvas id="categoryChart"></canvas>
                </div>
                <div class="mt-4 flex flex-col gap-2">
                    <div class="flex justify-between items-center text-xs font-bold text-gray-600"><span class="flex items-center gap-2"><span class="w-3 h-3 rounded-md bg-[#1a6b5a]"></span> Vandalism</span><span>35%</span></div>
                    <div class="flex justify-between items-center text-xs font-bold text-gray-600"><span class="flex items-center gap-2"><span class="w-3 h-3 rounded-md bg-[#eab308]"></span> Unauthorized Entry</span><span>25%</span></div>
                    <div class="flex justify-between items-center text-xs font-bold text-gray-600"><span class="flex items-center gap-2"><span class="w-3 h-3 rounded-md bg-[#ef4444]"></span> Physical Altercation</span><span>20%</span></div>
                </div>
            </div>
        </div>

        <!-- Secondary Charts Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Incidents by Location (Horizontal Bar Chart) -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="mb-6">
                    <h3 class="text-lg font-bold text-gray-800">Top Hotspots</h3>
                    <p class="text-xs text-gray-500 font-medium">Locations with the most incidents</p>
                </div>
                <div class="relative h-[280px] w-full">
                    <canvas id="locationChart"></canvas>
                </div>
            </div>

            <!-- AI Classification Accuracy (Stacked Bar or Radar) -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="mb-6">
                    <h3 class="text-lg font-bold text-gray-800">AI Priority Assignment</h3>
                    <p class="text-xs text-gray-500 font-medium">AI automatic routing vs Manual Overrides</p>
                </div>
                <div class="relative h-[280px] w-full">
                    <canvas id="aiAccuracyChart"></canvas>
                </div>
            </div>
        </div>
        
    </div>

    <script>
        function initCharts() {
            if (typeof Chart === 'undefined') {
                setTimeout(initCharts, 100);
                return;
            }

            // Destroy existing charts to prevent 'canvas already in use' error on SPA navigation
            ['trendChart', 'categoryChart', 'locationChart', 'aiAccuracyChart'].forEach(id => {
                let existingChart = Chart.getChart(id);
                if (existingChart) {
                    existingChart.destroy();
                }
            });

            // Common Chart Setup
            Chart.defaults.font.family = "'Inter', 'Segoe UI', sans-serif";
            Chart.defaults.color = '#9ca3af';

            // 1. Trend Over Time (Line Chart)
            const ctxTrend = document.getElementById('trendChart').getContext('2d');
            
            // Create gradient for the line chart fill
            const gradientFill = ctxTrend.createLinearGradient(0, 0, 0, 300);
            gradientFill.addColorStop(0, 'rgba(26, 107, 90, 0.4)');
            gradientFill.addColorStop(1, 'rgba(26, 107, 90, 0.0)');

            new Chart(ctxTrend, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [
                        {
                            label: 'Reported Incidents',
                            data: [45, 52, 38, 65, 89, 75, 95],
                            borderColor: '#1a6b5a',
                            backgroundColor: gradientFill,
                            borderWidth: 3,
                            pointBackgroundColor: '#fff',
                            pointBorderColor: '#1a6b5a',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            pointHoverRadius: 6,
                            fill: true,
                            tension: 0.4 // Smooth curves
                        },
                        {
                            label: 'Resolved Incidents',
                            data: [40, 48, 35, 60, 80, 70, 85],
                            borderColor: '#10b981',
                            borderWidth: 2,
                            borderDash: [5, 5],
                            pointRadius: 0,
                            fill: false,
                            tension: 0.4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top', align: 'end', labels: { usePointStyle: true, boxWidth: 8, font: { weight: 'bold', size: 11 } } },
                        tooltip: { backgroundColor: '#1f2937', padding: 12, titleFont: { size: 13 }, bodyFont: { size: 12 }, cornerRadius: 8 }
                    },
                    scales: {
                        y: { beginAtZero: true, grid: { borderDash: [4, 4], color: '#f3f4f6', drawBorder: false }, border: { display: false } },
                        x: { grid: { display: false }, border: { display: false } }
                    },
                    interaction: { mode: 'index', intersect: false }
                }
            });

            // 2. Categories (Doughnut Chart)
            const ctxCategory = document.getElementById('categoryChart').getContext('2d');
            new Chart(ctxCategory, {
                type: 'doughnut',
                data: {
                    labels: ['Vandalism', 'Unauthorized Entry', 'Physical Altercation', 'Theft', 'Others'],
                    datasets: [{
                        data: [35, 25, 20, 10, 10],
                        backgroundColor: ['#1a6b5a', '#eab308', '#ef4444', '#3b82f6', '#94a3b8'],
                        borderWidth: 0,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '75%',
                    plugins: {
                        legend: { display: false }, // Using custom HTML legend
                        tooltip: { backgroundColor: '#1f2937', padding: 12, cornerRadius: 8 }
                    }
                }
            });

            // 3. Incidents by Location (Horizontal Bar Chart)
            const ctxLocation = document.getElementById('locationChart').getContext('2d');
            new Chart(ctxLocation, {
                type: 'bar',
                data: {
                    labels: ['Main Gate', 'Gymnasium', 'Library', 'Cafeteria', 'Building C'],
                    datasets: [{
                        label: 'Incidents',
                        data: [42, 35, 28, 22, 18],
                        backgroundColor: '#1a6b5a',
                        borderRadius: 6,
                        barThickness: 24
                    }]
                },
                options: {
                    indexAxis: 'y', // Horizontal
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        x: { beginAtZero: true, grid: { color: '#f3f4f6', drawBorder: false }, border: { display: false } },
                        y: { grid: { display: false }, border: { display: false }, ticks: { font: { weight: 'bold', color: '#4b5563' } } }
                    }
                }
            });

            // 4. AI Accuracy (Stacked Bar Chart)
            const ctxAi = document.getElementById('aiAccuracyChart').getContext('2d');
            new Chart(ctxAi, {
                type: 'bar',
                data: {
                    labels: ['High', 'Medium', 'Low'],
                    datasets: [
                        {
                            label: 'AI Classified Correctly',
                            data: [120, 250, 450],
                            backgroundColor: '#10b981',
                            borderRadius: { topLeft: 4, topRight: 4, bottomLeft: 4, bottomRight: 4 },
                            barThickness: 32
                        },
                        {
                            label: 'Manual Admin Override',
                            data: [15, 8, 5],
                            backgroundColor: '#ef4444',
                            borderRadius: { topLeft: 4, topRight: 4, bottomLeft: 4, bottomRight: 4 },
                            barThickness: 32
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom', labels: { usePointStyle: true, boxWidth: 8, font: { size: 11 } } }
                    },
                    scales: {
                        x: { stacked: true, grid: { display: false }, border: { display: false } },
                        y: { stacked: true, beginAtZero: true, grid: { borderDash: [4, 4], color: '#f3f4f6' }, border: { display: false } }
                    }
                }
            });
        }

        // Initialize immediately if DOM is ready, or wait for it.
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initCharts);
        } else {
            initCharts();
        }
        
        // Also hook into Livewire's navigated event for SPA transitions
        document.addEventListener('livewire:navigated', initCharts);
    </script>
</x-layouts::app>

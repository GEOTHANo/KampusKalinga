<x-layouts::app.sidebar :title="$title ?? null">
    <!-- Page Header -->
    <div class="kk-page-header">
        <div class="kk-page-header-left">
            <h1 class="kk-page-title">{{ $title ?? 'Dashboard' }}</h1>
            @if(isset($subtitle))
                <p class="kk-page-subtitle" id="kk-page-subtitle">{{ $subtitle }}</p>
            @else
                <p class="kk-page-subtitle" id="kk-page-subtitle"></p>
            @endif
        </div>
        <div class="kk-page-header-right">
            <div class="kk-search-bar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="kk-search-icon">
                    <circle cx="11" cy="11" r="8"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                </svg>
                <input type="text" placeholder="Search incidents..." class="kk-search-input" id="search-input" />
            </div>

            <!-- Notification Bell with Dropdown -->
            <div class="relative" id="notification-wrapper">
                <button class="kk-notification-btn" id="notification-btn" onclick="toggleNotifications(event)" title="Notifications">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                    </svg>
                    <span class="kk-notification-badge" id="notif-badge">3</span>
                </button>

                <!-- Notification Dropdown Panel -->
                <div id="notification-panel"
                     class="absolute right-0 top-full mt-2 w-80 bg-white rounded-2xl shadow-2xl border border-gray-100 z-50 overflow-hidden"
                     style="display:none;">

                    <!-- Header -->
                    <div class="flex justify-between items-center px-5 py-4 border-b border-gray-100">
                        <div>
                            <h3 class="text-sm font-bold text-gray-800" style="font-family: 'Inter', sans-serif;">Notifications</h3>
                            <p class="text-[11px] text-gray-400 mt-0.5" id="notif-unread-label" style="font-family: 'Inter', sans-serif;">3 unread</p>
                        </div>
                        <button onclick="markAllRead()" class="text-[11px] font-bold text-[#1a6b5a] hover:underline" style="font-family: 'Inter', sans-serif;">Mark all read</button>
                    </div>

                    <!-- Notification List -->
                    <div class="divide-y divide-gray-50 max-h-72 overflow-y-auto" id="notif-list">

                        <!-- Notif 1 — Unread -->
                        <div class="notif-item flex gap-3 px-5 py-4 hover:bg-gray-50 transition cursor-pointer" style="background:#f0faf7;" data-read="false">
                            <div class="w-8 h-8 rounded-full bg-red-50 text-red-500 flex items-center justify-center flex-shrink-0 border border-red-100 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-[12px] font-bold text-gray-800 leading-tight notif-title" style="font-family:'Inter',sans-serif;">New high-priority incident reported</p>
                                <p class="text-[11px] text-gray-500 mt-0.5 truncate" style="font-family:'Inter',sans-serif;">Physical altercation near Gymnasium — Building A</p>
                                <p class="text-[10px] font-semibold mt-1.5 notif-time" style="color:#1a6b5a;font-family:'Inter',sans-serif;">2 minutes ago</p>
                            </div>
                            <span class="notif-dot w-2 h-2 rounded-full flex-shrink-0 mt-1.5" style="background:#1a6b5a;"></span>
                        </div>

                        <!-- Notif 2 — Unread -->
                        <div class="notif-item flex gap-3 px-5 py-4 hover:bg-gray-50 transition cursor-pointer" style="background:#f0faf7;" data-read="false">
                            <div class="w-8 h-8 rounded-full bg-yellow-50 text-yellow-500 flex items-center justify-center flex-shrink-0 border border-yellow-100 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-[12px] font-bold text-gray-800 leading-tight notif-title" style="font-family:'Inter',sans-serif;">INC-047 assigned to Security Team</p>
                                <p class="text-[11px] text-gray-500 mt-0.5 truncate" style="font-family:'Inter',sans-serif;">Incident has been escalated for immediate action</p>
                                <p class="text-[10px] font-semibold mt-1.5 notif-time" style="color:#1a6b5a;font-family:'Inter',sans-serif;">15 minutes ago</p>
                            </div>
                            <span class="notif-dot w-2 h-2 rounded-full flex-shrink-0 mt-1.5" style="background:#1a6b5a;"></span>
                        </div>

                        <!-- Notif 3 — Unread -->
                        <div class="notif-item flex gap-3 px-5 py-4 hover:bg-gray-50 transition cursor-pointer" style="background:#f0faf7;" data-read="false">
                            <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/></svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-[12px] font-bold text-gray-800 leading-tight notif-title" style="font-family:'Inter',sans-serif;">New report submitted</p>
                                <p class="text-[11px] text-gray-500 mt-0.5 truncate" style="font-family:'Inter',sans-serif;">Maria Santos submitted a new incident report</p>
                                <p class="text-[10px] font-semibold mt-1.5 notif-time" style="color:#1a6b5a;font-family:'Inter',sans-serif;">1 hour ago</p>
                            </div>
                            <span class="notif-dot w-2 h-2 rounded-full flex-shrink-0 mt-1.5" style="background:#1a6b5a;"></span>
                        </div>

                        <!-- Notif 4 — Read -->
                        <div class="notif-item flex gap-3 px-5 py-4 hover:bg-gray-50 transition cursor-pointer" data-read="true">
                            <div class="w-8 h-8 rounded-full bg-green-50 text-green-500 flex items-center justify-center flex-shrink-0 border border-green-100 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-[12px] font-medium text-gray-500 leading-tight" style="font-family:'Inter',sans-serif;">INC-039 marked as Resolved</p>
                                <p class="text-[11px] text-gray-400 mt-0.5 truncate" style="font-family:'Inter',sans-serif;">Incident closed by the security team</p>
                                <p class="text-[10px] text-gray-400 font-semibold mt-1.5" style="font-family:'Inter',sans-serif;">3 hours ago</p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-5 py-3 border-t border-gray-100 bg-gray-50 text-center">
                        <a href="{{ route('incidents') }}" wire:navigate class="text-[12px] font-bold text-[#1a6b5a] hover:underline" style="font-family:'Inter',sans-serif;">View all incidents →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="kk-page-content">
        {{ $slot }}
    </div>

    <style>
        @keyframes notifSlideIn {
            from { opacity: 0; transform: translateY(-8px) scale(0.97); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }
        #notification-panel { animation: notifSlideIn 0.18s cubic-bezier(.4,0,.2,1); }
    </style>

    <script>
        function toggleNotifications(e) {
            e.stopPropagation();
            const panel = document.getElementById('notification-panel');
            const isOpen = panel.style.display !== 'none';
            panel.style.display = isOpen ? 'none' : 'block';
        }

        function markAllRead() {
            let unreadCount = 0;
            document.querySelectorAll('.notif-item').forEach(item => {
                if (item.getAttribute('data-read') === 'false') {
                    item.setAttribute('data-read', 'true');
                    item.style.background = '';
                    // Remove green dot
                    const dot = item.querySelector('.notif-dot');
                    if (dot) dot.remove();
                    // Dim the title
                    const title = item.querySelector('.notif-title');
                    if (title) { title.style.fontWeight = '500'; title.style.color = '#6b7280'; }
                    // Dim the time
                    const time = item.querySelector('.notif-time');
                    if (time) { time.style.color = '#9ca3af'; }
                }
            });
            // Hide badge
            const badge = document.getElementById('notif-badge');
            if (badge) badge.style.display = 'none';
            // Update label
            const label = document.getElementById('notif-unread-label');
            if (label) label.textContent = 'All caught up!';
        }

        // Close panel when clicking outside
        document.addEventListener('click', function(e) {
            const wrapper = document.getElementById('notification-wrapper');
            const panel = document.getElementById('notification-panel');
            if (panel && wrapper && !wrapper.contains(e.target)) {
                panel.style.display = 'none';
            }
        });
    </script>
</x-layouts::app.sidebar>

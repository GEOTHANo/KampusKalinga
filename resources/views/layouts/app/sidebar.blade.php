<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    <style>
        /* Role-Based Access Control (RBAC) Simulation Styles */
        /* Admin */
        body.role-admin .nav-report,
        body.role-admin .nav-report-top { display: none !important; }
        
        /* School Personnel */
        body.role-schoolpersonnel .nav-users,
        body.role-schoolpersonnel .nav-analytics,
        body.role-schoolpersonnel .nav-settings,
        body.role-schoolpersonnel .dash-recent { display: none !important; }

        /* Student */
        body.role-student .nav-incidents,
        body.role-student .nav-users,
        body.role-student .nav-map,
        body.role-student .nav-analytics,
        body.role-student .dash-cards,
        body.role-student .dash-graphs,
        body.role-student .dash-recent { display: none !important; }

        /* General Student Dashboard rule */
        body:not(.role-student) .dash-student { display: none !important; }
    </style>
    <script>
        // Apply role immediately to prevent flash (runs before DOMContentLoaded)
        (function() {
            const role = localStorage.getItem('kk_current_role') || 'superadmin';
            document.documentElement.setAttribute('data-kk-role', role);
        })();

        function applyRole() {
            const role = localStorage.getItem('kk_current_role') || 'superadmin';
            document.body.classList.remove('role-superadmin', 'role-admin', 'role-schoolpersonnel', 'role-student');
            document.body.classList.add('role-' + role);
            const roleSelect = document.getElementById('roleSimulator');
            if (roleSelect) roleSelect.value = role;

            // Update greeting subtitle based on role
            const subtitle = document.getElementById('kk-page-subtitle');
            if (subtitle) {
                const greetings = {
                    'superadmin':     "Welcome back, Super Admin. You have full system access.",
                    'admin':          "Welcome back, Admin. Here's the latest incident overview.",
                    'schoolpersonnel':"Welcome back. Here's your campus incident summary.",
                    'student':        "Welcome back. Track the status of your submitted reports below.",
                };
                subtitle.textContent = greetings[role] || '';
            }
        }

        function changeRole(select) {
            const role = select.value;
            localStorage.setItem('kk_current_role', role);
            applyRole();
        }

        // Run on initial full page load
        document.addEventListener('DOMContentLoaded', applyRole);

        // Re-run after every Livewire soft navigation (wire:navigate)
        document.addEventListener('livewire:navigated', applyRole);
    </script>
</head>

<body class="min-h-screen bg-gray-100">
    <!-- Custom Sidebar -->
    <aside id="kk-sidebar" class="kk-sidebar">
        <!-- Brand Header -->
        <div class="kk-sidebar-brand">
            <div class="kk-brand-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    <path d="m9 12 2 2 4-4" />
                </svg>
            </div>
            <div class="kk-brand-text">
                <span class="kk-brand-name">KampusKalinga</span>
                <span class="kk-brand-sub">Incident Reporting</span>
            </div>
        </div>

        <!-- Main Menu -->
        <div class="kk-sidebar-menu">
            <span class="kk-menu-label">MAIN MENU</span>
            <nav class="kk-nav">
                <a href="{{ route('dashboard') }}"
                    class="kk-nav-item nav-dashboard {{ request()->routeIs('dashboard') ? 'active' : '' }}" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="kk-nav-icon">
                        <rect x="3" y="3" width="7" height="7" rx="1" />
                        <rect x="14" y="3" width="7" height="7" rx="1" />
                        <rect x="3" y="14" width="7" height="7" rx="1" />
                        <rect x="14" y="14" width="7" height="7" rx="1" />
                    </svg>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('incidents') }}"
                    class="kk-nav-item nav-incidents {{ request()->routeIs('incidents') ? 'active' : '' }}" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="kk-nav-icon">
                        <path
                            d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                        <line x1="12" y1="9" x2="12" y2="13" />
                        <line x1="12" y1="17" x2="12.01" y2="17" />
                    </svg>
                    <span>Incidents</span>
                </a>
                <a href="{{ route('report-incident') }}"
                    class="kk-nav-item nav-report {{ request()->routeIs('report-incident') ? 'active' : '' }}" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="kk-nav-icon">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="12" y1="18" x2="12" y2="12" />
                        <line x1="9" y1="15" x2="15" y2="15" />
                    </svg>
                    <span>Report Incident</span>
                </a>
                <a href="{{ route('users') }}" class="kk-nav-item nav-users {{ request()->routeIs('users') ? 'active' : '' }}"
                    wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="kk-nav-icon">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    <span>Users</span>
                </a>
                <a href="{{ route('campus-map') }}"
                    class="kk-nav-item nav-map {{ request()->routeIs('campus-map') ? 'active' : '' }}" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="kk-nav-icon">
                        <circle cx="12" cy="10" r="3" />
                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 7 8 11.7z" />
                    </svg>
                    <span>Campus Map</span>
                </a>
                <a href="{{ route('analytics') }}"
                    class="kk-nav-item nav-analytics {{ request()->routeIs('analytics') ? 'active' : '' }}" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="kk-nav-icon">
                        <line x1="18" y1="20" x2="18" y2="10" />
                        <line x1="12" y1="20" x2="12" y2="4" />
                        <line x1="6" y1="20" x2="6" y2="14" />
                    </svg>
                    <span>Analytics</span>
                </a>
                <a href="{{ route('settings') }}"
                    class="kk-nav-item nav-settings {{ request()->routeIs('settings') ? 'active' : '' }}" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="kk-nav-icon">
                        <circle cx="12" cy="12" r="3" />
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                    </svg>
                    <span>Settings</span>
                </a>
            </nav>
        </div>

        <!-- User Profile Footer -->
        <div class="kk-sidebar-footer">
            <div class="kk-user-profile">
                <div class="kk-user-avatar">
                    {{ auth()->check() ? auth()->user()->initials() : 'AD' }}
                </div>
                <div class="kk-user-info">
                    <span class="kk-user-name">{{ auth()->check() ? auth()->user()->name : 'Admin User' }}</span>
                    <span class="kk-user-role">Administrator</span>
                    <select id="roleSimulator" onchange="changeRole(this)" class="mt-1 block w-full text-[10px] py-1 px-1 border border-gray-200 rounded text-gray-600 bg-white focus:outline-none">
                        <option value="superadmin">SuperAdmin</option>
                        <option value="admin">Admin</option>
                        <option value="schoolpersonnel">School Personel</option>
                        <option value="student">Student</option>
                    </select>
                </div>
                <button type="button" onclick="window.location.href='/'" class="kk-logout-btn" title="Log out">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" y1="12" x2="9" y2="12" />
                    </svg>
                </button>
            </div>
        </div>
    </aside>

    <!-- Mobile Header -->
    <header class="kk-mobile-header lg:hidden">
        <button id="kk-mobile-toggle" class="kk-mobile-toggle"
            onclick="document.getElementById('kk-sidebar').classList.toggle('kk-sidebar-open')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                <line x1="3" y1="12" x2="21" y2="12" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
        </button>
        <div class="kk-mobile-brand">
            <div class="kk-brand-icon" style="width:32px;height:32px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    <path d="m9 12 2 2 4-4" />
                </svg>
            </div>
            <span class="kk-brand-name">KampusKalinga</span>
        </div>
    </header>

    <!-- Overlay for mobile -->
    <div id="kk-overlay" class="kk-overlay lg:hidden"
        onclick="document.getElementById('kk-sidebar').classList.remove('kk-sidebar-open'); this.classList.remove('active')">
    </div>

    <!-- Main Content -->
    <main class="kk-main-content">
        {{ $slot }}
    </main>

    @persist('toast')
    <flux:toast.group>
        <flux:toast />
    </flux:toast.group>
    @endpersist

    @fluxScripts

    <script>
        // Mobile sidebar toggle
        document.getElementById('kk-mobile-toggle')?.addEventListener('click', function () {
            document.getElementById('kk-overlay').classList.toggle('active');
        });

        // Close sidebar when clicking a nav item on mobile
        document.querySelectorAll('.kk-nav-item').forEach(function (item) {
            item.addEventListener('click', function () {
                if (window.innerWidth < 1024) {
                    document.getElementById('kk-sidebar').classList.remove('kk-sidebar-open');
                    document.getElementById('kk-overlay').classList.remove('active');
                }
            });
        });
    </script>
</body>

</html>
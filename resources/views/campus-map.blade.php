<x-layouts::app :title="__('Campus Location')">
    <x-slot:subtitle>View and manage campus rooms and locations where incidents may occur.</x-slot:subtitle>

    <div class="flex flex-col gap-6 font-sans pb-10">

        <!-- Toolbar -->
        <div class="bg-white rounded-2xl border border-gray-200 p-4 shadow-sm flex flex-col sm:flex-row flex-wrap items-center justify-between gap-4">
            <div class="flex flex-wrap items-center gap-4 flex-1">
                <!-- Search Input -->
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </div>
                    <input type="text" id="locationSearch" placeholder="Search locations..." oninput="filterLocations()"
                        class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                </div>
                <!-- Category Filter -->
                <div class="relative">
                    <select id="categoryFilter" onchange="filterLocations()"
                        class="bg-[#f8f9fa] border border-gray-200 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition appearance-none text-gray-600 cursor-pointer">
                        <option value="">All Categories</option>
                        <option value="Classroom">Classroom</option>
                        <option value="Laboratory">Laboratory</option>
                        <option value="Facility">Facility</option>
                        <option value="Office">Office</option>
                        <option value="Gate / Entrance">Gate / Entrance</option>
                        <option value="Outdoor Area">Outdoor Area</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <span id="locationCount" class="text-sm text-gray-400 font-medium"></span>
                <!-- Add Location button — hidden for Offices role via CSS -->
                <button onclick="openAddLocationModal()" id="addLocationBtn"
                    class="campus-location-add-btn inline-flex items-center gap-2 px-4 py-2 bg-[#1a6b5a] text-white rounded-lg text-sm font-bold hover:bg-[#145a46] transition shadow-sm whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    Add Location
                </button>
            </div>
        </div>

        <!-- Info Banner -->
        <div class="bg-white rounded-2xl border border-gray-200 p-4 shadow-sm flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-[#f0fdf9] flex items-center justify-center text-[#1a6b5a] flex-shrink-0 border border-[#1a6b5a]/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </div>
            <p class="text-xs text-gray-600 font-medium">These locations appear in the <strong>Location on Campus</strong> dropdown when reporting an incident. Add or manage rooms and areas below.</p>
        </div>

        <!-- Locations Grid -->
        <div id="locationsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <!-- Dynamically rendered by JavaScript -->
        </div>

        <!-- Empty State -->
        <div id="emptyState" class="hidden bg-white rounded-2xl border border-gray-200 p-14 text-center shadow-sm">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <h3 class="text-base font-bold text-gray-700 mb-1">No locations found</h3>
            <p class="text-sm text-gray-400 font-medium">Try adjusting your search or filter, or add a new location.</p>
        </div>

    </div>

    <!-- ===================== Add Location Modal ===================== -->
    <div id="addLocationModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center font-sans backdrop-blur-sm transition-opacity opacity-0 duration-300"
        onclick="if(event.target === this) closeAddLocationModal()">
        <div class="bg-white rounded-2xl w-full max-w-md shadow-2xl transform scale-95 transition-transform duration-300 mx-4">
            <div class="flex justify-between items-center p-6 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-[#1a6b5a] text-white flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800">Add New Location</h2>
                </div>
                <button onclick="closeAddLocationModal()" class="text-gray-400 hover:text-gray-600 transition bg-gray-50 hover:bg-gray-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </button>
            </div>

            <div class="p-6 space-y-5">
                <div>
                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Location / Room Name <span class="text-red-500">*</span></label>
                    <input type="text" id="newLocName"
                        class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50"
                        placeholder="e.g. Room A1, Main Gymnasium, Science Lab 2">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Category <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <select id="newLocCategory"
                            class="block w-full pl-3 pr-10 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50 appearance-none cursor-pointer">
                            <option value="" disabled selected>Select a category</option>
                            <option value="Classroom">Classroom</option>
                            <option value="Laboratory">Laboratory</option>
                            <option value="Facility">Facility</option>
                            <option value="Office">Office</option>
                            <option value="Gate / Entrance">Gate / Entrance</option>
                            <option value="Outdoor Area">Outdoor Area</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Building / Area</label>
                    <input type="text" id="newLocBuilding"
                        class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50"
                        placeholder="e.g. Building A, Main Campus">
                </div>
                <div id="addLocError" class="hidden text-sm text-red-600 font-medium bg-red-50 border border-red-100 px-4 py-2.5 rounded-lg"></div>
            </div>

            <div class="p-6 border-t border-gray-100 bg-gray-50/50 rounded-b-2xl flex justify-end gap-3">
                <button onclick="closeAddLocationModal()" class="px-5 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-bold hover:bg-gray-50 transition">Cancel</button>
                <button onclick="saveLocation()" class="px-5 py-2.5 bg-[#1a6b5a] text-white rounded-lg text-sm font-bold hover:bg-[#145a46] transition shadow-sm">Save Location</button>
            </div>
        </div>
    </div>

    <script>
        // ============================
        // Default campus locations
        // ============================
        const DEFAULT_LOCATIONS = [
            { id: 1,  name: 'Room A1',          category: 'Classroom',      building: 'Building A' },
            { id: 2,  name: 'Room A2',          category: 'Classroom',      building: 'Building A' },
            { id: 3,  name: 'Room A3',          category: 'Classroom',      building: 'Building A' },
            { id: 4,  name: 'Room B1',          category: 'Classroom',      building: 'Building B' },
            { id: 5,  name: 'Room B2',          category: 'Classroom',      building: 'Building B' },
            { id: 6,  name: 'Room B3',          category: 'Classroom',      building: 'Building B' },
            { id: 7,  name: 'Room C1',          category: 'Classroom',      building: 'Building C' },
            { id: 8,  name: 'Room C2',          category: 'Classroom',      building: 'Building C' },
            { id: 9,  name: 'Science Lab 1',    category: 'Laboratory',     building: 'Building C' },
            { id: 10, name: 'Science Lab 2',    category: 'Laboratory',     building: 'Building C' },
            { id: 11, name: 'Science Lab 3',    category: 'Laboratory',     building: 'Building C' },
            { id: 12, name: 'Computer Lab 1',   category: 'Laboratory',     building: 'Building B' },
            { id: 13, name: 'Computer Lab 2',   category: 'Laboratory',     building: 'Building B' },
            { id: 14, name: 'Main Gymnasium',   category: 'Facility',       building: 'Main Campus' },
            { id: 15, name: 'Library',          category: 'Facility',       building: 'Main Campus' },
            { id: 16, name: 'Cafeteria',        category: 'Facility',       building: 'Main Campus' },
            { id: 17, name: 'Gate 1',           category: 'Gate / Entrance', building: 'Main Campus' },
            { id: 18, name: 'Gate 2',           category: 'Gate / Entrance', building: 'Main Campus' },
            { id: 19, name: 'Parking Lot A',    category: 'Outdoor Area',   building: 'Main Campus' },
            { id: 20, name: 'Parking Lot B',    category: 'Outdoor Area',   building: 'Main Campus' },
            { id: 21, name: 'Admin Building',   category: 'Office',         building: 'Main Campus' },
            { id: 22, name: 'Guidance Office',  category: 'Office',         building: 'Building A' },
            { id: 23, name: 'Registrar Office', category: 'Office',         building: 'Building A' },
            { id: 24, name: 'Health Center',    category: 'Office',         building: 'Building B' },
        ];

        const STORAGE_KEY = 'kk_campus_locations';

        function getLocations() {
            const stored = localStorage.getItem(STORAGE_KEY);
            if (!stored) {
                localStorage.setItem(STORAGE_KEY, JSON.stringify(DEFAULT_LOCATIONS));
                return DEFAULT_LOCATIONS;
            }
            try { return JSON.parse(stored); } catch (e) { return DEFAULT_LOCATIONS; }
        }

        function saveLocations(locations) {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(locations));
        }

        // Category badge color mapping
        const CATEGORY_COLORS = {
            'Classroom':       'bg-blue-50 text-blue-600 border-blue-200',
            'Laboratory':      'bg-purple-50 text-purple-600 border-purple-200',
            'Facility':        'bg-teal-50 text-teal-600 border-teal-200',
            'Office':          'bg-orange-50 text-orange-600 border-orange-200',
            'Gate / Entrance': 'bg-green-50 text-green-700 border-green-200',
            'Outdoor Area':    'bg-yellow-50 text-yellow-700 border-yellow-200',
        };

        // Category icon SVG paths
        const CATEGORY_ICONS = {
            'Classroom':       '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
            'Laboratory':      '<path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v11m0 0a2 2 0 0 0 4 0m-4 0a2 2 0 0 1-4 0m8 0v1a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-1m8 0a2 2 0 0 0 4 0"/>',
            'Facility':        '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>',
            'Office':          '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
            'Gate / Entrance': '<path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/>',
            'Outdoor Area':    '<circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
        };

        function renderLocations(locs) {
            const grid    = document.getElementById('locationsGrid');
            const empty   = document.getElementById('emptyState');
            const counter = document.getElementById('locationCount');

            if (!locs || locs.length === 0) {
                grid.innerHTML = '';
                empty.classList.remove('hidden');
                counter.textContent = '0 locations';
                return;
            }

            empty.classList.add('hidden');
            counter.textContent = locs.length + ' location' + (locs.length !== 1 ? 's' : '');

            grid.innerHTML = locs.map(loc => {
                const colorClass = CATEGORY_COLORS[loc.category] || 'bg-gray-50 text-gray-600 border-gray-200';
                const iconPaths  = CATEGORY_ICONS[loc.category]  || '<circle cx="12" cy="12" r="10"/>';
                return `
                <div class="bg-white rounded-2xl border border-gray-200 p-5 shadow-sm hover:shadow-md hover:border-[#1a6b5a]/50 transition-all duration-200 group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-gray-500 border border-gray-100 group-hover:bg-[#f0fdf9] group-hover:border-[#1a6b5a]/20 group-hover:text-[#1a6b5a] transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">${iconPaths}</svg>
                        </div>
                        <span class="inline-flex px-2.5 py-0.5 rounded-full text-[10px] font-bold border ${colorClass}">${loc.category}</span>
                    </div>
                    <h3 class="text-sm font-bold text-gray-800 mb-1.5 group-hover:text-[#1a6b5a] transition-colors">${loc.name}</h3>
                    <p class="text-xs text-gray-400 font-medium flex items-center gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                        ${loc.building || 'Main Campus'}
                    </p>
                </div>`;
            }).join('');
        }

        function filterLocations() {
            const search   = (document.getElementById('locationSearch').value || '').toLowerCase().trim();
            const category = document.getElementById('categoryFilter').value;
            const all      = getLocations();
            const filtered = all.filter(loc => {
                const matchSearch = !search
                    || loc.name.toLowerCase().includes(search)
                    || (loc.building || '').toLowerCase().includes(search)
                    || (loc.category || '').toLowerCase().includes(search);
                const matchCat = !category || loc.category === category;
                return matchSearch && matchCat;
            });
            renderLocations(filtered);
        }

        // ============================
        // Add Location Modal
        // ============================
        function openAddLocationModal() {
            document.getElementById('newLocName').value     = '';
            document.getElementById('newLocCategory').value = '';
            document.getElementById('newLocBuilding').value = '';
            document.getElementById('addLocError').classList.add('hidden');
            document.getElementById('addLocError').textContent = '';

            const modal = document.getElementById('addLocationModal');
            const inner = modal.querySelector('div');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                inner.classList.remove('scale-95');
                document.getElementById('newLocName').focus();
            }, 10);
        }

        function closeAddLocationModal() {
            const modal = document.getElementById('addLocationModal');
            const inner = modal.querySelector('div');
            modal.classList.add('opacity-0');
            inner.classList.add('scale-95');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }

        function saveLocation() {
            const name     = (document.getElementById('newLocName').value || '').trim();
            const category = document.getElementById('newLocCategory').value;
            const building = (document.getElementById('newLocBuilding').value || '').trim();
            const errEl    = document.getElementById('addLocError');

            // Validation
            if (!name) {
                errEl.textContent = 'Location / Room name is required.';
                errEl.classList.remove('hidden');
                document.getElementById('newLocName').focus();
                return;
            }
            if (!category) {
                errEl.textContent = 'Please select a category.';
                errEl.classList.remove('hidden');
                return;
            }

            const locations = getLocations();
            if (locations.find(l => l.name.toLowerCase() === name.toLowerCase())) {
                errEl.textContent = 'A location with this name already exists.';
                errEl.classList.remove('hidden');
                return;
            }

            const newId = locations.length > 0 ? Math.max(...locations.map(l => l.id)) + 1 : 1;
            locations.push({ id: newId, name, category, building: building || 'Main Campus' });
            saveLocations(locations);
            closeAddLocationModal();

            // Re-render with any active filters cleared
            document.getElementById('locationSearch').value  = '';
            document.getElementById('categoryFilter').value  = '';
            renderLocations(getLocations());
        }

        // ============================
        // Init
        // ============================
        function initPage() { renderLocations(getLocations()); }

        document.addEventListener('DOMContentLoaded', initPage);
        document.addEventListener('livewire:navigated', initPage);
    </script>
</x-layouts::app>

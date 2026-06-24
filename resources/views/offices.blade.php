<x-layouts::app :title="__('Offices')">
    <x-slot:subtitle>Manage campus offices and departments.</x-slot:subtitle>

    <div class="flex flex-col gap-6 font-sans pb-10">
        
        <!-- Toolbar -->
        <div class="bg-white rounded-2xl border border-gray-200 p-4 shadow-sm flex flex-col sm:flex-row flex-wrap items-center justify-between gap-4">
            <div class="flex flex-wrap items-center gap-4 flex-1">
                <!-- Search Input -->
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </div>
                    <input type="text" placeholder="Search offices..." class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                </div>
            </div>
            
            <button onclick="openAddOfficeModal()" class="inline-flex items-center gap-2 px-4 py-2 bg-[#1a6b5a] text-white rounded-lg text-sm font-bold hover:bg-[#145a46] transition shadow-sm whitespace-nowrap">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                Add New Office
            </button>
        </div>

        <!-- Offices Table -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-[#f8f9fa] text-gray-400 font-bold uppercase tracking-wider text-[11px] border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 cursor-pointer hover:text-gray-600 transition group w-1/3">
                                <div class="flex items-center gap-1.5">OFFICE NAME <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-300 group-hover:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg></div>
                            </th>
                            <th class="px-6 py-4">HEAD / MANAGER</th>
                            <th class="px-6 py-4">BUILDING</th>
                            <th class="px-6 py-4">STATUS</th>
                            <th class="px-6 py-4 text-right">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        
                        <!-- Office 1 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center font-bold text-xs flex-shrink-0 border border-orange-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-800">Security Office</div>
                                        <div class="text-xs text-gray-400 mt-0.5">security@kampuskalinga.edu</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600 font-medium text-xs">Maria Santos</td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Main Gate Building</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    <span class="text-xs font-semibold text-gray-600">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="Edit Office">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Office 2 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xs flex-shrink-0 border border-blue-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-800">Student Affairs</div>
                                        <div class="text-xs text-gray-400 mt-0.5">studentaffairs@kampuskalinga.edu</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600 font-medium text-xs">Juan dela Cruz</td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Building A</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    <span class="text-xs font-semibold text-gray-600">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="Edit Office">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Office 3 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold text-xs flex-shrink-0 border border-purple-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-800">IT Department</div>
                                        <div class="text-xs text-gray-400 mt-0.5">it@kampuskalinga.edu</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600 font-medium text-xs">Admin User</td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Admin Building</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    <span class="text-xs font-semibold text-gray-600">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="Edit Office">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            
            <!-- Pagination Footer -->
            <div class="px-6 py-4 border-t border-gray-200 bg-white flex flex-wrap items-center justify-between gap-4">
                <span class="text-xs text-gray-500 font-medium">Showing 1-3 of 3 offices</span>
            </div>
        </div>
    </div>

    <!-- Add Office Modal -->
    <div id="addOfficeModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center font-sans backdrop-blur-sm transition-opacity opacity-0 duration-300"
        onclick="if(event.target === this) closeAddOfficeModal()">
        <div class="bg-white rounded-2xl w-full max-w-md shadow-2xl transform scale-95 transition-transform duration-300 mx-4">
            <div class="flex justify-between items-center p-6 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-[#1a6b5a] text-white flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800">Add New Office</h2>
                </div>
                <button onclick="closeAddOfficeModal()" class="text-gray-400 hover:text-gray-600 transition bg-gray-50 hover:bg-gray-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </button>
            </div>

            <div class="p-6 space-y-5">
                <div>
                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Office Name <span class="text-red-500">*</span></label>
                    <input type="text"
                        class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50"
                        placeholder="e.g. Guidance Office">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Email Address</label>
                    <input type="email"
                        class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50"
                        placeholder="e.g. guidance@kampuskalinga.edu">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Head / Manager</label>
                    <input type="text"
                        class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50"
                        placeholder="e.g. Juan dela Cruz">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Building</label>
                    <input type="text"
                        class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50"
                        placeholder="e.g. Main Admin Building">
                </div>
            </div>

            <div class="p-6 border-t border-gray-100 bg-gray-50/50 rounded-b-2xl flex justify-end gap-3">
                <button onclick="closeAddOfficeModal()" class="px-5 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-bold hover:bg-gray-50 transition">Cancel</button>
                <button onclick="closeAddOfficeModal()" class="px-5 py-2.5 bg-[#1a6b5a] text-white rounded-lg text-sm font-bold hover:bg-[#145a46] transition shadow-sm">Save Office</button>
            </div>
        </div>
    </div>

    <script>
        function openAddOfficeModal() {
            const modal = document.getElementById('addOfficeModal');
            const inner = modal.querySelector('div');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                inner.classList.remove('scale-95');
            }, 10);
        }

        function closeAddOfficeModal() {
            const modal = document.getElementById('addOfficeModal');
            const inner = modal.querySelector('div');
            modal.classList.add('opacity-0');
            inner.classList.add('scale-95');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }
    </script>

</x-layouts::app>

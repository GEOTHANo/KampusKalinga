<x-layouts::app :title="__('Users')">
    <x-slot:subtitle>Manage system users and permissions.</x-slot:subtitle>

    <div class="flex flex-col gap-6 font-sans pb-10">
        
        <!-- Toolbar -->
        <div class="bg-white rounded-2xl border border-gray-200 p-4 shadow-sm flex flex-col sm:flex-row flex-wrap items-center justify-between gap-4">
            <div class="flex flex-wrap items-center gap-4 flex-1">
                <!-- Search Input -->
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </div>
                    <input type="text" placeholder="Search users..." class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                </div>

                <!-- Filters -->
                <button class="inline-flex items-center gap-2 px-3 py-2 border border-gray-200 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 transition">
                    Role
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <button class="inline-flex items-center gap-2 px-3 py-2 border border-gray-200 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 transition">
                    Status
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                </button>
            </div>
            
            <button onclick="openAddUserModal()" class="inline-flex items-center gap-2 px-4 py-2 bg-[#1a6b5a] text-white rounded-lg text-sm font-bold hover:bg-[#145a46] transition shadow-sm whitespace-nowrap">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                Add New User
            </button>
        </div>

        <!-- Users Table -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-[#f8f9fa] text-gray-400 font-bold uppercase tracking-wider text-[11px] border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 cursor-pointer hover:text-gray-600 transition group w-1/3">
                                <div class="flex items-center gap-1.5">USER <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-300 group-hover:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg></div>
                            </th>
                            <th class="px-6 py-4">ROLE</th>
                            <th class="px-6 py-4">ID NUMBER</th>
                            <th class="px-6 py-4">DEPARTMENT</th>
                            <th class="px-6 py-4">STATUS</th>
                            <th class="px-6 py-4 text-right">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        
                        <!-- User 1 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-[#1a6b5a] text-white flex items-center justify-center font-bold text-xs flex-shrink-0">
                                        AD
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-800">Admin User</div>
                                        <div class="text-xs text-gray-400 mt-0.5">admin@kampuskalinga.edu</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-purple-100/50 text-purple-600 border border-purple-100">Administrator</span>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">EMP-001</td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">IT Department</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    <span class="text-xs font-semibold text-gray-600">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button onclick="openViewUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="View User">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </button>
                                    <button onclick="openEditUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="Edit User">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- User 2 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-xs flex-shrink-0">
                                        MS
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-800">Maria Santos</div>
                                        <div class="text-xs text-gray-400 mt-0.5">m.santos@kampuskalinga.edu</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-red-100/50 text-red-600 border border-red-100">Security Team</span>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">SEC-042</td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Campus Security</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    <span class="text-xs font-semibold text-gray-600">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button onclick="openViewUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="View User">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </button>
                                    <button onclick="openEditUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="Edit User">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- User 3 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs flex-shrink-0">
                                        JC
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-800">Juan dela Cruz</div>
                                        <div class="text-xs text-gray-400 mt-0.5">j.delacruz@kampuskalinga.edu</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-blue-100/50 text-blue-600 border border-blue-100">Staff</span>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">EMP-105</td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">Student Affairs</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    <span class="text-xs font-semibold text-gray-600">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button onclick="openViewUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="View User">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </button>
                                    <button onclick="openEditUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="Edit User">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- User 4 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-yellow-100 text-yellow-600 flex items-center justify-center font-bold text-xs flex-shrink-0">
                                        AL
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-800">Ana Lim</div>
                                        <div class="text-xs text-gray-400 mt-0.5">a.lim@student.kampuskalinga.edu</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-yellow-100/50 text-yellow-700 border border-yellow-200">Student</span>
                            </td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">2023-00142</td>
                            <td class="px-6 py-4 text-gray-500 font-medium text-xs">College of Science</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    <span class="text-xs font-semibold text-gray-600">Active</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button onclick="openViewUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="View User">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </button>
                                    <button onclick="openEditUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="Edit User">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- User 5 -->
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-bold text-xs flex-shrink-0">
                                        CR
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-500">Carlos Reyes</div>
                                        <div class="text-xs text-gray-400 mt-0.5">c.reyes@kampuskalinga.edu</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-2.5 py-1 rounded-md text-[10px] font-bold bg-blue-100/50 text-blue-600 border border-blue-100">Staff</span>
                            </td>
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">EMP-088</td>
                            <td class="px-6 py-4 text-gray-400 font-medium text-xs">Facilities</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                    <span class="text-xs font-semibold text-gray-400">Inactive</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button onclick="openViewUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="View User">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </button>
                                    <button onclick="openEditUserModal(this)" class="text-gray-400 hover:text-[#1a6b5a] transition p-1" title="Edit User">
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
                <span class="text-xs text-gray-500 font-medium">Showing 1-5 of 142 users</span>
                <div class="flex items-center gap-1">
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 transition"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg></button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-[#1a6b5a] text-white font-bold text-xs">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">2</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">3</button>
                    <span class="px-2 text-gray-400 text-xs">...</span>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium text-xs transition">15</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 transition"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add User Modal -->
    <div id="addUserModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center font-sans backdrop-blur-sm transition-opacity opacity-0 duration-300">
        <div class="bg-white rounded-2xl w-full max-w-xl shadow-2xl transform scale-95 transition-transform duration-300 mx-4 flex flex-col max-h-[90vh]">
            <div class="flex justify-between items-center p-6 border-b border-gray-100 shrink-0">
                <div class="flex items-center gap-3">
                    <h2 class="text-xl font-bold text-gray-800">Add New User</h2>
                </div>
                <button onclick="closeAddUserModal()" class="text-gray-400 hover:text-gray-600 transition bg-gray-50 hover:bg-gray-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            
            <div class="p-6 overflow-y-auto grow">
                <form class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">First Name</label>
                            <input type="text" class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" placeholder="e.g. Juan">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Last Name</label>
                            <input type="text" class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" placeholder="e.g. Dela Cruz">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Email Address</label>
                        <input type="email" class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" placeholder="user@kampus.edu.ph">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Role</label>
                            <div class="relative">
                                <select class="block w-full pl-3 pr-10 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50 appearance-none cursor-pointer">
                                    <option value="" disabled selected>Select Role</option>
                                    <option value="student">Student</option>
                                    <option value="personnel">School Personnel</option>
                                    <option value="admin">Admin</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">ID Number (Optional)</label>
                            <input type="text" class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50" placeholder="e.g. 2023-0001">
                        </div>
                    </div>

                    <div class="pt-2">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="w-4 h-4 text-[#1a6b5a] bg-gray-100 border-gray-300 rounded focus:ring-[#1a6b5a] focus:ring-2 cursor-pointer" checked>
                            <span class="text-sm font-medium text-gray-600">Send welcome email with login instructions</span>
                        </label>
                    </div>
                </form>
            </div>
            
            <div class="p-6 border-t border-gray-100 bg-gray-50/50 rounded-b-2xl flex justify-end gap-3">
                <button onclick="closeAddUserModal()" class="px-5 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-bold hover:bg-gray-50 transition">Cancel</button>
                <button onclick="closeAddUserModal()" class="px-5 py-2.5 bg-[#1a6b5a] text-white rounded-lg text-sm font-bold hover:bg-[#145a46] transition shadow-sm">Save User</button>
            </div>
        </div>
    </div>

    <script>
        function openAddUserModal() {
            const modal = document.getElementById('addUserModal');
            const modalInner = modal.querySelector('div');
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalInner.classList.remove('scale-95');
            }, 10);
        }

        function closeAddUserModal() {
            const modal = document.getElementById('addUserModal');
            const modalInner = modal.querySelector('div');
            
            modal.classList.add('opacity-0');
            modalInner.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // --- Data Extraction ---
        function extractUserData(button) {
            const row = button.closest('tr');
            const nameEl = row.querySelector('.font-bold.text-gray-800') || row.querySelector('.font-bold.text-gray-500');
            const name = nameEl.innerText.trim();
            const email = row.querySelector('.text-xs.text-gray-400').innerText.trim();
            const initialsEl = row.querySelector('.rounded-full.flex-shrink-0');
            const initials = initialsEl.innerText.trim();
            const initialsClasses = initialsEl.className;
            const role = row.cells[1].innerText.trim();
            const roleHtml = row.cells[1].innerHTML;
            const idNumber = row.cells[2].innerText.trim();
            const department = row.cells[3].innerText.trim();
            const statusHtml = row.cells[4].innerHTML;

            return { name, email, initials, initialsClasses, role, roleHtml, idNumber, department, statusHtml };
        }

        // --- View Modal Logic ---
        function openViewUserModal(button) {
            const data = extractUserData(button);
            
            document.getElementById('viewUserInitials').innerText = data.initials;
            document.getElementById('viewUserInitials').className = data.initialsClasses + " w-16 h-16 text-lg mx-auto mb-4";
            document.getElementById('viewUserName').innerText = data.name;
            document.getElementById('viewUserEmail').innerText = data.email;
            document.getElementById('viewUserRole').innerHTML = data.roleHtml;
            document.getElementById('viewUserStatus').innerHTML = data.statusHtml;
            document.getElementById('viewUserIdNumber').innerText = data.idNumber;
            document.getElementById('viewUserDepartment').innerText = data.department;

            const modal = document.getElementById('viewUserModal');
            const modalInner = modal.querySelector('div');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalInner.classList.remove('translate-x-full');
            }, 10);
        }

        function closeViewUserModal() {
            const modal = document.getElementById('viewUserModal');
            const modalInner = modal.querySelector('div');
            modal.classList.add('opacity-0');
            modalInner.classList.add('translate-x-full');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // --- Edit Modal Logic ---
        function openEditUserModal(button) {
            const data = extractUserData(button);
            
            // Populate form
            const nameParts = data.name.split(' ');
            const firstName = nameParts[0];
            const lastName = nameParts.slice(1).join(' ');
            
            document.getElementById('editFirstName').value = firstName;
            document.getElementById('editLastName').value = lastName;
            document.getElementById('editEmail').value = data.email;
            document.getElementById('editIdNumber').value = data.idNumber;
            
            // Map role text to select value
            const roleSelect = document.getElementById('editRole');
            if (data.role.toLowerCase().includes('admin')) roleSelect.value = 'admin';
            else if (data.role.toLowerCase().includes('student')) roleSelect.value = 'student';
            else roleSelect.value = 'personnel';

            const modal = document.getElementById('editUserModal');
            const modalInner = modal.querySelector('div');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalInner.classList.remove('scale-95');
            }, 10);
        }

        function closeEditUserModal() {
            const modal = document.getElementById('editUserModal');
            const modalInner = modal.querySelector('div');
            modal.classList.add('opacity-0');
            modalInner.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    </script>

    <!-- View User Modal (Slide-over) -->
    <div id="viewUserModal" class="fixed inset-0 bg-black/50 hidden z-50 flex justify-end font-sans backdrop-blur-sm transition-opacity opacity-0 duration-300" onclick="if(event.target === this) closeViewUserModal()">
        <div class="bg-white w-full max-w-md h-full shadow-2xl transform translate-x-full transition-transform duration-300 flex flex-col">
            <div class="flex justify-between items-center p-6 border-b border-gray-100 shrink-0">
                <h2 class="text-xl font-bold text-gray-800">User Profile</h2>
                <button onclick="closeViewUserModal()" class="text-gray-400 hover:text-gray-600 transition bg-gray-50 hover:bg-gray-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </button>
            </div>
            
            <div class="p-8 overflow-y-auto grow">
                <div class="text-center mb-8 pb-8 border-b border-gray-100">
                    <div id="viewUserInitials" class=""></div>
                    <h3 id="viewUserName" class="text-2xl font-bold text-gray-900 mb-1"></h3>
                    <p id="viewUserEmail" class="text-sm text-gray-500 font-medium mb-4"></p>
                    <div class="flex items-center justify-center gap-3">
                        <div id="viewUserRole"></div>
                        <div id="viewUserStatus" class="bg-gray-50 px-3 py-1 rounded-md border border-gray-100"></div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">ID Number</h4>
                        <p id="viewUserIdNumber" class="text-sm text-gray-800 font-medium bg-gray-50 p-3 rounded-lg"></p>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Department</h4>
                        <p id="viewUserDepartment" class="text-sm text-gray-800 font-medium bg-gray-50 p-3 rounded-lg"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit User Modal -->
    <div id="editUserModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center font-sans backdrop-blur-sm transition-opacity opacity-0 duration-300">
        <div class="bg-white rounded-2xl w-full max-w-xl shadow-2xl transform scale-95 transition-transform duration-300 mx-4 flex flex-col max-h-[90vh]">
            <div class="flex justify-between items-center p-6 border-b border-gray-100 shrink-0">
                <h2 class="text-xl font-bold text-gray-800">Edit User Details</h2>
                <button onclick="closeEditUserModal()" class="text-gray-400 hover:text-gray-600 transition bg-gray-50 hover:bg-gray-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </button>
            </div>
            
            <div class="p-6 overflow-y-auto grow">
                <form class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">First Name</label>
                            <input type="text" id="editFirstName" class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Last Name</label>
                            <input type="text" id="editLastName" class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Email Address</label>
                        <input type="email" id="editEmail" class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Role</label>
                            <div class="relative">
                                <select id="editRole" class="block w-full pl-3 pr-10 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50 appearance-none cursor-pointer">
                                    <option value="student">Student</option>
                                    <option value="personnel">School Personnel</option>
                                    <option value="admin">Admin</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">ID Number</label>
                            <input type="text" id="editIdNumber" class="block w-full px-3 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-sm text-gray-800 font-medium bg-gray-50/50">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Account Status</label>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="editStatus" value="active" class="text-[#1a6b5a] focus:ring-[#1a6b5a]" checked>
                                <span class="text-sm font-medium text-gray-700">Active</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="editStatus" value="inactive" class="text-gray-500 focus:ring-gray-500">
                                <span class="text-sm font-medium text-gray-700">Inactive</span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="p-6 border-t border-gray-100 bg-gray-50/50 rounded-b-2xl flex justify-end gap-3">
                <button onclick="closeEditUserModal()" class="px-5 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-bold hover:bg-gray-50 transition">Cancel</button>
                <button onclick="closeEditUserModal()" class="px-5 py-2.5 bg-[#1a6b5a] text-white rounded-lg text-sm font-bold hover:bg-[#145a46] transition shadow-sm">Save Changes</button>
            </div>
        </div>
    </div>
</x-layouts::app>

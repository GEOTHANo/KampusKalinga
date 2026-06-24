<x-layouts::app :title="__('Settings')">
    <x-slot:subtitle>Manage system configuration and personal preferences.</x-slot:subtitle>

    <div class="flex flex-col gap-8 font-sans pb-10 max-w-4xl mx-auto">
        
        <!-- Settings Content Area -->
        <div class="flex-1 flex flex-col gap-6">
            
            <!-- Profile Information -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-gray-800 leading-none mb-1">Profile Information</h2>
                        <p class="text-[11px] text-gray-400 font-medium">Update your display name, email, and avatar.</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 rounded-lg bg-gray-200 overflow-hidden flex-shrink-0 border border-gray-100">
                        <!-- Placeholder avatar -->
                        <img src="https://i.pravatar.cc/150?u=maria.santos" alt="Maria Santos" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-gray-800">Maria Santos</h3>
                        <p class="text-[11px] text-gray-500 mb-2">Administrator · KampusKalinga</p>
                        <button class="text-[11px] font-bold text-[#1a6b5a] border border-[#1a6b5a]/30 bg-white px-3 py-1.5 rounded-full flex items-center gap-1.5 hover:bg-teal-50 transition shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                            Change Photo
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">Full Name</label>
                        <input type="text" value="Maria Santos" class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">Email Address</label>
                        <input type="email" value="maria.santos@kampus.edu.ph" class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">Role</label>
                        <div class="relative">
                            <select class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-gray-700">
                                <option value="admin" selected>Administrator</option>
                                <option value="staff">Staff</option>
                                <option value="security">Security</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-gray-500">
                                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">Contact Number</label>
                        <input type="text" value="+63 912 345 6789" class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                </div>
            </div>

            <!-- Security & Password -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                    <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-gray-800 leading-none mb-1">Security & Password</h2>
                        <p class="text-[11px] text-gray-400 font-medium">Manage your login credentials and session security.</p>
                    </div>
                </div>

                <div class="flex flex-col gap-6">
                    <div class="flex items-center justify-between pb-6 border-b border-gray-100 dashed">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">Change Password</h4>
                            <p class="text-[10px] text-gray-500">Last changed 45 days ago</p>
                        </div>
                        <button class="text-[11px] font-bold text-[#1a6b5a] border border-[#1a6b5a]/30 bg-white px-3 py-1.5 rounded-full flex items-center gap-1.5 hover:bg-teal-50 transition shadow-sm whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/></svg>
                            Update Password
                        </button>
                    </div>

                    <!-- Toggles -->
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-xs font-bold text-gray-800 mb-1">Two-Factor Authentication</h4>
                                <p class="text-[10px] text-gray-500">Add an extra layer of login security</p>
                            </div>
                            <div class="w-10 h-5 bg-[#106b5a] rounded-full relative cursor-pointer transition shadow-inner">
                                <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 top-0.5 shadow-sm transition"></div>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-xs font-bold text-gray-800 mb-1">Auto Session Timeout</h4>
                                <p class="text-[10px] text-gray-500">Log out after 30 minutes of inactivity</p>
                            </div>
                            <div class="w-10 h-5 bg-[#106b5a] rounded-full relative cursor-pointer transition shadow-inner">
                                <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 top-0.5 shadow-sm transition"></div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-xs font-bold text-gray-800 mb-1">Login Alerts</h4>
                                <p class="text-[10px] text-gray-500">Get notified of new sign-ins to your account</p>
                            </div>
                            <div class="w-10 h-5 bg-gray-200 border border-gray-300 rounded-full relative cursor-pointer transition shadow-inner">
                                <div class="w-4 h-4 bg-white border border-gray-200 rounded-full absolute left-0.5 top-0.5 shadow-sm transition"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notification Preferences -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                    <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-gray-800 leading-none mb-1">Notification Preferences</h2>
                        <p class="text-[11px] text-gray-400 font-medium">Choose what alerts you receive and how.</p>
                    </div>
                </div>

                <div class="flex flex-col gap-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">New Incident Submitted</h4>
                            <p class="text-[10px] text-gray-500">Alert when a new report is filed</p>
                        </div>
                        <div class="w-10 h-5 bg-[#106b5a] rounded-full relative cursor-pointer transition shadow-inner">
                            <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 top-0.5 shadow-sm transition"></div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">High Priority Incidents</h4>
                            <p class="text-[10px] text-gray-500">Immediate push notification for critical reports</p>
                        </div>
                        <div class="w-10 h-5 bg-[#106b5a] rounded-full relative cursor-pointer transition shadow-inner">
                            <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 top-0.5 shadow-sm transition"></div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">Incident Status Updates</h4>
                            <p class="text-[10px] text-gray-500">When a report progresses or is resolved</p>
                        </div>
                        <div class="w-10 h-5 bg-[#106b5a] rounded-full relative cursor-pointer transition shadow-inner">
                            <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 top-0.5 shadow-sm transition"></div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">Weekly Summary Report</h4>
                            <p class="text-[10px] text-gray-500">Email digest every Monday morning</p>
                        </div>
                        <div class="w-10 h-5 bg-gray-200 border border-gray-300 rounded-full relative cursor-pointer transition shadow-inner">
                            <div class="w-4 h-4 bg-white border border-gray-200 rounded-full absolute left-0.5 top-0.5 shadow-sm transition"></div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">AI Classification Alerts</h4>
                            <p class="text-[10px] text-gray-500">When AI flags a report for manual review</p>
                        </div>
                        <div class="w-10 h-5 bg-[#106b5a] rounded-full relative cursor-pointer transition shadow-inner">
                            <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 top-0.5 shadow-sm transition"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Detection Settings -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                    <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-gray-800 leading-none mb-1">AI Detection Settings</h2>
                        <p class="text-[11px] text-gray-400 font-medium">Configure how AI classifies and handles incident reports.</p>
                    </div>
                </div>

                <div class="flex flex-col gap-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">Enable AI Priority Classification</h4>
                            <p class="text-[10px] text-gray-500">Auto-assign priority level on submission</p>
                        </div>
                        <div class="w-10 h-5 bg-[#106b5a] rounded-full relative cursor-pointer transition shadow-inner">
                            <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 top-0.5 shadow-sm transition"></div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">Auto-escalate High Priority</h4>
                            <p class="text-[10px] text-gray-500">Immediately notify security staff for High incidents</p>
                        </div>
                        <div class="w-10 h-5 bg-[#106b5a] rounded-full relative cursor-pointer transition shadow-inner">
                            <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 top-0.5 shadow-sm transition"></div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">Allow AI Override by Admin</h4>
                            <p class="text-[10px] text-gray-500">Admins can manually change AI-assigned priority</p>
                        </div>
                        <div class="w-10 h-5 bg-[#106b5a] rounded-full relative cursor-pointer transition shadow-inner">
                            <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 top-0.5 shadow-sm transition"></div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-2 pt-5 border-t border-gray-100">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800 mb-1">AI Confidence Threshold</h4>
                            <p class="text-[10px] text-gray-500">Minimum score before AI assigns a priority</p>
                        </div>
                        <div class="flex items-center gap-3 w-48">
                            <div class="flex-1 bg-gray-200 rounded-full h-1">
                                <div class="bg-[#106b5a] h-1 rounded-full relative" style="width: 75%">
                                    <div class="absolute right-0 top-1/2 -translate-y-1/2 w-3 h-3 bg-white border-2 border-[#106b5a] rounded-full shadow-sm cursor-pointer"></div>
                                </div>
                            </div>
                            <span class="text-[11px] font-bold text-gray-700">75%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Campus Information -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 mb-6">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                    <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-gray-800 leading-none mb-1">Campus Information</h2>
                        <p class="text-[11px] text-gray-400 font-medium">Edit details about your school campus.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">School Name</label>
                        <input type="text" value="Kampus ng Bayan High School" class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">School Division</label>
                        <input type="text" value="Division of Manila" class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                </div>
                
                <div class="mb-5">
                    <label class="block text-xs font-bold text-gray-700 mb-1.5">Address</label>
                    <input type="text" value="123 Rizal Avenue, Ermita, Manila, Metro Manila 1000" class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">Contact Email</label>
                        <input type="email" value="info@kampusbayan.edu.ph" class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1.5">Emergency Hotline</label>
                        <input type="text" value="(02) 8888-1234" class="w-full bg-[#f8f9fa] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layouts::app>

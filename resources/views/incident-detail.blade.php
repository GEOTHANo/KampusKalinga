<x-layouts::app :title="__('Incident Details')">

    {{-- Back Button + Header --}}
    <div class="flex flex-col gap-6 font-sans pb-10">

        {{-- Back Button --}}
        <div>
            <a href="{{ route('incidents') }}"
               class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 hover:text-[#1a6b5a] transition group">
                <span class="flex items-center justify-center w-8 h-8 rounded-full bg-white border border-gray-200 shadow-sm group-hover:border-[#1a6b5a] group-hover:bg-[#f0faf7] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H5"/><path d="m12 19-7-7 7-7"/>
                    </svg>
                </span>
                Back to Incidents
            </a>
        </div>

        {{-- Report Header Card --}}
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-200 flex flex-wrap items-start justify-between gap-4">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-red-50 border border-red-100 flex items-center justify-center text-red-500 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
                            <line x1="12" y1="9" x2="12" y2="13"/>
                            <line x1="12" y1="17" x2="12.01" y2="17"/>
                        </svg>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 flex-wrap mb-1">
                            <span id="incidentId" class="text-xs font-bold text-gray-500 bg-gray-100 px-2.5 py-1 rounded-md">INC-058</span>
                            <span id="incidentStatus" class="inline-flex px-2.5 py-1 rounded-md text-[11px] font-bold bg-red-100/50 text-red-600">Open</span>
                            <span id="incidentPriority" class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-red-50 text-red-600">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                            </span>
                        </div>
                        <h2 id="incidentTitle" class="text-xl font-bold text-gray-900 leading-snug">
                            Physical altercation near Gymnasium
                        </h2>
                        <div class="flex items-center gap-1.5 text-sm text-gray-500 mt-1.5">
                            <svg class="w-4 h-4 text-red-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            <span id="incidentLocation">Building A, Gym</span>
                        </div>
                    </div>
                </div>
                <div class="text-right shrink-0">
                    <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider mb-1">Date & Time Reported</p>
                    <p id="incidentDateTime" class="text-sm font-bold text-gray-700">Jun 10, 2025, 10:42 AM</p>
                </div>
            </div>
        </div>

        {{-- Main Content Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- Left: Main Report Details --}}
            <div class="lg:col-span-2 flex flex-col gap-6">

                {{-- Full Report --}}
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                    <h3 class="text-sm font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#1a6b5a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10 9 9 9 8 9"/>
                        </svg>
                        Full Incident Report
                    </h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        A physical altercation was reported near the Gymnasium building between two students. A witness
                        called security immediately. The individuals involved were separated before further harm could occur.
                        The incident occurred during the lunch break period. Both students were escorted to the Dean's
                        office for further investigation.
                    </p>
                    <p class="text-sm text-gray-600 leading-relaxed mt-3">
                        Security cameras in the area captured the incident. Initial accounts suggest the altercation stemmed
                        from a prior dispute between the two parties. Witness statements have been collected and forwarded to
                        the Student Affairs office for formal review.
                    </p>
                </div>

                {{-- Attachments --}}
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                    <h3 class="text-sm font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#1a6b5a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <circle cx="8.5" cy="8.5" r="1.5"/>
                            <polyline points="21 15 16 10 5 21"/>
                        </svg>
                        Attachments & Media
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <div class="w-28 h-28 bg-gray-100 rounded-xl border border-gray-200 flex flex-col items-center justify-center text-gray-500 cursor-pointer hover:bg-gray-200 transition group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 mb-1.5 group-hover:scale-110 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/>
                            </svg>
                            <span class="text-[10px] font-bold text-gray-500">Photo 1</span>
                        </div>
                        <div class="w-28 h-28 bg-gray-100 rounded-xl border border-gray-200 flex flex-col items-center justify-center text-gray-500 cursor-pointer hover:bg-gray-200 transition group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 mb-1.5 group-hover:scale-110 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/>
                            </svg>
                            <span class="text-[10px] font-bold text-gray-500">CCTV Clip</span>
                        </div>
                        <div class="w-28 h-28 bg-white rounded-xl border border-dashed border-gray-300 flex flex-col items-center justify-center text-gray-500 cursor-pointer hover:bg-gray-50 hover:border-[#1a6b5a] transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 mb-1.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                <polyline points="17 8 12 3 7 8"/>
                                <line x1="12" y1="3" x2="12" y2="15"/>
                            </svg>
                            <span class="text-[10px] font-bold">Upload</span>
                        </div>
                    </div>
                </div>

                {{-- AI Suggested Actions --}}
                <div class="bg-gradient-to-br from-[#f0f9ff] to-[#e0f2fe] rounded-2xl border border-blue-100 shadow-sm p-6">
                    <div class="flex items-center gap-2.5 mb-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500 text-gray-900 flex items-center justify-center shadow-sm flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"/>
                                <rect x="9" y="9" width="6" height="6"/>
                                <line x1="9" y1="1" x2="9" y2="4"/>
                                <line x1="15" y1="1" x2="15" y2="4"/>
                                <line x1="9" y1="20" x2="9" y2="23"/>
                                <line x1="15" y1="20" x2="15" y2="23"/>
                                <line x1="20" y1="9" x2="23" y2="9"/>
                                <line x1="20" y1="14" x2="23" y2="14"/>
                                <line x1="1" y1="9" x2="4" y2="9"/>
                                <line x1="1" y1="14" x2="4" y2="14"/>
                            </svg>
                        </div>
                        <h3 class="text-sm font-bold text-blue-900">AI Suggested Actions</h3>
                        <span class="text-[10px] font-bold bg-blue-100 text-blue-600 px-2 py-0.5 rounded-full ml-auto">Auto-generated</span>
                    </div>
                    <ul class="text-sm text-blue-800 space-y-2.5">
                        <li class="flex items-start gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mt-1.5 flex-shrink-0"></span>
                            Dispatch the nearest security personnel to the location to secure the area immediately.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mt-1.5 flex-shrink-0"></span>
                            Review CCTV footage from the incident time window to identify all involved parties.
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mt-1.5 flex-shrink-0"></span>
                            Notify Student Affairs for immediate follow-up, mediation, and monitoring of involved students.
                        </li>
                    </ul>
                </div>

                {{-- Official Notes & Feedback --}}
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                    <h3 class="text-sm font-bold text-gray-900 mb-4">Official Notes & Feedback</h3>

                    {{-- Existing Note --}}
                    <div class="space-y-3 mb-5">
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-200">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-7 h-7 rounded-full bg-[#1a6b5a] text-gray-900 flex items-center justify-center text-[10px] font-bold">SO</div>
                                    <span class="text-xs font-bold text-gray-700">Security Office</span>
                                </div>
                                <span class="text-[10px] text-gray-500">Jun 10, 2025, 11:00 AM</span>
                            </div>
                            <p class="text-sm text-gray-600">Officers deployed. Area has been secured. Waiting for further instructions from Student Affairs.</p>
                        </div>
                    </div>

                    {{-- Add Note Form --}}
                    <div class="flex flex-col gap-3">
                        <textarea
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition resize-none"
                            rows="3"
                            placeholder="Add your feedback, update, or resolution note here..."></textarea>
                        <div class="flex justify-end">
                            <button class="bg-[#1a6b5a] hover:bg-[#145a46] text-gray-900 font-bold py-2.5 px-5 rounded-xl text-sm transition shadow-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                                </svg>
                                Submit Note
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Meta Information --}}
            <div class="flex flex-col gap-5">

                {{-- Reporter Info --}}
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5">
                    <h3 class="text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-4">Reported By</h3>
                    <div class="flex items-center gap-3">
                        <div id="reporterAvatar" class="w-12 h-12 rounded-xl bg-[#1a6b5a] text-gray-900 flex items-center justify-center text-base font-bold flex-shrink-0">JD</div>
                        <div>
                            <p id="reporterName" class="font-bold text-gray-900">Juan dela Cruz</p>
                            <p class="text-xs text-gray-500 mt-0.5">Student — ID No. 2022-10453</p>
                            <p class="text-xs text-gray-500 mt-0.5">College of Engineering</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-200 grid grid-cols-2 gap-3">
                        <div>
                            <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider">Contact</p>
                            <p class="text-xs font-semibold text-gray-700 mt-1">09XX-XXX-XXXX</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider">Email</p>
                            <p class="text-xs font-semibold text-gray-700 mt-1 truncate">juan@school.edu</p>
                        </div>
                    </div>
                </div>

                {{-- Incident Meta --}}
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 space-y-4">
                    <div>
                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">Status</p>
                        <span class="inline-flex px-3 py-1.5 rounded-lg text-xs font-bold bg-red-100/50 text-red-600">Open</span>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">Priority</p>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-bold bg-red-50 text-red-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                        </span>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">Category</p>
                        <span class="text-sm font-semibold text-gray-700">Physical Altercation</span>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">Location</p>
                        <span class="text-sm font-semibold text-gray-700">Building A, Gymnasium</span>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">Date & Time</p>
                        <span class="text-sm font-semibold text-gray-700">Jun 10, 2025, 10:42 AM</span>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">Assigned To</p>
                        <span class="text-sm font-semibold text-gray-700">Security Office</span>
                    </div>
                </div>

                {{-- Update Status --}}
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5">
                    <h3 class="text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-3">Update Status</h3>
                    <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm text-gray-700 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent mb-3">
                        <option value="open">Open</option>
                        <option value="in_progress">In Progress</option>
                        <option value="resolved">Resolved</option>
                        <option value="closed">Closed</option>
                    </select>
                    <button class="w-full bg-[#1a6b5a] hover:bg-[#145a46] text-gray-900 font-bold py-2.5 rounded-xl text-sm transition shadow-sm">
                        Save Changes
                    </button>
                </div>

                {{-- Danger Zone --}}
                <div class="bg-white rounded-2xl border border-red-100 shadow-sm p-5">
                    <h3 class="text-[11px] font-bold text-red-400 uppercase tracking-wider mb-3">Danger Zone</h3>
                    <button class="w-full border border-red-200 text-red-600 hover:bg-red-50 font-bold py-2.5 rounded-xl text-sm transition">
                        Archive Incident
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-layouts::app>



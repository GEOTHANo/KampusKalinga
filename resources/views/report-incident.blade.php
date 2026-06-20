<x-layouts::app :title="__('Report Incident')">
    <x-slot:subtitle>Submit a new incident report.</x-slot:subtitle>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 font-sans pb-10">
        <!-- Left Column: Form -->
        <div class="col-span-1 lg:col-span-2 flex flex-col gap-6">
            
            <!-- Incident Details -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                    <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <h2 class="text-base font-bold text-gray-800">Incident Details</h2>
                </div>

                <div class="flex flex-col gap-5">
                    <!-- Incident Title -->
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-1.5">Incident Title <span class="text-red-500">*</span></label>
                        <input type="text" name="title" placeholder="e.g. Physical altercation near the gymnasium" class="w-full bg-[#f4f6f8] border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition" required>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-1.5">Description <span class="text-red-500">*</span></label>
                        <textarea name="description" rows="4" placeholder="Describe what happened in detail — who was involved, what occurred, and any other relevant information..." class="w-full bg-[#f4f6f8] border border-gray-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition resize-none" required></textarea>
                    </div>

                    <!-- Category & Date/Time -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-bold text-gray-800 mb-1.5">Incident Category <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <select name="type_id" class="w-full bg-[#f4f6f8] border border-gray-200 rounded-lg px-4 py-2.5 text-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-gray-700" required>
                                    <option value="" disabled selected>Select a category</option>
                                    <option value="1">Physical Altercation</option>
                                    <option value="2">Theft / Vandalism</option>
                                    <option value="3">Safety Hazard</option>
                                    <option value="4">Other</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-gray-500">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-800 mb-1.5">Date & Time of Incident <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <input type="datetime-local" name="incident_datetime" class="w-full bg-[#f4f6f8] border border-gray-200 rounded-lg pl-4 pr-10 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition" required>
                                <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-gray-800">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-1.5">Location on Campus <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-800">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <select name="location_id" class="w-full bg-[#f4f6f8] border border-gray-200 rounded-lg pl-10 pr-10 py-2.5 text-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition text-gray-700" required>
                                <option value="" disabled selected>Select building / area</option>
                                <option value="1">Gymnasium</option>
                                <option value="2">Science Laboratory</option>
                                <option value="3">Library</option>
                                <option value="4">Gate 1</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-gray-800">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Specific Location Details -->
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-1.5">Specific Location Details</label>
                        <input type="text" name="location_details" placeholder="e.g. Near the main entrance, 2nd floor hallway..." class="w-full bg-[#f4f6f8] border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                </div>
            </div>

            <!-- Evidence & Attachments -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                    <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/></svg>
                    </div>
                    <h2 class="text-base font-bold text-gray-800">Evidence & Attachments</h2>
                </div>

                <div class="bg-[#f4f6f8] border border-gray-200 rounded-xl p-8 flex flex-col items-center justify-center text-center">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-gray-800 shadow-sm mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                    </div>
                    <h3 class="text-sm font-bold text-gray-800 mb-1">Drag & drop files here</h3>
                    <p class="text-[11px] text-gray-400 font-medium mb-4">Supports JPG, PNG, MP4, PDF — Max 20MB per file</p>
                    <button class="bg-white border border-gray-200 text-gray-700 px-5 py-2 rounded-lg text-xs font-bold hover:bg-gray-50 transition shadow-sm">
                        Browse Files
                    </button>
                </div>
            </div>

            <!-- Reporter Information -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 mb-6">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
                    <div class="w-8 h-8 rounded-full bg-slate-700 text-white flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <h2 class="text-base font-bold text-gray-800">Reporter Information</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-1.5">Full Name</label>
                        <input type="text" value="Juan dela Cruz" class="w-full bg-[#f4f6f8] border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-1.5">Student / Staff ID</label>
                        <input type="text" value="2023-00142" class="w-full bg-[#f4f6f8] border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] focus:border-transparent transition">
                    </div>
                </div>

                <!-- Submit Anonymously Toggle -->
                <label class="bg-[#475569] rounded-xl p-4 flex items-center gap-4 text-white shadow-sm mb-6 cursor-pointer hover:bg-slate-700 transition">
                    <div class="relative flex items-center">
                        <input type="checkbox" name="is_anonymous" class="peer w-5 h-5 appearance-none rounded bg-slate-600 border border-slate-500 checked:bg-[#10b981] checked:border-[#10b981] transition cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-3.5 h-3.5 text-white left-[3px] top-[3px] pointer-events-none opacity-0 peer-checked:opacity-100 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold">Submit Anonymously</h4>
                        <p class="text-[11px] text-gray-300 mt-0.5">Your name and ID will be hidden from the report. Only administrators with special access can view reporter identity.</p>
                    </div>
                </label>

                <!-- Action Buttons -->
                <div class="flex items-center justify-between pt-2">
                    <button class="bg-white border border-gray-200 text-gray-700 px-6 py-2.5 rounded-lg text-sm font-bold hover:bg-gray-50 transition shadow-sm">
                        Cancel
                    </button>
                    <button class="bg-[#1a6b5a] text-white px-6 py-2.5 rounded-lg text-sm font-bold hover:bg-[#145a46] transition shadow-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        Submit Report
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Column: Sidebar -->
        <div class="col-span-1 flex flex-col gap-6">
            
            <!-- AI Priority Detection -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-8 rounded-full bg-[#106b5a] text-white flex items-center justify-center shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                    </div>
                    <h2 class="text-base font-bold text-gray-800">AI Priority Detection</h2>
                </div>

                <p class="text-[11px] text-gray-500 font-medium mb-5 leading-relaxed">
                    Based on your description and category, our AI estimates the following priority level:
                </p>

                <!-- Predicted Priority Box -->
                <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-5">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="text-[10px] font-bold text-red-600 uppercase tracking-wider">Predicted Priority</h4>
                        <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full text-[11px] font-bold text-red-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> High
                        </span>
                    </div>
                    <p class="text-[11px] text-red-500 font-medium leading-relaxed">
                        Physical altercation incidents are typically flagged as high priority requiring immediate response.
                    </p>
                </div>

                <!-- Confidence Score -->
                <div class="mb-5">
                    <div class="flex justify-between text-[11px] font-bold text-gray-700 mb-1.5">
                        <span>Confidence Score</span>
                        <span>87%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                        <div class="bg-[#106b5a] h-1.5 rounded-full" style="width: 87%"></div>
                    </div>
                </div>

                <!-- All Probability Scores -->
                <div class="border-t border-gray-100 pt-5 mb-5">
                    <h4 class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-4">All Probability Scores</h4>
                    <div class="flex flex-col gap-3">
                        <!-- High -->
                        <div class="flex items-center gap-3">
                            <span class="text-[11px] font-medium text-gray-600 w-12">High</span>
                            <div class="flex-1 bg-gray-100 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-red-500 h-1.5 rounded-full" style="width: 87%"></div>
                            </div>
                            <span class="text-[11px] font-medium text-gray-400 w-6 text-right">87%</span>
                        </div>
                        <!-- Medium -->
                        <div class="flex items-center gap-3">
                            <span class="text-[11px] font-medium text-gray-600 w-12">Medium</span>
                            <div class="flex-1 bg-gray-100 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-yellow-400 h-1.5 rounded-full" style="width: 10%"></div>
                            </div>
                            <span class="text-[11px] font-medium text-gray-400 w-6 text-right">10%</span>
                        </div>
                        <!-- Low -->
                        <div class="flex items-center gap-3">
                            <span class="text-[11px] font-medium text-gray-600 w-12">Low</span>
                            <div class="flex-1 bg-gray-100 rounded-full h-1.5 overflow-hidden">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 3%"></div>
                            </div>
                            <span class="text-[11px] font-medium text-gray-400 w-6 text-right">3%</span>
                        </div>
                    </div>
                </div>

                <p class="text-[10px] text-gray-400 font-medium leading-relaxed">
                    AI prediction is auto-applied but can be overridden by an administrator after submission.
                </p>
            </div>

            <!-- Tips for a Good Report -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
                <div class="flex items-center gap-3 mb-5">
                    <div class="text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2v1"/><path d="M12 7a5 5 0 1 0 5 5c0 1.25-.5 2.5-1.5 3.5l-1 1A3 3 0 0 1 12 18h0a3 3 0 0 1-2.5-1.5l-1-1A5 5 0 0 0 7 12a5 5 0 0 0 5-5z"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-gray-800">Tips for a Good Report</h2>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex gap-3">
                        <div class="w-4 h-4 rounded-full bg-[#106b5a] text-white flex items-center justify-center flex-shrink-0 text-[10px] font-bold mt-0.5">1</div>
                        <p class="text-[11px] text-gray-600 font-medium">Be specific about the time and location</p>
                    </div>
                    <div class="flex gap-3">
                        <div class="w-4 h-4 rounded-full bg-[#106b5a] text-white flex items-center justify-center flex-shrink-0 text-[10px] font-bold mt-0.5">2</div>
                        <p class="text-[11px] text-gray-600 font-medium">Include names of witnesses if possible</p>
                    </div>
                    <div class="flex gap-3">
                        <div class="w-4 h-4 rounded-full bg-[#106b5a] text-white flex items-center justify-center flex-shrink-0 text-[10px] font-bold mt-0.5">3</div>
                        <p class="text-[11px] text-gray-600 font-medium">Attach photos or videos as evidence</p>
                    </div>
                    <div class="flex gap-3">
                        <div class="w-4 h-4 rounded-full bg-[#106b5a] text-white flex items-center justify-center flex-shrink-0 text-[10px] font-bold mt-0.5">4</div>
                        <p class="text-[11px] text-gray-600 font-medium">Describe injuries or damages clearly</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layouts::app>

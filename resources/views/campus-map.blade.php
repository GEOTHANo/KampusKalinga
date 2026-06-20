<x-layouts::app :title="__('Campus Map')">
    <x-slot:subtitle>Interactive view of incident locations across the campus.</x-slot:subtitle>

    <div class="font-sans pb-10">
        
        <!-- Interactive Map Container -->
        <div class="relative w-full h-[650px] bg-gray-100 rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
            
            <!-- Real Interactive Map Iframe (OpenStreetMap as placeholder) -->
            <iframe 
                width="100%" 
                height="100%" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0" 
                marginwidth="0" 
                src="https://www.openstreetmap.org/export/embed.html?bbox=120.9840%2C14.5995%2C120.9940%2C14.6055&amp;layer=mapnik" 
                class="absolute inset-0 z-0 grayscale-[0.2] opacity-90 contrast-125"
                style="border: none;">
            </iframe>

            <!-- Floating Sidebar Overlay (Glassmorphism) -->
            <div class="absolute top-6 left-6 z-10 w-80 max-h-[calc(100%-48px)] flex flex-col bg-white/80 backdrop-blur-xl border border-white/40 shadow-xl rounded-2xl overflow-hidden">
                
                <div class="p-5 border-b border-gray-200/50 bg-white/50">
                    <h3 class="text-base font-bold text-gray-800 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Live Incident Hotspots
                    </h3>
                    <p class="text-[11px] text-gray-500 font-medium mt-1">Select a location to view details</p>
                    
                    <!-- Search -->
                    <div class="mt-4 relative">
                        <input type="text" placeholder="Search buildings..." class="w-full bg-white/80 border border-gray-200 rounded-lg pl-8 pr-4 py-2 text-xs focus:outline-none focus:ring-2 focus:ring-[#1a6b5a] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-gray-400 absolute left-2.5 top-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </div>
                </div>

                <div class="flex-1 overflow-y-auto p-3 space-y-2 custom-scrollbar">
                    
                    <!-- Hotspot 1 -->
                    <div onclick="openMapIncidentModal(this)" class="bg-white/90 border border-red-100 rounded-xl p-3 cursor-pointer hover:bg-white hover:shadow-sm transition group">
                        <div class="flex justify-between items-start mb-1.5">
                            <h4 class="text-xs font-bold text-gray-800 group-hover:text-[#1a6b5a] transition">Main Gymnasium</h4>
                            <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded text-[9px] font-bold bg-red-50 text-red-600 border border-red-100 uppercase">
                                <span class="w-1 h-1 rounded-full bg-red-500 animate-pulse"></span> High
                            </span>
                        </div>
                        <p class="text-[10px] text-gray-500 font-medium leading-snug mb-2">Physical altercation reported near the entrance gates.</p>
                        <div class="flex items-center justify-between text-[9px] font-semibold text-gray-400">
                            <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 10:42 AM</span>
                            <span class="text-[#1a6b5a]">View Details &rarr;</span>
                        </div>
                    </div>

                    <!-- Hotspot 2 -->
                    <div onclick="openMapIncidentModal(this)" class="bg-white/60 border border-yellow-100/50 rounded-xl p-3 cursor-pointer hover:bg-white hover:shadow-sm transition group">
                        <div class="flex justify-between items-start mb-1.5">
                            <h4 class="text-xs font-bold text-gray-800 group-hover:text-[#1a6b5a] transition">Science Lab 3</h4>
                            <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded text-[9px] font-bold bg-yellow-50 text-yellow-600 border border-yellow-100 uppercase">
                                <span class="w-1 h-1 rounded-full bg-yellow-500"></span> Med
                            </span>
                        </div>
                        <p class="text-[10px] text-gray-500 font-medium leading-snug mb-2">Suspicious activity / reported theft of equipment.</p>
                        <div class="flex items-center justify-between text-[9px] font-semibold text-gray-400">
                            <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 09:15 AM</span>
                            <span class="text-[#1a6b5a]">View Details &rarr;</span>
                        </div>
                    </div>

                    <!-- Hotspot 3 -->
                    <div onclick="openMapIncidentModal(this)" class="bg-white/60 border border-gray-100 rounded-xl p-3 cursor-pointer hover:bg-white hover:shadow-sm transition group">
                        <div class="flex justify-between items-start mb-1.5">
                            <h4 class="text-xs font-bold text-gray-800 group-hover:text-[#1a6b5a] transition">Library North Wing</h4>
                            <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded text-[9px] font-bold bg-green-50 text-green-600 border border-green-100 uppercase">
                                <span class="w-1 h-1 rounded-full bg-green-500"></span> Low
                            </span>
                        </div>
                        <p class="text-[10px] text-gray-500 font-medium leading-snug mb-2">Graffiti found on the exterior wall.</p>
                        <div class="flex items-center justify-between text-[9px] font-semibold text-gray-400">
                            <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Yesterday</span>
                            <span class="text-[#1a6b5a]">View Details &rarr;</span>
                        </div>
                    </div>

                </div>

                <!-- Dispatch Button Removed -->
            </div>

            <!-- Floating Map Controls (Right Side) -->
            <div class="absolute top-6 right-6 z-10 flex flex-col gap-2">
                <div class="bg-white/90 backdrop-blur shadow-sm border border-gray-200 rounded-lg overflow-hidden flex flex-col">
                    <button class="p-2.5 text-gray-600 hover:text-gray-900 hover:bg-gray-50 border-b border-gray-200 transition" title="Zoom In">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </button>
                    <button class="p-2.5 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition" title="Zoom Out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </button>
                </div>
                <button class="bg-white/90 backdrop-blur shadow-sm border border-gray-200 rounded-lg p-2.5 text-gray-600 hover:text-[#1a6b5a] hover:bg-gray-50 transition" title="My Location">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Map Incident Modal -->
    <div id="mapIncidentModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center font-sans backdrop-blur-sm transition-opacity opacity-0 duration-300" onclick="if(event.target === this) closeMapIncidentModal()">
        <div class="bg-white rounded-2xl w-full max-w-md shadow-2xl transform scale-95 transition-transform duration-300 mx-4 flex flex-col">
            <div class="flex justify-between items-center p-6 border-b border-gray-100 shrink-0">
                <h2 class="text-xl font-bold text-gray-800">Incident Details</h2>
                <button onclick="closeMapIncidentModal()" class="text-gray-400 hover:text-gray-600 transition bg-gray-50 hover:bg-gray-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </button>
            </div>
            
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <h3 id="mapIncidentTitle" class="text-lg font-bold text-gray-900"></h3>
                    <div id="mapIncidentBadge"></div>
                </div>
                
                <p id="mapIncidentDesc" class="text-sm text-gray-600 mb-6 p-4 bg-gray-50 rounded-lg"></p>
                
                <div class="flex items-center gap-2 text-sm text-gray-500 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <span id="mapIncidentTime"></span>
                </div>
            </div>
            
            <div class="p-6 border-t border-gray-100 bg-gray-50/50 rounded-b-2xl flex justify-end">
                <button onclick="closeMapIncidentModal()" class="px-5 py-2.5 bg-[#1a6b5a] text-white rounded-lg text-sm font-bold hover:bg-[#145a46] transition shadow-sm w-full">Close</button>
            </div>
        </div>
    </div>

    <script>
        function openMapIncidentModal(card) {
            const title = card.querySelector('h4').innerText.trim();
            const desc = card.querySelector('p').innerText.trim();
            const badgeHtml = card.querySelector('.inline-flex').outerHTML;
            
            // The time element text content
            const timeSpan = card.querySelector('.flex.items-center.gap-1:not(.inline-flex)');
            const time = timeSpan ? timeSpan.innerText.trim() : '';
            
            document.getElementById('mapIncidentTitle').innerText = title;
            document.getElementById('mapIncidentDesc').innerText = desc;
            document.getElementById('mapIncidentBadge').innerHTML = badgeHtml;
            document.getElementById('mapIncidentTime').innerText = time;
            
            const modal = document.getElementById('mapIncidentModal');
            const modalInner = modal.querySelector('div');
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalInner.classList.remove('scale-95');
            }, 10);
        }

        function closeMapIncidentModal() {
            const modal = document.getElementById('mapIncidentModal');
            const modalInner = modal.querySelector('div');
            
            modal.classList.add('opacity-0');
            modalInner.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
</x-layouts::app>

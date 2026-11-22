<section class="relative w-full min-h-[199px] overflow-hidden bg-[#0D3B66] flex items-center">

    <!-- Diagonal Background Shape -->
    <div class="absolute inset-0 bg-[#0E4170]"
         style="clip-path: polygon(76.8% 0, 100% 0, 100% 100%, 74.2% 100%);">
    </div>

    <!-- Heading -->
    <div class="relative z-10 w-full px-6 sm:px-10 lg:px-[6.1%] py-12">
        <h1 class="text-white text-3xl sm:text-4xl lg:text-[46px] font-bold leading-tight">
            How to get there
        </h1>
        <p class="text-white">The ideal setting for those seeking to open new markets, expand their business, and generate greater impact</p>
    </div>

</section>

<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900">
    
    <!-- Section Title -->
    <div class="pb-3 px-3 text-left mb-10">
        <h2 class="text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">
            How to get to Wedding India Expo at Yashobhoomi (IICC)
        </h2>
        <p class="text-gray-600 mt-2 text-base">
            Check out how to get to Yashobhoomi (IICC) by metro, bus, taxi, or car as fast as possible.
        </p>
    </div>

    <!-- Accordions Container -->
    <div class="space-y-4 px-3">

        <!-- Accordion 1: Public Transport -->
        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm" x-data="{ open: false }">
            <h3 class="m-0">
                <button @click="open = !open" 
                        class="w-full flex justify-between items-center bg-[#0f4c81] text-white p-5 font-semibold text-lg focus:outline-none transition-colors hover:bg-[#0a365f]">
                    <span class="text-title">By public transport</span>
                    <svg class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            </h3>

            <div x-show="open" x-collapse class="p-6 bg-white space-y-6 text-gray-700">
                <div>
                    <h4 class="font-bold text-gray-900 text-base mb-2">Metro and Airport Express Line</h4>
                    <p class="leading-relaxed mb-3">
                        The nearest Metro station to Yashobhoomi (IICC) is connected via the Airport Express line and Delhi Metro Orange Line, providing direct access to the venue from across New Delhi and Indira Gandhi International Airport.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 text-base mb-2">Bus</h4>
                    <p class="leading-relaxed mb-3">Delhi’s extensive public bus network connects Dwarka and Yashobhoomi efficiently from key transit hubs across the National Capital Region.</p>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 text-base mb-2">Taxi & Rideshare</h4>
                    <p class="leading-relaxed mb-2">Dedicated taxi and app-based rideshare drop-off and pickup zones are available directly outside Yashobhoomi’s main gates for seamless entry.</p>
                </div>
            </div>
        </div>

        <!-- Accordion 2: By Car -->
        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm" x-data="{ open: false }">
            <h3 class="m-0">
                <button @click="open = !open" 
                        class="w-full flex justify-between items-center bg-[#0f4c81] text-white p-5 font-semibold text-lg focus:outline-none transition-colors hover:bg-[#0a365f]">
                    <span class="text-title">By car</span>
                    <svg class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            </h3>

            <div x-show="open" x-collapse class="p-6 bg-white space-y-6 text-gray-700">
                <div>
                    <h4 class="font-bold text-gray-900 text-base mb-2">Accesses</h4>
                    <p class="leading-relaxed mb-3">Yashobhoomi (IICC) features direct expressway connections to Delhi’s major arterial roads and Dwarka Expressway ring connections.</p>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 text-base mb-2">Parking</h4>
                    <p class="leading-relaxed mb-4">The expansive basement and surface parking zones give direct access to the exhibition halls.</p>
                    
                    <!-- Highlighted Box Card -->
                    <a href="#" class="block bg-[#292152] hover:bg-[#A8242D] text-white p-6 rounded-lg transition-colors shadow-sm">
                        <h4 class="text-lg font-bold mb-1">Car park and prices</h4>
                        <p class="text-sm text-blue-100">We have a wide range of parking spaces available for exhibitors and visitors.</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Accordion 3: Reduced Mobility -->
        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm" x-data="{ open: false }">
            <h3 class="m-0">
                <button @click="open = !open" 
                        class="w-full flex justify-between items-center bg-[#0f4c81] text-white p-5 font-semibold text-lg focus:outline-none transition-colors hover:bg-[#0a365f]">
                    <span class="text-title">Access with reduced mobility</span>
                    <svg class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            </h3>

            <div x-show="open" x-collapse class="p-6 bg-white space-y-4 text-gray-700">
                <p class="leading-relaxed">
                    In order for us to be able to deal with your request, it is necessary that you make your request at least 48 hours before the start of the event. We cannot guarantee that we will be able to accommodate requests made with less notice.
                </p>
                <p class="leading-relaxed">To use this procedure, please complete the appropriate form.</p>
                <div class="text-center pt-2">
                    <a href="#" target="_blank" class="inline-block bg-[#0f4c81] hover:bg-[#0a365f] text-white font-semibold py-3 px-8 rounded shadow-sm transition-colors text-sm">
                        Access the application form
                    </a>
                </div>
            </div>
        </div>

        <!-- Accordion 4: Long Distance Transport -->
        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm" x-data="{ open: false }">
            <h3 class="m-0">
                <button @click="open = !open" 
                        class="w-full flex justify-between items-center bg-[#0f4c81] text-white p-5 font-semibold text-lg focus:outline-none transition-colors hover:bg-[#0a365f]">
                    <span class="text-title">By long distance transport</span>
                    <svg class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            </h3>

            <div x-show="open" x-collapse class="p-6 bg-white space-y-6 text-gray-700">
                <div>
                    <h4 class="font-bold text-gray-900 text-base mb-2">Plane</h4>
                    <p class="leading-relaxed">Indira Gandhi International Airport (DEL) is conveniently located near Dwarka, offering seamless connectivity to international and domestic visitors attending Wedding India Expo.</p>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-base mb-2">Long distance train</h4>
                    <p class="leading-relaxed">New Delhi and Nizamuddin railway stations provide connecting transit options straight into the Delhi Metro network leading to Yashobhoomi.</p>
                </div>
            </div>
        </div>

        <!-- Accordion 5: Car or Bus Rental -->
        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm" x-data="{ open: false }">
            <h3 class="m-0">
                <button @click="open = !open" 
                        class="w-full flex justify-between items-center bg-[#0f4c81] text-white p-5 font-semibold text-lg focus:outline-none transition-colors hover:bg-[#0a365f]">
                    <span class="text-title">Car or Bus Rental</span>
                    <svg class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            </h3>

            <div x-show="open" x-collapse class="p-6 bg-white space-y-6 text-gray-700">
                <div>
                    <h4 class="font-bold text-gray-900 text-base mb-2">Plane</h4>
                    <p class="leading-relaxed">Indira Gandhi International Airport (DEL) is conveniently located near Dwarka, offering seamless connectivity to international and domestic visitors attending Wedding India Expo.</p>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-base mb-2">Long distance train</h4>
                    <p class="leading-relaxed">New Delhi and Nizamuddin railway stations provide connecting transit options straight into the Delhi Metro network leading to Yashobhoomi.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900">
    
    <!-- Section Title -->
    <div class="mb-8">
        <h2 class="text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">
            Schedule and location
        </h2>
    </div>

    <!-- Two Cards Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
        
        <!-- Left Card: Schedule & Access -->
        <div class="bg-white border border-gray-200 p-8 rounded-lg shadow-sm flex flex-col justify-between">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-100">
                            <th class="pb-4 font-bold text-gray-900 text-sm">Access</th>
                            <th class="pb-4 font-bold text-gray-900 text-sm">Date</th>
                            <th class="pb-4 font-bold text-gray-900 text-sm">Hour</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="pt-4">
                            <!-- Access Column -->
                            <td class="py-4 text-sm text-gray-800 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange-500 inline-block"></span>
                                <span class="font-medium">Professional</span>
                            </td>
                            <!-- Date Column -->
                            <td class="py-4 text-sm text-gray-800">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-gray-500 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>
                                    <span>From 05/03/27 to 07/03/27</span>
                                </div>
                            </td>
                            <!-- Hour Column -->
                            <td class="py-4 text-sm text-gray-800">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-gray-500 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>10:00 - 19:00</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right Card: Location & Pavilions -->
        <div class="bg-white border border-gray-200 p-8 rounded-lg shadow-sm flex flex-col justify-between space-y-6">
            
            <!-- Location Block -->
            <div>
                <h3 class="font-bold text-gray-900 text-base mb-2">Location</h3>
                <p class="text-sm text-gray-700 leading-relaxed">
                    Yashobhoomi (IICC) – Sector 25, Dwarka, New Delhi, 110061
                </p>
            </div>

            <!-- Pavilions Block -->
            <div>
                <h3 class="font-bold text-gray-900 text-base mb-2">Pavilions</h3>
                <p class="text-sm text-gray-700 leading-relaxed">
                    Hall 1, Hall 2, Hall 3, Hall 5, Grand Concourse & Custom Luxury Fashion Pavilions
                </p>
            </div>

        </div>

    </div>

</section>

<section class="relative w-full bg-gray-900 font-sans text-white overflow-hidden py-16 lg:py-24">
    
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=2560&q=85" 
             alt="Sustainable participation background" 
             class="w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
    </div>

    <!-- Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full lg:w-[60%] space-y-6">
            
            <!-- Section Title -->
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white leading-tight">
                    Guidelines to sustainable participation for visitors
                </h2>
            </div>

            <!-- Description Paragraphs -->
            <div class="space-y-4 text-gray-200 text-sm sm:text-base leading-relaxed">
                <p>
                    A visit to a trade fair/event, whether professional or public, and whether it is held in our town or requires us to travel, can have a significant impact on sustainability.
                </p>
                <p>
                    The fact that these activities take place in a short space of time, producing a concentration of a large movement of people and goods, means that the negative effects that could be produced are more intense and there is less time to correct them.
                </p>
                <p>
                    That is why it is important to take into account those aspects on which we can act and plan our activity according to sustainability criteria.
                </p>
            </div>

            <!-- Download Button -->
            <div class="pt-2">
                <a href="#" target="_blank" 
                   class="inline-flex items-center space-x-2 bg-gray-800 hover:bg-gray-700 text-white font-semibold py-3 px-6 rounded border border-gray-600 transition-colors shadow-sm text-sm">
                    <span>Download the guide</span>
                </a>
            </div>

        </div>
    </div>

</section>

<!-- Include Alpine.js for smooth accordion toggles if not already loaded in your layout -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
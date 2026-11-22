
<section class="relative w-full min-h-[199px] overflow-hidden bg-[#0D3B66] flex items-center">

    <!-- Diagonal Background Shape -->
    <div class="absolute inset-0 bg-[#0E4170]"
         style="clip-path: polygon(76.8% 0, 100% 0, 100% 100%, 74.2% 100%);">
    </div>

    <!-- Heading -->
    <div class="relative z-10 w-full px-6 sm:px-10 lg:px-[6.1%] py-12">
        <h1 class="text-white text-3xl sm:text-4xl lg:text-[46px] font-bold leading-tight">
            DECOR
        </h1>
    </div>

</section>

<section class="max-w-7xl mx-auto px-4 py-16 bg-white font-sans text-gray-900">
    
    <!-- Content Grid (Image Left, Text Right) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left Column: Image Block (Span 6) -->
        <div class="lg:col-span-6 rounded-lg overflow-hidden shadow-sm bg-[#f4e4d8]">
            <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=1200&q=85" 
                 alt="Wedding Decor & Aesthetics" 
                 class="w-full h-[380px] sm:h-[460px] object-cover">
        </div>

        <!-- Right Column: Heading, Subheading & Paragraphs (Span 6) -->
        <div class="lg:col-span-6 flex flex-col justify-center space-y-6">
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight">
                Decor, the world where the details that transform every space are born
            </h2>

            <p class="text-gray-800 text-base font-medium">
                Wedding India Expo is the premier sector dedicated to style-defining wedding decor, aesthetics, and spatial design items.
            </p>

            <p class="text-gray-600 text-base sm:text-lg max-w-4xl leading-relaxed">
                A vibrant and inspiring space where wedding planners, designers, and hoteliers can discover unique collections, custom installations, and creative concepts that add character to any venue or celebration.
            </p>

            <p class="text-gray-600 text-base sm:text-lg max-w-4xl leading-relaxed">
                Decor is all about trends, elegance, and pure excitement: the unmissable destination for discovering the latest stylistic innovations, selecting bespoke pieces, and connecting with design brands shaping the new language of luxury events at Yashobhoomi (IICC).
            </p>

        </div>

    </div>

</section>

<section class="max-w-7xl mx-auto px-4 py-16 bg-white font-sans text-gray-900">
    
    <!-- 3-Card Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
        
        <!-- Card 1: Decorative objects -->
        <div class="rounded-lg overflow-hidden shadow-sm border border-gray-100 flex flex-col h-full bg-white group cursor-pointer">
            <!-- Top Image Area with Soft Peach Background -->
            <div class="h-64 bg-[#f4e4d8] overflow-hidden flex items-center justify-center p-6">
                <img src="https://images.unsplash.com/photo-1581783342308-f792dbdd27c5?auto=format&fit=crop&w=800&q=85" 
                     alt="Decorative objects" 
                     class="max-h-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <!-- Bottom Content Box -->
            <div class="bg-white p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl font-bold mb-3 tracking-tight text-gray-900">Decorative objects</h3>
                    <p class="text-gray-600 text-base sm:text-lg max-w-4xl leading-relaxed">
                        A wide variety of products and styles to suit all tastes: modern, classic, vintage, industrial, Nordic, romantic, minimalist...
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 2: Flowers and plants -->
        <div class="rounded-lg overflow-hidden shadow-sm border border-gray-100 flex flex-col h-full bg-white group cursor-pointer">
            <!-- Top Image Area with Soft Peach Background -->
            <div class="h-64 bg-[#f4e4d8] overflow-hidden flex items-center justify-center p-6">
                <img src="https://images.unsplash.com/photo-1525310072745-f49212b5ac6d?auto=format&fit=crop&w=800&q=85" 
                     alt="Flowers and plants" 
                     class="max-h-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <!-- Bottom Content Box -->
            <div class="bg-white p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl font-bold mb-3 tracking-tight text-gray-900">Flowers and plants</h3>
                    <p class="text-gray-600 text-base sm:text-lg max-w-4xl leading-relaxed">
                        Give a natural and colorful touch to your spaces, fill every corner with freshness and vitality with flowers, trees and natural plants.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 3: Handwerk / Handmade -->
        <div class="rounded-lg overflow-hidden shadow-sm border border-gray-100 flex flex-col h-full bg-white group cursor-pointer">
            <!-- Top Image Area with Soft Peach Background -->
            <div class="h-64 bg-[#f4e4d8] overflow-hidden flex items-center justify-center p-6">
                <img src="https://images.unsplash.com/photo-1578749556568-bc2c40e68b61?auto=format&fit=crop&w=800&q=85" 
                     alt="Handwerk / Handmade" 
                     class="max-h-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <!-- Bottom Content Box -->
            <div class="bg-white p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl font-bold mb-3 tracking-tight text-gray-900">Handwerk / Handmade</h3>
                    <p class="text-gray-600 text-base sm:text-lg max-w-4xl leading-relaxed">
                        Products made with soul by master craftsmen.
                    </p>
                </div>
            </div>
        </div>

    </div>

</section>


<section class="relative overflow-hidden bg-white py-12">

    @php 
        $cards = [ 
            [ 
                'title' => 'Destination Wedding, Hotels & Hospitality', 
                'hall' => 'Explore Pavilion', 
                'image' => 'public/image/image1.png',
                'subcategories' => [
                    'Luxury Hotels & Resorts', 'Palace & Heritage Hotels', 'Destination Wedding Venues',
                    'Banquet Halls & Convention Centres', 'Farmhouses & Private Estates', 'International Wedding Destinations',
                    'National & State Tourism Boards', 'Foreign Tourism Boards', 'Destination Management Companies (DMCs)',
                    'Global Destination Management Companies', 'Wedding Accommodation & Hospitality', 'International Hotels & Resorts',
                    'Overseas Wedding Venues & Palaces', 'Wedding Concierge Services'
                ]
            ], 
            [ 
                'title' => 'Wedding Planning, Management & Consulting', 
                'hall' => 'Hall 6', 
                'image' => 'public/image/image2.png',
                'subcategories' => [
                    'Wedding Planners', 'Destination Wedding Planners', 'International Wedding Planners',
                    'Overseas Wedding Management Companies', 'Wedding Consultants', 'International Wedding Consultants',
                    'Wedding Coordinators', 'Wedding Designers & Concept Developers', 'International Wedding Designers',
                    'Wedding Production Companies', 'Event Management Companies', 'Corporate & Luxury Event Planners',
                    'Wedding Entertainment Planners', 'International Wedding Business Consultants', 'Wedding Business Consultants'
                ]
            ], 
            [ 
                'title' => 'Wedding Catering, Food & Beverage', 
                'hall' => 'Hall 8', 
                'image' => 'public/image/image3.png',
                'subcategories' => [
                    'Wedding Caterers', 'Luxury & Royal Catering', 'International Catering & Hospitality',
                    'Celebrity Chefs & Culinary Experts', 'Regional & International Cuisines', 'Sweets & Mithai Manufacturers',
                    'Bakery, Cakes & Desserts', 'Live Food & Gourmet Counters', 'Beverage & Mocktail Solutions',
                    'Mobile Bars & Mixology', 'Food Presentation & Catering Equipment', 'Crockery, Cutlery & Tableware'
                ]
            ], 
            [ 
                'title' => 'Bridal Fashion, Jewellery & Textile', 
                'hall' => 'Hall 7', 
                'image' => 'public/image/image4.png',
                'subcategories' => [
                    'Bridal Lehengas & Gowns', 'Designer Sarees', 'Banarasi & Kanjeevaram Sarees',
                    'Sherwanis & Men\'s Wedding Wear', 'Indo-Western & Designer Wear', 'Fashion Designers & Boutiques',
                    'Jewellery & Diamond Brands', 'Gold, Kundan & Polki Jewellery', 'Handloom & Textile Manufacturers',
                    'Zardozi & Embroidery', 'Footwear & Bridal Accessories', 'Bridal Bags, Clutches & Potlis'
                ]
            ], 
            [ 
                'title' => 'Wedding Decor, Design & Production', 
                'hall' => 'Hall 6', 
                'image' => 'public/image/image5.png',
                'subcategories' => [
                    'Wedding Decorators', 'Floral Designers & Installations', 'Mandap Designers',
                    'Wedding Stage Designers', 'Wedding Theme & Concept Designers', 'Table Styling & Centrepieces',
                    'Lighting & Visual Effects', 'Furniture & Luxury Seating', 'Tent Houses & Marquee Structures',
                    'Exhibition & Event Fabrication', 'Sound & Stage Production'
                ]
            ], 
            [ 
                'title' => 'Wedding Photography, Films & Entertainment', 
                'hall' => 'Hall 7', 
                'image' => 'public/image/image6.png',
                'subcategories' => [
                    'Wedding Photographers', 'Wedding Cinematographers', 'Pre-Wedding Photography',
                    'Wedding Films & Production', 'Drone Photography & Videography', 'Photography Equipment & Cameras',
                    'Wedding Albums & Printing', 'Live Bands & Musicians', 'DJs & Entertainment Artists',
                    'Celebrity & Artist Management', 'Wedding Anchors & Performers'
                ]
            ],
            [ 
                'title' => 'Bridal Beauty, Grooming & Wellness', 
                'hall' => 'Hall 8', 
                'image' => 'public/image/image7.png',
                'subcategories' => [
                    'Bridal Makeup Artists', 'Professional Makeup Brands', 'Bridal Salons & Beauty Studios',
                    'Skincare & Bridal Beauty', 'Hair Styling & Haircare', 'Groom Grooming & Men\'s Care',
                    'Perfumes & Fragrances', 'Traditional Attars', 'Spa & Wellness Services',
                    'Bridal Beauty Products', 'Cosmetics & Travel Beauty Kits'
                ]
            ], 
            [ 
                'title' => 'Wedding Gifts, Lifestyle & Luxury', 
                'hall' => 'Hall 8', 
                'image' => 'public/image/image8.png',
                'subcategories' => [
                    'Luxury Wedding Gifts', 'Corporate & Personalised Gifts', 'Wedding Return Gifts',
                    'Silverware & Crystalware', 'Luxury Gift Hampers', 'Wedding Trousseau Packaging',
                    'Designer Home Decor', 'Luxury Lifestyle Products', 'Handicrafts & Artisan Products',
                    'Wedding Invitations & Stationery', 'Digital Invitations & Wedding Websites'
                ]
            ],
            [ 
                'title' => 'Wedding Travel, Aviation, Cruise & Transport', 
                'hall' => 'Hall 6', 
                'image' => 'public/image/image9.png',
                'subcategories' => [
                    'International & Domestic Airlines', 'Luxury Airline & Business Class Services', 'Charter Flights & Private Aviation',
                    'Helicopter & Private Jet Charters', 'Cruise Wedding Companies', 'Luxury Cruise Lines',
                    'Destination Wedding Cruises', 'Yacht & Cruise Wedding Experiences', 'Luxury & Exotic Cars',
                    'Rolls-Royce & Bentley Fleets', 'Vintage & Classic Cars', 'Wedding Car Rental Services',
                    'Luxury Train Experiences', 'Airport Lounge & VIP Services', 'Honeymoon Packages',
                    'Domestic & International Travel Agencies', 'International Travel Management', 'Group Travel & Wedding Charter Services',
                    'Guest Transportation & Logistics', 'Luxury Travel Experiences'
                ]
            ],
            [ 
                'title' => 'Wedding Technology, Digital & Innovation', 
                'hall' => 'Hall 9', 
                'image' => 'public/image/image10.png',
                'subcategories' => [
                    'Wedding Planning Software', 'Venue Management Software', 'Guest Registration & RSVP Platforms',
                    'Digital Wedding Invitations', 'Wedding Websites & Apps', 'Event Technology Solutions',
                    'AI & Digital Wedding Solutions'
                ]
            ],
            [ 
                'title' => 'Wedding Finance, Banking & Professional Services', 
                'hall' => 'Hall 7', 
                'image' => 'public/image/image11.png',
                'subcategories' => [
                    'National & International Banks', 'Private Banking', 'Wedding Loans & Personal Finance',
                    'Gold Loan Companies', 'Jewellery Finance', 'Wedding Expense Financing',
                    'Credit Cards & Premium Payment Solutions', 'International Money Transfer', 'Foreign Exchange & Currency Services',
                    'NRI Banking Services', 'Insurance Companies', 'Wedding & Travel Insurance',
                    'Investment & Wealth Management', 'International Payment Gateways', 'International Business Consultants',
                    'International Legal Advisors', 'Cross-Border Tax Consultants', 'Foreign Exchange Consultants',
                    'Overseas Company Registration', 'Immigration & Visa Consultants', 'Global Logistics & Cargo',
                    'NRI Services', 'International Recruitment & Staffing', 'Global Business Associations',
                    'Foreign Investment & Trade Promotion Organisations', 'Cross-Border Wedding Service Providers'
                ]
            ],
            [ 
                'title' => 'Matrimonial, Matchmaking & Wedding Community', 
                'hall' => 'Hall 9', 
                'image' => 'public/image/image12.png',
                'subcategories' => [
                    'Matrimonial Companies', 'International Matchmaking Platforms', 'Premium Matchmaking Services',
                    'NRI Matrimonial Services', 'Wedding Matchmaking Events', 'Marriage Consultants',
                    'Relationship & Family Counselling', 'Wedding Registration & Documentation Services',
                    'International Wedding Business Associations'
                ]
            ],
        ]; 
    @endphp 

    <div class="absolute inset-x-0 top-0 h-[360px] bg-white" style="clip-path: polygon(0 0, 100% 0, 100% 58%, 0 78%)"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <h2 class="mb-12 text-center text-2xl font-bold text-black sm:text-3xl lg:text-4xl">
            Area: The Inspiration That Drives Your Business
        </h2>

        <div x-data="{
                canPrev: false, 
                canNext: true,

                init() {
                    this.$nextTick(() => { this.checkScroll(); });
                    window.addEventListener('resize', () => { this.checkScroll(); });
                },

                checkScroll() {
                    const slider = this.$refs.slider;
                    if (!slider) return;
                    this.canPrev = slider.scrollLeft > 5;
                    this.canNext = slider.scrollLeft + slider.clientWidth < slider.scrollWidth - 5;
                },

                next() {
                    const slider = this.$refs.slider;
                    slider.scrollBy({ left: slider.clientWidth * 0.8, behavior: 'smooth' });
                    setTimeout(() => { this.checkScroll(); }, 450);
                },

                prev() {
                    const slider = this.$refs.slider;
                    slider.scrollBy({ left: -(slider.clientWidth * 0.8), behavior: 'smooth' });
                    setTimeout(() => { this.checkScroll(); }, 450);
                }
            }"
            class="relative">

            {{-- LEFT / PREVIOUS BUTTON --}}
            <button type="button" @click="prev" x-show="canPrev"
                x-transition.opacity.duration.200ms 
                class="absolute left-0 top-1/2 z-40 -translate-x-4 -translate-y-1/2 rounded-full bg-black p-3 text-xl leading-none text-white shadow-lg transition hover:scale-110 hover:bg-gray-800 hidden lg:block"
                aria-label="Previous"> ← </button>

            {{-- CARDS SLIDER --}}
            <div
                x-ref="slider"
                @scroll.debounce.50ms="checkScroll"
                class="hide-scrollbar flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth px-1 pb-6"
            >
                @foreach ($cards as $index => $card) 
                
                {{-- CARD ITEM --}}
                <article
                    x-data="{ active: false }"
                    @mouseenter="active = true"
                    @mouseleave="active = false"
                    @click="active = !active"
                    class="group relative h-[340px] w-[82vw] shrink-0 snap-start sm:w-[60vw] md:w-[42vw] lg:w-[31%] transition-all duration-300 ease-out cursor-pointer"
                    :class="active ? 'z-30 scale-[1.05]' : 'z-10 scale-100'">
                    
                    {{-- CARD BACKGROUND --}}
                    <div class="absolute inset-x-0 bottom-0 h-[240px] rounded-sm bg-[#e8b998] shadow-md transition-all duration-300" :class="active ? 'shadow-2xl' : 'shadow-md'"></div>

                    {{-- IMAGE --}}
                    <img src="{{ asset($card['image']) }}" alt="{{ $card['title'] }}" class="absolute left-1/2 top-0 z-20 h-[160px] w-auto -translate-x-1/2 object-contain transition-transform duration-300" :class="active ? 'scale-105' : 'scale-100'"/>

                    {{-- TEXT & DYNAMIC SUB-CATEGORIES --}}
                    <div class="absolute bottom-0 left-0 z-20 w-full p-6 flex flex-col justify-between h-[240px]">
                        <div>
                            <h3 class="text-lg font-bold leading-tight text-gray-900 line-clamp-1">{{ $card['title'] }}</h3>
                            
                            {{-- Dynamically loops through subcategories automatically without hardcoding --}}
                            <ul class="mt-2 text-sm text-gray-700 space-y-0.5 line-clamp-4">
                                @foreach($card['subcategories'] as $sub)
                                    <li>• {{ $sub }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <span class="inline-flex rounded-full bg-white px-4 py-1 text-xs font-medium text-gray-700 shadow-sm">{{ $card['hall'] }}</span>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            {{-- RIGHT / NEXT BUTTON --}}
            <button type="button" @click="next" x-show="canNext" x-transition.opacity.duration.200ms
                class="absolute right-0 top-1/2 z-40 translate-x-4 -translate-y-1/2 rounded-full bg-black p-3 text-xl leading-none text-white shadow-lg transition hover:scale-110 hover:bg-gray-800 hidden lg:block"
                aria-label="Next"> → </button>
        </div>

    </div>
</section>

<section class="bg-gray-100 py-16 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center"
             x-data="{
                 scrollSlider(offset) {
                     this.$refs.slider.scrollBy({ left: offset, behavior: 'smooth' });
                 }
             }">
            
            <!-- Left Column: Title & Arrows (Span 3 or 4) -->
            <div class="lg:col-span-4 flex flex-col justify-between py-4">
                <div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 tracking-tight leading-tight mb-6">
                        Vibrant Neighbourhoods and Attractions to Explore
                    </h2>
                </div>
                
                <!-- Navigation Arrows -->
                <div class="flex items-center space-x-3 mt-4">
                    <button @click="scrollSlider(-320)" 
                            class="w-11 h-11 rounded-full bg-gray-900 hover:bg-gray-800 text-white flex items-center justify-center transition shadow-md focus:outline-none"
                            aria-label="Previous slide">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button @click="scrollSlider(320)" 
                            class="w-11 h-11 rounded-full bg-gray-900 hover:bg-gray-800 text-white flex items-center justify-center transition shadow-md focus:outline-none"
                            aria-label="Next slide">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Column: Horizontal Scrolling Cards Track (Span 8) -->
            <div class="lg:col-span-8 overflow-hidden">
                <div x-ref="slider" 
                     class="flex gap-6 overflow-x-auto scroll-smooth pb-4 no-scrollbar snap-x snap-mandatory">
                    
                    <!-- Card 1 -->
                    <div class="bg-white rounded-sm shadow-sm overflow-hidden flex-shrink-0 w-[280px] sm:w-[300px] snap-start flex flex-col">
                        <div class="h-[320px] w-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1582510003544-4d00b7f74220?auto=format&fit=crop&w=800&q=85" 
                                 alt="Little India" 
                                 class="w-full h-full object-cover hover:scale-105 transition duration-300">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">Little India</h3>
                                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                    From spices and silks to stunning art murals – it's no wonder that Time Out ranked Little India the 19th coolest neighbourhood in the world!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-sm shadow-sm overflow-hidden flex-shrink-0 w-[280px] sm:w-[300px] snap-start flex flex-col">
                        <div class="h-[320px] w-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=800&q=85" 
                                 alt="Singapore River" 
                                 class="w-full h-full object-cover hover:scale-105 transition duration-300">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">Singapore River</h3>
                                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                    Take a cruise along the Singapore River and then party the night away in the heart of the city.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-sm shadow-sm overflow-hidden flex-shrink-0 w-[280px] sm:w-[300px] snap-start flex flex-col">
                        <div class="h-[320px] w-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=85" 
                                 alt="Mandai" 
                                 class="w-full h-full object-cover hover:scale-105 transition duration-300">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">Mandai</h3>
                                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                    Discover the beauty of nature – from reservoirs, farms and tranquil memorials to romps on the wild side at Mandai Wildlife Reserve.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-sm shadow-sm overflow-hidden flex-shrink-0 w-[280px] sm:w-[300px] snap-start flex flex-col">
                        <div class="h-[320px] w-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=800&q=85" 
                                 alt="Chinatown" 
                                 class="w-full h-full object-cover hover:scale-105 transition duration-300">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">Chinatown</h3>
                                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                    Old-school murals, beautiful temples and merchants selling traditional wares – Chinatown is a treasure trove just waiting to be uncovered.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-16 bg-white font-sans text-gray-900">
    
    <!-- Section Header -->
    <div class="mb-8">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
            What's Happening
        </h2>
    </div>

    <!-- Featured Top Event Card (Image Left, Details Right) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center mb-12">
        
        <!-- Left: Large Feature Image (Span 8) -->
        <div class="lg:col-span-8 rounded-sm overflow-hidden shadow-sm">
            <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=1400&q=85" 
                 alt="Deepavali Celebration" 
                 class="w-full h-[320px] sm:h-[420px] object-cover">
        </div>

        <!-- Right: Event Date, Title, Description & CTA (Span 4) -->
        <div class="lg:col-span-4 flex flex-col justify-center space-y-4">
            
            <!-- Date Badge with Red Left Accent Bar -->
            <div class="flex items-start space-x-3 border-l-2 border-red-600 pl-3">
                <div>
                    <span class="text-2xl font-bold text-gray-900 leading-none">07</span>
                    <span class="block text-xs font-bold text-gray-500 uppercase tracking-wider mt-0.5">NOV '26</span>
                </div>
            </div>

            <h3 class="text-xl sm:text-2xl font-bold text-gray-900">
                Deepavali
            </h3>

            <p class="text-sm text-gray-600 leading-relaxed">
                The annual Hindu celebration of the triumph of light over darkness.
            </p>

            <div>
                <a href="#more" class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-gray-900 hover:text-red-600 transition-colors">
                    <span>FIND OUT MORE</span>
                    <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

        </div>

    </div>

    <!-- 4-Column Upcoming Events Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        
        <!-- Card 1 -->
        <div class="bg-white border border-gray-200 rounded-sm overflow-hidden shadow-sm flex flex-col group cursor-pointer hover:shadow-md transition-shadow">
            <div class="h-48 overflow-hidden bg-gray-50">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=800&q=85" alt="Event 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <div class="flex items-center space-x-2 border-l-2 border-red-600 pl-2 mb-2">
                        <span class="text-xs font-bold text-gray-500 uppercase">01 - 21 DEC '26</span>
                    </div>
                    <h4 class="font-bold text-sm text-gray-900 line-clamp-2">BTS THE CITY ARIRANG SINGAPORE</h4>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white border border-gray-200 rounded-sm overflow-hidden shadow-sm flex flex-col group cursor-pointer hover:shadow-md transition-shadow">
            <div class="h-48 overflow-hidden bg-gray-50">
                <img src="https://images.unsplash.com/photo-1543589077-47d81606c1bf?auto=format&fit=crop&w=800&q=85" alt="Event 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <div class="flex items-center space-x-2 border-l-2 border-red-600 pl-2 mb-2">
                        <span class="text-xs font-bold text-gray-500 uppercase">25 DEC '26</span>
                    </div>
                    <h4 class="font-bold text-sm text-gray-900 line-clamp-2">Christmas</h4>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white border border-gray-200 rounded-sm overflow-hidden shadow-sm flex flex-col group cursor-pointer hover:shadow-md transition-shadow">
            <div class="h-48 overflow-hidden bg-gray-50">
                <img src="https://images.unsplash.com/photo-1467810563316-b5476525c0f9?auto=format&fit=crop&w=800&q=85" alt="Event 3" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <div class="flex items-center space-x-2 border-l-2 border-red-600 pl-2 mb-2">
                        <span class="text-xs font-bold text-gray-500 uppercase">31 DEC '26 - 01 JAN '27</span>
                    </div>
                    <h4 class="font-bold text-sm text-gray-900 line-clamp-2">Marina Bay Countdown 2027</h4>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white border border-gray-200 rounded-sm overflow-hidden shadow-sm flex flex-col group cursor-pointer hover:shadow-md transition-shadow">
            <div class="h-48 overflow-hidden bg-gray-50">
                <img src="https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?auto=format&fit=crop&w=800&q=85" alt="Event 4" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <div class="flex items-center space-x-2 border-l-2 border-red-600 pl-2 mb-2">
                        <span class="text-xs font-bold text-gray-500 uppercase">14 - 18 JAN '27</span>
                    </div>
                    <h4 class="font-bold text-sm text-gray-900 line-clamp-2">Pongal</h4>
                </div>
            </div>
        </div>

    </div>

    <!-- Centered View All Pill Button -->
    <div class="flex justify-center">
        <a href="#all-events" 
           class="inline-flex items-center space-x-3 bg-gray-900 hover:bg-gray-800 text-white text-xs font-bold uppercase tracking-widest px-8 py-3 rounded-full transition shadow-md">
            <span>VIEW ALL</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </a>
    </div>

</section>

<section class="bg-gray-100 py-16 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white pl-7 py-7"
             x-data="{
                 scrollSlider(offset) {
                     this.$refs.slider.scrollBy({ left: offset, behavior: 'smooth' });
                 }
             }">
            
            <!-- Left Column: Title, Description & CTA (Span 4) -->
            <div class="lg:col-span-4 flex flex-col justify-center space-y-6 pr-2">
                <div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-2">
                        We Don’t Wait for Fun.
                    </h2>
                    <!-- Red underline accent -->
                    <div class="w-8 h-1 bg-red-600 mb-4"></div>
                </div>

                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                    Make every family moment count in Singapore. Meet Merli, Singapore’s lovable mascot and your guide to family fun. Discover his three-day itineraries packed with culture, nature and adventure across Singapore.
                </p>

                <!-- Discover More Link -->
                <div>
                    <a href="#discover" class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-widest text-gray-900 hover:text-red-600 transition-colors">
                        <span>DISCOVER FAMILY ADVENTURES</span>
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Navigation Arrows -->
                <div class="flex items-center space-x-3 pt-2">
                    <button @click="scrollSlider(-300)" 
                            class="w-10 h-10 rounded-full bg-gray-300 hover:bg-gray-400 text-gray-800 flex items-center justify-center transition shadow-sm focus:outline-none"
                            aria-label="Previous slide">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button @click="scrollSlider(300)" 
                            class="w-10 h-10 rounded-full bg-gray-800 hover:bg-gray-900 text-white flex items-center justify-center transition shadow-sm focus:outline-none"
                            aria-label="Next slide">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Column: Horizontal Scrolling Images Track (Span 8) -->
            <div class="lg:col-span-8 overflow-hidden">
                <div x-ref="slider" 
                     class="flex gap-5 overflow-x-auto scroll-smooth pb-4 no-scrollbar snap-x snap-mandatory">
                    
                    <!-- Card 1 (Wide Image) -->
                    <div class="rounded-sm overflow-hidden shadow-sm flex-shrink-0 w-[300px] sm:w-[360px] lg:w-[400px] h-[420px] snap-start relative group">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=1000&q=85" 
                             alt="Aquarium Experience" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>

                    <!-- Card 2 -->
                    <div class="rounded-sm overflow-hidden shadow-sm flex-shrink-0 w-[220px] sm:w-[240px] h-[420px] snap-start relative group">
                        <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401?auto=format&fit=crop&w=800&q=85" 
                             alt="Cultural Walk" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>

                    <!-- Card 3 -->
                    <div class="rounded-sm overflow-hidden shadow-sm flex-shrink-0 w-[220px] sm:w-[240px] h-[420px] snap-start relative group">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=85" 
                             alt="Waterfall Attraction" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>

                    <!-- Card 4 -->
                    <div class="rounded-sm overflow-hidden shadow-sm flex-shrink-0 w-[220px] sm:w-[240px] h-[420px] snap-start relative group">
                        <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=800&q=85" 
                             alt="Vibrant Streets" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<section class="bg-gray-100 py-16 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white pl-7 py-7"
             x-data="{
                 activeIdx: 0,
                 items: [
                     {
                         title: 'We Don’t Wait for Fun.',
                         desc: 'Make every family moment count in Singapore. Meet Merli, Singapore’s lovable mascot and your guide to family fun. Discover his three-day itineraries packed with culture, nature and adventure across Singapore.',
                         linkText: 'DISCOVER FAMILY ADVENTURES',
                         image: 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=1000&q=85'
                     },
                     {
                         title: 'Immersive Cultural Walks',
                         desc: 'Step into vibrant streets filled with heritage architecture, local storytelling, and unforgettable cultural experiences.',
                         linkText: 'EXPLORE HERITAGE',
                         image: 'https://images.unsplash.com/photo-1534447677768-be436bb09401?auto=format&fit=crop&w=800&q=85'
                     },
                     {
                         title: 'Breathtaking Nature & Waterfalls',
                         desc: 'Explore lush green domes, indoor cascading waterfalls, and world-class ecological wonders right in the heart of the city.',
                         linkText: 'DISCOVER NATURE',
                         image: 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=85'
                     },
                     {
                         title: 'Vibrant Street Life & Tours',
                         desc: 'Cruise through iconic alleyways and scenic routes on vintage sidecars or modern transport for an unmatched perspective.',
                         linkText: 'EXPLORE CITY VIBES',
                         image: 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=800&q=85'
                     }
                 ],
                 scrollSlider(offset) {
                     this.$refs.slider.scrollBy({ left: offset, behavior: 'smooth' });
                 }
             }">
            
            <!-- Left Column: Title, Description & CTA (Span 4) -->
            <div class="lg:col-span-4 flex flex-col justify-center space-y-6 pr-2">
                <div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-2"
                        x-text="items[activeIdx].title">
                    </h2>
                    <!-- Red underline accent -->
                    <div class="w-8 h-1 bg-red-600 mb-4"></div>
                </div>

                <p class="text-sm sm:text-base text-gray-600 leading-relaxed"
                   x-text="items[activeIdx].desc">
                </p>

                <!-- Discover More Link -->
                <div>
                    <a href="#discover" class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-widest text-gray-900 hover:text-red-600 transition-colors">
                        <span x-text="items[activeIdx].linkText"></span>
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Navigation Arrows -->
                <div class="flex items-center space-x-3 pt-2">
                    <button @click="scrollSlider(-300)" 
                            class="w-10 h-10 rounded-full bg-gray-300 hover:bg-gray-400 text-gray-800 flex items-center justify-center transition shadow-sm focus:outline-none"
                            aria-label="Previous slide">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button @click="scrollSlider(300)" 
                            class="w-10 h-10 rounded-full bg-gray-800 hover:bg-gray-900 text-white flex items-center justify-center transition shadow-sm focus:outline-none"
                            aria-label="Next slide">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Column: Interactive Images Track (Span 8) -->
            <div class="lg:col-span-8 overflow-hidden">
                <div x-ref="slider" 
                     class="flex gap-5 overflow-x-auto scroll-smooth pb-4 no-scrollbar snap-x snap-mandatory items-center">
                    
                    <template x-for="(item, idx) in items" :key="idx">
                        <div>
                            <!-- Large Active Image Card -->
                            <div x-show="activeIdx === idx" 
                                 class="rounded-sm overflow-hidden shadow-md flex-shrink-0 w-[300px] sm:w-[360px] lg:w-[400px] h-[420px] snap-start relative group transition-all duration-300">
                                <img :src="item.image" 
                                     :alt="item.title" 
                                     class="w-full h-full object-cover">
                            </div>

                            <!-- Small Thumbnail Cards (Click to make active) -->
                            <div x-show="activeIdx !== idx" 
                                 @click="activeIdx = idx"
                                 class="rounded-sm overflow-hidden shadow-sm flex-shrink-0 w-[220px] sm:w-[240px] h-[420px] snap-start relative group cursor-pointer border-2 border-transparent hover:border-red-600 transition-all duration-300">
                                <img :src="item.image" 
                                     :alt="item.title" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                            </div>
                        </div>
                    </template>

                </div>
            </div>

        </div>

    </div>
</section>



<section class="bg-gray-100 py-16 font-sans overflow-hidden" 
         x-data="{
             activeIdx: 0,
             items: [
                 {
                     title: 'We Don’t Wait for Fun.',
                     subtitle: 'DISCOVER FAMILY ADVENTURES',
                     desc: 'Make every family moment count in Singapore. Meet Merli, Singapore’s lovable mascot and your guide to family fun. Discover his three-day itineraries packed with culture, nature and adventure across Singapore.',
                     image: 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=1200&q=85'
                 },
                 {
                     title: 'Immersive Cultural Walks',
                     subtitle: 'EXPLORE HERITAGE',
                     desc: 'Step into vibrant streets filled with heritage architecture, local storytelling, and unforgettable cultural experiences.',
                     image: 'https://images.unsplash.com/photo-1534447677768-be436bb09401?auto=format&fit=crop&w=1200&q=85'
                 },
                 {
                     title: 'Breathtaking Nature & Waterfalls',
                     subtitle: 'DISCOVER NATURE',
                     desc: 'Explore lush green domes, indoor cascading waterfalls, and world-class ecological wonders right in the heart of the city.',
                     image: 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=85'
                 },
                 {
                     title: 'Vibrant Street Life & Tours',
                     subtitle: 'EXPLORE CITY_VIBES',
                     desc: 'Cruise through iconic alleyways and scenic routes on vintage sidecars or modern transport for an unmatched perspective.',
                     image: 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=1200&q=85'
                 }
             ],
             scrollSlider(offset) {
                 this.$refs.slider.scrollBy({ left: offset, behavior: 'smooth' });
             },
             nextSlide() {
                 this.activeIdx = (this.activeIdx + 1) % this.items.length;
             },
             prevSlide() {
                 this.activeIdx = (this.activeIdx - 1 + this.items.length) % this.items.length;
             }
         }">

    <!-- Outer wrapper that aligns to the left screen padding like your orange mark, but allows the right to bleed -->
    <div class="pl-4 sm:pl-6 lg:pl-[max(1.5rem,calc((100vw-80rem)/2))] pr-0">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start bg-white pl-12 py-7 ml-12">
            
            <!-- Left Column: Title, Description, CTA & Arrows (Span 4) -->
            <div class="lg:col-span-4 flex flex-col justify-center space-y-6 pr-4 sm:pr-6 lg:pr-8 pt-4">
                <div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-2"
                        x-text="items[activeIdx].title">
                    </h2>
                    <!-- Red underline accent -->
                    <div class="w-8 h-1 bg-red-600 mb-4"></div>
                </div>

                <p class="text-sm sm:text-base text-gray-600 leading-relaxed"
                   x-text="items[activeIdx].desc">
                </p>

                <!-- Action Link -->
                <div>
                    <a href="#discover" class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-widest text-gray-900 hover:text-red-600 transition-colors">
                        <span x-text="items[activeIdx].subtitle"></span>
                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Circular Navigation Arrows -->
                <div class="flex items-center space-x-3 pt-6">
                    <button @click="prevSlide(); scrollSlider(-220)" 
                            class="w-10 h-10 rounded-full bg-gray-200 hover:bg-gray-300 text-gray-800 flex items-center justify-center transition shadow-sm focus:outline-none"
                            aria-label="Previous">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button @click="nextSlide(); scrollSlider(220)" 
                            class="w-10 h-10 rounded-full bg-gray-900 hover:bg-gray-800 text-white flex items-center justify-center transition shadow-sm focus:outline-none"
                            aria-label="Next">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Column: Large Active Image + Horizontal Scrolling Track (Span 8) -->
            <!-- pr-0 ensures it touches the exact right edge of the screen (eliminating the gap in your yellow mark) -->
            <div class="lg:col-span-8 flex flex-col space-y-4 pr-0">
                
                <div class="flex gap-4 items-center overflow-x-auto pb-4 no-scrollbar snap-x snap-mandatory" x-ref="slider">
                    
                    <!-- Big Active Image Card -->
                    <div class="rounded-sm overflow-hidden shadow-md flex-shrink-0 w-[320px] sm:w-[420px] h-[450px] snap-start relative bg-black">
                        <template x-for="(item, idx) in items" :key="'big-'+idx">
                            <img :src="item.image" 
                                 :alt="item.title"
                                 x-show="activeIdx === idx"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-105"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 class="absolute inset-0 w-full h-full object-cover">
                        </template>
                    </div>

                    <!-- Small Thumbnail Cards -->
                    <template x-for="(item, idx) in items" :key="'thumb-'+idx">
                        <div x-show="activeIdx !== idx" 
                             @click="activeIdx = idx" 
                             class="rounded-sm overflow-hidden shadow-sm flex-shrink-0 w-[200px] sm:w-[240px] h-[450px] relative group cursor-pointer border-2 border-transparent hover:border-red-600 transition-all snap-start">
                            <img :src="item.image" 
                                 :alt="item.title" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                        </div>
                    </template>

                </div>

                <!-- Custom Scrollbar Track Indicator -->
                <div class="w-full bg-gray-200 h-1.5 rounded-full relative overflow-hidden mr-4">
                    <div class="absolute left-0 top-0 bottom-0 bg-gray-500 w-1/3 rounded-full"></div>
                </div>

            </div>

        </div>

    </div>
</section>

<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
.no-scrollbar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.no-scrollbar {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}
</style>
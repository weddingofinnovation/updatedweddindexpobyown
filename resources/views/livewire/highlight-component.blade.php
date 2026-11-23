<main>
        @php

            use Illuminate\Support\Str;
            $boards = [
                [
                    'name' => 'Destination Weddings',
                    'slug' => 'destination-weddings',
                
                ],
                [
                    'name' => 'Wedding Venues',
                    'slug' => 'wedding-venues',
                    
                ],
                [
                    'name' => 'Wedding Planners',
                    'slug' => 'wedding-planners',
            
                ],
                [
                    'name' => 'Wedding Hotels',
                    'slug' => 'wedding-hotels',
            
                ],
                [
                    'name' => 'Wedding Food',
                    'slug' => 'wedding-food',
                    
                ],
                [
                    'name' => 'Wedding Decor',
                    'slug' => 'wedding-decor',
                    
                ],
                [
                    'name' => 'Bridal Fashion',
                    'slug' => 'bridal-fashion',
                    
                ],
            ];
        
        
          $states = [
                    ['name' => 'Andhra Pradesh', 'image' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?w=700'],
                    ['name' => 'Arunachal Pradesh', 'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=700'],
                    ['name' => 'Assam', 'image' => 'https://images.unsplash.com/photo-1524499982521-1ffd58dd89ea?w=700'],
                    ['name' => 'Bihar', 'image' => 'https://images.unsplash.com/photo-1548013146-72479768bada?w=700'],
                    ['name' => 'Chhattisgarh', 'image' => 'https://images.unsplash.com/photo-1470770903676-69b98201ea1c?w=700'],
                    ['name' => 'Goa', 'image' => 'https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?w=700'],
                    ['name' => 'Gujarat', 'image' => 'https://images.unsplash.com/photo-1599661046289-e31897846e41?w=700'],
                    ['name' => 'Haryana', 'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=700'],
                    ['name' => 'Himachal Pradesh', 'image' => 'https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?w=700'],
                    ['name' => 'Jharkhand', 'image' => 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=700'],
                    ['name' => 'Karnataka', 'image' => 'https://images.unsplash.com/photo-1526778548025-fa2f459cd5ce?w=700'],
                    ['name' => 'Kerala', 'image' => 'https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?w=700'],
                    ['name' => 'Madhya Pradesh', 'image' => 'https://images.unsplash.com/photo-1516483638261-f4dbaf036963?w=700'],
                    ['name' => 'Maharashtra', 'image' => 'https://images.unsplash.com/photo-1529253355930-ddbe423a2ac7?w=700'],
                    ['name' => 'Manipur', 'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=700'],
                    ['name' => 'Meghalaya', 'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=700'],
                    ['name' => 'Mizoram', 'image' => 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=700'],
                    ['name' => 'Nagaland', 'image' => 'https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?w=700'],
                    ['name' => 'Odisha', 'image' => 'https://images.unsplash.com/photo-1548013146-72479768bada?w=700'],
                    ['name' => 'Punjab', 'image' => 'https://images.unsplash.com/photo-1526778548025-fa2f459cd5ce?w=700'],
                    ['name' => 'Rajasthan', 'image' => 'https://images.unsplash.com/photo-1477587458883-47145ed94245?w=700'],
                    ['name' => 'Sikkim', 'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=700'],
                    ['name' => 'Tamil Nadu', 'image' => 'https://images.unsplash.com/photo-1570168007204-dfb528c6958f?w=700'],
                    ['name' => 'Telangana', 'image' => 'https://images.unsplash.com/photo-1524499982521-1ffd58dd89ea?w=700'],
                    ['name' => 'Tripura', 'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=700'],
                    ['name' => 'Uttar Pradesh', 'image' => 'https://images.unsplash.com/photo-1518002054494-3a6f94352e9d?w=700'],
                    ['name' => 'Uttarakhand', 'image' => 'https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?w=700'],
                    ['name' => 'West Bengal', 'image' => 'https://images.unsplash.com/photo-1526778548025-fa2f459cd5ce?w=700'],
                ];
        @endphp
        
        @if($board == 'become-a-tourism-partner')
            <section class="relative overflow-hidden bg-gradient-to-r from-red-700 via-rose-600 to-orange-500 py-20">
                <div class="max-w-7xl mx-auto px-6">
            
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
            
                        <!-- Left -->
                        <div>
            
                           <span class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-orange-500 to-red-600 px-5 py-2 text-sm font-bold text-black shadow-lg">
                                ✨ India's Destination Wedding Tourism Initiative
                            </span>
            
                            <h2 class="mt-6 text-4xl lg:text-6xl font-bold text-black leading-tight">
                                Your Food.
                                <br>
                                Your Culture.
                                <br>
                                Your Venues.
                                <br>
                                Your Story.
                            </h2>
            
                            <p class="mt-6 text-lg text-white/90 leading-8 max-w-xl">
                                Every city, every village, and every community has a unique wedding tradition.
                                Join our initiative to showcase India's hidden wedding destinations,
                                local cuisine, heritage, traditions, and unforgettable experiences to the world.
                            </p>
            
                            <div class="mt-8 flex flex-wrap gap-4">
            
                                <a href="#"
                                   class="px-8 py-4 rounded-xl bg-white text-red-700 font-bold hover:bg-gray-100 transition">
                                    Submit Your Destination
                                </a>
            
                                <a href="#"
                                   class="px-8 py-4 rounded-xl border border-white text-red-700 hover:bg-white hover:text-red-700 transition">
                                    Become a Tourism Partner
                                </a>
            
                            </div>
            
                        </div>
            
                        <!-- Right -->
                        <div class="grid grid-cols-2 gap-5">
            
                            <div class="bg-white rounded-2xl p-6 shadow-xl">
                                <div class="text-4xl">🍛</div>
                                <h3 class="mt-4 font-bold text-xl">Your Food</h3>
                                <p class="mt-2 text-gray-600 text-sm">
                                    Promote regional cuisines, traditional wedding feasts, sweets and local catering experiences.
                                </p>
                            </div>
            
                            <div class="bg-white rounded-2xl p-6 shadow-xl">
                                <div class="text-4xl">🎭</div>
                                <h3 class="mt-4 font-bold text-xl">Your Culture</h3>
                                <p class="mt-2 text-gray-600 text-sm">
                                    Share rituals, folk performances, festivals, music and traditions unique to your region.
                                </p>
                            </div>
            
                            <div class="bg-white rounded-2xl p-6 shadow-xl">
                                <div class="text-4xl">🏰</div>
                                <h3 class="mt-4 font-bold text-xl">Your Venues</h3>
                                <p class="mt-2 text-gray-600 text-sm">
                                    Feature palaces, forts, resorts, farms, heritage hotels and scenic wedding venues.
                                </p>
                            </div>
            
                            <div class="bg-white rounded-2xl p-6 shadow-xl">
                                <div class="text-4xl">📖</div>
                                <h3 class="mt-4 font-bold text-xl">Your Story</h3>
                                <p class="mt-2 text-gray-600 text-sm">
                                    Tell the world what makes your destination unforgettable for couples and families.
                                </p>
                            </div>
            
                        </div>
            
                    </div>
            
                    <div class="mt-16 rounded-3xl bg-white/10 backdrop-blur border border-white/20 p-8 text-center">
            
                        <h3 class="text-3xl font-bold text-black">
                            🌏 Promoting India's Hidden Wedding Destinations
                        </h3>
            
                        <p class="mt-4 text-lg text-black/90 max-w-4xl mx-auto leading-8">
                            Wedding India Expo is an initiative to promote tourism, culture, hospitality, and destination weddings across
                            India's Tier 2 and Tier 3 cities. We invite Tourism Boards, District Administrations, Hotels, Resorts,
                            Wedding Venues, Caterers, Artisans, Local Businesses, and Communities to showcase their destination
                            and attract visitors from across India and around the world.
                        </p>
            
                        <div class="mt-8 flex justify-center flex-wrap gap-4">
            
                            <span class="px-5 py-3 rounded-full bg-white text-red-700 font-semibold">
                                Tourism Boards
                            </span>
            
                            <span class="px-5 py-3 rounded-full bg-white text-red-700 font-semibold">
                                Hotels & Resorts
                            </span>
            
                            <span class="px-5 py-3 rounded-full bg-white text-red-700 font-semibold">
                                Wedding Venues
                            </span>
            
                            <span class="px-5 py-3 rounded-full bg-white text-red-700 font-semibold">
                                Caterers
                            </span>
            
                            <span class="px-5 py-3 rounded-full bg-white text-red-700 font-semibold">
                                Local Communities
                            </span>
            
                            <span class="px-5 py-3 rounded-full bg-white text-red-700 font-semibold">
                                Cultural Artists
                            </span>
            
                        </div>
            
                    </div>
            
                </div>
            </section>
        @elseif($board == 'women-in-wedding-business-forum')
            <section class="relative h-[calc(100vh-140px)] w-full overflow-hidden bg-black">
                <div class="absolute inset-0 z-0">
                    <video autoplay="" loop="" playsinline="" class="w-full h-full object-cover opacity-80" src="#"></video>
                </div>
                <div class="c-video-intro__overlay"></div>
                <div class="relative z-10 h-full max-w-7xl mx-auto px-6 flex flex-col justify-center">
                    <div class="max-w-xl animate-in fade-in slide-in-from-left duration-1000">
                        <h2 class="text-[16px] md:text-[22px] font-normal text-white mb-1 font-['expoSans'] opacity-90">Get Recognised. Get Featured. Get Discovered.</h2>
                        <h1 class="text-[24px] md:text-[42px] font-bold text-white mb-10 font-['expoSans'] leading-tight">Wedding India Expo Awards & Recognition 2027–2028</h1>
                        <a href="#" class="inline-flex items-center gap-3 text-white text-[15px] md:text-[16px]  hover:underline group pointer-events-auto">
                            Where the Build your presence in India's wedding industry with <span class="font-bold border-l pl-4">
                                a 2-year business listing, category recognition, media opportunities and eligibility for consideration across two consecutive award cycles.
                            </span></a>
                    </div>
        
                <div class="flex flex-wrap items-center gap-3 mt-8">
        
                    <a href="https://awards.globalfintechfest.com/GFA2026/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center
                               min-h-[54px]
                               px-3 md:px-6
                               border border-white/50
                               text-white
                               hover:bg-white hover:text-gray-900
                               text-sm
                               font-montserratSemiBold
                               leading-none
                               whitespace-nowrap
                               transition-all duration-300">
                        Get Recognised
                    </a>
        
                    <a href="https://register.globalfintechfest.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center
                               min-h-[54px]
                               px-6 md:px-8
                               bg-[#ED8B00]
                               &lt;!-- hover:bg-[#CD4827] --&gt;
                               hover:bg-white hover:text-gray-900
                               text-white
                               text-lg
                               font-montserratBold
                               leading-none
                               whitespace-nowrap
                               transition-all duration-300">
                        Explore Categories
                    </a>
        
                    
        
                </div>
                                
                </div>
                <div class="absolute bottom-8 left-6 md:bottom-12 md:left-6 z-10 flex flex-col items-start gap-4 animate-in fade-in slide-in-from-bottom duration-1000 delay-500">
                    <div class="w-px h-10 md:h-12 bg-white/30 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-full bg-[--gold] animate-scroll-line"></div>
                    </div><span class="text-white text-[10px] md:text-[12px] font-bold tracking-[0.2em] uppercase">Scroll</span>
                </div>
            </section>
            
            <section class="relative overflow-hidden bg-white mb-[100px] lg:mb-[200px]">
                
                <div class="absolute inset-0 h-[300px]" style="clip-path: polygon(0 0, 100% 0, 100% 68%, 0 100%); background:linear-gradient(135deg, #1B06C0 0%, #2208EB 50%, #2A15F5 100%);"></div>
                <div class="relative z-10 px-6 pt-100">
        
                    <h2 class="text-center text-3xl font-bold text-white">
                        Wedding India Expo Awards<br> — Celebrating Excellence. Recognising Talent. Inspiring the Future of Weddings.
                    </h2>
        
                </div>
        
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4 px-6 lg:px-[88px] max-w-[1440px] mx-auto relative z-10">
        
                    <div class="relative z-20 mt-12 rounded-md bg-black p-8 text-white">
                        <div class="text-4xl">
                            ♙
                        </div>
        
                        <h3 class="mt-6 text-xl font-bold">
                            I want to Exhibit Wedding India Expo 2027
                        </h3>
        
                        <div class="mt-4 flex justify-end">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-black">
                                →
                            </span>
                        </div>
                    </div>
        
                    <div class="relative z-20 mt-12 rounded-md bg-black p-8 text-white">
                        <div class="text-4xl">
                            ♙
                        </div>
        
                        <h3 class="mt-6 text-xl font-bold">
                          What is Wedding India Expo 2027?
                        </h3>
        
                        <div class="mt-4 flex justify-end">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-black">
                                →
                            </span>
                        </div>
                    </div>
        
                    <div class="relative z-20 mt-12 rounded-md bg-black p-8 text-white">
                        <div class="text-4xl">
                            ♙
                        </div>
        
                        <h3 class="mt-6 text-xl font-bold">
                            Sponsor Wedding India Expo 2027
                        </h3>
        
                        <div class="mt-4 flex justify-end">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-black">
                                →
                            </span>
                        </div>
                    </div>
        
                    <div class="relative z-20 mt-12 rounded-md bg-black p-8 text-white">
                        <div class="text-4xl">
                            ♙
                        </div>
        
                        <h3 class="mt-6 text-xl font-bold">
                            Attend Wedding India Expo 2027
                        </h3>
        
                        <div class="mt-4 flex justify-end">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-black">
                                →
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bg-white py-16 px-5 sm:px-8 lg:py-24">
                <div class="mx-auto max-w-5xl">
            
                    <!-- Section Label -->
                    <div class="mb-5 flex items-center gap-3">
                        <span class="h-px w-10 bg-amber-600"></span>
                        <span class="text-xs font-semibold uppercase tracking-[0.25em] text-amber-700">
                            Wedding India Expo Awards 2027
                        </span>
                    </div>
            
                    <!-- Heading -->
                    <h2 class="max-w-4xl text-3xl font-bold leading-tight tracking-tight text-black sm:text-4xl lg:text-5xl">
                        Celebrating Excellence in India's Wedding Industry
                    </h2>
            
                    <!-- Description -->
                    <div class="mt-7 max-w-4xl space-y-5 text-base leading-8 text-black sm:text-lg">
                        <p>
                            <strong>Wedding India Expo Awards</strong> is a distinguished
                            recognition platform celebrating excellence, creativity and
                            innovation across India's wedding industry.
                        </p>
            
                        <p>
                            The awards aim to recognise outstanding wedding planners,
                            caterers, hotels, resorts, farmhouses, destination wedding
                            specialists, tourism boards and wedding service providers
                            who are shaping extraordinary wedding experiences.
                        </p>
            
                        <p>
                            The Wedding India Expo Awards recognition represents
                            professional achievement, industry contribution and a
                            commitment to excellence.
                        </p>
            
                        <p>
                            Eligible recipients may use the award recognition logo to
                            showcase their achievements, strengthen brand credibility
                            and highlight their contribution to the wedding industry,
                            subject to the applicable award and logo usage guidelines.
                        </p>
                    </div>
            
                    <!-- Bottom Accent -->
                    <div class="mt-10 border-t border-gray-200 pt-6">
                        <p class="text-sm font-semibold tracking-wide text-black">
                            Recognising Talent. Celebrating Achievement. Inspiring Excellence.
                        </p>
                    </div>
            
                </div>
            </section>
            
            <section class="bg-white px-5 py-16 sm:px-8 lg:py-24">
                <div class="mx-auto max-w-5xl">
            
                    <!-- Section Label -->
                    <div class="mb-5 flex items-center gap-3">
                        <span class="h-px w-10 bg-amber-600"></span>
                        <span class="text-xs font-semibold uppercase tracking-[0.25em] text-amber-700">
                            Wedding India Expo Awards 2027
                        </span>
                    </div>
            
                    <!-- Heading -->
                    <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl lg:text-5xl">
                        Award Jury
                    </h2>
            
                    <p class="mt-4 max-w-3xl text-lg leading-8 text-gray-700">
                        Recognising the experts and industry leaders who help celebrate
                        excellence across the wedding industry.
                    </p>
            
                    <!-- Main Content -->
                    <div class="mt-8 max-w-4xl space-y-6 text-base leading-8 text-black sm:text-lg">
            
                        <p>
                            The <strong>Wedding India Expo Awards Jury</strong> aims to
                            bring together respected wedding industry professionals,
                            experienced wedding planners, hospitality leaders, renowned
                            caterers, destination wedding specialists, tourism experts,
                            creative professionals and distinguished academics to
                            recognise excellence across the wedding industry.
                        </p>
            
                        <p>
                            The jury will evaluate eligible entries based on creativity,
                            originality, professional expertise, service quality,
                            innovation, customer experience and contribution to the
                            development of the wedding industry.
                        </p>
            
                        <p>
                            Through a transparent and structured evaluation process,
                            the awards seek to celebrate outstanding achievements,
                            encourage new ideas and recognise the individuals,
                            businesses and destinations raising standards in wedding
                            planning, hospitality and destination wedding experiences.
                        </p>
            
                        <p>
                            Our vision is to establish a credible platform where
                            exceptional talent receives recognition and the next
                            generation of wedding professionals finds inspiration.
                        </p>
                    </div>
            
                    <!-- Mission Statement -->
                    <div class="mt-10 border-l-4 border-amber-600 bg-gray-50 px-6 py-5 sm:px-8">
                        <p class="text-lg font-bold leading-8 text-black sm:text-xl">
                            Recognising Excellence. Valuing Creativity.
                            Celebrating Achievement.
                        </p>
                    </div>
            
                    <!-- Jury Notice -->
                    <p class="mt-6 max-w-4xl text-sm leading-7 text-gray-600">
                        <em>
                            Jury members, evaluation criteria and selection procedures
                            will be announced by Wedding India Expo as they are confirmed.
                        </em>
                    </p>
            
                </div>
            </section>
            
            <section class="bg-white px-5 py-16 sm:px-8 lg:py-24">
                <div class="mx-auto max-w-7xl">
            
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            
                        <!-- Jury Image -->
                        <div class="relative">
                            <img
                                src="{{ asset('images/awards-jury.jpg') }}"
                                alt="Wedding India Expo Awards jury and wedding industry professionals"
                                class="h-[350px] w-full rounded-2xl object-cover sm:h-[450px]"
                                loading="lazy"
                            >
            
                            <div class="absolute bottom-5 left-5 rounded-lg bg-white px-5 py-3 shadow-lg">
                                <p class="text-sm font-bold text-black">
                                    Wedding India Expo Awards
                                </p>
                                <p class="mt-1 text-xs text-gray-600">
                                    Celebrating Industry Excellence
                                </p>
                            </div>
                        </div>
            
                        <!-- Jury Content -->
                        <div>
                            <div class="mb-5 flex items-center gap-3">
                                <span class="h-px w-10 bg-amber-600"></span>
                                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-700">
                                    Awards 2027
                                </span>
                            </div>
            
                            <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">
                                Award Jury
                            </h2>
            
                            <div class="mt-6 space-y-5 text-base leading-8 text-black">
                                <p>
                                    The <strong>Wedding India Expo Awards Jury</strong>
                                    aims to bring together respected wedding industry
                                    professionals, experienced wedding planners,
                                    hospitality leaders, renowned caterers, destination
                                    wedding specialists, tourism experts, creative
                                    professionals and distinguished academics.
                                </p>
            
                                <p>
                                    The jury will evaluate eligible entries based on
                                    creativity, originality, professional expertise,
                                    service quality, innovation, customer experience
                                    and contribution to the wedding industry.
                                </p>
            
                                <p>
                                    Through a transparent and structured evaluation
                                    process, the awards seek to celebrate outstanding
                                    achievements, encourage new ideas and recognise
                                    professionals raising standards in wedding planning,
                                    hospitality and destination wedding experiences.
                                </p>
                            </div>
            
                            <div class="mt-8 border-l-4 border-amber-600 pl-5">
                                <p class="font-bold leading-7 text-black">
                                    Recognising Excellence. Valuing Creativity.
                                    Celebrating Achievement.
                                </p>
                            </div>
            
                            <p class="mt-5 text-sm leading-6 text-gray-600">
                                Jury members and selection procedures will be announced
                                as they are confirmed.
                            </p>
                        </div>
            
                    </div>
                </div>
            </section>
            
            <section class="bg-white px-5 py-16 sm:px-8 lg:py-24">
                <div class="mx-auto max-w-7xl">
            
                    <!-- Section Header -->
                    <div class="mb-10">
                        <div class="mb-5 flex items-center gap-3">
                            <span class="h-px w-10 bg-amber-600"></span>
                            <span class="text-xs font-semibold uppercase tracking-[0.22em] text-amber-700">
                                Wedding India Expo Awards 2027
                            </span>
                        </div>
            
                        <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl lg:text-5xl">
                            Winners' Showcase
                        </h2>
            
                        <p class="mt-5 max-w-3xl text-lg leading-8 text-gray-700">
                            Discover the exceptional talent, creativity and achievements
                            of the wedding industry's most inspiring professionals.
                        </p>
                    </div>
            
                    <!-- Featured Showcase -->
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            
                        <!-- Featured Image -->
                        <div class="relative overflow-hidden rounded-2xl">
                            <img
                                src="{{ asset('images/wedding-awards-showcase.jpg') }}"
                                alt="Luxury Indian wedding celebration showcasing creativity and excellence"
                                class="h-[350px] w-full object-cover sm:h-[480px]"
                                loading="lazy"
                            >
            
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            
                            <div class="absolute bottom-6 left-6 right-6 text-white">
                                <p class="text-xs font-semibold uppercase tracking-[0.2em]">
                                    Celebrating Excellence
                                </p>
                                <h3 class="mt-2 text-2xl font-bold sm:text-3xl">
                                    Inspiring the Future of Weddings
                                </h3>
                            </div>
                        </div>
            
                        <!-- Content -->
                        <div>
                            <div class="space-y-5 text-base leading-8 text-black sm:text-lg">
                                <p>
                                    Discover the exceptional talent, creativity and
                                    achievements of the wedding industry's most inspiring
                                    professionals at the
                                    <strong>Wedding India Expo Awards Winners' Showcase.</strong>
                                </p>
            
                                <p>
                                    Explore outstanding wedding celebrations, visionary
                                    wedding planners, extraordinary destination venues,
                                    innovative catering concepts, breathtaking décor,
                                    stunning photography and hospitality experiences
                                    that set new standards of excellence.
                                </p>
            
                                <p>
                                    The Winners' Showcase brings together recognised
                                    professionals, leading brands and emerging talents
                                    whose work inspires the wedding community and
                                    contributes to the growth of India's wedding and
                                    destination tourism industry.
                                </p>
            
                                <p>
                                    Celebrate the people behind unforgettable
                                    celebrations. Discover innovative ideas, explore
                                    remarkable projects and find inspiration for the
                                    weddings of tomorrow.
                                </p>
                            </div>
            
                            <!-- Signature Statement -->
                            <div class="mt-8 border-l-4 border-amber-600 pl-5">
                                <p class="text-lg font-bold leading-8 text-black">
                                    Explore Excellence. Discover Inspiration.
                                    Celebrate the Winners.
                                </p>
                            </div>
            
                            <!-- Event Information -->
                            <div class="mt-8 border-t border-gray-200 pt-6">
                                <p class="font-semibold text-black">
                                    Wedding India Expo Awards 2027
                                </p>
            
                                <p class="mt-2 text-sm text-gray-600">
                                    5–7 March 2027 | IICC, Yashobhoomi, New Delhi
                                </p>
            
                                <a
                                    href="https://weddingindiaexpo.com"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="mt-5 inline-flex items-center gap-2 rounded-md bg-black px-6 py-3 text-sm font-semibold text-white transition hover:bg-gray-800"
                                >
                                    Explore Wedding India Expo
                                    <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
            
                    </div>
            
                    <!-- Showcase Categories -->
                    <div class="mt-16 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            
                        <div class="border border-gray-200 p-6">
                            <span class="text-2xl">✦</span>
                            <h3 class="mt-4 font-bold text-black">Wedding Planners</h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">
                                Discover creative minds behind extraordinary celebrations.
                            </p>
                        </div>
            
                        <div class="border border-gray-200 p-6">
                            <span class="text-2xl">✦</span>
                            <h3 class="mt-4 font-bold text-black">Venues & Destinations</h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">
                                Explore remarkable places for destination weddings.
                            </p>
                        </div>
            
                        <div class="border border-gray-200 p-6">
                            <span class="text-2xl">✦</span>
                            <h3 class="mt-4 font-bold text-black">Catering Excellence</h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">
                                Celebrate culinary artistry and exceptional hospitality.
                            </p>
                        </div>
            
                        <div class="border border-gray-200 p-6">
                            <span class="text-2xl">✦</span>
                            <h3 class="mt-4 font-bold text-black">Creative Professionals</h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">
                                Discover inspiring décor, photography and wedding design.
                            </p>
                        </div>
            
                    </div>
            
                    <!-- Notice -->
                    <p class="mt-8 text-sm leading-6 text-gray-500">
                        Winner profiles, award titles and project photographs will be
                        published as they become available and are approved for display.
                    </p>
            
                </div>
            </section>
            
            <section class="bg-white px-5 py-16 sm:px-8 lg:py-24">
                <div class="mx-auto max-w-7xl">
            
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            
                        <!-- Image -->
                        <div class="relative overflow-hidden rounded-2xl">
                            <img
                                src="{{ asset('images/wedding-design-review.jpg') }}"
                                alt="Creative Indian wedding decoration and destination wedding design"
                                class="h-[320px] w-full object-cover sm:h-[430px]"
                                loading="lazy"
                            >
            
                            <div class="absolute bottom-5 left-5 rounded-lg bg-white px-5 py-3 shadow-md">
                                <p class="text-xs font-semibold uppercase tracking-widest text-amber-700">
                                    Wedding India Expo Awards 2027
                                </p>
                                <p class="mt-1 font-bold text-black">
                                    Your Creativity Deserves Recognition
                                </p>
                            </div>
                        </div>
            
                        <!-- Content -->
                        <div>
                            <div class="mb-5 flex items-center gap-3">
                                <span class="h-px w-10 bg-amber-600"></span>
                                <span class="text-xs font-semibold uppercase tracking-[0.22em] text-amber-700">
                                    Showcase Your Excellence
                                </span>
                            </div>
            
                            <h2 class="text-3xl font-bold leading-tight tracking-tight text-black sm:text-4xl lg:text-5xl">
                                Got an Exceptional Wedding Idea?
                            </h2>
            
                            <p class="mt-6 text-lg font-medium leading-8 text-black">
                                Discover the potential of your work and prepare it
                                for recognition at the Wedding India Expo Awards.
                            </p>
            
                            <div class="mt-5 space-y-4 text-base leading-7 text-gray-700">
                                <p>
                                    Do you have an outstanding wedding project, a
                                    creative décor concept, an innovative catering
                                    experience, a remarkable venue or an unforgettable
                                    destination wedding to showcase?
                                </p>
            
                                <p>
                                    Not sure whether your work is ready for award
                                    nomination? Our proposed preliminary review process
                                    can help you understand how to present your
                                    achievements, communicate your strengths and make
                                    your submission more compelling.
                                </p>
            
                                <p>
                                    Prepare your photographs, project details,
                                    portfolio and business achievements to help
                                    demonstrate your creativity, professionalism
                                    and contribution to the wedding industry.
                                </p>
                            </div>
            
                            <!-- Key Benefits -->
                            <div class="mt-7 space-y-3">
                                <div class="flex items-start gap-3">
                                    <span class="mt-1 text-amber-700">✓</span>
                                    <p class="text-sm leading-6 text-black">
                                        Understand how to present your wedding projects.
                                    </p>
                                </div>
            
                                <div class="flex items-start gap-3">
                                    <span class="mt-1 text-amber-700">✓</span>
                                    <p class="text-sm leading-6 text-black">
                                        Identify opportunities to strengthen your portfolio.
                                    </p>
                                </div>
            
                                <div class="flex items-start gap-3">
                                    <span class="mt-1 text-amber-700">✓</span>
                                    <p class="text-sm leading-6 text-black">
                                        Prepare your work for the relevant award category.
                                    </p>
                                </div>
                            </div>
            
                            <!-- CTA -->
                            <div class="mt-8 flex flex-wrap gap-3">
                                <a
                                    href="{{ url('/awards/nominate') }}"
                                    class="inline-flex items-center justify-center rounded-md bg-black px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-gray-800"
                                >
                                    Submit Your Work
                                    <span class="ml-2" aria-hidden="true">→</span>
                                </a>
            
                                <a
                                    href="{{ url('/awards') }}"
                                    class="inline-flex items-center justify-center rounded-md border border-gray-300 px-6 py-3.5 text-sm font-semibold text-black transition hover:bg-gray-50"
                                >
                                    Explore Award Categories
                                </a>
                            </div>
            
                            <p class="mt-5 text-xs leading-5 text-gray-500">
                                Any preliminary review or feedback service should be
                                described according to the service actually offered.
                                A review does not guarantee nomination success or an award.
                            </p>
                        </div>
            
                    </div>
                </div>
            </section>
            
            <section class="bg-white py-16 sm:py-20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
            
                        <!-- Content -->
                        <div>
                            <p class="mb-4 text-sm font-semibold uppercase tracking-[0.22em] text-amber-700">
                                Wedding India Expo Awards
                            </p>
            
                            <h2 class="max-w-2xl text-3xl font-bold tracking-tight text-black sm:text-4xl lg:text-5xl">
                                Recognition That Builds Your Reputation
                            </h2>
            
                            <p class="mt-6 text-lg leading-8 text-gray-600">
                                Celebrating excellence, creativity and innovation across
                                the wedding industry. Showcase your work, strengthen your
                                professional visibility and connect with the people shaping
                                India's wedding and destination-wedding ecosystem.
                            </p>
            
                            <div class="mt-8 space-y-5">
                                <div class="flex gap-4">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-amber-50 text-amber-700">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.8"
                                                  d="M8 21h8m-4-4v4m-6-8V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a6 6 0 0 1-12 0Z"/>
                                        </svg>
                                    </span>
                                    <div>
                                        <h3 class="font-semibold text-black">Trophy & Certificate</h3>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">
                                            Formal recognition for eligible award recipients.
                                        </p>
                                    </div>
                                </div>
            
                                <div class="flex gap-4">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-amber-50 text-amber-700">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.8"
                                                  d="M12 3v18m9-9H3m15.36-6.36-12.72 12.72"/>
                                        </svg>
                                    </span>
                                    <div>
                                        <h3 class="font-semibold text-black">Publicity & Business Visibility</h3>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">
                                            Promotional opportunities through applicable
                                            Wedding India Expo media and marketing channels.
                                        </p>
                                    </div>
                                </div>
            
                                <div class="flex gap-4">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-amber-50 text-amber-700">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.8"
                                                  d="M7 7h10v10H7zM4 4h3m10 0h3m-16 16h3m10 0h3"/>
                                        </svg>
                                    </span>
                                    <div>
                                        <h3 class="font-semibold text-black">Winner Profile & Official Logo</h3>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">
                                            Showcase recognised work and use the official
                                            winner logo according to the award guidelines.
                                        </p>
                                    </div>
                                </div>
            
                                <div class="flex gap-4">
                                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-amber-50 text-amber-700">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.8"
                                                  d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2m6-10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm8-3h6m-3-3v6"/>
                                        </svg>
                                    </span>
                                    <div>
                                        <h3 class="font-semibold text-black">Industry Connections</h3>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">
                                            Build visibility among wedding planners, caterers,
                                            venues, hotels, resorts and destination specialists.
                                        </p>
                                    </div>
                                </div>
                            </div>
            
                            <div class="mt-10 flex flex-wrap gap-4">
                                <a href="{{ url('/awards/nominate') }}"
                                   class="inline-flex items-center justify-center rounded-md bg-black px-6 py-3 text-sm font-semibold text-white transition hover:bg-gray-800">
                                    Submit Your Work
                                    <span class="ml-2" aria-hidden="true">&rarr;</span>
                                </a>
            
                                <a href="{{ url('/awards') }}"
                                   class="inline-flex items-center justify-center rounded-md border border-gray-300 px-6 py-3 text-sm font-semibold text-black transition hover:border-amber-600 hover:text-amber-700">
                                    Explore Award Categories
                                </a>
                            </div>
            
                            <p class="mt-5 text-xs leading-5 text-gray-500">
                                Award eligibility, selection criteria, benefits and logo
                                usage are subject to the official award rules and the
                                selected participation package. Participation or payment
                                does not guarantee an award.
                            </p>
                        </div>
            
                        <!-- Visual -->
                        <div class="relative">
                            <div class="absolute -inset-4 rounded-2xl bg-amber-50"></div>
                            <div class="relative overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                                <img
                                    src="{{ asset('images/wedding-india-expo-awards.jpg') }}"
                                    alt="Wedding India Expo Awards celebrating excellence in the wedding industry"
                                    class="aspect-[4/5] w-full object-cover"
                                    loading="lazy"
                                >
                                <div class="border-t border-gray-200 bg-white p-6 sm:p-8">
                                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-700">
                                        Wedding India Expo 2027
                                    </p>
                                    <p class="mt-2 text-xl font-semibold text-black">
                                        Celebrate the People Behind Extraordinary Weddings
                                    </p>
                                    <p class="mt-2 text-sm leading-6 text-gray-600">
                                        Recognising the talent, creativity and service
                                        that help make wedding celebrations memorable.
                                    </p>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </section>
            
            <section class="bg-white py-16 sm:py-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
            
                    <div class="mx-auto max-w-3xl text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-amber-700">
                            Wedding India Expo Awards 2027
                        </p>
            
                        <h2 class="mt-4 text-3xl font-bold tracking-tight text-black sm:text-5xl">
                            Award Categories
                        </h2>
            
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            From exceptional wedding celebrations to innovative services
                            and destination experiences, discover opportunities to
                            showcase your contribution to the wedding industry.
                        </p>
                    </div>
            
                    @php
                        $categories = [
                            [
                                'title' => 'Wedding Planning & Management',
                                'description' => 'Recognising creative planning, coordination and exceptional wedding execution.',
                                'image' => 'images/awards/wedding-planning.jpg',
                            ],
                            [
                                'title' => 'Catering & Culinary Excellence',
                                'description' => 'Celebrating outstanding menus, culinary creativity and wedding hospitality.',
                                'image' => 'images/awards/wedding-catering.jpg',
                            ],
                            [
                                'title' => 'Venues & Hospitality',
                                'description' => 'Showcasing hotels, resorts, palaces, farmhouses and exceptional venues.',
                                'image' => 'images/awards/wedding-venues.jpg',
                            ],
                            [
                                'title' => 'Decor & Wedding Design',
                                'description' => 'Highlighting creative concepts, mandaps, floral design and event aesthetics.',
                                'image' => 'images/awards/wedding-decor.jpg',
                            ],
                            [
                                'title' => 'Destination Weddings & Tourism',
                                'description' => 'Recognising destination experiences, tourism initiatives and specialist services.',
                                'image' => 'images/awards/destination-wedding.jpg',
                            ],
                            [
                                'title' => 'Photography, Film & Media',
                                'description' => 'Celebrating visual storytelling, wedding films and memorable imagery.',
                                'image' => 'images/awards/wedding-photography.jpg',
                            ],
                        ];
                    @endphp
            
                    <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($categories as $category)
                            <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white transition duration-300 hover:-translate-y-1 hover:border-amber-300 hover:shadow-lg">
                                <div class="aspect-[4/3] overflow-hidden bg-gray-100">
                                    <img
                                        src="{{ asset($category['image']) }}"
                                        alt="{{ $category['title'] }}"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                        loading="lazy"
                                    >
                                </div>
            
                                <div class="p-6">
                                    <div class="mb-4 h-1 w-10 rounded-full bg-amber-600"></div>
            
                                    <h3 class="text-xl font-semibold text-black">
                                        {{ $category['title'] }}
                                    </h3>
            
                                    <p class="mt-3 text-sm leading-6 text-gray-600">
                                        {{ $category['description'] }}
                                    </p>
            
                                    <a
                                        href="{{ url('/awards/nominate') }}"
                                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-amber-800 hover:text-black"
                                    >
                                        Explore nomination
                                        <span aria-hidden="true">&rarr;</span>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
            
                    <div class="mt-12 text-center">
                        <a
                            href="{{ url('/awards/nominate') }}"
                            class="inline-flex items-center justify-center rounded-md bg-black px-8 py-3.5 text-sm font-semibold text-white transition hover:bg-gray-800"
                        >
                            Submit Your Work
                        </a>
            
                        <p class="mx-auto mt-4 max-w-2xl text-xs leading-5 text-gray-500">
                            Categories, eligibility, evaluation criteria and recognition
                            benefits will be governed by the official award rules.
                            Nomination does not guarantee selection or winning.
                        </p>
                    </div>
                </div>
            </section>
            
            <section class="bg-white py-16 sm:py-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
            
                    <!-- Section heading -->
                    <div class="mx-auto max-w-3xl text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-amber-700">
                            Wedding India Expo Awards 2027
                        </p>
            
                        <h2 class="mt-4 text-3xl font-bold tracking-tight text-black sm:text-5xl">
                            Mission, Vision & Action
                        </h2>
            
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Building a stronger wedding industry through recognition,
                            creativity, innovation and meaningful professional connections.
                        </p>
                    </div>
            
                    <!-- Mission, Vision, Action -->
                    <div class="mt-14 grid gap-6 md:grid-cols-3">
            
                        <!-- Mission -->
                        <article class="rounded-2xl border border-gray-200 bg-white p-8 transition hover:border-amber-300 hover:shadow-lg">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50 text-amber-800">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="1.8"
                                          d="M12 3v18m9-9H3m15.36-6.36L5.64 18.36"/>
                                </svg>
                            </div>
            
                            <h3 class="mt-6 text-2xl font-bold text-black">
                                Our Mission
                            </h3>
            
                            <p class="mt-4 text-sm leading-7 text-gray-600">
                                To recognise and promote outstanding wedding professionals,
                                creative ideas, exceptional services and innovative
                                businesses that contribute to the growth of the wedding industry.
                            </p>
                        </article>
            
                        <!-- Vision -->
                        <article class="rounded-2xl border border-gray-200 bg-white p-8 transition hover:border-amber-300 hover:shadow-lg">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50 text-amber-800">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="1.8"
                                          d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </div>
            
                            <h3 class="mt-6 text-2xl font-bold text-black">
                                Our Vision
                            </h3>
            
                            <p class="mt-4 text-sm leading-7 text-gray-600">
                                To build a trusted recognition platform connecting India's
                                wedding community with national and international opportunities
                                across planning, catering, hospitality, destinations, design and tourism.
                            </p>
                        </article>
            
                        <!-- Action -->
                        <article class="rounded-2xl border border-gray-200 bg-white p-8 transition hover:border-amber-300 hover:shadow-lg">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50 text-amber-800">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="1.8"
                                          d="M5 12l4 4L19 6"/>
                                </svg>
                            </div>
            
                            <h3 class="mt-6 text-2xl font-bold text-black">
                                Our Action
                            </h3>
            
                            <p class="mt-4 text-sm leading-7 text-gray-600">
                                To create opportunities to nominate exceptional work,
                                showcase professional achievements, share industry stories,
                                facilitate networking and celebrate meaningful contributions.
                            </p>
                        </article>
            
                    </div>
            
                    <!-- Impact statement -->
                    <div class="mt-12 rounded-2xl bg-gray-50 px-6 py-10 text-center sm:px-12">
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">
                            Our Purpose
                        </p>
            
                        <h3 class="mx-auto mt-4 max-w-3xl text-2xl font-bold leading-tight text-black sm:text-3xl">
                            Recognising Excellence. Inspiring Creativity.
                            Connecting the Wedding World.
                        </h3>
            
                        <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-gray-600">
                            We aim to encourage professional excellence, celebrate
                            extraordinary work and create meaningful connections across
                            the wedding and destination-wedding ecosystem.
                        </p>
            
                        <a href="{{ url('/awards/nominate') }}"
                           class="mt-8 inline-flex items-center justify-center rounded-md bg-black px-7 py-3.5 text-sm font-semibold text-white transition hover:bg-gray-800">
                            Explore Award Nominations
                            <span class="ml-2" aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
            
                </div>
            </section>
            
            <section class="bg-white py-16 sm:py-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
            
                    <div class="mx-auto max-w-3xl text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-amber-700">
                            Partnerships & Collaboration
                        </p>
            
                        <h2 class="mt-4 text-3xl font-bold tracking-tight text-black sm:text-5xl">
                            Get Involved with Wedding India Expo
                        </h2>
            
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Connect with wedding professionals, hospitality brands,
                            tourism organisations and creative businesses shaping
                            India's wedding and destination-wedding industry.
                        </p>
                    </div>
            
                    @php
                        $opportunities = [
                            [
                                'number' => '01',
                                'title' => 'Industry Partnerships',
                                'description' => 'Build professional connections with planners, caterers, venues, hotels, resorts and wedding specialists.',
                            ],
                            [
                                'number' => '02',
                                'title' => 'Awards Partnerships',
                                'description' => 'Explore opportunities to support recognition across wedding planning, hospitality, catering, design and destinations.',
                            ],
                            [
                                'number' => '03',
                                'title' => 'Sponsorship Opportunities',
                                'description' => 'Discuss brand visibility, event participation, content collaborations and promotional opportunities.',
                            ],
                            [
                                'number' => '04',
                                'title' => 'Tourism & Destination Partners',
                                'description' => 'Showcase regional wedding destinations, venues, culture, cuisine and hospitality offerings.',
                            ],
                            [
                                'number' => '05',
                                'title' => 'Media & Knowledge Partners',
                                'description' => 'Collaborate on interviews, podcasts, industry stories and knowledge-sharing initiatives.',
                            ],
                            [
                                'number' => '06',
                                'title' => 'Speakers & Industry Experts',
                                'description' => 'Share professional insights through proposed discussions, interviews and educational sessions.',
                            ],
                        ];
                    @endphp
            
                    <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($opportunities as $opportunity)
                            <article class="rounded-2xl border border-gray-200 bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-amber-300 hover:shadow-lg">
                                <p class="text-sm font-semibold tracking-widest text-amber-700">
                                    {{ $opportunity['number'] }}
                                </p>
            
                                <h3 class="mt-4 text-xl font-bold text-black">
                                    {{ $opportunity['title'] }}
                                </h3>
            
                                <p class="mt-3 text-sm leading-7 text-gray-600">
                                    {{ $opportunity['description'] }}
                                </p>
            
                                <a href="{{ url('/contact') }}"
                                   class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-black hover:text-amber-800">
                                    Discuss a partnership
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </article>
                        @endforeach
                    </div>
            
                    <div class="mt-14 rounded-2xl bg-gray-50 px-6 py-10 text-center sm:px-12 sm:py-14">
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">
                            Let's Collaborate
                        </p>
            
                        <h3 class="mx-auto mt-4 max-w-2xl text-2xl font-bold text-black sm:text-3xl">
                            Your Expertise. Our Network. A Stronger Wedding Industry.
                        </h3>
            
                        <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-gray-600">
                            Tell us about your organisation and how you would like to
                            participate in Wedding India Expo 2027.
                        </p>
            
                        <a href="{{ url('/contact') }}"
                           class="mt-8 inline-flex items-center justify-center rounded-md bg-black px-8 py-3.5 text-sm font-semibold text-white transition hover:bg-gray-800">
                            Start a Conversation
                            <span class="ml-2" aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
            
                </div>
            </section>
            
            <section class="bg-white py-16 sm:py-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
            
                    <div class="mx-auto max-w-3xl text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-amber-700">
                            Partnerships & Community
                        </p>
            
                        <h1 class="mt-4 text-4xl font-bold tracking-tight text-black sm:text-5xl">
                            Get Involved with Wedding India Expo
                        </h1>
            
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Connect. Collaborate. Celebrate the Wedding Industry.
                            Explore opportunities to support industry recognition,
                            share expertise, promote destinations and build meaningful
                            professional relationships.
                        </p>
                    </div>
            
                    @php
                        $opportunities = [
                            [
                                'number' => '01',
                                'title' => 'Awards Sponsorship',
                                'description' => 'Support the recognition of outstanding wedding professionals, innovative businesses and exceptional projects.',
                                'link' => '/contact?interest=awards-sponsorship',
                                'cta' => 'Explore sponsorship',
                            ],
                            [
                                'number' => '02',
                                'title' => 'Expert & Jury Participation',
                                'description' => 'Express your interest in contributing professional expertise to the awards programme.',
                                'link' => '/contact?interest=jury-participation',
                                'cta' => 'Express your interest',
                            ],
                            [
                                'number' => '03',
                                'title' => 'Tourism & Destination Partnerships',
                                'description' => 'Explore opportunities to promote wedding destinations, hospitality, regional culture and cuisine.',
                                'link' => '/contact?interest=destination-partnership',
                                'cta' => 'Discuss collaboration',
                            ],
                            [
                                'number' => '04',
                                'title' => 'Brand & Corporate Partnerships',
                                'description' => 'Discuss sponsorship, promotional campaigns, product showcases and industry collaborations.',
                                'link' => '/contact?interest=brand-partnership',
                                'cta' => 'Partner with us',
                            ],
                            [
                                'number' => '05',
                                'title' => 'Media & Knowledge Partnerships',
                                'description' => 'Collaborate on podcasts, interviews, expert discussions and educational industry content.',
                                'link' => '/contact?interest=media-partnership',
                                'cta' => 'Share your proposal',
                            ],
                            [
                                'number' => '06',
                                'title' => 'Wedding Industry Community',
                                'description' => 'Connect with planners, caterers, venues, photographers, decorators and hospitality professionals.',
                                'link' => '/contact?interest=industry-community',
                                'cta' => 'Join the conversation',
                            ],
                        ];
                    @endphp
            
                    <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($opportunities as $item)
                            <article class="group flex h-full flex-col rounded-2xl border border-gray-200 bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-amber-300 hover:shadow-lg">
                                <p class="text-sm font-semibold tracking-[0.2em] text-amber-700">
                                    {{ $item['number'] }}
                                </p>
            
                                <h2 class="mt-5 text-xl font-bold text-black">
                                    {{ $item['title'] }}
                                </h2>
            
                                <p class="mt-3 flex-1 text-sm leading-7 text-gray-600">
                                    {{ $item['description'] }}
                                </p>
            
                                <a href="{{ url($item['link']) }}"
                                   class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-black transition group-hover:text-amber-800">
                                    {{ $item['cta'] }}
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </article>
                        @endforeach
                    </div>
            
                    <div class="mt-14 rounded-2xl bg-gray-50 px-6 py-12 text-center sm:px-12">
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">
                            Wedding India Expo 2027
                        </p>
            
                        <h2 class="mx-auto mt-4 max-w-3xl text-3xl font-bold tracking-tight text-black">
                            Your Expertise Can Help Shape the Future of Weddings
                        </h2>
            
                        <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-gray-600">
                            Tell us about your organisation, your expertise and the
                            collaboration you have in mind. Our team can explore
                            opportunities that align with your objectives.
                        </p>
            
                        <a href="{{ url('/contact') }}"
                           class="mt-8 inline-flex items-center justify-center rounded-md bg-black px-8 py-3.5 text-sm font-semibold text-white transition hover:bg-gray-800">
                            Discuss a Partnership
                            <span class="ml-2" aria-hidden="true">&rarr;</span>
                        </a>
            
                        <p class="mt-5 text-sm text-gray-500">
                            5–7 March 2027 · Yashobhoomi, Dwarka, New Delhi
                        </p>
                    </div>
            
                </div>
            </section>
            
            <section class="lg:px-[88px] px-6 max-w-[1440px] mx-auto lg:pt-[40px] lg:pb-[46px] py-10 relative theme-container overflow-hidden">
                <div class="mx-auto flex lg:flex-row flex-col items-start justify-center bg-white box-border gap-[20px]">
                    <div class="lg:w-[298px]">
                        <p class="text-black font-firaSansSemiBold text-[20px] font-semibold leading-[20px] mt-0">Why</p>
                        <h2 class="text-[#2208eb] font-montserratBold tracking-[-0.8px] xl:text-[48px] text-3xl font-bold leading-[110%] py-2 lg:py-4 m-0">
                            The Future of Weddings</h2>
                        <p class="text-[#555] font-firaSansRegular text-[16px] leading-[24px] mt-2">Connecting destinations, luxury, creativity and global opportunities to shape the future of weddings.</p>
                        <div class="my-[17px]"><a class="font-montserratRegular mt-10 underline text-[1rem]" href="/theme">Know more</a></div>
                    </div>
                    <div style="background:linear-gradient(135deg, #1B06C0 0%, #2208EB 50%, #2A15F5 100%)" class="lg:w-[23%] w-full min-h-[340px] relative flex flex-col items-start p-[34px] pb-[90px] max-[1282px]:p-[30px] max-[1282px]:pb-[90px] box-border ai-card">
                        <p class="text-white font-montserratBold text-[20px] font-bold leading-[28px] mb-[10px] max-w-[180px]">Destination Weddings</p>
                        <p class="text-white font-montserratRegular text-[13px] leading-[22px] mb-[16px] opacity-80">Discover India and the world's most sought-after wedding destinations, venues and experiences — bringing couples, planners and destinations together.</p>
                        <div class="w-[48px] h-[48px] absolute bottom-[34px] left-[34px]"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="12" width="28" height="24" rx="6" stroke="white" stroke-width="2"></rect>
                                <rect x="17" y="20" width="4" height="5" rx="1.5" fill="white"></rect>
                                <rect x="27" y="20" width="4" height="5" rx="1.5" fill="white"></rect>
                                <path d="M19 29c1.5 2 9.5 2 11 0" stroke="white" stroke-width="1.8" stroke-linecap="round" fill="none"></path>
                                <line x1="24" y1="12" x2="24" y2="6" stroke="white" stroke-width="2" stroke-linecap="round"></line>
                                <circle cx="24" cy="5" r="2.5" fill="white"></circle>
                                <path d="M37 32l1.5 3.5L42 37l-3.5 1.5L37 42l-1.5-3.5L32 37l3.5-1.5L37 32z" fill="white"></path>
                            </svg></div>
                    </div>
                    
                    <div style="background:linear-gradient(135deg, #1B06C0 0%, #2208EB 50%, #2A15F5 100%)" class="lg:w-[23%] w-full min-h-[340px] relative flex flex-col items-start p-[34px] pb-[90px] max-[1282px]:p-[30px] max-[1282px]:pb-[90px] box-border innovation-card">
                        <p class="text-white font-montserratBold text-[20px] font-bold leading-[28px] mb-[10px] max-w-[180px]">Luxury &amp; Experiences</p>
                        <p class="text-white font-montserratRegular text-[13px] leading-[22px] mb-[16px] opacity-80">From hospitality and décor to fashion, jewellery and curated celebrations — discover the brands shaping extraordinary wedding experiences.</p>
                        <div class="w-[48px] h-[48px] absolute bottom-[34px] left-[34px]"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="28" height="28" rx="4" stroke="white" stroke-width="1.8"></rect>
                                <circle cx="24" cy="24" r="8" stroke="white" stroke-width="1.8"></circle>
                                <rect x="20" y="20" width="8" height="8" rx="1.5" stroke="white" stroke-width="1.6"></rect>
                                <circle cx="24" cy="24" r="2" fill="white"></circle>
                                <line x1="24" y1="10" x2="24" y2="4" stroke="white" stroke-width="1.8" stroke-linecap="round"></line>
                                <circle cx="24" cy="3" r="2.5" fill="white"></circle>
                                <line x1="38" y1="24" x2="44" y2="24" stroke="white" stroke-width="1.8" stroke-linecap="round"></line>
                                <circle cx="45" cy="24" r="2.5" fill="white"></circle>
                                <line x1="24" y1="38" x2="24" y2="44" stroke="white" stroke-width="1.8" stroke-linecap="round"></line>
                                <circle cx="24" cy="45" r="2.5" fill="white"></circle>
                                <line x1="10" y1="24" x2="4" y2="24" stroke="white" stroke-width="1.8" stroke-linecap="round"></line>
                                <circle cx="3" cy="24" r="2.5" fill="white"></circle>
                            </svg></div>
                    </div>
                    <div style="background:linear-gradient(135deg, #1B06C0 0%, #2208EB 50%, #2A15F5 100%)" class="lg:w-[23%] w-full min-h-[340px] relative flex flex-col items-start p-[34px] pb-[90px] max-[1282px]:p-[30px] max-[1282px]:pb-[90px] box-border inclusion-card">
                        <p class="text-white font-montserratBold text-[20px] font-bold leading-[28px] mb-[10px] max-w-[180px]">Global Wedding Economy</p>
                        <p class="text-white font-montserratRegular text-[13px] leading-[22px] mb-[16px] opacity-80">Connecting wedding professionals, tourism boards, hospitality brands and global buyers to unlock new partnerships and business opportunities.</p>
                        <div class="w-[48px] h-[48px] absolute bottom-[34px] left-[34px]"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="5" y="3" width="38" height="26" rx="3" stroke="white" stroke-width="2.2"></rect>
                                <line x1="9" y1="9" x2="18" y2="9" stroke="white" stroke-width="1.5" stroke-linecap="round"></line>
                                <line x1="9" y1="15" x2="22" y2="15" stroke="white" stroke-width="1.5" stroke-linecap="round"></line>
                                <line x1="9" y1="21" x2="22" y2="21" stroke="white" stroke-width="1.5" stroke-linecap="round"></line>
                                <circle cx="24" cy="21" r="2" stroke="white" stroke-width="1.3"></circle>
                                <line x1="26" y1="21" x2="35" y2="21" stroke="white" stroke-width="1.5" stroke-linecap="round"></line>
                                <circle cx="37" cy="21" r="1.5" fill="white"></circle>
                                <path d="M20 29l-2 6h12l-2-6" stroke="white" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" fill="none"></path>
                                <line x1="15" y1="35" x2="33" y2="35" stroke="white" stroke-width="2.2" stroke-linecap="round"></line>
                                <line x1="15" y1="35" x2="13" y2="38" stroke="white" stroke-width="1.8" stroke-linecap="round"></line>
                                <line x1="33" y1="35" x2="35" y2="38" stroke="white" stroke-width="1.8" stroke-linecap="round"></line>
                            </svg></div>
                    </div>
                </div>
            </section>
                        
        @endif
        
</main>
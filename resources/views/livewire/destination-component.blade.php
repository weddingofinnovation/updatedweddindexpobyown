<main>
        @php 
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
        
        
        @if($board == 'destination-showcase-presentations')
            <section class="max-w-7xl mx-auto px-4 py-12">
        
              <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        
                <!-- Main Featured -->
                <div class="lg:col-span-2">
        
                    <span class="text-sm font-bold uppercase tracking-wider text-red-600">
                        International Trade
                    </span>
        
                    <h1 class="mt-3 text-5xl font-black leading-tight">
                        How destination weddings can strengthen India's exports, hospitality industry, and international business partnerships?
                    </h1>
        
                    <p class="mt-6 text-lg text-gray-600 leading-5">
                        Destination weddings are no longer just celebrations—they are a powerful driver of international trade, tourism, hospitality, and exports. Every international wedding hosted in India generates demand for luxury hotels, wedding décor, bridal fashion, jewellery, handcrafted gifts, catering, transportation, entertainment, photography, floral design, and event management services....
                    </p>
        
                    <!--<a href="#"-->
                    <!--    class="inline-flex items-center mt-8 mb-8 font-bold text-red-600 hover:underline">-->
                    <!--    Read Full Article →-->
                    <!--</a>-->
        
                    <div class="border-t my-12"></div>
        
                    <h2 class="text-3xl font-black mb-8">
                        Explore More Destination
                    </h2>
        
                    <div class="grid md:grid-cols-3 gap-8">
        
                        <article class="border-l-4 border-red-600 pl-5">
        
                            <span class="text-xs uppercase text-gray-500 font-semibold">
                                Royal Weddings
                            </span>
        
                            <h3 class="mt-2 text-xl font-bold leading-7 hover:text-red-600">
                                Rajasthan – Where Royal Weddings Become Timeless Celebrations
                            </h3>
        
                        </article>
        
                        <article class="border-l-4 border-red-600 pl-5">
        
                            <span class="text-xs uppercase text-gray-500 font-semibold">
                                Beach Weddings
                            </span>
        
                            <h3 class="mt-2 text-xl font-bold leading-7 hover:text-red-600">
                                Goa – India's Premier Beach Wedding Destination
                                
                            </h3>
        
                        </article>
        
                        <article class="border-l-4 border-red-600 pl-5">
        
                            <span class="text-xs uppercase text-gray-500 font-semibold">
                                With Nature Weddings
                            </span>
        
                            <h3 class="mt-2 text-xl font-bold leading-7 hover:text-red-600">
                                Kerala – Elegant Weddings Amidst Nature and Serenity
                            </h3>
        
                        </article>
        
                    </div>
                    
                        
        
                </div>
        
                <!-- Sidebar -->
        
                <aside class="space-y-10">
        
                    <article class="pb-8">
        
                        <span class="text-xs uppercase text-red-600 font-bold">
                            Featured
                        </span>
        
                        <h3 class="mt-3 text-2xl font-bold leading-8 hover:text-red-600">
                            What is Destination Showcase Presentations program?
                        </h3>
        
                        <p class="mt-3 text-gray-600">
                            A Destination Showcase Presentations program is an excellent way to attract tourism boards, luxury hotels, wedding planners, and international buyers. Instead of simple presentations, organize them as 30–45 minute destination showcases where each destination highlights venues, culture, cuisine, local suppliers, and wedding experiences.
                        </p>
        
                    </article>
        
                </aside>
        
              </div>
        
            </section>
            <section class="max-w-7xl mx-auto px-4 py-12">
                <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
                        @foreach($states as $state)
                            <article class="group">
                    
                                <a href="{{ route('destination.intro', ['board' => 'destination-weddings','location' => Str::slug($state['name']),'title' => Str::slug('Destination Wedding in '.$state['name'])]) }}" class="block">
                        
                                    <div class="relative overflow-hidden rounded-xl">
                        
                                        <img src="{{ $state['image'] }}"
                                             alt="{{ $state['name'] }}"
                                             class="w-full h-[330px] object-cover duration-500 group-hover:scale-110">
                        
                                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        
                                        <div class="absolute bottom-0 left-0 right-0 p-6">
                                            <h3 class="text-white text-2xl font-bold">
                                                {{ $state['name'] }}
                                            </h3>
                                            <p class="text-white/80 text-sm mt-2">
                                                Destination Wedding in {{ $state['name'] }}
                                            </p>
                                        </div>
                        
                                    </div>
                        
                                </a>
                        
                            </article>
                        @endforeach
                    </div>
            </section>
        @elseif($board == 'become-a-tourism-partner')
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
            <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-xl border-b border-gray-200">
                <div class="max-w-7xl mx-auto px-6">
            
                    <div class="flex items-center justify-between h-20">
            
                        <a href="/" class="flex items-center gap-3">
            
                            <img src="/images/logo.png"
                                 class="h-12"
                                 alt="Wedding India Expo">
            
                            <div>
                                <h3 class="font-black text-lg">
                                    Wedding India Expo
                                </h3>
            
                                <p class="text-xs text-gray-500">
                                    Women in Wedding Business Forum
                                </p>
                            </div>
            
                        </a>
            
                        <div class="hidden lg:flex items-center gap-10">
            
                            <a href="#about" class="hover:text-pink-600 font-medium">
                                About
                            </a>
            
                            <a href="#agenda" class="hover:text-pink-600 font-medium">
                                Agenda
                            </a>
            
                            <a href="#speakers" class="hover:text-pink-600 font-medium">
                                Speakers
                            </a>
            
                            <a href="#buyers" class="hover:text-pink-600 font-medium">
                                Hosted Buyers
                            </a>
            
                            <a href="#awards" class="hover:text-pink-600 font-medium">
                                Awards
                            </a>
            
                            <a href="#contact" class="hover:text-pink-600 font-medium">
                                Contact
                            </a>
            
                        </div>
            
                        <a href="#register"
                           class="rounded-full bg-pink-600 px-6 py-3 text-white font-semibold hover:bg-pink-700 transition">
                            Register
                        </a>
            
                    </div>
            
                </div>
            </nav>
            <section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-950 via-black to-pink-950">
            
                <!-- Decorative Blurs -->
                <div class="absolute -left-32 top-0 h-96 w-96 rounded-full bg-pink-500/20 blur-3xl"></div>
                <div class="absolute right-0 bottom-0 h-[500px] w-[500px] rounded-full bg-purple-500/20 blur-3xl"></div>
            
                <div class="relative max-w-7xl mx-auto px-6 pt-40 pb-24">
            
                    <div class="grid lg:grid-cols-2 gap-20 items-center">
            
                        <div>
            
                            <span class="inline-flex rounded-full border border-pink-400/30 bg-pink-500/10 px-5 py-2 text-pink-300 font-semibold">
                                5–7 March 2027 • Yashobhoomi, New Delhi
                            </span>
            
                            <h1 class="mt-8 text-6xl lg:text-8xl font-black leading-[0.9] text-white">
            
                                Women in
                                <span class="text-pink-500">
                                    Wedding
                                </span>
            
                                Business Forum
            
                            </h1>
            
                            <p class="mt-8 text-xl leading-9 text-gray-300">
            
                                Join India's most influential women entrepreneurs,
                                destination wedding planners, luxury hotels,
                                tourism boards, designers and hospitality leaders
                                for three days of learning, networking and business growth.
            
                            </p>
            
                            <div class="mt-12 flex flex-wrap gap-5">
            
                                <a href="#register"
                                   class="rounded-xl bg-pink-600 px-8 py-4 font-semibold text-white hover:bg-pink-700 transition">
                                    Register Now
                                </a>
            
                                <a href="#agenda"
                                   class="rounded-xl border border-white/20 px-8 py-4 text-white hover:bg-white/10 transition">
                                    Explore Agenda
                                </a>
            
                            </div>
            
                            <div class="mt-16 grid grid-cols-2 lg:grid-cols-4 gap-6">
            
                                <div>
                                    <h2 class="text-5xl font-black text-white">
                                        500+
                                    </h2>
            
                                    <p class="mt-2 text-gray-400">
                                        Women Leaders
                                    </p>
                                </div>
            
                                <div>
                                    <h2 class="text-5xl font-black text-white">
                                        50+
                                    </h2>
            
                                    <p class="mt-2 text-gray-400">
                                        Speakers
                                    </p>
                                </div>
            
                                <div>
                                    <h2 class="text-5xl font-black text-white">
                                        1000+
                                    </h2>
            
                                    <p class="mt-2 text-gray-400">
                                        B2B Meetings
                                    </p>
                                </div>
            
                                <div>
                                    <h2 class="text-5xl font-black text-white">
                                        30+
                                    </h2>
            
                                    <p class="mt-2 text-gray-400">
                                        Countries
                                    </p>
                                </div>
            
                            </div>
            
                        </div>
            
                        <!-- Right Side -->
                        <div class="relative">
            
                            <div class="rounded-[40px] border border-white/10 bg-white/5 p-10 backdrop-blur-xl shadow-2xl">
            
                                <div class="space-y-8">
            
                                    <div class="flex justify-between items-center border-b border-white/10 pb-6">
                                        <span class="text-gray-400">
                                            Theme
                                        </span>
            
                                        <span class="text-white font-semibold">
                                            Empower • Connect • Lead
                                        </span>
                                    </div>
            
                                    <div class="flex justify-between items-center border-b border-white/10 pb-6">
                                        <span class="text-gray-400">
                                            Venue
                                        </span>
            
                                        <span class="text-white font-semibold">
                                            Yashobhoomi (IICC)
                                        </span>
                                    </div>
            
                                    <div class="flex justify-between items-center border-b border-white/10 pb-6">
                                        <span class="text-gray-400">
                                            Date
                                        </span>
            
                                        <span class="text-white font-semibold">
                                            5–7 March 2027
                                        </span>
                                    </div>
            
                                    <div class="flex justify-between items-center border-b border-white/10 pb-6">
                                        <span class="text-gray-400">
                                            Networking
                                        </span>
            
                                        <span class="text-white font-semibold">
                                            1000+ Meetings
                                        </span>
                                    </div>
            
                                    <div class="pt-6">
            
                                        <a href="#register"
                                           class="block rounded-xl bg-white py-4 text-center font-bold text-pink-600 hover:bg-pink-50 transition">
                                            Reserve Your Seat
                                        </a>
            
                                    </div>
            
                                </div>
            
                            </div>
            
                        </div>
            
                    </div>
            
                </div>
            
            </section>
        @endif
        
</main>
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

<main>
      <section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900" x-data="{ activeFilter: 'All' }">

                <!-- Section Header -->
                <div class="mb-8">
                    <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-gray-900 mb-2">
                        Our Wedding India Expo Food & Drink community
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base">
                        Get to know the Wedding planners, caterers, veunes and professionals of international food and drink that you will find at Wedding India Expo.
                    </p>
                </div>

                <!-- Filter Pills Bar -->
                <div class="flex flex-wrap items-center gap-2 mb-10 bg-gray-50 p-2 rounded-full border border-gray-100 max-w-fit">
                    <template x-for="category in ['All', 'Bar', 'Mediterranean', 'Burgers', 'Italian', 'Asian', 'Café', 'Grill', 'Basque']">
                        <button @click="activeFilter = category"
                            :class="activeFilter === category ? 'bg-black text-white shadow-sm' : 'bg-transparent text-gray-700 hover:bg-gray-200'"
                            class="px-5 py-2 rounded-full text-sm font-semibold transition-colors focus:outline-none"
                            x-text="category">
                        </button>
                    </template>
                </div>

                <!-- 9-Card Showcase Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    @foreach($states as $state)
                        <!-- Card 1: Mahou -->
                        <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
                            x-show="activeFilter === 'All' || activeFilter === 'Bar'">
                            <img src="{{ $state['image'] }}"
                                alt="Mahou"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                            <span class="absolute top-4 right-4 bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Bar</span>
                            <div class="absolute inset-x-0 bottom-6 text-center">
                                <h3 class="text-3xl font-extrabold tracking-wide text-white uppercase drop-shadow-md">{{ $state['name'] }}</h3>
                                <div class="text-yellow-400 text-sm tracking-widest mt-1">★★★★★</div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Card 2: MásQmenos -->
                    <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
                        x-show="activeFilter === 'All' || activeFilter === 'Bar' || activeFilter === 'Mediterranean'">
                        <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=800&q=85"
                            alt="MásQmenos"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute top-4 right-4 flex items-center space-x-1.5">
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Bar</span>
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Mediterranean</span>
                        </div>
                        <div class="absolute inset-x-0 bottom-6 text-center">
                            <h3 class="text-2xl font-extrabold tracking-widest text-white uppercase drop-shadow-md">MÁS<span class="text-red-500">Q</span>MENOS</h3>
                            <span class="text-[10px] tracking-widest text-white/90 uppercase block mt-1">• JAMÓN Y MÁS •</span>
                        </div>
                    </div>

                    <!-- Card 3: Pepito Grillo -->
                    <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
                        x-show="activeFilter === 'All' || activeFilter === 'Burgers'">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=800&q=85"
                            alt="Pepito Grillo"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <span class="absolute top-4 right-4 bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Burgers</span>
                        <div class="absolute inset-x-0 bottom-6 text-center">
                            <div class="inline-block border-2 border-white px-4 py-2">
                                <h3 class="text-lg font-extrabold tracking-widest text-white uppercase">PEPITO GRILLO</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Pasta Fresca (Italian) -->
                    <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
                        x-show="activeFilter === 'All' || activeFilter === 'Italian'">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=800&q=85"
                            alt="Pasta Fresca"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <span class="absolute top-4 right-4 bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Italian</span>
                        <div class="absolute inset-x-0 bottom-6 text-center">
                            <h3 class="text-2xl font-extrabold tracking-widest text-white uppercase drop-shadow-md">PASTA FRESCA</h3>
                        </div>
                    </div>

                    <!-- Card 5: Sushi y Nikkei -->
                    <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
                        x-show="activeFilter === 'All' || activeFilter === 'Bar' || activeFilter === 'Asian'">
                        <img src="https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=800&q=85"
                            alt="Sushi y Nikkei"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute top-4 right-4 flex items-center space-x-1.5">
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Bar</span>
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Asian</span>
                        </div>
                        <div class="absolute inset-x-0 bottom-6 text-center">
                            <h3 class="text-2xl font-extrabold tracking-widest text-white uppercase drop-shadow-md">SUSHI Y NIKKEI</h3>
                            <span class="text-xs tracking-wider text-white/90 uppercase block mt-1">• JAPÓN FUSIÓN •</span>
                        </div>
                    </div>

                    <!-- Card 6: Arroces de Autor -->
                    <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
                        x-show="activeFilter === 'All' || activeFilter === 'Bar' || activeFilter === 'Mediterranean'">
                        <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=85"
                            alt="Arroces de Autor"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute top-4 right-4 flex items-center space-x-1.5">
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Bar</span>
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Mediterranean</span>
                        </div>
                        <div class="absolute inset-x-0 bottom-6 text-center">
                            <h3 class="text-2xl font-extrabold tracking-widest text-white uppercase drop-shadow-md">ARROCES DE AUTOR</h3>
                            <span class="text-xs tracking-wider text-white/90 uppercase block mt-1">• PAELLA VALENCIANA •</span>
                        </div>
                    </div>

                    <!-- Card 7: Brunch & Deli -->
                    <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
                        x-show="activeFilter === 'All' || activeFilter === 'Café'">
                        <img src="https://images.unsplash.com/photo-1533089860892-a7c6f0a88666?auto=format&fit=crop&w=800&q=85"
                            alt="Brunch & Deli"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <span class="absolute top-4 right-4 bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Café</span>
                        <div class="absolute inset-x-0 bottom-6 text-center">
                            <h3 class="text-2xl font-extrabold tracking-widest text-white uppercase drop-shadow-md">BRUNCH & DELI</h3>
                            <span class="text-xs tracking-wider text-white/90 uppercase block mt-1">• DESAYUNOS Y MÁS •</span>
                        </div>
                    </div>

                    <!-- Card 8: Asador Vasco -->
                    <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
                        x-show="activeFilter === 'All' || activeFilter === 'Bar' || activeFilter === 'Grill'">
                        <img src="https://images.unsplash.com/photo-1598103442097-8b74394b95c6?auto=format&fit=crop&w=800&q=85"
                            alt="Asador Vasco"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute top-4 right-4 flex items-center space-x-1.5">
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Bar</span>
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Grill</span>
                        </div>
                        <div class="absolute inset-x-0 bottom-6 text-center">
                            <h3 class="text-2xl font-extrabold tracking-widest text-white uppercase drop-shadow-md">ASADOR VASCO</h3>
                            <span class="text-xs tracking-wider text-white/90 uppercase block mt-1">• CARNE A LA BRASA •</span>
                        </div>
                    </div>

                    <!-- Card 9: Pintxo Pote -->
                    <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
                        x-show="activeFilter === 'All' || activeFilter === 'Bar' || activeFilter === 'Basque'">
                        <img src="https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=800&q=85"
                            alt="Pintxo Pote"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute top-4 right-4 flex items-center space-x-1.5">
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Bar</span>
                            <span class="bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Basque</span>
                        </div>
                        <div class="absolute inset-x-0 bottom-6 text-center">
                            <h3 class="text-2xl font-extrabold tracking-widest text-white uppercase drop-shadow-md">PINTXO POTE</h3>
                            <span class="text-xs tracking-wider text-white/90 uppercase block mt-1">• TAPAS VARIADAS •</span>
                        </div>
                    </div>

                </div>

            </section>

            <!-- Include Alpine.js for interactive filter pills -->
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


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
        
                        <span class="text-xs uppercase text-red-600 font-bold">Featured</span>
        
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
</main>
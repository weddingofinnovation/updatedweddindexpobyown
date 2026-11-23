<main>    
    
    <div>
        @if($board == 'about')
           <x-whatis />
        @elseif($board == 'exhibitor_list')
            <div class="container">
               <div class="border-b py-4">
                 <div class="flex flex-col md:flex-row items-center">
                
                        <!-- Left -->
                        <div class="w-full md:w-1/3">
                            <a href="#" class="font-semibold text-lg hover:text-indigo-600">
                                2540
                            </a>
                            <p class="text-sm text-gray-500">India</p>
                        </div>
                
                        <!-- Center -->
                        <div class="w-full md:w-1/3 flex justify-center py-4 md:py-0">
                            <img src="" alt="Logo" class="h-16 object-contain">
                        </div>
                
                        <!-- Right -->
                        <div class="w-full md:w-1/3 text-left md:text-right">
                            <p class="text-sm text-gray-600">📍 Location</p>
                            <a href="#" class="text-sm text-indigo-600 hover:underline">
                                ⭐ Favorites
                            </a>
                        </div>
                
                    </div>
                </div>
                <div class="border-b py-4">
                 <div class="flex flex-col md:flex-row items-center">
                
                        <!-- Left -->
                        <div class="w-full md:w-1/3">
                            <a href="#" class="font-semibold text-lg hover:text-indigo-600">
                                2540
                            </a>
                            <p class="text-sm text-gray-500">India</p>
                        </div>
                
                        <!-- Center -->
                        <div class="w-full md:w-1/3 flex justify-center py-4 md:py-0">
                            <img src="" alt="Logo" class="h-16 object-contain">
                        </div>
                
                        <!-- Right -->
                        <div class="w-full md:w-1/3 text-left md:text-right">
                            <p class="text-sm text-gray-600">📍 Location</p>
                            <a href="#" class="text-sm text-indigo-600 hover:underline">
                                ⭐ Favorites
                            </a>
                        </div>
                
                    </div>
                </div>
            </div>
        @elseif($board == 'areas-sectors-of-interest')
            <section class="bg-[#f5f5f5] py-20">
                <div class="max-w-[1280px] mx-auto px-4">
    
                    <!-- Heading -->
                    <div class="text-center mb-10">
    
                        <h2 class="text-[18px] md:text-[58px]
                            leading-[1.1] font-black text-black mb-6">
    
                            India's Biggest Showcase of Destination Weddings, Luxury Celebrations & Wedding Innovations
    
                        </h2>
    
                        <p class="max-w-[1180px] mx-auto
                            text-[18px] leading-[1.7] text-gray-700">
    
                        <strong>Wedding India Expo 2027</strong> brings together the complete wedding ecosystem under one roof, creating India's most comprehensive platform for destination weddings, luxury hospitality, bridal fashion, wedding planning, tourism, décor, catering, entertainment, photography, gifting, honeymoon travel, and premium wedding services. From renowned wedding planners and luxury hotels to international tourism boards, bridal designers, jewellery brands, caterers, decorators, and innovative wedding solution providers, the expo showcases everything needed to create unforgettable celebrations. Visitors can discover the latest wedding trends, explore destination wedding venues, connect directly with industry experts, compare products and services, build valuable business partnerships, and experience the future of India's rapidly growing wedding industry—all under one roof at <strong>Yashobhoomi (IICC), New Delhi</strong>.
                        </p>
    
                    </div>
    
                    <!-- Main Grid -->
                    <div class="grid lg:grid-cols-[320px_1fr] gap-12 items-center">
    
                        <!-- Left Title -->
                        <div>
    
                            <h3 class="text-[42px] md:text-[56px]
                                font-black text-red-600 leading-[1.1]">
    
                                Segments
    
                            </h3>
    
                        </div>
    
                        <x-areaa />
                      
    
                    </div>
    
                </div>
            </section>
        @elseif($board == 'sponsors')
            <section class="py-16">
                    <h2 class="text-[40px] leading-[1.1] font-black text-black mb-8 text-center">Sponsor</h2>
                    
                    <!-- Description -->
                    <p class="text-[24px] text-gray-700 leading-relaxed max-w-[950px] mx-auto mb-6">
                        Wedding India Expo (WIE) is proud to recognise the support of our official sponsors, whose partnership plays a vital role in the continued success of the event. Their continued support enables us to deliver an impactful platform that connects, inspires, and advances the food and hospitality industry.
            
                    </p>
        

                    <div class="container">
                            <!-- Right Icons -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-10">
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#0077c8]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/beverage.png"
                                            class="w-14"
                                            alt="Beverage">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#000]">
        
                                        National International Destination
        
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#2f005f]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/convenience-food.png"
                                            class="w-14"
                                            alt="Convenience Food">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#2f005f]">
        
                                        Luxury Resorts & Hotels 
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#f39c12]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/dairy.png"
                                            class="w-14"
                                            alt="Dairy">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#f39c12]">
        
                                        Wedding Cuisine & Catering, Sweets
        
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#6c9e3f]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/fine-food.png"
                                            class="w-14"
                                            alt="Fine Food">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#6c9e3f]">
        
                                        Wedding Ethnic & Honeymoon
        
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#8bc53f]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/fresh-produce.png"
                                            class="w-14"
                                            alt="Fresh Produce">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#8bc53f]">
        
                                        Wedding Gifting & Service
        
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#007a33]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/halal.png"
                                            class="w-14"
                                            alt="Halal">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#007a33]">
        
                                        Wedding Decor & Hospitality
        
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#0077c8]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/beverage.png"
                                            class="w-14"
                                            alt="Beverage">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#0077c8]">
        
                                        National International Destination
        
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#2f005f]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/convenience-food.png"
                                            class="w-14"
                                            alt="Convenience Food">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#2f005f]">
        
                                        Luxury Resorts & Hotels 
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#f39c12]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/dairy.png"
                                            class="w-14"
                                            alt="Dairy">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#f39c12]">
        
                                        Wedding Cuisine & Catering, Sweets
        
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#6c9e3f]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/fine-food.png"
                                            class="w-14"
                                            alt="Fine Food">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#6c9e3f]">
        
                                        Wedding Ethnic & Honeymoon
        
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#8bc53f]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/fresh-produce.png"
                                            class="w-14"
                                            alt="Fresh Produce">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#8bc53f]">
        
                                        Wedding Gifting & Service
        
                                    </h4>
        
                                </div>
        
                                <!-- Item -->
                                <div class="text-center group">
        
                                    <div class="w-[120px] h-[120px] mx-auto
                                        bg-[#007a33]
                                        clip-hexagon
                                        flex items-center justify-center
                                        transition-transform duration-300
                                        group-hover:scale-105">
        
                                        <img src="/images/icons/halal.png"
                                            class="w-14"
                                            alt="Halal">
        
                                    </div>
        
                                    <h4 class="mt-4 text-[18px]
                                        font-black uppercase text-[#007a33]">
        
                                        Wedding Decor & Hospitality
        
                                    </h4>
        
                                </div>
        
                            </div>
                    </div>
            </section>
        @elseif($board == 'supporting_organisation')
            <section class="py-16">
            
                <!-- Description -->
                <p class="text-[24px] text-gray-700 leading-relaxed max-w-[950px] mx-auto mb-6">
                    Wedding India Expo (WIE) is proud to be supported by a network of esteemed industry associations and organisations. Their collaboration helps to strengthen industry ties and support the growth and development of the regional food and hospitality sectors. 
                </p>
    
                <h2 class="text-[40px] leading-[1.1] font-black text-black mb-8 text-center">
                    Supporting Organisations
                </h2>
    
            </section>
        @elseif($board == 'media_knowledge_partners')
            <section class="py-16">
            
                <!-- Description -->
                <p class="text-[24px] text-gray-700 leading-relaxed max-w-[950px] mx-auto mb-6">
                    Wedding India Expo (WIE) is proud to collaborate with a valued network of media and knowledge partners. Their support helps amplify industry conversations, strengthen the depth of thought leadership, and extend the reach of Wedding India Expo (WIE) across the global food and hospitality community. 
                </p>
    
                <h2 class="text-[40px] leading-[1.1] font-black text-black mb-8 text-center">
                    Media Partners
                </h2>
    
            </section>
        @elseif($board == 'faq')
           @livewire('faq-component')
        @elseif($board == 'contact')
           <x-contact />
        @else
        @endif
    </div>
    
</main>
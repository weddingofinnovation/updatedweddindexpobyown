<section class="relative w-full bg-[#002f5f] font-sans text-white overflow-hidden">
    
    <!-- Outer Grid / Flex Container for Split Screen -->
    <div class="relative flex flex-col lg:flex-row items-stretch min-h-[480px]">
        
        <!-- Left Side: Dark Blue Block with Text & CTA -->
        <div class="relative lg:w-7/12 bg-[#002f5f] text-white p-8 sm:p-12 lg:p-20 z-10 flex flex-col justify-center lg:clip-path-slant shadow-lg">
            <div class="max-w-xl space-y-6">
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                    Advertise at Wedding India Expo
                </h2>

                <p class="text-gray-200 text-base sm:text-lg leading-relaxed">
                    Reach thousands of visitors and boost your brand presence with advertising solutions in strategic physical and digital spaces across Yashobhoomi (IICC).
                </p>

                <div class="pt-2">
                    <a href="#contact" 
                       class="inline-block bg-[#a8d3ff] hover:bg-[#91c5ff] text-gray-950 font-semibold py-3 px-8 rounded text-sm transition-colors shadow-sm">
                        Contact us
                    </a>
                </div>

            </div>
        </div>

        <!-- Right Side: Exhibition Promotional Image -->
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-7/12 h-[320px] lg:h-full">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1400&q=85" 
                 alt="Advertise at Wedding India Expo" 
                 class="w-full h-full object-cover">
        </div>

    </div>

</section>

<!-- Custom Slant Utility Style for Desktop Diagonal Cut -->
<style>
    @media (min-width: 1024px) {
        .lg\:clip-path-slant {
            clip-path: polygon(0 0, 88% 0, 100% 100%, 0 100%);
            padding-right: 18%;
        }
    }
</style>


<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900">
    
    <!-- Content Grid (Image Left, Details Right) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        
        <!-- Left Column: Venue Image (Span 6) -->
        <div class="lg:col-span-6 rounded-lg overflow-hidden shadow-sm border border-gray-100">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=85" 
                 alt="Promote your brand at Wedding India Expo" 
                 class="w-full h-[320px] sm:h-[420px] object-cover">
        </div>

        <!-- Right Column: Title, Description & Bullet Points (Span 6) -->
        <div class="lg:col-span-6 flex flex-col justify-center space-y-4">
            <!-- <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight"> -->
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 tracking-tight leading-tight">
                Promote your brand with Wedding India Expo
            </h2>

            <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                Wedding India Expo is the leading trade event platform in India for the wedding industry and business community. Thanks to our curated audience, Wedding India Expo has become a preferred partner to make an impact on thousands of qualified B2B buyers, hoteliers, and wedding planners.
            </p>

            <!-- Bullet Points List -->
            <ul class="space-y-2.5 text-sm sm:text-base text-gray-800 pt-2">
                <li class="flex items-center gap-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-900 shrink-0"></span>
                    <span>Impact a highly qualified target.</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-900 shrink-0"></span>
                    <span>Generate traffic to your stand.</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-900 shrink-0"></span>
                    <span>Promote your products.</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-900 shrink-0"></span>
                    <span>Drive your brand’s image.</span>
                </li>
            </ul>

        </div>

    </div>

</section>


<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900">
    
    <!-- 2-Card Grid with items-stretch for uniform card height -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch max-w-5xl mx-auto">
        
        <!-- Card 1: Advertising in our spaces -->
        <div class="rounded-lg overflow-hidden shadow-sm border border-gray-100 flex flex-col h-full group cursor-pointer">
            
            <!-- Top Content Container (Image + Text Box) -->
            <div class="flex-1 flex flex-col">
                <!-- Card Image -->
                <div class="h-64 overflow-hidden shrink-0">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1000&q=85" 
                         alt="Advertising in our spaces" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <!-- Dark Blue Content Box -->
                <div class="bg-[#002f5f] text-white p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-bold mb-3 tracking-tight">Advertising in our spaces</h3>
                    <p class="text-sm font-semibold text-white/90 mb-3">
                        Stand out at the event and attract visitors to your stand
                    </p>
                    <p class="text-gray-200 text-sm leading-relaxed">
                        Attract your target audience and boost your visibility with high-impact advertising at the exhibition centre.
                    </p>
                </div>
            </div>

            <!-- Action Button Fixed at Bottom -->
            <div class="bg-[#002f5f] px-8 pb-8 pt-0">
                <a href="#more-info" 
                   class="block text-center bg-white hover:bg-gray-100 text-gray-950 font-semibold py-3 px-6 rounded text-sm transition-colors shadow-sm">
                    More information
                </a>
            </div>
        </div>

        <!-- Card 2: Digital advertising -->
        <div class="rounded-lg overflow-hidden shadow-sm border border-gray-100 flex flex-col h-full group cursor-pointer">
            
            <!-- Top Content Container -->
            <div class="flex-1 flex flex-col">
                <!-- Card Image -->
                <div class="h-64 overflow-hidden shrink-0">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1000&q=85" 
                         alt="Digital advertising" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <!-- Dark Blue Content Box -->
                <div class="bg-[#002f5f] text-white p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-bold mb-3 tracking-tight">Digital advertising</h3>
                    <p class="text-sm font-semibold text-white/90 mb-3">
                        Reach your audience before and after the event
                    </p>
                    <p class="text-gray-200 text-sm leading-relaxed">
                        Reach millions of users as they prepare for their visit and maintain your brand's visibility after the trade fair with digital formats on the website, app and online channels.
                    </p>
                </div>
            </div>

            <!-- Action Button Fixed at Bottom -->
            <div class="bg-[#002f5f] px-8 pb-8 pt-0">
                <a href="#digital-info" 
                   class="block text-center bg-white hover:bg-gray-100 text-gray-950 font-semibold py-3 px-6 rounded text-sm transition-colors shadow-sm">
                    More information
                </a>
            </div>
        </div>

    </div>

</section>

<section class="w-full bg-white font-sans py-8" x-data="{ activeIndex: 0, slides: [
    { type: 'image', url: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1600&q=85', title: 'Wedding India Expo Main Pavilion' },
    { type: 'image', url: 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1600&q=85', title: 'Yashobhoomi Entrance & Welcome Display' },
    { type: 'image', url: 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1600&q=85', title: '100 Cr Shaadi Food Experience' },
    { type: 'image', url: 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1600&q=85', title: 'Gourmet Tasting & Brand Showcases' },
    { type: 'image', url: 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=1600&q=85', title: 'Exhibitor Stands & Networking' }
]}">

    <!-- Top Navigation / Brand Header Bar -->
    <div class="max-w-7xl mx-auto px-4 mb-4 flex items-center justify-between">
        <div class="flex items-center space-x-3">
            <div class="bg-[#002f5f] text-white px-3 py-1.5 rounded font-extrabold text-xs tracking-wider uppercase">
                Wedding India Expo
            </div>
            <span class="text-xs font-bold text-gray-700 tracking-wide">
                05 - 07 MAR 2027
            </span>
        </div>
        <div class="flex items-center space-x-2 bg-[#002f5f] text-white px-4 py-2 rounded text-xs font-bold uppercase">
            <span>Yashobhoomi (IICC)</span>
        </div>
    </div>

    <!-- Main Carousel Display Container -->
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative w-full h-[400px] sm:h-[500px] lg:h-[550px] bg-gray-900 rounded-lg overflow-hidden shadow-lg">
            
            <!-- Active Slide Image -->
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeIndex === index" 
                     class="absolute inset-0 transition-opacity duration-500 ease-in-out flex items-center justify-center">
                    <img :src="slide.url" :alt="slide.title" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <span class="bg-[#002f5f] text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-1 inline-block">
                            Gallery Showcase
                        </span>
                        <h3 class="text-xl sm:text-2xl font-extrabold" x-text="slide.title"></h3>
                    </div>
                </div>
            </template>

            <!-- Previous Arrow Button -->
            <button @click="activeIndex = (activeIndex === 0) ? slides.length - 1 : activeIndex - 1" 
                    class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/90 hover:bg-white text-gray-900 flex items-center justify-center shadow-md transition-colors focus:outline-none z-20"
                    aria-label="Previous slide">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <!-- Next Arrow Button -->
            <button @click="activeIndex = (activeIndex === slides.length - 1) ? 0 : activeIndex + 1" 
                    class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/90 hover:bg-white text-gray-900 flex items-center justify-center shadow-md transition-colors focus:outline-none z-20"
                    aria-label="Next slide">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

        </div>

        <!-- Thumbnail Navigation Row -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mt-4">
            <template x-for="(slide, index) in slides" :key="index">
                <div @click="activeIndex = index" 
                     :class="activeIndex === index ? 'ring-4 ring-[#002f5f] opacity-100' : 'opacity-70 hover:opacity-100'"
                     class="h-24 rounded-md overflow-hidden cursor-pointer transition-all shadow-sm border border-gray-200">
                    <img :src="slide.url" :alt="slide.title" class="w-full h-full object-cover">
                </div>
            </template>
        </div>

    </div>

</section>

<!-- Include Alpine.js if not already present in your head/footer -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
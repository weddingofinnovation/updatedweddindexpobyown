<section class="w-full font-sans">

    <!-- Hero Banner with Culinary Background Image -->
    <div class="relative w-full h-[450px] sm:h-[550px] lg:h-[600px] flex items-center overflow-hidden bg-gray-900">

        <!-- Background Image & Gradient Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1617196034796-73dfa7b1fd56?auto=format&fit=crop&w=2560&q=85"
                alt="Gastronomic experience at Wedding India Expo"
                class="w-full h-full object-cover opacity-80">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
        </div>

        <!-- Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full flex flex-col justify-center h-full">
            <div class="max-w-2xl space-y-4">

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
                    Welcome to a new Gastronomic experience at Wedding India Expo!
                </h2>

                <p class="text-gray-200 text-base sm:text-lg leading-relaxed">
                    A new multicultural, social, and culinary experience that can be enjoyed at any time of the day.
                </p>

            </div>

            <!-- Carousel Pause / Play Indicator Button -->
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-20">
                <button class="w-8 h-8 rounded-full bg-black/50 hover:bg-black/70 text-white flex items-center justify-center transition-colors backdrop-blur-sm focus:outline-none" aria-label="Pause slideshow">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>

    <!-- Partner Logos Bottom Bar -->
    <div class="bg-[#292152] py-8 px-6">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-center items-center gap-12 sm:gap-24 opacity-90">

            <!-- Brand Logo 1 -->
            <div class="text-white font-serif text-2xl tracking-widest font-bold italic">
                Mahou
            </div>

            <!-- Brand Logo 2 -->
            <div class="text-white font-serif text-3xl italic tracking-tighter">
                Coca-Cola
            </div>

            <!-- Brand Logo 3 -->
            <div class="text-white font-serif text-2xl tracking-widest italic font-light">
                L'OR
            </div>

        </div>
    </div>

</section>


<x-gastronomicleader />

<!-- Add custom clip-path utility if not already in your tailwind config -->
<style>
    @media (min-width: 1024px) {
        .lg\:clip-path-slant {
            clip-path: polygon(0 0, 88% 0, 100% 100%, 0 100%);
            padding-right: 15%;
        }
    }
</style>

<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900" x-data="{ activeFilter: 'All' }">

    <!-- Section Header -->
    <div class="mb-8">
        <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-gray-900 mb-2">
            Our restaurants
        </h2>
        <p class="text-gray-600 text-sm sm:text-base">
            Get to know the restaurants, cafés and food trucks of international food and drink that you will find at Wedding India Expo.
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

        <!-- Card 1: Mahou -->
        <div class="relative rounded-lg overflow-hidden shadow-sm h-80 group cursor-pointer border border-gray-100"
            x-show="activeFilter === 'All' || activeFilter === 'Bar'">
            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=85"
                alt="Mahou"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
            <span class="absolute top-4 right-4 bg-white text-gray-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">Bar</span>
            <div class="absolute inset-x-0 bottom-6 text-center">
                <h3 class="text-3xl font-extrabold tracking-wide text-white uppercase drop-shadow-md">Mahou</h3>
                <div class="text-yellow-400 text-sm tracking-widest mt-1">★★★★★</div>
            </div>
        </div>

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

<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900">

    <!-- Content Grid (Details Left, Promotional Image Right) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

        <!-- Left Column: Title & Description (Span 6) -->
        <div class="lg:col-span-6 flex flex-col justify-center space-y-4">

            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight">
                A tasting to learn and enjoy
            </h2>

            <p class="text-gray-800 text-sm sm:text-base leading-relaxed">
                <strong class="font-bold">On March 6, from 1:30 p.m. to 3:30 p.m.</strong>, we look forward to seeing you in the central grand hall of Yashobhoomi (IICC) for a unique beverage tasting experience during Wedding India Expo.
            </p>

            <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                <strong class="font-bold text-gray-900">A guided tasting</strong> to learn about its character, nuances, and production process, and discover how to integrate premium beverage pairings into your celebrations.
            </p>

            <p class="font-bold text-gray-900 text-sm sm:text-base pt-2">
                Come visit us.
            </p>

        </div>

        <!-- Right Column: Promotional Banner Image (Span 6) -->
        <div class="lg:col-span-6 rounded-lg overflow-hidden shadow-sm border border-gray-100 bg-[#EFECE6]">
            <img src="https://images.unsplash.com/photo-1535958636474-b021ee887b13?auto=format&fit=crop&w=1200&q=85"
                alt="Exclusive Tasting at Wedding India Expo"
                class="w-full h-[320px] sm:h-[400px] object-cover">
        </div>

    </div>

</section>

<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900">

    <!-- Section Header -->
    <div class="mb-10 text-center">
        <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-gray-900 mb-2">
            100 Cr Shaadi Food Experience
        </h2>
        <p class="text-gray-600 text-base max-w-2xl mx-auto">
            Book your wedding caterer by taste. Experience culinary mastery by top celebrity chefs, legendary catering brands, and luxury hospitality partners at Wedding India Expo 2027.
        </p>
    </div>

    <!-- Promotional Visual & Callout Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

        <!-- Left Column: High-End Culinary Showcase Image (Span 7) -->
        <div class="lg:col-span-7 rounded-lg overflow-hidden shadow-lg border border-gray-100 relative group">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1200&q=85"
                alt="100 Cr Shaadi Food by Top Chefs and Brands"
                class="w-full h-[350px] sm:h-[420px] object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

            <div class="absolute bottom-6 left-6 right-6 text-white">
                <span class="bg-[#0f4c81] text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2 inline-block">
                    Exclusive Pavilion
                </span>
                <h3 class="text-2xl font-extrabold text-white">Taste Before You Book</h3>
                <p class="text-gray-200 text-sm mt-1">
                    Live tasting sessions with India's elite wedding caterers and Michelin-starred culinary artists.
                </p>
            </div>
        </div>

        <!-- Right Column: Highlights & Booking Action (Span 5) -->
        <div class="lg:col-span-5 flex flex-col justify-center space-y-6 bg-gray-50 p-8 rounded-lg border border-gray-100">

            <h3 class="text-2xl font-extrabold text-gray-900 leading-snug">
                Curated by Elite Chefs & Luxury Catering Brands
            </h3>

            <ul class="space-y-3 text-sm text-gray-700">
                <li class="flex items-start gap-2">
                    <span class="text-[#0f4c81] font-bold">✓</span>
                    <span><strong>100 Cr+ Menu Showcases:</strong> Discover ultra-luxury royal spreads and global fusion counters.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-[#0f4c81] font-bold">✓</span>
                    <span><strong>Book by Taste:</strong> Sample signature dishes directly from top-tier caterers before finalizing your wedding contracts.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-[#0f4c81] font-bold">✓</span>
                    <span><strong>Live Masterclasses:</strong> Interactive cooking demonstrations by celebrity chefs and hospitality icons.</span>
                </li>
            </ul>

            <div class="pt-2">
                <a href="#register"
                    class="block text-center bg-[#0f4c81] hover:bg-[#0a365f] text-white font-semibold py-3.5 px-6 rounded-md text-sm transition-colors shadow-sm">
                    Reserve Your Tasting Pass
                </a>
            </div>

        </div>

    </div>

</section>


<!-- Hero Banner Section -->
<section class="w-full font-sans">

    <!-- Hero Banner with Culinary Background Image -->
    <div class="relative w-full h-[450px] sm:h-[550px] lg:h-[600px] flex items-center overflow-hidden bg-gray-900">

        <!-- Background Image & Gradient Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=2560&q=85"
                alt="100 Cr Shaadi Food Experience at Wedding India Expo"
                class="w-full h-full object-cover opacity-80">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
        </div>

        <!-- Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full flex flex-col justify-center h-full">
            <div class="max-w-3xl space-y-4">

                <span class="bg-[#0f4c81] text-white text-xs font-bold px-3.5 py-1.5 rounded-full uppercase tracking-wider inline-block">
                    For Wedding Planners, Hoteliers & Industry Leaders
                </span>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
                    Book Your Wedding Caterer by Taste at Wedding India Expo!
                </h2>

                <p class="text-gray-200 text-base sm:text-lg leading-relaxed">
                    Join industry peers, hoteliers, and elite wedding planners to sample, partner, and expand your business through India's ultimate 100 Cr Shaadi Food tasting experience.
                </p>

                <div class="pt-2">
                    <a href="#register" class="inline-block bg-[#0f4c81] hover:bg-[#0a365f] text-white font-semibold py-3 px-8 rounded text-sm transition-colors shadow-sm">
                        Get Industry Trade Pass
                    </a>
                </div>

            </div>
        </div>

    </div>

    <!-- Partner Logos Bottom Bar -->
    <div class="bg-[#292152] py-8 px-6">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-center items-center gap-12 sm:gap-24 opacity-90">
            <div class="text-white font-serif text-2xl tracking-widest font-bold italic">Mahou</div>
            <div class="text-white font-serif text-3xl italic tracking-tighter">Coca-Cola</div>
            <div class="text-white font-serif text-2xl tracking-widest italic font-light">L'OR</div>
        </div>
    </div>

</section>

<!-- Gastronomic Leader Section -->
<section class="max-w-7xl mx-auto px-4 py-8 bg-white font-sans text-gray-900">

    <!-- Breadcrumb -->
    <nav class="text-xs text-gray-500 mb-6 flex items-center space-x-2">
        <a href="#" class="hover:underline">home</a>
        <span>›</span>
        <span class="text-gray-900 font-medium">100 Cr Shaadi Food Experience</span>
    </nav>

    <!-- Split Banner Container -->
    <div class="relative flex flex-col lg:flex-row items-stretch min-h-[420px] overflow-hidden">

        <!-- Right Side Image -->
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-7/12 h-[320px] lg:h-full">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1400&q=85"
                alt="A gastronomic leader dining experience"
                class="w-full h-full object-cover">
        </div>

        <!-- Left Side: Dark Purple Angular Block -->
        <div class="relative lg:w-7/12 bg-[#292152] text-white p-8 sm:p-12 lg:p-16 z-10 flex flex-col justify-center lg:clip-path-slant shadow-lg">

            <div class="max-w-xl space-y-4">

                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white">
                    Expand Your Business Through Taste
                </h2>

                <p class="text-gray-200 text-sm sm:text-base leading-relaxed">
                    Designed specifically for wedding planners, hoteliers, and culinary entrepreneurs looking to scale. Taste signature menus from top-tier caterers, evaluate luxury food presentations firsthand, and secure high-value partnerships at Yashobhoomi (IICC), New Delhi.
                </p>

            </div>

        </div>

    </div>

</section>

<style>
    @media (min-width: 1024px) {
        .lg\:clip-path-slant {
            clip-path: polygon(0 0, 88% 0, 100% 100%, 0 100%);
            padding-right: 15%;
        }
    }
</style>

<!-- Featured Tasting Showcase Section -->
<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900">

    <!-- Content Grid (Details Left, Promotional Image Right) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

        <!-- Left Column: Title & Description (Span 6) -->
        <div class="lg:col-span-6 flex flex-col justify-center space-y-4">

            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight">
                A tasting to learn, network, and enjoy
            </h2>

            <p class="text-gray-800 text-sm sm:text-base leading-relaxed">
                <strong class="font-bold">Book your wedding caterer by taste!</strong> Wedding planners and hoteliers are invited to explore live multi-course showcases, luxury dessert stations, and global fusion setups by India's top culinary masters.
            </p>

            <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                <strong class="font-bold text-gray-900">A guided industry tasting</strong> designed to help you evaluate food standards, discover cutting-edge catering trends, and forge direct alliances with elite culinary brands.
            </p>

            <!-- Upgraded Call to Action Button -->
            <div class="pt-3">
                <a href="#register"
                    class="inline-block bg-[#0f4c81] hover:bg-[#0a365f] text-white font-semibold py-3 px-8 rounded text-sm transition-colors shadow-sm">
                    Book Your Tasting Session!
                </a>
            </div>

        </div>

        <!-- Right Column: Promotional Banner Image (Span 6) -->
        <div class="lg:col-span-6 rounded-lg overflow-hidden shadow-sm border border-gray-100 bg-[#EFECE6]">
            <img src="https://images.unsplash.com/photo-1535958636474-b021ee887b13?auto=format&fit=crop&w=1200&q=85"
                alt="Exclusive Catering Tasting at Wedding India Expo"
                class="w-full h-[320px] sm:h-[400px] object-cover">
        </div>

    </div>

</section>

<!-- 100 Cr Shaadi Food Highlight Grid -->
<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900">

    <!-- Section Header -->
    <div class="mb-10 text-center">
        <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-gray-900 mb-2">
            100 Cr Shaadi Food Experience
        </h2>
        <p class="text-gray-600 text-base max-w-2xl mx-auto">
            Empowering hotelier networks and wedding planners to elevate client experiences. Taste before you contract and partner with legendary catering brands.
        </p>
    </div>

    <!-- Promotional Visual & Callout Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

        <!-- Left Column: High-End Culinary Showcase Image (Span 7) -->
        <div class="lg:col-span-7 rounded-lg overflow-hidden shadow-lg border border-gray-100 relative group">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1200&q=85"
                alt="100 Cr Shaadi Food by Top Chefs and Brands"
                class="w-full h-[350px] sm:h-[420px] object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

            <div class="absolute bottom-6 left-6 right-6 text-white">
                <span class="bg-[#0f4c81] text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2 inline-block">
                    B2B Networking & Tasting Pavilion
                </span>
                <h3 class="text-2xl font-extrabold text-white">Scale Your Wedding Hospitality Business</h3>
                <p class="text-gray-200 text-sm mt-1">
                    Direct access to high-volume caterers, Michelin-star chefs, and banquet culinary directors.
                </p>
            </div>
        </div>

        <!-- Right Column: Highlights & Booking Action (Span 5) -->
        <div class="lg:col-span-5 flex flex-col justify-center space-y-6 bg-gray-50 p-8 rounded-lg border border-gray-100">

            <h3 class="text-2xl font-extrabold text-gray-900 leading-snug">
                Why Wedding Planners & Hoteliers Participate
            </h3>

            <ul class="space-y-3 text-sm text-gray-700">
                <li class="flex items-start gap-2">
                    <span class="text-[#0f4c81] font-bold">✓</span>
                    <span><strong>Taste Before You Book:</strong> Eliminate guesswork by sampling authentic wedding menus directly on-site.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-[#0f4c81] font-bold">✓</span>
                    <span><strong>Expand Vendor Network:</strong> Connect with verified top-tier caterers and premium hospitality providers.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-[#0f4c81] font-bold">✓</span>
                    <span><strong>Exclusive B2B Deals:</strong> Secure preferred pricing contracts and partnership commissions for your upcoming wedding seasons.</span>
                </li>
            </ul>

            <div class="pt-2">
                <a href="#register"
                    class="block text-center bg-[#0f4c81] hover:bg-[#0a365f] text-white font-semibold py-3.5 px-6 rounded-md text-sm transition-colors shadow-sm">
                    Register as Trade Visitor / Planner
                </a>
            </div>

        </div>

    </div>

</section>
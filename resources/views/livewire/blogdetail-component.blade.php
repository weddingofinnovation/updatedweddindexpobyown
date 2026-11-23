<main>

    <!-- Alpine.js for zero-backend interactivity (Progress bar, Live Poll, Quick Lead Drawer) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <article 
        x-data="{
            scrollProgress: 0,
            pollVoted: null,
            pollCounts: { palaces: 48, coastal: 31, himalayan: 21 },
            bookmarked: false,
            leadModalOpen: false,
            leadType: 'Founding Member (₹3,500/Yr)',
            updateScroll() {
                const winScroll = document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                this.scrollProgress = height > 0 ? Math.round((winScroll / height) * 100) : 0;
            }
        }"
        @scroll.window="updateScroll()"
        id="blog-detail-page" 
        class="relative w-full max-w-[1280px] mx-auto bg-[#111111] text-white border-t border-white/15">

        <!-- Sticky Top Reading Progress Bar -->
        <div class="sticky top-0 z-50 w-full h-1 bg-[#1A1A1A]">
            <div class="h-full bg-gradient-to-r from-[#FF5500] via-amber-500 to-yellow-400 transition-all duration-150" :style="`width: ${scrollProgress}%`"></div>
        </div>

        <!-- 1. Split-Horizon Article Header with Gradient-Blended Backdrop -->
        <header class="relative bg-[#111111] border-b border-white/15 overflow-hidden">
            <!-- Top White Horizon Band -->
            <div class="hidden lg:block absolute top-0 inset-x-0 h-[112px] bg-white z-0"></div>

            <!-- Subtle Ambient Amber-Orange Radial Glow behind Title -->
            <div class="absolute top-28 right-10 w-[480px] h-[320px] rounded-full bg-gradient-to-tr from-[#FF5500]/20 via-amber-500/10 to-transparent blur-[110px] pointer-events-none z-0"></div>

            <div class="relative z-10 p-8 sm:p-12 lg:pt-7 lg:px-16 lg:pb-14">
                <div class="flex flex-wrap items-center justify-between gap-4 mb-8 lg:mb-12">
                    <div class="flex items-center gap-3">
                        <a href="#journal" class="text-xs font-semibold uppercase tracking-widest text-neutral-400 lg:text-[#0A0A0A] hover:text-[#FF5500] transition">
                            ← Journal
                        </a>
                        <span class="text-neutral-600 lg:text-neutral-300">/</span>
                        <span class="bg-[#FF5500] text-white text-[11px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full">
                            DESTINATION WEDDING PLAYBOOK
                        </span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-xs font-mono uppercase tracking-widest text-neutral-400 lg:text-[#0A0A0A]">
                            6 MIN READ • <span x-text="`${scrollProgress}% READ`">0% READ</span>
                        </span>
                        <button 
                            @click="bookmarked = !bookmarked" 
                            type="button"
                            class="px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider border transition cursor-pointer"
                            :class="bookmarked ? 'bg-[#FF5500] border-[#FF5500] text-white' : 'bg-white/10 lg:bg-[#111111] border-white/20 text-white hover:border-[#FF5500]'"
                        >
                            <span x-text="bookmarked ? '★ Saved' : '☆ Save'">☆ Save</span>
                        </button>
                    </div>
                </div>

                <x-advertisethought />

                <!-- Author & Direct WhatsApp Share Strip -->
                <div class="mt-10 pt-6 border-t border-white/15 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 bg-white text-[#0A0A0A] font-bold text-sm flex items-center justify-center border border-white/20">
                            WIE
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-white">Editorial Desk • Wedding India TV</p>
                            <p class="text-xs text-neutral-400">New Delhi • Pre-Expo Industry Briefing (March 5–7, 2027)</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-2">
                        <a href="https://wa.me/?text=Read%20How%20India%20Is%20Becoming%20The%20World's%20%231%20Destination%20For%20100Cr%20Weddings%20-%20Wedding%20India%20Expo%202027" target="_blank" class="px-4 py-1.5 rounded-full bg-[#FF5500] text-white text-xs font-bold uppercase tracking-wider hover:bg-white hover:text-[#0A0A0A] transition">
                            Share on WhatsApp ↗
                        </a>
                        <button @click="leadType = 'Sponsored Article / Brand Feature'; leadModalOpen = true" type="button" class="px-4 py-1.5 rounded-full bg-[#1A1A1A] border border-white/20 hover:border-[#FF5500] text-xs font-semibold uppercase tracking-wider transition cursor-pointer">
                            Publish Your Brand Story
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- 2. Hero Editorial Visual with Multi-Layer Dark & Warm Amber Gradient Overlay -->
        <div class="border-b border-white/15 bg-[#0A0A0A] relative overflow-hidden group">
            <div class="aspect-[21/9] w-full overflow-hidden relative">
                <img 
                    src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=1800&q=85" 
                    alt="Royal Destination Wedding Mandap & Palace Architecture in India" 
                    class="w-full h-full object-cover grayscale contrast-125 group-hover:scale-105 transition-transform duration-700"
                />
                <!-- Multi-Stop Gradient Overlay (Blends image into #111111 base with warm #FF5500/amber glow) -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-[#111111]/45 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-tr from-[#FF5500]/30 via-amber-500/10 to-transparent mix-blend-screen pointer-events-none"></div>

                <!-- Interactive Image Hotspot Caption Bar -->
                <div class="absolute bottom-6 left-8 sm:left-16 right-8 flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-3 bg-[#111111]/90 backdrop-blur-md border border-white/15 px-4 py-2">
                        <span class="w-2 h-2 rounded-full bg-[#FF5500] animate-ping"></span>
                        <span class="text-xs font-mono text-neutral-200">FIG 01. ROYAL PALACE & DESTINATION HOSPITALITY CIRCUIT</span>
                    </div>
                    <button @click="leadType = 'List Your Venue on Roadshow'; leadModalOpen = true" type="button" class="text-xs font-bold uppercase tracking-wider bg-white text-[#0A0A0A] hover:bg-[#FF5500] hover:text-white px-4 py-2 transition cursor-pointer">
                        List Your Venue In This Circuit →
                    </button>
                </div>
            </div>
        </div>

        <!-- 3. Main 12-Column Reading & Monetization Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 border-b border-white/15">
            
            <!-- Left 8 Columns: Article Content + Visual Cards + Interactive Poll + Sponsored Feature -->
            <div class="lg:col-span-8 p-8 sm:p-12 lg:p-16 lg:border-r border-white/15 space-y-10 text-neutral-300 leading-relaxed text-base sm:text-[17px]">
                
                <p class="text-lg sm:text-xl text-white font-normal leading-relaxed">
                    Global NRI families and international destination planners are increasingly shifting high-budget, multi-day celebrations from European châteaux back to India’s palace circuits, coastal estates, and Himalayan sanctuaries. Behind every ₹100 Cr celebration lies an intricate supply chain of luxury hoteliers, bespoke caterers, heritage textile weavers, and large-scale production architects.
                </p>

                <!-- Section 1 -->
                <div id="section-1" class="space-y-4 pt-2">
                    <span class="text-xs font-mono font-bold text-[#FF5500] uppercase tracking-widest">01 / STATE TOURISM & VENUE INFRASTRUCTURE</span>
                    <h2 class="text-2xl sm:text-3xl font-medium text-white tracking-tight">
                        Why State-Wise Destination Circuits Are Outpacing Overseas Venues
                    </h2>
                    <p>
                        With direct international connectivity into New Delhi, Jaipur, Udaipur, Goa, and Kochi, Indian hospitality groups now offer complete 200-to-350-key palace and resort buyouts paired with seamless guest logistics. State tourism boards are actively collaborating with wedding planners to streamline heritage venue permissions.
                    </p>
                </div>

                <!-- Inline Dual-Image Visual Grid with Gradient Vignettes -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 my-8">
                    <!-- Visual Card A -->
                    <div class="relative h-64 overflow-hidden border border-white/15 group">
                        <img 
                            src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?auto=format&fit=crop&w=900&q=80" 
                            alt="Indian Bridal Couture & Heritage Saree Craft" 
                            class="w-full h-full object-cover grayscale contrast-125 group-hover:scale-105 transition-transform duration-500"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0A0A0A] via-[#0A0A0A]/30 to-transparent"></div>
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#FF5500]/25 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#FF5500]">Co-Located Showcase</span>
                            <p class="text-sm font-semibold text-white mt-0.5">Wedding Saree Expo 2027 • Handloom & Bridal Couture</p>
                        </div>
                    </div>

                    <!-- Visual Card B -->
                    <div class="relative h-64 overflow-hidden border border-white/15 group">
                        <img 
                            src="https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=900&q=80" 
                            alt="Luxury Wedding Banquet & Multi-Cuisine Catering" 
                            class="w-full h-full object-cover grayscale contrast-125 group-hover:scale-105 transition-transform duration-500"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0A0A0A] via-[#0A0A0A]/30 to-transparent"></div>
                        <div class="absolute inset-0 bg-gradient-to-tr from-amber-500/25 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#FF5500]">Tasting & Bar Pavilion</span>
                            <p class="text-sm font-semibold text-white mt-0.5">₹100 Cr Wedding Culinary & Botanical Mixology Zone</p>
                        </div>
                    </div>
                </div>

                <!-- Interactive Live Industry Poll (Boosts Dwell Time & Captures Buyer Intent) -->
                <div class="bg-[#161616] border border-white/20 p-6 sm:p-8 my-8">
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="px-3 py-1 rounded-full bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-widest">
                            LIVE INDUSTRY POLL • 2027 SEASON
                        </span>
                        <span class="text-xs font-mono text-neutral-400">VOTE TO SEE RESULTS</span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-white">
                        Which Indian Wedding Circuit Will See The Highest International NRI Demand In 2027?
                    </h3>

                    <div class="mt-5 space-y-3">
                        <!-- Option 1 -->
                        <button 
                            type="button"
                            @click="if(!pollVoted){ pollCounts.palaces++; pollVoted = 'palaces'; }"
                            class="w-full text-left relative overflow-hidden border border-white/15 hover:border-[#FF5500] p-4 transition cursor-pointer"
                        >
                            <div class="absolute inset-y-0 left-0 bg-[#FF5500]/25 transition-all duration-500" :style="pollVoted ? `width: ${pollCounts.palaces}%` : 'width: 0%'"></div>
                            <div class="relative z-10 flex items-center justify-between text-sm font-medium">
                                <span class="text-white">01. Rajasthan Royal Palaces (Udaipur, Jaipur, Jodhpur)</span>
                                <span x-show="pollVoted" x-text="`${pollCounts.palaces}%`" class="font-mono font-bold text-[#FF5500]"></span>
                            </div>
                        </button>

                        <!-- Option 2 -->
                        <button 
                            type="button"
                            @click="if(!pollVoted){ pollCounts.coastal++; pollVoted = 'coastal'; }"
                            class="w-full text-left relative overflow-hidden border border-white/15 hover:border-[#FF5500] p-4 transition cursor-pointer"
                        >
                            <div class="absolute inset-y-0 left-0 bg-[#FF5500]/25 transition-all duration-500" :style="pollVoted ? `width: ${pollCounts.coastal}%` : 'width: 0%'"></div>
                            <div class="relative z-10 flex items-center justify-between text-sm font-medium">
                                <span class="text-white">02. Goa & Kerala Coastal / Backwater Luxury Resorts</span>
                                <span x-show="pollVoted" x-text="`${pollCounts.coastal}%`" class="font-mono font-bold text-[#FF5500]"></span>
                            </div>
                        </button>

                        <!-- Option 3 -->
                        <button 
                            type="button"
                            @click="if(!pollVoted){ pollCounts.himalayan++; pollVoted = 'himalayan'; }"
                            class="w-full text-left relative overflow-hidden border border-white/15 hover:border-[#FF5500] p-4 transition cursor-pointer"
                        >
                            <div class="absolute inset-y-0 left-0 bg-[#FF5500]/25 transition-all duration-500" :style="pollVoted ? `width: ${pollCounts.himalayan}%` : 'width: 0%'"></div>
                            <div class="relative z-10 flex items-center justify-between text-sm font-medium">
                                <span class="text-white">03. Uttarakhand Himalayan & Temple Circuits (Rishikesh, Triyuginarayan)</span>
                                <span x-show="pollVoted" x-text="`${pollCounts.himalayan}%`" class="font-mono font-bold text-[#FF5500]"></span>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Section 2 -->
                <div id="section-2" class="space-y-4">
                    <span class="text-xs font-mono font-bold text-[#FF5500] uppercase tracking-widest">02 / CULINARY & BESPOKE BAR THEATRE</span>
                    <h2 class="text-2xl sm:text-3xl font-medium text-white tracking-tight">
                        The Rise of Multi-Cuisine Tasting Pavilions & Botanical Mixology
                    </h2>
                    <p>
                        Modern destination weddings demand four days of distinct gastronomic storytelling—from royal Awadhi and Rajasthani heritage feasts to live Japanese robatayaki counters, sit-down European banquets, and zero-proof botanical mixology bars.
                    </p>
                </div>

                <!-- MONETIZATION SLOT A: Native Sponsored Brand Partner Card (High-CPM Native Ad) -->
                <div class="my-10 bg-white text-[#0A0A0A] p-6 sm:p-8 border-l-4 border-[#FF5500] flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="px-2.5 py-0.5 bg-[#111111] text-white text-[10px] font-bold uppercase tracking-widest">SPONSORED PARTNER SPOTLIGHT</span>
                            <span class="text-[11px] font-bold text-[#FF5500] uppercase">OFFICIAL EXHIBITOR</span>
                        </div>
                        <h4 class="text-xl font-bold tracking-tight mt-2">
                            Feature Your Hotel, Catering Brand Or Couture Label Inside Our Editorial Articles
                        </h4>
                        <p class="text-xs sm:text-sm text-neutral-600 mt-1">
                            Reach 30,000+ verified wedding planners, hoteliers, and hosted buyers across India & global NRI markets.
                        </p>
                    </div>
                    <button 
                        type="button"
                        @click="leadType = 'Sponsored Editorial Placement'; leadModalOpen = true"
                        class="shrink-0 bg-[#FF5500] hover:bg-[#111111] text-white px-6 py-3.5 text-xs font-bold uppercase tracking-wider transition cursor-pointer"
                    >
                        Book Native Ad Slot →
                    </button>
                </div>

                <!-- Section 3 -->
                <div id="section-3" class="space-y-4">
                    <span class="text-xs font-mono font-bold text-[#FF5500] uppercase tracking-widest">03 / THE GLOBAL B2B MARKETPLACE</span>
                    <h2 class="text-2xl sm:text-3xl font-medium text-white tracking-tight">
                        Inside Wedding India Expo 2027 at Yashobhoomi (IICC), New Delhi
                    </h2>
                    <p>
                        Scheduled for <strong class="text-white">March 5–7, 2027</strong> at Yashobhoomi in Dwarka, New Delhi, the exhibition unites 250+ verified exhibitors, 28 state chapters, and international buyer delegations under one roof.
                    </p>
                </div>

            </div>

            <!-- Right 4 Columns: Sticky Monetization & Lead Capture Sidebar -->
            <aside class="lg:col-span-4 p-8 sm:p-10 bg-[#141414]">
                <div class="lg:sticky lg:top-8 space-y-6">
                    
                    <!-- REVENUE STREAM 1: Founding Member Subscription (₹3,500/Yr) -->
                    <div class="bg-white text-[#0A0A0A] p-6 sm:p-7 border-t-4 border-[#FF5500]">
                        <span class="inline-block bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">
                            FOUNDING MEMBER • ₹3,500/YR
                        </span>
                        <h3 class="text-xl font-bold tracking-tight mt-3">
                            Join The National & Global Wedding Community
                        </h3>
                        <p class="text-xs text-neutral-600 mt-2 leading-relaxed">
                            Includes 12 online global buyer meets, offline state roadshows, 3 Award Nominations (rolled into next FY), and VIP Hosted Buyer entry at Yashobhoomi.
                        </p>
                        <button 
                            type="button"
                            @click="leadType = 'Founding Member (₹3,500/Yr)'; leadModalOpen = true"
                            class="mt-5 group flex items-center justify-between w-full bg-[#111111] hover:bg-[#FF5500] text-white px-5 py-3.5 transition-colors duration-300 cursor-pointer"
                        >
                            <span class="text-xs font-bold uppercase tracking-wider">Join Founding Circle — ₹3,500</span>
                            <span class="text-[#FF5500] group-hover:text-white font-bold">→</span>
                        </button>
                    </div>

                    <!-- REVENUE STREAM 2: Exhibitor Space Booking (₹65,000+) -->
                    <div class="bg-[#111111] border border-white/15 p-6 sm:p-7">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-[#FF5500]">
                            EXHIBITOR STALL BOOKING • 2027
                        </span>
                        <h4 class="text-lg font-semibold text-white mt-2">
                            Exhibit At Wedding India Expo & Saree Expo
                        </h4>
                        <p class="text-xs text-neutral-400 mt-2 leading-relaxed">
                            Reserve a shell-scheme or bare-space booth at Yashobhoomi (March 5–7, 2027). Packages starting from <strong class="text-white">₹65,000</strong>.
                        </p>
                        <button 
                            type="button"
                            @click="leadType = 'Exhibitor Booth Space (₹65,000+)'; leadModalOpen = true"
                            class="mt-4 w-full border border-white/25 hover:border-[#FF5500] hover:bg-[#FF5500] text-white px-4 py-3 text-xs font-bold uppercase tracking-wider transition cursor-pointer"
                        >
                            Download Floorplan & Tariff
                        </button>
                    </div>

                    <!-- REVENUE STREAM 3: Paid PR / Guest Article Submission -->
                    <div class="bg-[#111111] border border-white/15 p-6 sm:p-7">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-neutral-400">
                            PUBLISH & MONETIZE YOUR EXPERTISE
                        </span>
                        <h4 class="text-base font-semibold text-white mt-1.5">
                            Publish Your Brand Case Study On Wedding India TV
                        </h4>
                        <p class="text-xs text-neutral-400 mt-1.5 leading-relaxed">
                            Get featured in our permanent Global Industry Directory + WhatsApp & Email newsletter blast to 30,000+ trade leads.
                        </p>
                        <button 
                            type="button"
                            @click="leadType = 'Publish Paid PR / Brand Feature'; leadModalOpen = true"
                            class="mt-4 text-xs font-bold uppercase tracking-wider text-[#FF5500] hover:text-white transition cursor-pointer"
                        >
                            Submit Editorial Pitch →
                        </button>
                    </div>

                </div>
            </aside>

        </div>

        <!-- Interactive Instant Lead / Payment Conversion Modal -->
        <div 
            x-show="leadModalOpen" 
            x-transition.opacity
            class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4"
            style="display: none;">
            <div @click.away="leadModalOpen = false" class="bg-white text-[#0A0A0A] w-full max-w-lg p-8 border-t-4 border-[#FF5500] relative">
                <button @click="leadModalOpen = false" type="button" class="absolute top-5 right-5 text-xs font-bold uppercase tracking-wider text-neutral-500 hover:text-black cursor-pointer">
                    ✕ Close
                </button>
                <span class="text-[10px] font-bold uppercase tracking-widest text-[#FF5500]">WEDDING INDIA EXPO 2027 • DIRECT DESK</span>
                <h3 class="text-2xl font-bold tracking-tight mt-1" x-text="leadType"></h3>
                <p class="text-xs text-neutral-600 mt-1">Instant callback & brochure/payment link sent via WhatsApp & Email.</p>

                <form class="mt-6 space-y-4">
                    <input type="text" placeholder="Your Full Name *" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                    <input type="text" placeholder="Company / Brand / Hotel Name *" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <input type="tel" placeholder="WhatsApp Number *" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                        <input type="text" placeholder="City & State *" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                    </div>
                    <button type="submit" class="w-full bg-[#111111] hover:bg-[#FF5500] text-white py-4 text-xs font-bold uppercase tracking-wider transition cursor-pointer">
                        Confirm & Proceed →
                    </button>
                </form>
            </div>
        </div>

    </article>

    <article id="blog-detail-page" class="w-full max-w-[1280px] mx-auto bg-[#111111] text-white border-t border-white/15">

        <!-- 1. Split-Horizon Article Header -->
        <header class="relative bg-[#111111] border-b border-white/15 overflow-hidden">
            <!-- Top White Horizon Band -->
            <div class="hidden lg:block absolute top-0 inset-x-0 h-[112px] bg-white z-0"></div>

            <div class="relative z-10 p-8 sm:p-12 lg:pt-7 lg:px-16 lg:pb-14">
                <!-- Top Breadcrumb & Category Pill -->
                <div class="flex flex-wrap items-center justify-between gap-4 mb-8 lg:mb-12">
                    <div class="flex items-center gap-3">
                        <a href="#journal" class="text-xs font-semibold uppercase tracking-widest text-neutral-400 lg:text-[#0A0A0A] hover:text-[#FF5500] transition">
                            ← Journal
                        </a>
                        <span class="text-neutral-600 lg:text-neutral-300">/</span>
                        <span class="bg-[#FF5500] text-white text-[11px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full">
                            DESTINATION WEDDING PLAYBOOK
                        </span>
                    </div>
                    <span class="text-xs font-mono uppercase tracking-widest text-neutral-400 lg:text-[#0A0A0A]">
                        6 MIN READ • PUBLISHED NOV 2026
                    </span>
                </div>

               
            </div>
        </header>

        <!-- 2. Featured Hero Editorial Visual Banner (Monochrome + Orange Accent) -->
        <div class="border-b border-white/15 bg-[#0A0A0A] relative">
            <div class="aspect-[21/9] w-full overflow-hidden relative">
                <img 
                    src="blog-featured-palace-wedding.jpg" 
                    alt="Luxury Destination Wedding Setup in India" 
                    class="w-full h-full object-cover grayscale contrast-125 opacity-85"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-transparent to-transparent"></div>
                <div class="absolute bottom-6 left-8 sm:left-16 right-8 flex flex-wrap items-center justify-between gap-4">
                    <span class="text-xs font-mono text-neutral-300 bg-[#111111]/90 border border-white/15 px-4 py-1.5">
                        FIG 01. ROYAL DESTINATION HOSPITALITY & PRODUCTION ARCHITECTURE
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-wider text-[#FF5500]">
                        YASHOBHOOMI (IICC) • MARCH 5–7, 2027
                    </span>
                </div>
            </div>
        </div>

        <!-- 3. Main 12-Column Editorial Reading Layout (Article Body + Sticky Sidebar) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 border-b border-white/15">
            
            <!-- Left 8 Columns: Long-Form Editorial Content -->
            <div class="lg:col-span-8 p-8 sm:p-12 lg:p-16 lg:border-r border-white/15 space-y-10 text-neutral-300 leading-relaxed text-base sm:text-[17px]">
                
                <!-- Lead Paragraph -->
                <p class="text-lg sm:text-xl text-white font-normal leading-relaxed">
                    Global NRI families and international destination planners are increasingly shifting high-budget, multi-day celebrations from European châteaux back to India’s palace circuits, coastal estates, and Himalayan sanctuaries. Behind every ₹100 Cr celebration lies an intricate supply chain of luxury hoteliers, bespoke caterers, heritage textile weavers, and large-scale production architects.
                </p>

                <!-- Section 1 -->
                <div id="section-1" class="space-y-4 pt-2">
                    <span class="text-xs font-mono font-bold text-[#FF5500] uppercase tracking-widest">01 / STATE TOURISM & VENUE INFRASTRUCTURE</span>
                    <h2 class="text-2xl sm:text-3xl font-medium text-white tracking-tight">
                        Why State-Wise Destination Circuits Are Outpacing Overseas Venues
                    </h2>
                    <p>
                        With direct international connectivity into New Delhi, Jaipur, Udaipur, Goa, and Kochi, Indian hospitality groups now offer complete 200-to-350-key palace and resort buyouts paired with seamless guest logistics. State tourism boards are actively collaborating with wedding planners to streamline heritage venue permissions and showcase unexplored circuits across Uttarakhand, Madhya Pradesh, and Kerala.
                    </p>
                </div>

                <!-- High-Contrast Pull Quote Block (Matches Split-Horizon Palette) -->
                <blockquote class="my-10 bg-white text-[#0A0A0A] p-8 sm:p-10 border-l-4 border-[#FF5500]">
                    <p class="text-xl sm:text-2xl font-medium tracking-tight leading-snug">
                        “When international buyers and out-of-state wedding planners experience India’s hospitality, culinary craft, and bridal handlooms firsthand, India ceases to be just a domestic market—it becomes the global capital of destination weddings.”
                    </p>
                    <footer class="mt-4 text-xs font-bold uppercase tracking-widest text-[#FF5500]">
                        — Smart Business Talk Show • Wedding India TV
                    </footer>
                </blockquote>

                <!-- Section 2 -->
                <div id="section-2" class="space-y-4">
                    <span class="text-xs font-mono font-bold text-[#FF5500] uppercase tracking-widest">02 / CULINARY & BESPOKE BAR THEATRE</span>
                    <h2 class="text-2xl sm:text-3xl font-medium text-white tracking-tight">
                        The Rise of Multi-Cuisine Tasting Pavilions & Botanical Mixology
                    </h2>
                    <p>
                        Modern destination weddings demand four days of distinct gastronomic storytelling—from royal Awadhi and Rajasthani heritage feasts to live Japanese robatayaki counters, sit-down European banquets, and zero-proof botanical mixology bars. At <strong class="text-white">Wedding India Expo 2027</strong>, the dedicated Culinary Tasting & Bar Pavilion allows planners to sample menus and inspect table scenography before empaneling caterers for the upcoming season.
                    </p>
                </div>

                <!-- Key Takeaways Box -->
                <div class="bg-[#161616] border border-white/15 p-6 sm:p-8 space-y-4">
                    <div class="flex items-center justify-between border-b border-white/10 pb-3">
                        <span class="text-xs font-bold uppercase tracking-widest text-[#FF5500]">Key Takeaways For Industry Professionals</span>
                        <span class="text-xs font-mono text-neutral-500">2027 OUTLOOK</span>
                    </div>
                    <ul class="space-y-3 text-sm text-neutral-300">
                        <li class="flex items-start gap-3">
                            <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                            <span><strong class="text-white">Year-Round State Roadshows:</strong> Online and offline buyer-seller meets connect regional venues and suppliers directly with national and international planners.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                            <span><strong class="text-white">Co-Located Saree & Bridal Couture Showcase:</strong> Direct sourcing from Varanasi, Kanchipuram, and Surat master weavers for global bridal boutiques.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                            <span><strong class="text-white">Founding Member Continuity:</strong> Annual Founding Members (₹3,500/Yr) lock in VIP Hosted Buyer access, roadshow lineups, and 3 Award Nominations into the next financial year.</span>
                        </li>
                    </ul>
                </div>

                <!-- Section 3 -->
                <div id="section-3" class="space-y-4">
                    <span class="text-xs font-mono font-bold text-[#FF5500] uppercase tracking-widest">03 / THE GLOBAL B2B MARKETPLACE</span>
                    <h2 class="text-2xl sm:text-3xl font-medium text-white tracking-tight">
                        Inside Wedding India Expo 2027 at Yashobhoomi (IICC), New Delhi
                    </h2>
                    <p>
                        Scheduled for <strong class="text-white">March 5–7, 2027</strong> at Asia’s premier convention center in Dwarka, New Delhi, the exhibition brings 250+ verified exhibitors, 28 state chapters, and international buyer delegations from the UAE, UK, USA, Thailand, and Europe under one roof.
                    </p>
                </div>

                <!-- Article Tags & Footer -->
                <div class="pt-8 border-t border-white/15 flex flex-wrap items-center justify-between gap-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="text-xs uppercase tracking-wider text-neutral-500 mr-1">Topics:</span>
                        <span class="px-3 py-1 bg-[#161616] border border-white/15 text-xs text-neutral-300">#DestinationWeddings</span>
                        <span class="px-3 py-1 bg-[#161616] border border-white/15 text-xs text-neutral-300">#WeddingIndiaExpo2027</span>
                        <span class="px-3 py-1 bg-[#161616] border border-white/15 text-xs text-neutral-300">#LuxuryCatering</span>
                        <span class="px-3 py-1 bg-[#161616] border border-white/15 text-xs text-neutral-300">#Yashobhoomi</span>
                    </div>
                </div>

            </div>

            <!-- Right 4 Columns: Sticky Table of Contents & Expo Conversion Sidebar -->
            <aside class="lg:col-span-4 p-8 sm:p-10 bg-[#141414] flex flex-col justify-between">
                <div class="lg:sticky lg:top-8 space-y-8">
                    
                    <!-- Table of Contents -->
                    <div class="border border-white/15 bg-[#111111] p-6">
                        <span class="text-[11px] font-bold uppercase tracking-widest text-[#FF5500]">In This Article</span>
                        <nav class="mt-4 space-y-3 text-sm">
                            <a href="#section-1" class="block text-white hover:text-[#FF5500] transition">01. State Tourism & Venue Infrastructure</a>
                            <a href="#section-2" class="block text-neutral-400 hover:text-[#FF5500] transition">02. Multi-Cuisine Tasting & Bar Theatre</a>
                            <a href="#section-3" class="block text-neutral-400 hover:text-[#FF5500] transition">03. Wedding India Expo 2027 Overview</a>
                        </nav>
                    </div>

                    <!-- Founding Member / Hosted Buyer Promo Box (White Contrast Card) -->
                    <div class="bg-white text-[#0A0A0A] p-6 sm:p-8 border-t-4 border-[#FF5500]">
                        <span class="inline-block bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">
                            FOUNDING MEMBER • ₹3,500/YR
                        </span>
                        <h3 class="text-xl font-bold tracking-tight mt-3">
                            Join The National & Global Wedding Community
                        </h3>
                        <p class="text-xs text-neutral-600 mt-2 leading-relaxed">
                            Get year-round state roadshow access, online global buyer meets, 3 Award Nominations, and VIP Hosted Buyer entry at Yashobhoomi (March 5–7, 2027).
                        </p>
                        <a href="#join-founding-member" class="mt-6 group flex items-center justify-between w-full bg-[#111111] hover:bg-[#FF5500] text-white px-5 py-3.5 transition-colors duration-300">
                            <span class="text-xs font-bold uppercase tracking-wider">Apply Now — ₹3,500/Yr</span>
                            <svg class="w-4 h-4 text-[#FF5500] group-hover:text-white transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 7L7 17M17 17H7V7"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Quick Exhibitor / Help Desk Contact -->
                    <div class="border border-white/15 bg-[#111111] p-6">
                        <span class="text-[11px] font-bold uppercase tracking-widest text-neutral-400">Exhibition Help Center</span>
                        <p class="text-lg font-semibold text-white mt-1">999-185-6776</p>
                        <p class="text-xs text-neutral-400 mt-1">team@weddingindiaexpo.com • Stall & Roadshow Desk</p>
                    </div>

                </div>
            </aside>

        </div>

        <!-- 4. Related Articles Grid (Split-Horizon Card Format) -->
        <div class="p-8 sm:p-12 lg:p-16">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
                <div>
                    <span class="text-xs font-semibold uppercase tracking-widest text-[#FF5500]">Continue Reading</span>
                    <h3 class="text-2xl sm:text-3xl font-medium tracking-tight mt-1">Related Industry Insights</h3>
                </div>
                <a href="#all-blogs" class="text-xs font-bold uppercase tracking-wider text-white hover:text-[#FF5500] transition">
                    View All Articles →
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Related Post 1 -->
                <a href="#post-1" class="group bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                            <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                            <span class="relative z-10 px-3 py-1 bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-wider rounded-full">
                                Saree & Couture
                            </span>
                            <span class="relative z-10 text-[11px] font-mono text-neutral-300">4 MIN READ</span>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-white group-hover:text-[#FF5500] transition-colors leading-snug">
                                How Wedding Saree Expo 2027 Connects Handloom Weavers With Global NRI Buyers
                            </h4>
                            <p class="text-xs text-neutral-400 mt-3 leading-relaxed">
                                Inside the co-located ethnic bridal wear marketplace at Yashobhoomi, New Delhi.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 py-3.5 bg-[#111111] border-t border-white/10 text-xs font-bold uppercase tracking-wider text-neutral-300 group-hover:text-white flex justify-between">
                        <span>Read Article</span>
                        <span class="text-[#FF5500]">→</span>
                    </div>
                </a>

                <!-- Related Post 2 -->
                <a href="#post-2" class="group bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                            <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                            <span class="relative z-10 px-3 py-1 bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-wider rounded-full">
                                State Roadshows
                            </span>
                            <span class="relative z-10 text-[11px] font-mono text-neutral-300">5 MIN READ</span>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-white group-hover:text-[#FF5500] transition-colors leading-snug">
                                Listing Your Hotel Or Palace Venue On The All-India Roadshow FAM Tour
                            </h4>
                            <p class="text-xs text-neutral-400 mt-3 leading-relaxed">
                                How hospitality properties convert site inspections into multi-date wedding buyouts.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 py-3.5 bg-[#111111] border-t border-white/10 text-xs font-bold uppercase tracking-wider text-neutral-300 group-hover:text-white flex justify-between">
                        <span>Read Article</span>
                        <span class="text-[#FF5500]">→</span>
                    </div>
                </a>

                <!-- Related Post 3 -->
                <a href="#post-3" class="group bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                            <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                            <span class="relative z-10 px-3 py-1 bg-white text-[#0A0A0A] text-[10px] font-bold uppercase tracking-wider rounded-full">
                                Awards 2027
                            </span>
                            <span class="relative z-10 text-[11px] font-mono text-neutral-300">3 MIN READ</span>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-white group-hover:text-[#FF5500] transition-colors leading-snug">
                                Global Excellence & Innovation Awards: Guide To Nominating Across 3 Categories
                            </h4>
                            <p class="text-xs text-neutral-400 mt-3 leading-relaxed">
                                Eligibility criteria and next-financial-year rollover benefits for Founding Members.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 py-3.5 bg-[#111111] border-t border-white/10 text-xs font-bold uppercase tracking-wider text-neutral-300 group-hover:text-white flex justify-between">
                        <span>Read Article</span>
                        <span class="text-[#FF5500]">→</span>
                    </div>
                </a>

            </div>
        </div>

         <!-- Article Title (Sliced across White & Dark Horizon) -->
                <div class="max-w-4xl">
                    <h1 class="text-3xl sm:text-5xl lg:text-[3.5rem] font-medium tracking-[-0.035em] leading-[1.06]">
                        <span class="block text-white lg:text-[#0A0A0A]">How India Is Becoming</span>
                        <span class="block text-white mt-1">The World’s #1 Destination For ₹100 Cr Weddings.</span>
                    </h1>
                    <p class="text-base sm:text-lg text-neutral-400 mt-6 leading-relaxed max-w-3xl">
                        From heritage palace buyouts in Rajasthan and Himalayan riverfront resorts to multi-cuisine artisanal catering and bespoke bridal couture—inside the B2B ecosystem powering Wedding India Expo 2027 at Yashobhoomi, New Delhi.
                    </p>
                </div>

                <!-- Author, Date & Share Strip -->
                <div class="mt-10 pt-6 border-t border-white/15 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 bg-white text-[#0A0A0A] font-bold text-sm flex items-center justify-center border border-white/20">
                            WIE
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-white">Editorial Desk • Wedding India TV</p>
                            <p class="text-xs text-neutral-400">New Delhi • Pre-Expo Industry Briefing (March 5–7, 2027)</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="text-[11px] uppercase tracking-widest text-neutral-500 mr-2">Share:</span>
                        <a href="#share-linkedin" class="px-3.5 py-1.5 rounded-full bg-[#1A1A1A] border border-white/15 hover:border-[#FF5500] text-xs font-semibold uppercase tracking-wider transition">LinkedIn</a>
                        <a href="#share-whatsapp" class="px-3.5 py-1.5 rounded-full bg-[#1A1A1A] border border-white/15 hover:border-[#FF5500] text-xs font-semibold uppercase tracking-wider transition">WhatsApp</a>
                        <a href="#copy-link" class="px-3.5 py-1.5 rounded-full bg-[#1A1A1A] border border-white/15 hover:border-[#FF5500] text-xs font-semibold uppercase tracking-wider transition">Copy Link</a>
                    </div>
                </div>
    </article>

</main>
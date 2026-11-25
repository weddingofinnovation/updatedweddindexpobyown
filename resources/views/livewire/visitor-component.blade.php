<main>
    @if($board == 'wedding-business-tour')
         <x-businesstour />
    @elseif($board == 'wedding-roadshow')
        <x-businesstour />
    @elseif($board == 'wedding-planner-community')
        <x-weddingcommunity />
    @elseif($board == 'tickets-registration')
        <x-tickets />

    @elseif($board == 'plan-your-visit')
        <x-planyourtrip />
    @elseif($board == 'how-to-get-there')
        <x-howtogetthere />
    @elseif($board == 'service-visitor')
        <x-servicevisitor />
    @elseif($board == 'promote-your-business')
        <x-promoteyourbrand />
    @elseif($board == 'why-should-you-visit')
    <section id="why-visit-audience-page" class="w-full max-w-[1280px] mx-auto bg-[#111111] text-white border-t border-white/15">

    <!-- 1. Split-Horizon Hero Banner: Why Visit & Show Ecosystem -->
    <div class="relative bg-[#111111] border-b border-white/15 overflow-hidden">
        <!-- Top White Horizon Band -->
        <div class="hidden lg:block absolute top-0 inset-x-0 h-[112px] bg-white z-0"></div>

        <!-- Subtle Warm Amber-Orange Glow -->
        <div class="absolute top-24 right-10 w-[520px] h-[340px] rounded-full bg-gradient-to-tr from-[#FF5500]/25 via-amber-500/10 to-transparent blur-[115px] pointer-events-none z-0"></div>

        <div class="relative z-10 p-8 sm:p-12 lg:pt-7 lg:px-16 lg:pb-14">
            <div class="flex flex-wrap items-center justify-between gap-4 mb-8 lg:mb-12">
                <span class="bg-[#FF5500] text-white text-[11px] font-semibold tracking-widest uppercase px-5 py-2 rounded-full shadow-md">
                    WHY VISIT • EXHIBITOR & VISITOR PROFILE
                </span>
                <span class="text-xs font-semibold uppercase tracking-widest text-neutral-400 lg:text-[#0A0A0A]">
                    05 – 07 MARCH 2027 • YASHOBHOOMI (IICC), DWARKA, NEW DELHI
                </span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
                <div class="lg:col-span-8">
                    <h1 class="text-4xl sm:text-6xl font-medium tracking-[-0.035em] leading-[1.04]">
                        <span class="block text-white lg:text-[#0A0A0A]">Why Visit Wedding</span>
                        <span class="block text-white mt-1">India Expo 2027.</span>
                    </h1>
                    <p class="text-sm sm:text-base text-neutral-300 mt-6 max-w-2xl leading-relaxed">
                        India’s premier international B2B & luxury destination wedding platform—bringing together <strong class="text-white">250+ verified exhibitors</strong> and <strong class="text-white">15,000+ decision-makers</strong> across 28 Indian states and 18+ countries at <strong class="text-white">Yashobhoomi (IICC), New Delhi</strong>, co-located with <strong class="text-white">Saree India Expo 2027</strong>.
                    </p>
                </div>

                <!-- High-Contrast Dual CTA Card -->
                <div class="lg:col-span-4 bg-white text-[#0A0A0A] p-6 sm:p-8 border-t-4 border-[#FF5500]">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-[#FF5500]">
                        3 DAYS OF SOURCING, TASTINGS & DEALS
                    </span>
                    <h2 class="text-xl font-bold tracking-tight mt-1">
                        Plan Your Participation
                    </h2>
                    <p class="text-xs text-neutral-600 mt-2 leading-relaxed">
                        Register as a Trade Visitor / Hosted Buyer or reserve exhibition space starting from ₹65,000.
                    </p>
                    <div class="mt-5 space-y-2.5">
                        <a href="{{ url('/tickets-registration') }}" class="group flex items-center justify-between w-full bg-[#111111] hover:bg-[#FF5500] text-white px-5 py-3 transition-colors duration-300">
                            <span class="text-xs font-bold uppercase tracking-wider">Register As Visitor</span>
                            <span class="text-[#FF5500] group-hover:text-white font-bold">→</span>
                        </a>
                        <a href="{{ url('/exhibitor') }}" class="group flex items-center justify-between w-full border border-black/20 hover:border-[#FF5500] text-[#0A0A0A] px-5 py-3 transition-colors duration-300">
                            <span class="text-xs font-bold uppercase tracking-wider">Apply As Exhibitor</span>
                            <span class="text-[#FF5500] font-bold">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Six Core Reasons Why Industry Professionals & Families Visit -->
    <div class="p-8 sm:p-12 lg:p-16 border-b border-white/15">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FF5500]">6 High-Value Reasons To Attend</span>
                <h2 class="text-2xl sm:text-4xl font-medium tracking-tight mt-1">Why Visit Wedding India Expo 2027</h2>
            </div>
            <span class="text-xs uppercase tracking-widest text-neutral-400">One Venue • Zero Middlemen</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Reason 1 -->
            <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors p-8">
                <span class="text-xs font-mono font-bold text-[#FF5500]">01 / DESTINATION VENUES</span>
                <h3 class="text-xl font-semibold mt-3">Source Palaces, Resorts & Tourism Boards</h3>
                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                    Compare buyout tariffs, room inventories, and seasonal wedding packages directly with luxury palace hotels, beachfront resorts, Himalayan retreats, and international tourism boards.
                </p>
            </div>

            <!-- Reason 2 -->
            <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors p-8">
                <span class="text-xs font-mono font-bold text-[#FF5500]">02 / ₹100 CR CULINARY PAVILION</span>
                <h3 class="text-xl font-semibold mt-3">Live Food Tasting & Bar Mixology</h3>
                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                    Experience live royal wedding kitchens, gourmet catering pods, artisanal sweets, luxury gifting hampers, and curated sessions like <em>The Wedding Wine Experience</em> before finalizing menus.
                </p>
            </div>

            <!-- Reason 3 -->
            <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors p-8">
                <span class="text-xs font-mono font-bold text-[#FF5500]">03 / CO-LOCATED SAREE INDIA EXPO</span>
                <h3 class="text-xl font-semibold mt-3">Bridal Couture, Handlooms & Trousseau</h3>
                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                    Gain dual entry to <strong class="text-white">Saree India Expo 2027</strong>—sourcing Banarasi, Kanchipuram, Patola, bridal lehengas, heritage jewelry, and wholesale trousseau collections under one roof.
                </p>
            </div>

            <!-- Reason 4 -->
            <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors p-8">
                <span class="text-xs font-mono font-bold text-[#FF5500]">04 / B2B MEETING LOUNGE</span>
                <h3 class="text-xl font-semibold mt-3">1-on-1 Hosted Buyer Matchmaking</h3>
                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                    Book pre-scheduled meetings in dedicated B2B networking lounges to lock in vendor empanelments, cross-state execution partners, and 2027–28 season contracts.
                </p>
            </div>

            <!-- Reason 5 -->
            <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors p-8">
                <span class="text-xs font-mono font-bold text-[#FF5500]">05 / CONFERENCES & AWARDS</span>
                <h3 class="text-xl font-semibold mt-3">Knowledge Forums & Global Awards</h3>
                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                    Attend the <em>Women in Wedding Business Forum</em>, <em>Smart Business Talk Show</em>, and the <em>Global Excellence & Innovation Awards</em> celebrating industry leaders.
                </p>
            </div>

            <!-- Reason 6 -->
            <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors p-8">
                <span class="text-xs font-mono font-bold text-[#FF5500]">06 / 365-DAY COMMUNITY</span>
                <h3 class="text-xl font-semibold mt-3">Year-Round Roadshows & Media</h3>
                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                    Connect into a nationwide network spanning state roadshows, Wedding India TV, GTTC India diplomatic editions, and Wedding India Magazine.
                </p>
            </div>

        </div>
    </div>

    <!-- 3. Who Is On The Show Floor: Exhibitor Profiles vs. Visitor Audiences -->
    <div class="grid grid-cols-1 lg:grid-cols-2 border-b border-white/15 divide-y lg:divide-y-0 lg:divide-x divide-white/15">

        <!-- LEFT COLUMN: WHO EXHIBITS (EXHIBITOR AUDIENCE) -->
        <div class="p-8 sm:p-12 lg:p-14 bg-[#111111] flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between gap-3 mb-6">
                    <span class="px-4 py-1.5 rounded-full bg-[#FF5500] text-white text-[11px] font-bold uppercase tracking-widest">
                        EXHIBITOR PROFILE • 250+ BRANDS
                    </span>
                    <span class="text-xs font-mono text-neutral-400">SHOWCASE & SELL</span>
                </div>

                <h2 class="text-2xl sm:text-4xl font-medium tracking-tight">
                    Who Exhibits At WIE 2027?
                </h2>
                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                    Leading hospitality groups, bridal manufacturers, culinary masters, and event specialists showcasing products and services to high-volume buyers:
                </p>

                <ul class="mt-6 space-y-4 border-t border-white/10 pt-6 text-sm text-neutral-300">
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Hotels, Palaces, Resorts & Banquet Venues:</strong> Heritage properties, luxury chains, convention centers, and destination wedding venues.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">National & International Tourism Boards:</strong> State tourism departments, international embassies, and destination promotion boards.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Bridal Sarees, Couture & Fine Jewelry Houses:</strong> Handloom weavers, designer labels, bridal trousseau makers, and gold/diamond jewelers.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Royal Wedding Caterers, Chefs & Bar Mixologists:</strong> Large-scale luxury caterers, gourmet sweet brands, and craft beverage/wine experiences.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Decor, Floral, Lighting & Event Production:</strong> Set designers, truss/AV engineering firms, floral importers, and special-effects studios.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Luxury Gifting, Invitations, Photography & Hospitality Tech:</strong> Custom hamper curators, stationery artists, filmmakers, and guest-management platforms.</span>
                    </li>
                </ul>
            </div>

            <div class="mt-8 pt-6 border-t border-white/10 flex flex-wrap items-center justify-between gap-4">
                <span class="text-xs text-neutral-400">Booths from ₹65,000 • Founding Partner 36 sqm</span>
                <a href="{{ url('/exhibitor') }}" class="inline-flex items-center gap-2 bg-[#FF5500] hover:bg-white text-white hover:text-[#0A0A0A] px-6 py-3 text-xs font-bold uppercase tracking-wider transition">
                    <span>Book Exhibitor Space →</span>
                </a>
            </div>
        </div>

        <!-- RIGHT COLUMN: WHO VISITS (VISITOR AUDIENCE) -->
        <div class="p-8 sm:p-12 lg:p-14 bg-[#151515] flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between gap-3 mb-6">
                    <span class="px-4 py-1.5 rounded-full bg-white text-[#0A0A0A] text-[11px] font-bold uppercase tracking-widest">
                        VISITOR PROFILE • 15,000+ BUYERS
                    </span>
                    <span class="text-xs font-mono text-neutral-400">SOURCE & NETWORK</span>
                </div>

                <h2 class="text-2xl sm:text-4xl font-medium tracking-tight">
                    Who Visits WIE 2027?
                </h2>
                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                    Verified trade professionals, international hosted buyers, and high-net-worth families actively booking venues, vendors, and collections:
                </p>

                <ul class="mt-6 space-y-4 border-t border-white/10 pt-6 text-sm text-neutral-300">
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-white mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Destination Wedding Planners & Event Designers:</strong> Domestic and international planners sourcing venues, caterers, and production partners.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-white mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Hosted International Buyers & Travel Operators:</strong> Outbound wedding specialists and luxury DMCs from UAE, UK, USA, Europe & ASEAN.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-white mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Hotel General Managers & F&B / Banquet Directors:</strong> Hospitality leaders scouting catering partners, decor vendors, and wedding business tie-ups.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-white mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Bridal Boutique Owners, Retailers & Wholesale Buyers:</strong> Multi-designer store buyers sourcing saree, couture, and trousseau collections.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-white mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">Artists, Photographers, Chefs & Service Vendors:</strong> Independent wedding specialists networking for multi-city collaborations and roadshows.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-2 h-2 rounded-full bg-white mt-1.5 shrink-0"></span>
                        <span><strong class="text-white">HNI & NRI Wedding Families:</strong> Couples and families planning luxury destination celebrations in 2027–28.</span>
                    </li>
                </ul>
            </div>

            <div class="mt-8 pt-6 border-t border-white/10 flex flex-wrap items-center justify-between gap-4">
                <span class="text-xs text-neutral-400">Trade Visitor, ₹100 Cr Food & Meeting Passes</span>
                <a href="{{ url('/tickets-registration') }}" class="inline-flex items-center gap-2 bg-white hover:bg-[#FF5500] text-[#0A0A0A] hover:text-white px-6 py-3 text-xs font-bold uppercase tracking-wider transition">
                    <span>Get Visitor Pass →</span>
                </a>
            </div>
        </div>

    </div>

    <!-- 4. Bottom Action Banner -->
    <div class="p-8 sm:p-12 lg:px-16 bg-[#161616] flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
        <div>
            <span class="text-xs font-semibold uppercase tracking-widest text-[#FF5500]">05 – 07 MARCH 2027 • YASHOBHOOMI (IICC), NEW DELHI</span>
            <h3 class="text-xl sm:text-2xl font-medium mt-1">
                Ready To Join India’s Largest Destination Wedding Marketplace?
            </h3>
            <p class="text-sm text-neutral-400 mt-1">
                Exhibition Help Center: <span class="text-white font-semibold">999-185-6776</span> • team@weddingindiaexpo.com
            </p>
        </div>
        <div class="flex flex-wrap gap-3 shrink-0">
            <a href="{{ url('/tickets-registration') }}" class="inline-flex items-center gap-2 bg-white text-[#0A0A0A] hover:bg-[#FF5500] hover:text-white px-6 py-4 text-xs font-bold uppercase tracking-wider transition">
                <span>Visitor Registration →</span>
            </a>
            <a href="{{ url('/exhibitor') }}" class="inline-flex items-center gap-2 bg-[#FF5500] text-white hover:bg-white hover:text-[#0A0A0A] px-6 py-4 text-xs font-bold uppercase tracking-wider transition">
                <span>Exhibitor Inquiry →</span>
            </a>
        </div>
    </div>

</section>    
    <x-whyshouldyouvisit />


    @elseif($board == 'join-community')
        <section id="join-wedding-community" class="w-full max-w-[1280px] mx-auto bg-[#111111] text-white border-t border-white/15">

            <!-- 1. Split-Horizon Hero Banner: Join The Wedding Community (₹3,500 / 2 Years) -->
            <div class="relative bg-[#111111] border-b border-white/15 overflow-hidden">
                <!-- Top White Horizon Band -->
                <div class="hidden lg:block absolute top-0 inset-x-0 h-[112px] bg-white z-0"></div>

                <!-- Ambient Warm Glow -->
                <div class="absolute top-24 right-10 w-[480px] h-[320px] rounded-full bg-gradient-to-tr from-[#FF5500]/20 via-amber-500/10 to-transparent blur-[110px] pointer-events-none z-0"></div>

                <div class="relative z-10 p-8 sm:p-12 lg:pt-7 lg:px-16 lg:pb-14">
                    <div class="flex flex-wrap items-center justify-between gap-4 mb-8 lg:mb-12">
                        <span class="bg-[#FF5500] text-white text-[11px] font-semibold tracking-widest uppercase px-5 py-2 rounded-full shadow-md">
                            OFFICIAL WEDDING INDUSTRY COMMUNITY • 2-YEAR MEMBERSHIP
                        </span>
                        <span class="text-xs font-semibold uppercase tracking-widest text-neutral-400 lg:text-[#0A0A0A]">
                            WEDDING INDIA EXPO • YASHOBHOOMI (IICC), NEW DELHI
                        </span>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
                        <div class="lg:col-span-8">
                            <h2 class="text-4xl sm:text-6xl font-medium tracking-[-0.035em] leading-[1.04]">
                                <span class="block text-white lg:text-[#0A0A0A]">Connect With India’s</span>
                                <span class="block text-white mt-1">Wedding Community.</span>
                            </h2>
                            <p class="text-sm sm:text-base text-neutral-300 mt-6 max-w-2xl leading-relaxed">
                                Expand your business network across every Indian state and international wedding hub. Lock in <strong class="text-white">2 Full Years</strong> of Business Awards recognition, annual exhibition platform privileges, Wedding TV & Magazine marketing tools, state roadshows, and Hosted Buyer solutions.
                            </p>
                        </div>

                        <!-- High-Contrast 2-Year Membership Pricing Card -->
                        <div class="lg:col-span-4 bg-white text-[#0A0A0A] p-6 sm:p-8 border-t-4 border-[#FF5500]">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-[#FF5500]">
                                ALL-ACCESS COMMUNITY PASS
                            </span>
                            <div class="mt-2 flex items-baseline gap-2">
                                <span class="text-4xl sm:text-5xl font-bold tracking-tight">₹3,500</span>
                                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-neutral-600">/ 2 Years</span>
                            </div>
                            <p class="text-xs text-neutral-600 mt-2 leading-relaxed">
                                730 Days of National & International Networking, Awards Eligibility, Media Visibility & Roadshow Access.
                            </p>
                            <a href="#community-registration-form" class="mt-5 group flex items-center justify-between w-full bg-[#111111] hover:bg-[#FF5500] text-white px-5 py-3.5 transition-colors duration-300">
                                <span class="text-xs font-bold uppercase tracking-wider">Join Community — ₹3,500 / 2 Yrs</span>
                                <svg class="w-4 h-4 text-[#FF5500] group-hover:text-white transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 7L7 17M17 17H7V7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Complete 6-in-1 Ecosystem Included With Your ₹3,500 / 2-Year Membership -->
            <div class="p-8 sm:p-12 lg:p-16 border-b border-white/15">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                    <div>
                        <span class="text-xs font-semibold uppercase tracking-widest text-[#FF5500]">What You Unlock For 2 Full Years</span>
                        <h3 class="text-2xl sm:text-4xl font-medium tracking-tight mt-1">6 Growth Pillars In One Community Pass</h3>
                    </div>
                    <span class="text-xs uppercase tracking-widest text-neutral-400">Valid Across FY 2026–27 & FY 2027–28</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- Pillar 1: Business Awards & Industry Recognition -->
                    <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                        <div>
                            <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                                <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                                <span class="relative z-10 px-3 py-1 bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-wider rounded-full">
                                    01 • AWARDS & RECOGNITION
                                </span>
                                <span class="relative z-10 text-xs font-mono text-neutral-300">2-YEAR VALIDITY</span>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold tracking-tight">Business Awards & Honor Roll</h4>
                                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                                    Get nominated and recognized at the <strong class="text-white">Global Excellence & Innovation Awards</strong>. Receive official trophies, verified winner/nominee badges, and permanent industry directory listing for 2 years.
                                </p>
                            </div>
                        </div>
                        <div class="px-6 py-3.5 bg-[#111111] border-t border-white/10 text-xs font-semibold text-neutral-300">
                            Stage Recognition at Yashobhoomi, New Delhi
                        </div>
                    </div>

                    <!-- Pillar 2: Annual Exhibition Platform -->
                    <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                        <div>
                            <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                                <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                                <span class="relative z-10 px-3 py-1 bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-wider rounded-full">
                                    02 • EXHIBITION PLATFORM
                                </span>
                                <span class="relative z-10 text-xs font-mono text-neutral-300">MARCH 5–7, 2027</span>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold tracking-tight">Annual Mega Exhibition Access</h4>
                                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                                    Priority VIP trade access and preferential exhibitor booth rates at <strong class="text-white">Wedding India Expo 2027</strong> & co-located <strong class="text-white">Wedding Saree Expo</strong> at Yashobhoomi (IICC), New Delhi.
                                </p>
                            </div>
                        </div>
                        <div class="px-6 py-3.5 bg-[#111111] border-t border-white/10 text-xs font-semibold text-neutral-300">
                            250+ Exhibitors • 28 States • 18+ Countries
                        </div>
                    </div>

                    <!-- Pillar 3: Wedding TV Marketing Tool -->
                    <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                        <div>
                            <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                                <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                                <span class="relative z-10 px-3 py-1 bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-wider rounded-full">
                                    03 • WEDDING TV
                                </span>
                                <span class="relative z-10 text-xs font-mono text-neutral-300">BROADCAST & TALK SHOW</span>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold tracking-tight">Wedding India TV Spotlight</h4>
                                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                                    Share your expertise on <strong class="text-white">Smart Business Talk Shows</strong>, video interviews, and digital broadcasts distributed across social and B2B wedding channels.
                                </p>
                            </div>
                        </div>
                        <div class="px-6 py-3.5 bg-[#111111] border-t border-white/10 text-xs font-semibold text-neutral-300">
                            Video Authority & Brand Storytelling Tool
                        </div>
                    </div>

                    <!-- Pillar 4: Wedding Industry Magazine -->
                    <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                        <div>
                            <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                                <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                                <span class="relative z-10 px-3 py-1 bg-white text-[#0A0A0A] text-[10px] font-bold uppercase tracking-wider rounded-full">
                                    04 • INDUSTRY MAGAZINE
                                </span>
                                <span class="relative z-10 text-xs font-mono text-neutral-300">PRINT & DIGITAL</span>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold tracking-tight">Wedding India Trade Magazine</h4>
                                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                                    Get your company profile, regional expertise, and seasonal portfolio published in our flagship wedding trade magazine circulated to top planners, hotels, and NRI buyers.
                                </p>
                            </div>
                        </div>
                        <div class="px-6 py-3.5 bg-[#111111] border-t border-white/10 text-xs font-semibold text-neutral-300">
                            Editorial Feature & Directory Listing
                        </div>
                    </div>

                    <!-- Pillar 5: State & International Roadshows -->
                    <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                        <div>
                            <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                                <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                                <span class="relative z-10 px-3 py-1 bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-wider rounded-full">
                                    05 • CITY ROADSHOWS
                                </span>
                                <span class="relative z-10 text-xs font-mono text-neutral-300">ONLINE + OFFLINE</span>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold tracking-tight">State & Global Business Roadshows</h4>
                                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                                    Participate in multi-city offline roadshows across North, West, South & East India plus international hubs (UAE, Thailand, UK) alongside monthly online buyer meets.
                                </p>
                            </div>
                        </div>
                        <div class="px-6 py-3.5 bg-[#111111] border-t border-white/10 text-xs font-semibold text-neutral-300">
                            Year-Round Regional & Global Expansion
                        </div>
                    </div>

                    <!-- Pillar 6: Buyer Hosting Solution -->
                    <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                        <div>
                            <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                                <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                                <span class="relative z-10 px-3 py-1 bg-white text-[#0A0A0A] text-[10px] font-bold uppercase tracking-wider rounded-full">
                                    06 • HOSTED BUYER SOLUTION
                                </span>
                                <span class="relative z-10 text-xs font-mono text-neutral-300">1-ON-1 MATCHMAKING</span>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold tracking-tight">Curated Buyer Hosting & FAM Visits</h4>
                                <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                                    Connect directly with vetted out-of-state wedding planners and international buyers via pre-scheduled B2B meetings, Hosted Buyer Lounge access, and venue FAM site visits.
                                </p>
                            </div>
                        </div>
                        <div class="px-6 py-3.5 bg-[#111111] border-t border-white/10 text-xs font-semibold text-neutral-300">
                            Verified Decision-Maker Introductions
                        </div>
                    </div>

                </div>
            </div>

            <!-- 3. Who Should Join & 2-Year Membership Value Strip -->
            <div class="grid grid-cols-1 lg:grid-cols-12 border-b border-white/15">
                <div class="lg:col-span-7 p-8 sm:p-12 lg:p-16 border-b lg:border-b-0 lg:border-r border-white/15">
                    <span class="text-xs font-semibold uppercase tracking-widest text-[#FF5500]">Built For Every Wedding Vertical</span>
                    <h3 class="text-2xl sm:text-4xl font-medium tracking-tight mt-2">
                        One Network Connecting Suppliers, Venues & Planners
                    </h3>
                    <p class="text-sm text-neutral-400 mt-4 leading-relaxed">
                        Whether you operate in a single state or execute international destination weddings, our community bridges regional specialists with high-volume buyers across India and abroad.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-2.5">
                        <span class="px-4 py-2 bg-[#161616] border border-white/15 text-xs font-medium">Wedding Planners</span>
                        <span class="px-4 py-2 bg-[#161616] border border-white/15 text-xs font-medium">Luxury Hotels & Palaces</span>
                        <span class="px-4 py-2 bg-[#161616] border border-white/15 text-xs font-medium">Wedding Caterers & Chefs</span>
                        <span class="px-4 py-2 bg-[#161616] border border-white/15 text-xs font-medium">Saree & Bridal Couture</span>
                        <span class="px-4 py-2 bg-[#161616] border border-white/15 text-xs font-medium">Decorators & Production</span>
                        <span class="px-4 py-2 bg-[#161616] border border-white/15 text-xs font-medium">Tourism Boards</span>
                        <span class="px-4 py-2 bg-[#161616] border border-white/15 text-xs font-medium">Photographers & Artists</span>
                        <span class="px-4 py-2 bg-[#161616] border border-white/15 text-xs font-medium">Gifting & Invitations</span>
                    </div>
                </div>

                <div class="lg:col-span-5 bg-white text-[#0A0A0A] p-8 sm:p-12 lg:p-16 flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-widest text-[#FF5500]">2-YEAR VALUE SUMMARY</span>
                        <h4 class="text-2xl sm:text-3xl font-bold tracking-tight mt-2">
                            Just ₹1,750 / Year When You Lock In The 2-Year Plan
                        </h4>
                        <ul class="mt-6 space-y-3 border-t border-black/10 pt-5 text-sm font-medium text-neutral-800">
                            <li class="flex items-center justify-between">
                                <span>Business Awards Nomination & Recognition</span>
                                <span class="font-bold text-[#FF5500]">Included</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>Annual Exhibition Platform & VIP Pass</span>
                                <span class="font-bold text-[#FF5500]">Included</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>Wedding TV & Magazine Feature Slot</span>
                                <span class="font-bold text-[#FF5500]">Included</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>State Roadshows & Buyer Hosting Access</span>
                                <span class="font-bold text-[#FF5500]">Included</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8 pt-4 border-t border-black/10 flex items-baseline justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-neutral-500">Total 2-Year Fee</span>
                        <span class="text-3xl font-bold text-[#0A0A0A]">₹3,500 <span class="text-xs font-normal text-neutral-500">(24 Months)</span></span>
                    </div>
                </div>
            </div>

            <!-- 4. Join Community Registration Form -->
            <div id="community-registration-form" class="p-8 sm:p-12 lg:p-16">
                <div class="max-w-4xl mx-auto bg-white text-[#0A0A0A] p-8 sm:p-12 border-t-4 border-[#FF5500]">
                    <div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-black/10">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-widest text-[#FF5500]">INSTANT COMMUNITY ONBOARDING</span>
                            <h3 class="text-2xl sm:text-3xl font-bold tracking-tight mt-1">Join The Wedding Community (₹3,500 / 2 Years)</h3>
                        </div>
                        <span class="bg-[#111111] text-white text-xs font-bold px-4 py-2 rounded-full">
                            Helpline: 999-185-6776
                        </span>
                    </div>

                    <form class="mt-8 space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Your Full Name *</label>
                                <input type="text" placeholder="Enter your name" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Company / Brand Name *</label>
                                <input type="text" placeholder="Enter your business name" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Business Category *</label>
                                <select class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm font-medium focus:outline-none focus:border-[#FF5500]">
                                    <option value="planner">Wedding Planner</option>
                                    <option value="hotel-venue">Hotel / Resort / Venue</option>
                                    <option value="caterer">Wedding Caterer / Chef</option>
                                    <option value="saree-couture">Wedding Saree / Bridal Couture</option>
                                    <option value="decor-production">Decor / Event Production</option>
                                    <option value="other">Other Wedding Service</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">WhatsApp Number *</label>
                                <input type="tel" placeholder="+91 999-185-6776" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">City & State *</label>
                                <input type="text" placeholder="e.g., New Delhi / Jaipur" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Business Email *</label>
                                <input type="email" placeholder="you@company.com" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Primary Goal With Community *</label>
                                <select class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm font-medium focus:outline-none focus:border-[#FF5500]">
                                    <option value="all">All Benefits (Awards + Expo + TV/Magazine + Roadshows)</option>
                                    <option value="awards">Business Awards & Industry Recognition</option>
                                    <option value="marketing">Wedding TV & Magazine Brand Marketing</option>
                                    <option value="buyers">Hosted Buyer Meets & State Roadshows</option>
                                </select>
                            </div>
                        </div>

                        <div class="pt-2 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-t border-black/10">
                            <p class="text-xs text-neutral-600">
                                2-Year Membership Fee: <strong class="text-[#0A0A0A]">₹3,500</strong> • Includes Wedding India Expo 2027 (Yashobhoomi, New Delhi)
                            </p>
                            <button type="submit" class="inline-flex items-center justify-center gap-3 bg-[#111111] hover:bg-[#FF5500] text-white px-8 py-4 text-xs sm:text-sm font-bold uppercase tracking-wider transition-colors duration-300 cursor-pointer">
                                <span>Proceed To Join — ₹3,500 / 2 Yrs</span>
                                <svg class="w-4 h-4 text-[#FF5500]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 7L7 17M17 17H7V7"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    @elseif($board == 'join-wedding-roadshows-community')
        <x-roadshow />
    @endif
</main>
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
    @elseif($board == 'join-community')
        <section id="promote-brand-products-services" class="w-full max-w-[1280px] mx-auto bg-[#111111] text-white border-t border-white/15">

    <!-- 1. Split-Horizon Hero Header: Promote Your Brand, Products & Services -->
    <div class="relative bg-[#111111] border-b border-white/15 overflow-hidden">
        <!-- Top White Horizon Band -->
        <div class="hidden lg:block absolute top-0 inset-x-0 h-[112px] bg-white z-0"></div>

        <!-- Subtle Ambient Glow -->
        <div class="absolute top-24 right-10 w-[460px] h-[300px] rounded-full bg-gradient-to-tr from-[#FF5500]/20 via-amber-500/10 to-transparent blur-[110px] pointer-events-none z-0"></div>

        <div class="relative z-10 p-8 sm:p-12 lg:pt-7 lg:px-16 lg:pb-14">
            <div class="flex flex-wrap items-center justify-between gap-4 mb-8 lg:mb-12">
                <span class="bg-[#FF5500] text-white text-[11px] font-semibold tracking-widest uppercase px-5 py-2 rounded-full shadow-md">
                    VISITOR TO EXHIBITOR • BRAND ACCELERATOR
                </span>
                <span class="text-xs font-semibold uppercase tracking-widest text-neutral-400 lg:text-[#0A0A0A]">
                    WEDDING INDIA EXPO • MARCH 5–7, 2027 • YASHOBHOOMI, NEW DELHI
                </span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
                <div class="lg:col-span-8">
                    <h2 class="text-4xl sm:text-6xl font-medium tracking-[-0.035em] leading-[1.04]">
                        <span class="block text-white lg:text-[#0A0A0A]">Promote Your Brand,</span>
                        <span class="block text-white mt-1">Products & Services.</span>
                    </h2>
                    <p class="text-sm sm:text-base text-neutral-300 mt-6 max-w-2xl leading-relaxed">
                        Why just walk the aisles as a visitor when 15,000+ destination wedding planners, luxury hoteliers, NRI families, and global buyers are actively looking for what you build? Step from the visitor badge onto the main stage of <strong class="text-white">Wedding India Expo 2027</strong>.
                    </p>
                </div>

                <!-- High-Contrast Conversion Hook Card -->
                <div class="lg:col-span-4 bg-white text-[#0A0A0A] p-6 sm:p-8 border-l-4 border-[#FF5500]">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-[#FF5500]">
                        TURN VISITS INTO CONTRACTS
                    </span>
                    <h3 class="text-lg sm:text-xl font-bold tracking-tight mt-1">
                        Ready To Showcase Your Business?
                    </h3>
                    <p class="text-xs text-neutral-600 mt-2 leading-relaxed">
                        Whether you are launching a new bridal label, scaling catering & decor services, or expanding into destination venues—connect with our team for a tailored brand showcase plan.
                    </p>
                    <a href="#connect-brand-desk" class="mt-5 group flex items-center justify-between w-full bg-[#111111] hover:bg-[#FF5500] text-white px-5 py-3.5 transition-colors duration-300">
                        <span class="text-xs font-bold uppercase tracking-wider">Connect With Our Team</span>
                        <svg class="w-4 h-4 text-[#FF5500] group-hover:text-white transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 7L7 17M17 17H7V7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Why Visitors Upgrade To Brand Promotion (3 Psychological & Business Triggers) -->
    <div class="grid grid-cols-1 md:grid-cols-3 border-b border-white/15 divide-y md:divide-y-0 md:divide-x divide-white/15">
        
        <div class="p-8 sm:p-10">
            <span class="text-xs font-mono font-bold text-[#FF5500]">01 / DIRECT BUYER ACCESS</span>
            <h3 class="text-xl sm:text-2xl font-medium mt-3">Meet Decision-Makers Face-To-Face</h3>
            <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                Skip months of cold calls and social media ad spend. Put your products and services directly in front of wedding planners, corporate buyers, and high-net-worth families ready to book for the 2027–28 wedding season.
            </p>
        </div>

        <div class="p-8 sm:p-10">
            <span class="text-xs font-mono font-bold text-[#FF5500]">02 / INSTANT CREDIBILITY</span>
            <h3 class="text-xl sm:text-2xl font-medium mt-3">Position Your Brand Alongside Leaders</h3>
            <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                Exhibiting or partnering at <strong class="text-white">Yashobhoomi (IICC), New Delhi</strong> instantly elevates your market authority—turning regional suppliers into trusted national and international wedding brands.
            </p>
        </div>

        <div class="p-8 sm:p-10">
            <span class="text-xs font-mono font-bold text-[#FF5500]">03 / 365-DAY VISIBILITY</span>
            <h3 class="text-xl sm:text-2xl font-medium mt-3">Beyond 3 Days Of Exhibition</h3>
            <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                Get featured across Wedding India TV, state roadshows, digital directories, and targeted email/WhatsApp campaigns reaching 30,000+ verified wedding trade professionals.
            </p>
        </div>

    </div>

    <!-- 3. Choose How You Want To Promote (Brand • Products • Services) -->
    <div class="p-8 sm:p-12 lg:p-16 border-b border-white/15">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-semibold uppercase tracking-widest text-[#FF5500]">Tailored Promotion Formats</span>
                <h3 class="text-2xl sm:text-4xl font-medium tracking-tight mt-1">Showcase Your Brand, Products Or Services</h3>
            </div>
            <span class="text-xs uppercase tracking-widest text-neutral-400">Flexible Entry For Emerging & Established Businesses</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Track A: Brand Promotion -->
            <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                <div>
                    <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                        <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                        <span class="relative z-10 px-3 py-1 bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-wider rounded-full">
                            01 • BRAND VISIBILITY
                        </span>
                        <span class="relative z-10 text-xs font-mono text-neutral-300">SPONSORSHIP & MEDIA</span>
                    </div>

                    <div class="p-6 sm:p-8">
                        <h4 class="text-2xl font-semibold tracking-tight">Promote Your Brand</h4>
                        <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                            Ideal for hotels, destination venues, luxury planners, and legacy houses seeking top-of-mind recall across India and global NRI markets.
                        </p>
                        <ul class="mt-6 space-y-3 border-t border-white/10 pt-5 text-sm text-neutral-300">
                            <li class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                                <span>Co-Branding & Pavilion Naming Rights at Yashobhoomi</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                                <span>Wedding India TV Talk Show & Keynote Speaker Slot</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                                <span>Digital Directory Spotlight & Trade Campaign Blasts</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="px-6 sm:px-8 py-4 bg-[#111111] border-t border-white/10">
                    <a href="#connect-brand-desk" class="flex items-center justify-between text-xs font-bold uppercase tracking-wider text-white hover:text-[#FF5500] transition">
                        <span>Explore Brand Packages</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Track B: Product Showcase -->
            <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                <div>
                    <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                        <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                        <span class="relative z-10 px-3 py-1 bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-wider rounded-full">
                            02 • PRODUCT LAUNCH & B2B
                        </span>
                        <span class="relative z-10 text-xs font-mono text-neutral-300">EXHIBITION STALLS</span>
                    </div>

                    <div class="p-6 sm:p-8">
                        <h4 class="text-2xl font-semibold tracking-tight">Showcase Your Products</h4>
                        <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                            Built for bridal sarees & couture labels, jewelry, luxury gifting hampers, artisanal sweets, invitations, and decor installations.
                        </p>
                        <ul class="mt-6 space-y-3 border-t border-white/10 pt-5 text-sm text-neutral-300">
                            <li class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                                <span>Dedicated Booths Starting From ₹65,000</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                                <span>Live Display & Wholesale Order Booking With Buyers</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                                <span>Co-Located Wedding Saree Expo 2027 Access</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="px-6 sm:px-8 py-4 bg-[#111111] border-t border-white/10">
                    <a href="#connect-brand-desk" class="flex items-center justify-between text-xs font-bold uppercase tracking-wider text-white hover:text-[#FF5500] transition">
                        <span>Request Booth Floorplan</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Track C: Service Empanelment -->
            <div class="bg-[#161616] border border-white/15 hover:border-[#FF5500] transition-colors flex flex-col justify-between overflow-hidden">
                <div>
                    <div class="relative h-24 bg-[#111111] border-b border-white/10 px-6 flex items-center justify-between">
                        <div class="absolute top-0 inset-x-0 h-[42%] bg-white"></div>
                        <span class="relative z-10 px-3 py-1 bg-white text-[#0A0A0A] text-[10px] font-bold uppercase tracking-wider rounded-full">
                            03 • SERVICE EMPANELMENT
                        </span>
                        <span class="relative z-10 text-xs font-mono text-neutral-300">PLANNERS & VENDORS</span>
                    </div>

                    <div class="p-6 sm:p-8">
                        <h4 class="text-2xl font-semibold tracking-tight">Pitch Your Services</h4>
                        <p class="text-sm text-neutral-400 mt-3 leading-relaxed">
                            Designed for wedding caterers, mixologists, photographers, entertainment artists, vintage transport fleets, and logistics specialists.
                        </p>
                        <ul class="mt-6 space-y-3 border-t border-white/10 pt-5 text-sm text-neutral-300">
                            <li class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                                <span>Live Food Tasting Pods, Bar Counters & Demo Zones</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                                <span>1-on-1 Matchmaking With Out-of-State Planners</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#FF5500] mt-1.5 shrink-0"></span>
                                <span>Founding Member Year-Round Network (₹3,500/Yr)</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="px-6 sm:px-8 py-4 bg-[#111111] border-t border-white/10">
                    <a href="#connect-brand-desk" class="flex items-center justify-between text-xs font-bold uppercase tracking-wider text-white hover:text-[#FF5500] transition">
                        <span>Get Service Empanelment</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- 4. Low-Friction Interactive "Let's Explore Together" Inquiry Form -->
    <div id="connect-brand-desk" class="p-8 sm:p-12 lg:p-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 bg-white text-[#0A0A0A] border-t-4 border-[#FF5500]">
            
            <!-- Left 5 Columns: Warm Invitation & Direct Helpline -->
            <div class="lg:col-span-5 p-8 sm:p-12 bg-neutral-100 border-b lg:border-b-0 lg:border-r border-black/10 flex flex-col justify-between">
                <div>
                    <span class="inline-block bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-widest px-3.5 py-1 rounded-full">
                        NO-OBLIGATION CONSULTATION
                    </span>
                    <h3 class="text-2xl sm:text-4xl font-bold tracking-tight mt-4 leading-tight">
                        Thinking About Promoting Your Business? Let’s Talk.
                    </h3>
                    <p class="text-sm text-neutral-700 mt-4 leading-relaxed">
                        Not sure which booth size, tasting pod, roadshow, or membership fits your budget? Share a few details—our exhibition advisors will send customized options and ROI ideas for your category.
                    </p>
                </div>

                <div class="mt-8 pt-6 border-t border-black/10 space-y-3">
                    <div>
                        <span class="block text-[10px] font-bold uppercase tracking-widest text-neutral-500">Exhibition Help Center</span>
                        <p class="text-xl font-bold text-[#0A0A0A]">999-185-6776</p>
                    </div>
                    <div>
                        <span class="block text-[10px] font-bold uppercase tracking-widest text-neutral-500">Official Desk</span>
                        <p class="text-sm font-semibold text-neutral-800">team@weddingindiaexpo.com</p>
                    </div>
                </div>
            </div>

            <!-- Right 7 Columns: Quick Connect Form -->
            <div class="lg:col-span-7 p-8 sm:p-12">
                <form class="space-y-5">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Your Name *</label>
                            <input type="text" placeholder="Enter your full name" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Brand / Company Name *</label>
                            <input type="text" placeholder="Your business name" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">WhatsApp / Phone *</label>
                            <input type="tel" placeholder="+91 999-185-6776" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">City & State *</label>
                            <input type="text" placeholder="e.g., New Delhi / Jaipur / Mumbai" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">What Would You Like To Promote? *</label>
                        <select class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm font-medium focus:outline-none focus:border-[#FF5500]">
                            <option value="stall">Book An Exhibition Stall (Products / Couture / Venues — From ₹65,000)</option>
                            <option value="catering-bar">Culinary Tasting Pod / Catering & Bar Showcase</option>
                            <option value="founding-member">Founding Member Network & Roadshows (₹3,500/Year)</option>
                            <option value="brand-sponsorship">Brand Sponsorship / Wedding India TV Feature</option>
                            <option value="explore">Just Exploring — Send Me Brochure & Tariff</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Tell Us Briefly About Your Products Or Services</label>
                        <textarea rows="3" placeholder="Share your category, target buyers, or any questions you have..." class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]"></textarea>
                    </div>

                    <div class="pt-2 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <span class="text-xs text-neutral-500">
                            March 5–7, 2027 • Yashobhoomi (IICC), Dwarka, New Delhi
                        </span>
                        <button type="submit" class="inline-flex items-center justify-center gap-3 bg-[#111111] hover:bg-[#FF5500] text-white px-8 py-4 text-xs sm:text-sm font-bold uppercase tracking-wider transition-colors duration-300 cursor-pointer">
                            <span>Request Brochure & Call Back</span>
                            <svg class="w-4 h-4 text-[#FF5500]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 7L7 17M17 17H7V7"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>
    @endif
</main>
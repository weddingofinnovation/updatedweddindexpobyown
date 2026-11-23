<main>
    @if($board == 'wedding-business-tour')
         <x-businesstour />
    @elseif($board == 'wedding-roadshow')
        <x-businesstour />
    @elseif($board == 'wedding-planner-community')
        <x-weddingcommunity />
    @elseif($board == 'tickets-registration')
        <section
    x-data="{
        step: 1,
        fullName: '',
        phone: '',
        email: '',
        ticketType: '100 Cr Wedding Food & Tasting Pass',
        meetingZone: 'Visitor & Exhibitor Meeting Lounge',
        nominateAwards: 'Yes — Nominate For Recognition',
        communityTools: ['Join as Founding Partner'],
        role: 'Wedding Planner',
        company: '',
        cityState: '',
        notes: '',
        submitted: false,
        goToStepTwo() {
            if (!this.fullName.trim() || !this.phone.trim() || !this.email.trim()) {
                this.$refs.stepOneError.classList.remove('hidden');
                return;
            }
            this.$refs.stepOneError.classList.add('hidden');
            this.step = 2;
        },
        toggleTool(tool) {
            if (this.communityTools.includes(tool)) {
                this.communityTools = this.communityTools.filter(item => item !== tool);
            } else {
                this.communityTools.push(tool);
            }
        }
    }"
    id="tickets-registration"
    class="w-full max-w-[1280px] mx-auto bg-[#111111] text-white border-t border-white/15"
>

    <!-- 1. Split-Horizon Hero Header -->
    <div class="relative bg-[#111111] border-b border-white/15 overflow-hidden">
        <!-- Top White Horizon Band -->
        <div class="hidden lg:block absolute top-0 inset-x-0 h-[112px] bg-white z-0"></div>

        <!-- Subtle Warm Amber-Orange Glow -->
        <div class="absolute top-24 right-10 w-[480px] h-[320px] rounded-full bg-gradient-to-tr from-[#FF5500]/20 via-amber-500/10 to-transparent blur-[110px] pointer-events-none z-0"></div>

        <div class="relative z-10 p-8 sm:p-12 lg:pt-7 lg:px-16 lg:pb-12">
            <div class="flex flex-wrap items-center justify-between gap-4 mb-8 lg:mb-12">
                <span class="bg-[#FF5500] text-white text-[11px] font-semibold tracking-widest uppercase px-5 py-2 rounded-full shadow-md">
                    TICKETS & REGISTRATION • 2-STEP FLOW
                </span>
                <span class="text-xs font-semibold uppercase tracking-widest text-neutral-400 lg:text-[#0A0A0A]">
                    05 – 07 MARCH 2027 • YASHOBHOOMI (IICC), NEW DELHI
                </span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
                <div class="lg:col-span-8">
                    <h1 class="text-4xl sm:text-6xl font-medium tracking-[-0.035em] leading-[1.04]">
                        <span class="block text-white lg:text-[#0A0A0A]">Show Tickets,</span>
                        <span class="block text-white mt-1">Meetings & Community Access.</span>
                    </h1>
                    <p class="text-sm sm:text-base text-neutral-300 mt-5 max-w-2xl leading-relaxed">
                        Start with your basic contact details to unlock show entry passes—including the <strong class="text-white">₹100 Cr Wedding Food</strong> experience, <strong class="text-white">Professional Visitor</strong> meeting access, <strong class="text-white">Award Nominations</strong>, and <strong class="text-white">Founding Partner / Speaker / Podcast / Magazine</strong> opportunities.
                    </p>
                </div>

                <!-- Step Indicator Pill Box -->
                <div class="lg:col-span-4 bg-white text-[#0A0A0A] p-6 border-t-4 border-[#FF5500]">
                    <div class="flex items-center justify-between text-[11px] font-bold uppercase tracking-widest">
                        <span :class="step === 1 ? 'text-[#FF5500]' : 'text-neutral-500'">01. Contact Details</span>
                        <span class="text-neutral-300">/</span>
                        <span :class="step === 2 ? 'text-[#FF5500]' : 'text-neutral-500'">02. Ticket & Solutions</span>
                    </div>
                    <p class="text-xs text-neutral-600 mt-3 leading-relaxed">
                        Help Center: <strong class="text-[#0A0A0A]">999-185-6776</strong> • team@weddingindiaexpo.com
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Two-Step Interactive Registration Container -->
    <div class="p-6 sm:p-10 lg:p-16">
        <div class="max-w-5xl mx-auto bg-white text-[#0A0A0A] border-t-4 border-[#FF5500] p-6 sm:p-10 lg:p-12">

            <!-- STEP 1: Name, Phone & Email -->
            <div x-show="step === 1 && !submitted" class="space-y-6">
                <div class="flex flex-wrap items-center justify-between gap-4 pb-5 border-b border-black/10">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-widest text-[#FF5500]">STEP 01 OF 02 • INSTANT ACCESS</span>
                        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight mt-1">
                            Enter Your Name, Phone & Email To Continue
                        </h2>
                    </div>
                    <span class="bg-[#111111] text-white text-xs font-bold px-4 py-1.5 rounded-full">
                        Takes 15 Seconds
                    </span>
                </div>

                <p x-ref="stepOneError" class="hidden text-xs font-bold text-red-600 bg-red-50 border border-red-200 px-4 py-2.5">
                    Please enter your Full Name, Phone / WhatsApp number, and Email address to open the next form.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Full Name *</label>
                        <input
                            type="text"
                            x-model="fullName"
                            placeholder="Enter your full name"
                            class="w-full bg-neutral-100 border border-black/15 px-4 py-3.5 text-sm focus:outline-none focus:border-[#FF5500]"
                        />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Phone / WhatsApp *</label>
                        <input
                            type="tel"
                            x-model="phone"
                            placeholder="+91 999-185-6776"
                            class="w-full bg-neutral-100 border border-black/15 px-4 py-3.5 text-sm focus:outline-none focus:border-[#FF5500]"
                        />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Email Address *</label>
                        <input
                            type="email"
                            x-model="email"
                            placeholder="you@company.com"
                            class="w-full bg-neutral-100 border border-black/15 px-4 py-3.5 text-sm focus:outline-none focus:border-[#FF5500]"
                        />
                    </div>
                </div>

                <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-t border-black/10">
                    <span class="text-xs text-neutral-600">
                        Next step: Choose entry tickets, meeting lounge access, award nominations & community tools.
                    </span>
                    <button
                        type="button"
                        @click="goToStepTwo()"
                        class="inline-flex items-center justify-center gap-3 bg-[#111111] hover:bg-[#FF5500] text-white px-8 py-4 text-xs sm:text-sm font-bold uppercase tracking-wider transition-colors duration-300 cursor-pointer"
                    >
                        <span>Continue To Ticket & Details Form</span>
                        <svg class="w-4 h-4 text-[#FF5500]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 7L7 17M17 17H7V7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- STEP 2: Show Tickets, Meeting Access, Award Nomination & Community / Marketing Solutions -->
            <form x-show="step === 2 && !submitted" @submit.prevent="submitted = true" class="space-y-8" style="display: none;">
                <div class="flex flex-wrap items-center justify-between gap-4 pb-5 border-b border-black/10">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-widest text-[#FF5500]">STEP 02 OF 02 • PERSONALIZE YOUR PASS</span>
                        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight mt-1">
                            Select Show Tickets, Networking, Awards & Community Plan
                        </h2>
                        <p class="text-xs text-neutral-600 mt-1">
                            Registering for: <strong x-text="fullName"></strong> (<span x-text="phone"></span> • <span x-text="email"></span>)
                        </p>
                    </div>
                    <button
                        type="button"
                        @click="step = 1"
                        class="px-4 py-2 border border-black/20 hover:border-[#FF5500] text-xs font-bold uppercase tracking-wider cursor-pointer"
                    >
                        ← Edit Contact Details
                    </button>
                </div>

                <!-- A. Show Entry Ticket Selection -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-neutral-800 mb-3">
                        01. Choose Show Entry Ticket *
                    </label>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <label
                            @click="ticketType = '100 Cr Wedding Food & Tasting Pass'"
                            class="p-4 border-2 cursor-pointer transition"
                            :class="ticketType === '100 Cr Wedding Food & Tasting Pass' ? 'border-[#FF5500] bg-orange-50/60' : 'border-black/15 bg-neutral-100'"
                        >
                            <span class="inline-block px-2.5 py-0.5 bg-[#FF5500] text-white text-[10px] font-bold uppercase rounded-full">CULINARY & BAR</span>
                            <p class="text-sm font-bold mt-2">₹100 Cr Wedding Food Pass</p>
                            <p class="text-xs text-neutral-600 mt-1">Access food tasting pods, chef showcases, bar/mixology solutions & banquet displays.</p>
                        </label>

                        <label
                            @click="ticketType = 'Professional Visitor & Meeting Pass'"
                            class="p-4 border-2 cursor-pointer transition"
                            :class="ticketType === 'Professional Visitor & Meeting Pass' ? 'border-[#FF5500] bg-orange-50/60' : 'border-black/15 bg-neutral-100'"
                        >
                            <span class="inline-block px-2.5 py-0.5 bg-[#111111] text-white text-[10px] font-bold uppercase rounded-full">B2B MEETING ZONE</span>
                            <p class="text-sm font-bold mt-2">Professional Visitor Pass</p>
                            <p class="text-xs text-neutral-600 mt-1">Join curated meeting sessions to connect with visitors & exhibitors in dedicated meeting areas.</p>
                        </label>

                        <label
                            @click="ticketType = 'General Exhibition Visitor Entry'"
                            class="p-4 border-2 cursor-pointer transition"
                            :class="ticketType === 'General Exhibition Visitor Entry' ? 'border-[#FF5500] bg-orange-50/60' : 'border-black/15 bg-neutral-100'"
                        >
                            <span class="inline-block px-2.5 py-0.5 bg-neutral-800 text-white text-[10px] font-bold uppercase rounded-full">SHOW FLOOR</span>
                            <p class="text-sm font-bold mt-2">General Show Entry Ticket</p>
                            <p class="text-xs text-neutral-600 mt-1">Full 3-day exhibition floor entry across Wedding India Expo & Saree Expo pavilions.</p>
                        </label>
                    </div>
                </div>

                <!-- B. Role, Company & Meeting Area Preference -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Your Role *</label>
                        <select x-model="role" class="w-full bg-neutral-100 border border-black/15 px-3.5 py-3 text-sm font-medium focus:outline-none focus:border-[#FF5500]">
                            <option value="Wedding Planner">Wedding Planner</option>
                            <option value="Wedding Caterer / Chef">Wedding Caterer / Chef</option>
                            <option value="Hotel / Resort / Venue">Hotel / Resort / Venue</option>
                            <option value="Saree / Bridal Couture">Saree / Bridal Couture</option>
                            <option value="Decorator / Production">Decorator / Production</option>
                            <option value="Other Industry Visitor">Other Industry Visitor</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Company / Brand *</label>
                        <input type="text" x-model="company" placeholder="Your brand or firm name" class="w-full bg-neutral-100 border border-black/15 px-3.5 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">City & State *</label>
                        <input type="text" x-model="cityState" placeholder="e.g., New Delhi / Jaipur" class="w-full bg-neutral-100 border border-black/15 px-3.5 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Award Nomination</label>
                        <select x-model="nominateAwards" class="w-full bg-neutral-100 border border-black/15 px-3.5 py-3 text-sm font-medium focus:outline-none focus:border-[#FF5500]">
                            <option value="Yes — Nominate For Recognition">Yes — Nominate For Awards</option>
                            <option value="Interested — Send Award Details">Interested — Send Criteria</option>
                            <option value="Not At This Time">Not At This Time</option>
                        </select>
                    </div>
                </div>

                <!-- C. Community & Marketing Solutions Multi-Select -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-neutral-800 mb-3">
                        02. Select Community & Marketing Solutions You Want To Explore
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                        <template x-for="tool in [
                            'Join as Founding Partner',
                            'Join as Speaker',
                            'Connect for Podcast (Wedding TV)',
                            'Connect for Magazine',
                            'Visitor & Exhibitor Meeting Lounge',
                            'Roadshows & Buyer Community Plan'
                        ]" :key="tool">
                            <button
                                type="button"
                                @click="toggleTool(tool)"
                                class="flex items-center justify-between px-4 py-3 border text-left text-xs font-bold uppercase tracking-wider transition cursor-pointer"
                                :class="communityTools.includes(tool) ? 'bg-[#111111] text-white border-[#FF5500]' : 'bg-neutral-100 text-neutral-800 border-black/15 hover:border-[#FF5500]'"
                            >
                                <span x-text="tool"></span>
                                <span class="text-[#FF5500] ml-2" x-text="communityTools.includes(tool) ? '✓' : '+'"></span>
                            </button>
                        </template>
                    </div>
                </div>

                <!-- D. Custom Requirement / Planner Needs -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">
                        What Specific Plan Or Solution Is Your Business Looking For?
                    </label>
                    <textarea
                        rows="3"
                        x-model="notes"
                        placeholder="Tell us what you want to achieve—e.g., meeting specific exhibitors/buyers, winning industry recognition, speaking on stage, podcast/magazine feature, or joining as a wedding planner..."
                        class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]"
                    ></textarea>
                </div>

                <!-- Submit Bar -->
                <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-t border-black/10">
                    <span class="text-xs text-neutral-600">
                        Selected: <strong class="text-[#0A0A0A]" x-text="ticketType"></strong> • <strong class="text-[#FF5500]" x-text="nominateAwards"></strong>
                    </span>
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center gap-3 bg-[#FF5500] hover:bg-[#111111] text-white px-8 py-4 text-xs sm:text-sm font-bold uppercase tracking-wider transition-colors duration-300 cursor-pointer"
                    >
                        <span>Complete Ticket & Interest Registration →</span>
                    </button>
                </div>
            </form>

            <!-- Confirmation State -->
            <div x-show="submitted" class="py-8 text-center space-y-4" style="display: none;">
                <span class="inline-block px-4 py-1.5 rounded-full bg-[#FF5500] text-white text-xs font-bold uppercase tracking-widest">
                    REGISTRATION RECEIVED • WEDDING INDIA EXPO 2027
                </span>
                <h3 class="text-2xl sm:text-4xl font-bold tracking-tight">
                    Thank You, <span x-text="fullName"></span>!
                </h3>
                <p class="text-sm text-neutral-600 max-w-xl mx-auto leading-relaxed">
                    We have logged your preference for <strong class="text-[#0A0A0A]" x-text="ticketType"></strong> (<span x-text="nominateAwards"></span>) and will reach out on <strong x-text="phone"></strong> / <strong x-text="email"></strong>.
                </p>
                <div class="pt-4">
                    <button
                        type="button"
                        @click="submitted = false; step = 1"
                        class="px-6 py-3 bg-[#111111] hover:bg-[#FF5500] text-white text-xs font-bold uppercase tracking-wider transition cursor-pointer"
                    >
                        Register Another Pass
                    </button>
                </div>
            </div>

        </div>
    </div>

</section>
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
        
    @endif
</main>
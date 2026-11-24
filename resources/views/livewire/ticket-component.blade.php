<section id="tickets-registration" class="w-full max-w-[1280px] mx-auto bg-[#111111] text-white border-t border-white/15">

    <!-- 1. Split-Horizon Hero Header -->
    <div class="relative bg-[#111111] border-b border-white/15 overflow-hidden">
        <div class="hidden lg:block absolute top-0 inset-x-0 h-[112px] bg-white z-0"></div>
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
                        <span class="{{ $step === 1 ? 'text-[#FF5500]' : 'text-neutral-500' }}">01. Contact Details</span>
                        <span class="text-neutral-300">/</span>
                        <span class="{{ $step === 2 ? 'text-[#FF5500]' : 'text-neutral-500' }}">02. Ticket & Solutions</span>
                    </div>
                    <p class="text-sm text-neutral-600 mt-3 leading-relaxed">
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
            @if($step === 1 && !$submitted)
                <div class="space-y-6">
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

                    <form wire:submit.prevent="submitStepOne" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Full Name *</label>
                                <input
                                    type="text"
                                    wire:model="name"
                                    placeholder="Enter your full name"
                                    class="w-full bg-neutral-100 border border-black/15 px-4 py-3.5 text-sm focus:outline-none focus:border-[#FF5500]"
                                />
                                @error('name') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Phone / WhatsApp *</label>
                                <input
                                    type="tel"
                                    wire:model="phone"
                                    placeholder="+91 999-185-6776"
                                    class="w-full bg-neutral-100 border border-black/15 px-4 py-3.5 text-sm focus:outline-none focus:border-[#FF5500]"
                                />
                                @error('phone') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Email Address *</label>
                                <input
                                    type="email"
                                    wire:model="email"
                                    placeholder="you@company.com"
                                    class="w-full bg-neutral-100 border border-black/15 px-4 py-3.5 text-sm focus:outline-none focus:border-[#FF5500]"
                                />
                                @error('email') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-t border-black/10">
                            <span class="text-xs text-neutral-600">
                                Next step: Choose entry tickets, meeting lounge access, award nominations & community tools.
                            </span>
                            <button
                                type="submit"
                                wire:loading.attr="disabled"
                                class="inline-flex items-center justify-center gap-3 bg-[#111111] hover:bg-[#FF5500] text-white px-8 py-4 text-xs sm:text-sm font-bold uppercase tracking-wider transition-colors duration-300 cursor-pointer"
                            >
                                <span wire:loading.remove wire:target="submitStepOne">Continue To Ticket & Details Form</span>
                                <span wire:loading wire:target="submitStepOne">Saving...</span>
                                <svg class="w-4 h-4 text-[#FF5500]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 7L7 17M17 17H7V7"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            @endif

            <!-- STEP 2: Show Tickets, Meeting Access, Award Nomination & Community Solutions -->
            @if($step === 2 && !$submitted)
                <form wire:submit.prevent="submit" class="space-y-8">
                    <div class="flex flex-wrap items-center justify-between gap-4 pb-5 border-b border-black/10">
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-widest text-[#FF5500]">STEP 02 OF 02 • PERSONALIZE YOUR PASS</span>
                            <h2 class="text-2xl sm:text-3xl font-bold tracking-tight mt-1">
                                Select Show Tickets, Networking, Awards & Community Plan
                            </h2>
                            <p class="text-xs text-neutral-600 mt-1">
                                Registering for: <strong>{{ $name }}</strong> ({{ $phone }} • {{ $email }})
                            </p>
                        </div>
                        <button
                            type="button"
                            wire:click="backToStepOne"
                            class="px-4 py-2 border border-black/20 hover:border-[#FF5500] text-xs font-bold uppercase tracking-wider cursor-pointer"
                        >
                            ← Edit Contact Details
                        </button>
                    </div>

                    <!-- A. Show Entry Ticket Selection -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-800 mb-3">
                            1. Choose Show Entry Ticket *
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            @foreach([
                                ['title' => '100 Cr Wedding Food & Tasting Pass', 'badge' => 'CULINARY & BAR', 'badgeClass' => 'bg-[#FF5500] text-white', 'label' => '₹100 Cr Wedding Food Pass', 'desc' => 'Access food tasting pods, chef showcases, bar/mixology solutions & banquet displays.'],
                                ['title' => 'Professional Visitor & Meeting Pass', 'badge' => 'B2B MEETING ZONE', 'badgeClass' => 'bg-[#111111] text-white', 'label' => 'Professional Visitor Pass', 'desc' => 'Join curated meeting sessions to connect with visitors & exhibitors in dedicated meeting areas.'],
                                ['title' => 'General Exhibition Visitor Entry', 'badge' => 'SHOW FLOOR', 'badgeClass' => 'bg-neutral-800 text-white', 'label' => 'General Show Entry Ticket', 'desc' => 'Full 3-day exhibition floor entry across Wedding India Expo & Saree Expo pavilions.'],
                            ] as $t)
                                <button
                                    type="button"
                                    wire:click="$set('ticketType', '{{ $t['title'] }}')"
                                    class="text-left p-4 border-2 cursor-pointer transition {{ $ticketType === $t['title'] ? 'border-[#FF5500] bg-orange-50/60' : 'border-black/15 bg-neutral-100' }}"
                                >
                                    <span class="inline-block px-2.5 py-0.5 {{ $t['badgeClass'] }} text-[10px] font-bold uppercase rounded-full">{{ $t['badge'] }}</span>
                                    <p class="text-sm font-bold mt-2">{{ $t['label'] }}</p>
                                    <p class="text-xs text-neutral-600 mt-1">{{ $t['desc'] }}</p>
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- B. Role, Company & Award Nomination -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Your Role *</label>
                            <select wire:model="role" class="w-full bg-neutral-100 border border-black/15 px-3.5 py-3 text-sm font-medium focus:outline-none focus:border-[#FF5500]">
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
                            <input type="text" wire:model="company" placeholder="Your brand or firm name" class="w-full bg-neutral-100 border border-black/15 px-3.5 py-3 text-sm focus:outline-none focus:border-[#FF5500]" />
                            @error('company') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">City & State *</label>
                            <input type="text" wire:model="cityState" placeholder="e.g., New Delhi / Jaipur" class="w-full bg-neutral-100 border border-black/15 px-3.5 py-3 text-sm focus:outline-none focus:border-[#FF5500]" />
                            @error('cityState') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Award Nomination</label>
                            <select wire:model="nominateAwards" class="w-full bg-neutral-100 border border-black/15 px-3.5 py-3 text-sm font-medium focus:outline-none focus:border-[#FF5500]">
                                <option value="Yes — Nominate For Recognition">Yes — Nominate For Awards</option>
                                <option value="Interested — Send Award Details">Interested — Send Criteria</option>
                                <option value="Not At This Time">Not At This Time</option>
                            </select>
                        </div>
                    </div>

                    <!-- C. Community & Marketing Solutions Multi-Select -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-800 mb-3">
                            2. Select Community & Marketing Solutions You Want To Explore
                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach([
                                'Join as Founding Partner',
                                'Join as Speaker',
                                'Connect for Podcast (Wedding TV)',
                                'Connect for Magazine',
                                'Visitor & Exhibitor Meeting Lounge',
                                'Roadshows & Buyer Community Plan',
                            ] as $tool)
                                @php $active = in_array($tool, $communityTools, true); @endphp
                                <button
                                    type="button"
                                    wire:click="toggleTool('{{ $tool }}')"
                                    class="flex items-center justify-between px-4 py-3 border text-left text-xs font-bold uppercase tracking-wider transition cursor-pointer {{ $active ? 'bg-[#111111] text-white border-[#FF5500]' : 'bg-neutral-100 text-neutral-800 border-black/15 hover:border-[#FF5500]' }}"
                                >
                                    <span>{{ $tool }}</span>
                                    <span class="text-[#FF5500] ml-2">{{ $active ? '✓' : '+' }}</span>
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- D. Custom Requirement / Planner Needs -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">
                            What Specific Plan Or Solution Is Your Business Looking For?
                        </label>
                        <textarea rows="3" wire:model="notes" placeholder="Tell us what you want to achieve..." class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]"></textarea>
                    </div>

                    <!-- Submit Bar -->
                    <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-t border-black/10">
                        <span class="text-xs text-neutral-600">
                            Selected: <strong class="text-[#0A0A0A]">{{ $ticketType }}</strong> • <strong class="text-[#FF5500]">{{ $nominateAwards }}</strong>
                        </span>
                        <button type="submit" wire:loading.attr="disabled" class="inline-flex items-center justify-center gap-3 bg-[#FF5500] hover:bg-[#111111] text-white px-8 py-4 text-xs sm:text-sm font-bold uppercase tracking-wider transition-colors duration-300 cursor-pointer">
                            <span wire:loading.remove wire:target="submit">Complete Ticket & Interest Registration →</span>
                            <span wire:loading wire:target="submit">Saving Registration...</span>
                        </button>
                    </div>
                </form>
            @endif

            <!-- Confirmation State -->
            @if($submitted)
                <div class="py-8 text-center space-y-4">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-[#FF5500] text-white text-xs font-bold uppercase tracking-widest">
                        REGISTRATION RECEIVED • WEDDING INDIA EXPO 2027
                    </span>
                    <h3 class="text-2xl sm:text-4xl font-bold tracking-tight">Thank You, {{ $name }}!</h3>
                    <p class="text-sm text-neutral-600 max-w-xl mx-auto leading-relaxed">
                        We have logged your preference for <strong class="text-[#0A0A0A]">{{ $ticketType }}</strong> ({{ $nominateAwards }}) and will reach out on <strong>{{ $phone }}</strong> / <strong>{{ $email }}</strong>.
                    </p>
                    <div class="pt-4">
                        <button type="button" wire:click="resetForm" class="px-6 py-3 bg-[#111111] hover:bg-[#FF5500] text-white text-xs font-bold uppercase tracking-wider transition cursor-pointer">
                            Register Another Pass
                        </button>
                    </div>
                </div>
            @endif

        </div>
    </div>

</section>
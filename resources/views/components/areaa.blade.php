 <section class="relative overflow-hidden bg-white py-12">

        @php 
        
            $cards = [ 
                [ 'title' => 'Explore pavillion ', 'hall' => 'Destination Wedding, Hotels & Hospitality', 'image' => 'public/image/1.png', ], 
                [ 'title' => 'Explore pavillion ', 'hall' => 'Matrimonial, Matchmaking & Wedding Community', 'image' => 'public/image/2.png', ], 
                [ 'title' => 'Explore pavillion ', 'hall' => 'National & International Tourism Boards', 'image' => 'public/image/3.png', ], 
                [ 'title' => 'Explore pavillion ', 'hall' => 'Wedding Cuisines & Catering Sweets, Gifts', 'image' => 'public/image/4.png', ], 
                [ 'title' => 'Explore pavillion ', 'hall' => 'Exclusive Wedding Planners', 'image' => 'public/image/5.png', ], 
                [ 'title' => 'Explore pavillion ', 'hall' => 'Vintage Cars & solutions', 'image' => 'public/image/6.png', ],
                [ 'title' => 'Explore pavillion ', 'hall' => 'Jewellery & Fashion Designers', 'image' => 'public/image/7.png', ], 
                [ 'title' => 'Explore pavillion ', 'hall' => 'Luxury Lifestyle & Wedding Services', 'image' => 'public/image/8.png', ],
                [ 'title' => 'Explore pavillion ', 'hall' => 'Customize Your Experience', 'image' => 'public/image/9.png', ],
                [ 'title' => 'Explore pavillion ', 'hall' => 'Wedding Ethnic Expo', 'image' => 'public/image/4.png', ],
                [ 'title' => 'Explore pavillion ', 'hall' => 'Photography & Moments', 'image' => 'public/image/5.png', ],
            ]; 
        
        @endphp 

        <div class="absolute inset-x-0 top-0 h-[360px] bg-white" style="clip-path: polygon(0 0, 100% 0, 100% 58%, 0 78%)"> </div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <h2 class="mb-12 text-center text-2xl font-bold text-black sm:text-3xl lg:text-4xl">
                Area: The Inspiration That Drives Your Business</h2>

            <div x-data = "{
                            canPrev: false, canNext: true,

                            init() {
                                this.$nextTick(() => {
                                    this.checkScroll();
                                });

                                window.addEventListener('resize', () => {
                                    this.checkScroll();
                                });
                            },

                            checkScroll() {

                                const slider = this.$refs.slider;

                                if (!slider) return;

                                /*
                                * LEFT BUTTON
                                * Show only when slider has moved from beginning.
                                */
                                
                                this.canPrev = slider.scrollLeft > 5;


                                /*
                                * RIGHT BUTTON
                                * Hide when slider reaches the end.
                                */

                                this.canNext =
                                    slider.scrollLeft + slider.clientWidth < slider.scrollWidth - 5;
                            },


                            next() {

                                const slider = this.$refs.slider;

                                slider.scrollBy({
                                    left: slider.clientWidth * 0.8,
                                    behavior: 'smooth'
                                });

                                /*
                                * Wait for smooth scrolling to finish
                                * then check button visibility.
                                */

                                setTimeout(() => {
                                    this.checkScroll();
                                }, 450);
                            },


                            prev() {

                                const slider = this.$refs.slider;

                                slider.scrollBy({
                                    left: -(slider.clientWidth * 0.8),
                                    behavior: 'smooth'
                                });

                                setTimeout(() => {
                                    this.checkScroll();
                                }, 450);
                            }
                        }"
            class="relative">
            {{-- == LEFT / PREVIOUS BUTTON ============================= --}}
            <button type="button" @click="prev" x-show="canPrev"
                x-transition.opacity.duration.200ms class="absolute left-0 top-1/2 z-40 -translate-x-4 -translate-y-1/2 rounded-full bg-black p-3 text-xl leading-none text-white shadow-lg transition hover:scale-110 hover:bg-gray-800 lg:block"
                aria-label="Previous"> ← </button>

            {{-- ====================== CARDS SLIDER========================= --}}
            <div
                x-ref="slider"
                @scroll.debounce.50ms="checkScroll"
                class="hide-scrollbar flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth px-1 pb-6">
                @foreach ($cards as $index => $card) 
                   {{-- CARD --}}
                    <article
                        x-data="{ active: false }"
                        @mouseenter="active = true"
                        @mouseleave="active = false"
                        @click="active = !active"
                        class="group relative h-[300px] w-[82vw] shrink-0 snap-start sm:w-[60vw] md:w-[42vw] lg:w-[31%] transition-all duration-300 ease-out"
                        :class="active
                                            ? 'z-30 scale-[1.08]'
                                            : 'z-10 scale-100'">
                        {{-- CARD BACKGROUND--}}
                        <div class="absolute inset-x-0 bottom-0 h-[215px] rounded-sm bg-[#e8b998] shadow-md transition-all duration-300":class="active ? 'shadow-2xl': 'shadow-md'"></div>

                        {{--  IMAGE--}} 
                        <img src="{{ asset($card['image']) }}" alt="{{ $card['title'] }}" class="absolute left-1/2 top-0 z-20 h-[190px] w-auto -translate-x-1/2 object-contain transition-transform duration-300":class="active? 'scale-110': 'scale-100'"/>

                        {{--  TEXT--}}
                        <div class="absolute bottom-0 left-0 z-20 w-full p-6">
                            <h3 class="max-w-[180px] text-2xl font-bold leading-tight text-gray-700">{{ $card['title'] }}</h3>

                            {{--  HALL --}}
                            <span class="mt-3 inline-flex rounded-full bg-white px-4 py-1.5 text-sm font-medium text-gray-700 shadow-sm">{{ $card['hall'] }}</span>
                        </div>
                    </article>

                @endforeach
            </div>

            {{-- ============== RIGHT / NEXT BUTTON============= --}}
            <button
                type="button" @click="next" x-show="canNext" x-transition.opacity.duration.200ms
                class="absolute right-0 top-1/2 z-40 translate-x-4 -translate-y-1/2 rounded-full bg-black p-3 text-xl leading-none text-white shadow-lg transition hover:scale-110 hover:bg-gray-800 lg:block"
                aria-label="Next"> → </button>
            </div>

        </div>
    </section>

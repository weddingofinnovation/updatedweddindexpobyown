<main>
    <div class="max-w-7xl mx-auto px-6 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
    
            <!-- Left Side -->
            <div class="pr-8">
                <div x-data="{ active: 1 }" class="divide-y divide-gray-200">

                    <!-- Item 1 -->
                    <div class="py-3">
                
                        <button
                            @click="active = active === 1 ? 0 : 1"
                            class="w-full flex justify-between items-center text-left">
                
                            <span class="text-lg font-semibold text-gray-800">
                                Benefits As an Exhibitor
                            </span>
                
                            <svg
                                class="w-5 h-5 transition-transform duration-300"
                                :class="{ 'rotate-180': active === 1 }"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                
                        </button>
                
                        <div
                            x-show="active === 1"
                            x-collapse
                            class="pt-3 text-gray-600 leading-7">
                
                            Showcase your brand at <strong>Wedding India Expo 2027</strong> and connect directly with serious buyers, wedding planners, and high-value customers.
                
                            Gain strong brand visibility, generate quality leads, and build valuable business connections.
                
                            This is your opportunity to <strong>increase sales, expand your reach, and grow your business faster.</strong>
                
                        </div>
                
                    </div>
                
                    <!-- Item 2 -->
                    <div class="py-3">
                
                        <button
                            @click="active = active === 2 ? 0 : 2"
                            class="w-full flex justify-between items-center text-left">
                
                            <span class="text-lg font-semibold text-gray-800">
                                Exhibitor Application
                            </span>
                
                            <svg
                                class="w-5 h-5 transition-transform duration-300"
                                :class="{ 'rotate-180': active === 2 }"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                
                        </button>
                
                        <div
                            x-show="active === 2"
                            x-collapse
                            class="pt-3 text-gray-600 leading-7">
                
                            Join Wedding India Expo 2027 by submitting your exhibitor application and become part of a premium wedding business platform.
                
                        </div>
                
                    </div>
                
                    <!-- Item 3 -->
                    <div class="py-3">
                
                        <button
                            @click="active = active === 3 ? 0 : 3"
                            class="w-full flex justify-between items-center text-left">
                
                            <span class="text-lg font-semibold text-gray-800">
                                Individual Exhibitor Application
                            </span>
                
                            <svg
                                class="w-5 h-5 transition-transform duration-300"
                                :class="{ 'rotate-180': active === 3 }"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                
                        </button>
                
                        <div
                            x-show="active === 3"
                            x-collapse
                            class="pt-3 text-gray-600 leading-7">
                
                            Apply as an individual exhibitor and showcase your products and services to thousands of potential customers.
                
                        </div>
                
                    </div>
                
                    <!-- Item 4 -->
                    <div class="py-3">
                
                        <button
                            @click="active = active === 4 ? 0 : 4"
                            class="w-full flex justify-between items-center text-left">
                
                            <span class="text-lg font-semibold text-gray-800">
                                Request Free Stand
                            </span>
                
                            <svg
                                class="w-5 h-5 transition-transform duration-300"
                                :class="{ 'rotate-180': active === 4 }"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                
                        </button>
                
                        <div
                            x-show="active === 4"
                            x-collapse
                            class="pt-3 text-gray-600 leading-7">
                
                            Submit your request for promotional exhibition space. Our team will review your application.
                
                        </div>
                
                    </div>
                
                    <!-- Item 5 -->
                    <div class="py-3">
                
                        <button
                            @click="active = active === 5 ? 0 : 5"
                            class="w-full flex justify-between items-center text-left">
                
                            <span class="text-lg font-semibold text-gray-800">
                                New Product Showcase
                            </span>
                
                            <svg
                                class="w-5 h-5 transition-transform duration-300"
                                :class="{ 'rotate-180': active === 5 }"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                
                        </button>
                
                        <div
                            x-show="active === 5"
                            x-collapse
                            class="pt-3 text-gray-600 leading-7">
                
                            Launch your latest products and innovations before a highly targeted wedding industry audience.
                
                        </div>
                
                    </div>
                
                    <!-- Item 6 -->
                    <div class="py-3">
                
                        <button
                            @click="active = active === 6 ? 0 : 6"
                            class="w-full flex justify-between items-center text-left">
                
                            <span class="text-lg font-semibold text-gray-800">
                                Sponsorship Plan
                            </span>
                
                            <svg
                                class="w-5 h-5 transition-transform duration-300"
                                :class="{ 'rotate-180': active === 6 }"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                
                        </button>
                
                        <div
                            x-show="active === 6"
                            x-collapse
                            class="pt-3 text-gray-600 leading-7">
                
                            Become a sponsor and receive premium branding, digital promotion, and direct access to exhibitors and visitors.
                
                        </div>
                
                    </div>
 
                </div>
            </div>
    
            <!-- Right Side -->
    
            <div>
                <div class="max-w-xl">
                    @if(session()->has('success'))
    
                            <div class="mt-6 rounded-lg bg-green-100 border border-green-300 text-green-700 p-4">
                                {{ session('success') }}
                            </div>
    
                        @else
                            <h2 class="text-3xl font-bold text-gray-900">Express your interest</h2>
                            <p class="mt-2 text-gray-500">Fill in the details requested in the form below.</p>
    
                            <form wire:submit.prevent="submit" class="mt-8 space-y-5">
    
                        <div>
    
                            <!--<label class="block text-sm font-medium text-gray-700 mb-2" style="margin:0 0 0 0;">-->
                            <!--    Phone-->
                            <!--</label>-->
    
                            <input
                                type="text"
                                wire:model.lazy="phone"
                                placeholder="Enter your phone"
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
    
                        </div>
    
                        <div>
    
                            <!--<label class="block text-sm font-medium text-gray-700 mb-2" style="margin:0 0 0 0;">-->
                            <!--    Email-->
                            <!--</label>-->
    
                            <input
                                type="email"
                                wire:model.lazy="email"
                                placeholder="name@example.com"
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
    
                        </div>
    
                        <div>
    
                            <!--<label class="block text-sm font-medium text-gray-700 mb-2" style="margin:0 0 0 0;">-->
                            <!--    Name-->
                            <!--</label>-->
    
                            <input
                                type="text"
                                wire:model.lazy="name"
                                placeholder="Enter your name"
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
    
                        </div>
    
                        <button
                            type="submit"
                            class="w-full rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white py-3 font-semibold transition">
    
                            Submit Request
    
                        </button>
    
                    </form>
                    @endif
                </div>
            </div>
    
        </div>
    </div>
    
    
    
</main>

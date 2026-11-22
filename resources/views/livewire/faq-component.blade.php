<main>
    <section class="bg-[#f3f3f3] py-16">
        <div class="max-w-[1200px] mx-auto px-4">

            <div class="grid grid-cols-12 gap-6">

                <!-- Left Sidebar -->
                <div class="col-span-12 lg:col-span-3">

                    <div class="space-y-3">
                        <button
                            wire:click="selectCategory('general-event-information')"
                            class="{{ $selectedCategory == 'general-event-information' ? 'w-full bg-[#c62828] text-white font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center' : 'w-full bg-gray-200 text-black font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center
                            ' }}">
                            General Event<br>Information
                        </button>
                        
                        <button
                            wire:click="selectCategory('visitor-registration')"
                            class="{{ $selectedCategory == 'visitor-registration' ? 'w-full bg-[#c62828] text-white font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center' : 'w-full bg-gray-200 text-black font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center' }}">
                            Visitor Registration
                        </button>
                        
                        <button
                            wire:click="selectCategory('for-exhibitors')"
                            class="{{ $selectedCategory == 'for-exhibitors' ? 'w-full bg-[#c62828] text-white font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center' : 'w-full bg-gray-200 text-black font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center' }}">
                            For Exhibitors
                        </button>
                        
                        <button
                            wire:click="selectCategory('travel-accommodation')"
                            class="{{ $selectedCategory == 'travel-accommodation' ? 'w-full bg-[#c62828] text-white font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center' : 'w-full bg-gray-200 text-black font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center' }}">
                            Travel & Accommodation
                        </button>
                        
                        <button
                            wire:click="selectCategory('media')"
                            class="{{ $selectedCategory == 'media' ? 'w-full bg-[#c62828] text-white font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center' : 'w-full bg-gray-200 text-black font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center' }}">
                            Media
                        </button>

                    </div>
                </div>

                <!-- FAQ Content -->
                <div class="col-span-12 lg:col-span-9">

                    <div class="border border-gray-300 bg-white">

                            @foreach($faqgeto as $faqo)
                                <!-- FAQ Item -->
                                <details class="group border-b border-gray-300">
                                    <summary
                                        class="flex items-center justify-between cursor-pointer list-none px-6 py-5 font-bold text-[18px]">
        
                                        <div class="flex items-center gap-4">
                                            <span class="text-[#c62828] text-[24px] font-bold">
                                                +
                                            </span>
        
                                            <span>
                                                {{$faqo -> question}}
                                            </span>
                                        </div>
        
                                    </summary>
        
                                    <div class="px-14 pb-5 text-gray-600 leading-7">
                                        {{$faqo -> answer}}
                                    </div>
                                </details>
                            @endforeach
                            
                      
                    </div>

                </div>

            </div>

        </div>
    </section>
</main>
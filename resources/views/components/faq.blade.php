<section class="py-16">
    
            <div class="max-w-[1200px] mx-auto px-4 text-center">
    
                <!-- Heading -->
                <h2 class="text-[60px] leading-[1.1] font-black text-black mb-8">
                    Have a Question About Your Visit to Show?
                </h2>
    
                <!-- Description -->
                <p class="text-[24px] text-gray-700 leading-relaxed max-w-[950px] mx-auto mb-6">
                    Explore our FAQs to find quick answers and helpful information
                    to help you navigate our event with ease.
                    <br>
                    Still have questions?
                    <a href="/contact"
                        class="text-red-600 hover:text-red-700 font-medium underline underline-offset-4 transition">
                        Drop us a message here.
                    </a>
                </p>
    
            </div>
            
            <div class="max-w-[1200px] mx-auto px-4">
    
                <div class="grid grid-cols-12 gap-6">
    
                    <!-- Left Sidebar -->
                    <div class="col-span-12 lg:col-span-2">
    
                        <div class="space-y-3">
    
                            <button
                                class="w-full bg-[#c62828] text-white font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center">
                                General Event Information
                            </button>
    
                            <button
                                class="w-full bg-[#e7e7e7] hover:bg-[#d9d9d9] text-black font-semibold text-[18px] rounded-xl py-4 px-5 transition">
                                Visitor Registration
                            </button>
    
                            <button
                                class="w-full bg-[#e7e7e7] hover:bg-[#d9d9d9] text-black font-semibold text-[18px] rounded-xl py-4 px-5 transition">
                                For Exhibitors
                            </button>
    
                            <button
                                class="w-full bg-[#e7e7e7] hover:bg-[#d9d9d9] text-black font-semibold text-[18px] rounded-xl py-4 px-5 transition">
                                Travel & Accommodation
                            </button>
    
                            <button
                                class="w-full bg-[#e7e7e7] hover:bg-[#d9d9d9] text-black font-semibold text-[18px] rounded-xl py-4 px-5 transition">
                                Media
                            </button>
    
                        </div>
    
                    </div>
    
                    <!-- FAQ Content -->
                    <div class="col-span-12 lg:col-span-10">
    
                        <div class="border border-gray-300 bg-white">
    
                            @php
                             $faqgeto = DB::table('article_faqs')->get();
                            @endphp
                            
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
                            
                            <!-- FAQ Item -->
                            <details class="group border-b border-gray-300">
                                    <summary
                                        class="flex items-center justify-between cursor-pointer list-none px-6 py-5 font-bold text-[18px]">
        
                                        <div class="flex items-center gap-4">
                                            <span class="text-[#c62828] text-[24px] font-bold">
                                                +
                                            </span>
        
                                            <span>
                                                Is the event open to the public?
                                            </span>
                                        </div>
        
                                    </summary>
        
                                    <div class="px-14 pb-5 text-gray-600 leading-7">
                                        Yes, the event is open for visitors, industry professionals,
                                        wedding planners, and families interested in wedding services.
                                    </div>
                                </details>
    
                            <!-- FAQ Item -->
                            <details class="group border-b border-gray-300">
                                <summary
                                    class="flex items-center justify-between cursor-pointer list-none px-6 py-5 font-bold text-[18px]">
    
                                    <div class="flex items-center gap-4">
                                        <span class="text-[#c62828] text-[24px] font-bold">
                                            +
                                        </span>
    
                                        <span>
                                            When and where will the event be held at?
                                        </span>
                                    </div>
    
                                </summary>
    
                                <div class="px-14 pb-5 text-gray-600 leading-7">
                                    The Wedding India Expo will be held at the designated venue
                                    announced on the official website.
                                </div>
                            </details>
    
                            <!-- FAQ Item -->
                            <details class="group border-b border-gray-300">
                                <summary
                                    class="flex items-center justify-between cursor-pointer list-none px-6 py-5 font-bold text-[18px]">
    
                                    <div class="flex items-center gap-4">
                                        <span class="text-[#c62828] text-[24px] font-bold">
                                            +
                                        </span>
    
                                        <span>
                                            How do I get to the Venue?
                                        </span>
                                    </div>
    
                                </summary>
    
                                <div class="px-14 pb-5 text-gray-600 leading-7">
                                    You can reach the venue via cab, metro, personal vehicle,
                                    or public transport.
                                </div>
                            </details>
    
                            <!-- FAQ Item -->
                            <details class="group border-b border-gray-300">
                                <summary
                                    class="flex items-center justify-between cursor-pointer list-none px-6 py-5 font-bold text-[18px]">
    
                                    <div class="flex items-center gap-4">
                                        <span class="text-[#c62828] text-[24px] font-bold">
                                            +
                                        </span>
    
                                        <span>
                                            Are there any Admission Guidelines?
                                        </span>
                                    </div>
    
                                </summary>
    
                                <div class="px-14 pb-5 text-gray-600 leading-7">
                                    Visitors are requested to carry valid registration
                                    confirmation and ID proof.
                                </div>
                            </details>
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>
        </section>
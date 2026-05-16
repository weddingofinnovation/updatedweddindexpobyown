@extends('layouts.front')

@section('title', 'About')

@section('content')
    <section class="bg-[#f3f3f3] py-16">
        <div class="max-w-[1200px] mx-auto px-4">

            <div class="grid grid-cols-12 gap-6">

                <!-- Left Sidebar -->
                <div class="col-span-12 lg:col-span-3">

                    <div class="space-y-3">

                        <button
                            class="w-full bg-[#c62828] text-white font-bold text-[18px] leading-tight rounded-xl py-4 px-5 text-center">
                            General Event<br>Information
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
                <div class="col-span-12 lg:col-span-9">

                    <div class="border border-gray-300 bg-white">

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
@endsection
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exhibitors - Wedding India Expo & Wedding India Expo 2027 Inspired Layout</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandBlue: {
                            DEFAULT: '#0f4c81',
                            dark: '#0a365f',
                            light: '#e6f0fa'
                        },
                        brandRed: '#e32424',
                        brandDark: '#111827'
                    }
                }
            }
        }
    </script>
    <style>
        body:has(#heading-anchor-0:target) a[href="#heading-anchor-0"],
        body:has(#heading-anchor-1:target) a[href="#heading-anchor-1"],
        body:has(#heading-anchor-2:target) a[href="#heading-anchor-2"],
        body:has(#heading-anchor-3:target) a[href="#heading-anchor-3"],
        body:has(#heading-anchor-4:target) a[href="#heading-anchor-4"],
        body:has(#heading-anchor-5:target) a[href="#heading-anchor-5"],
        body:has(#heading-anchor-6:target) a[href="#heading-anchor-6"] {
            background-color: #0F4C81;
            color: white;
        }
    </style>
</head>




<section class="relative w-full min-h-[199px] overflow-hidden bg-[#0D3B66] flex items-center">

    <!-- Diagonal Background Shape -->
    <div class="absolute inset-0 bg-[#0E4170]"
        style="clip-path: polygon(76.8% 0, 100% 0, 100% 100%, 74.2% 100%);">
    </div>

    <!-- Heading -->
    <div class="relative z-10 w-full px-6 sm:px-10 lg:px-[6.1%] py-12">
        <h1 class="text-white text-3xl sm:text-4xl lg:text-[46px] font-bold leading-tight">
            Professional registration
        </h1>

    </div>

</section>

<section class="max-w-7xl mx-auto px-4 py-12 bg-white font-sans text-gray-900">
    
    <!-- Section Title -->
    <div class="pb-3 px-3 text-left mb-10">
        <h2 class="text-3xl lg:text-4xl font-bold tracking-tight text-gray-900">
            Do you want to be the first to get your pass?
        </h2>
    </div>

    <!-- Form Container (Centered, max-width 700px) -->
    <div class="w-full px-3">
        <div class="max-w-[700px] bg-white p-6 sm:p-8 rounded-lg">

            <h3 class="text-xl font-bold text-gray-900 mb-1">Express your interest to join WEI 2027</h3>
            <p class="text-sm text-gray-500 mb-6">Fill in the details requested in the form below</p>

            @if (session()->has('success'))
                <div class="mb-6 p-4 text-sm text-green-700 bg-green-50 border border-green-200 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="submit" class="space-y-5">
                
                <!-- Phone Field -->
                <div>
                    <label for="phone" class="block text-sm font-semibold text-gray-700 mb-1">Phone</label>
                    <input type="tel" id="phone" placeholder="Enter your phone" wire:model.lazy="phone"
                           class="w-full px-4 py-2.5 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0f4c81] focus:border-transparent transition-colors">
                    @error('phone') <span class="block mt-1 text-xs text-red-600 font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email address</label>
                    <input type="email" id="email" placeholder="name@example.com" wire:model.lazy="email"
                           class="w-full px-4 py-2.5 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0f4c81] focus:border-transparent transition-colors">
                    @error('email') <span class="block mt-1 text-xs text-red-600 font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Name</label>
                    <input type="text" id="name" placeholder="Enter your name" wire:model.lazy="name"
                           class="w-full px-4 py-2.5 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0f4c81] focus:border-transparent transition-colors">
                    @error('name') <span class="block mt-1 text-xs text-red-600 font-medium">{{ $message }}</span> @enderror
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                            class="w-full bg-[#0f4c81] hover:bg-[#0a365f] text-white font-semibold py-3 px-6 rounded-md text-sm transition-colors shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0f4c81]">
                        Submit
                    </button>
                </div>

            </form>
    
        </div>
    </div>
    
</section>

<x-whyshouldyouvisit />

<x-areaa />
<section class="max-w-7xl mx-auto px-4 py-8 bg-white font-sans text-gray-900">

    <!-- Breadcrumb -->
    <nav class="text-xs text-gray-500 mb-6 flex items-center space-x-2">
        <a href="#" class="hover:underline">home</a>
        <span>›</span>
        <span class="text-gray-900 font-medium">Where to eat</span>
    </nav>

    <!-- Split Banner Container -->
    <div class="relative flex flex-col lg:flex-row items-stretch min-h-[420px] overflow-hidden">

        <!-- Right Side Image (Placed first in DOM for mobile stack, absolute/flex layer on desktop) -->
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-7/12 h-[320px] lg:h-full">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1400&q=85"
                alt="A gastronomic leader dining experience"
                class="w-full h-full object-cover">
        </div>

        <!-- Left Side: Dark Purple Angular Block (Overlapping) -->
        <div class="relative lg:w-7/12 bg-[#292152] text-white p-8 sm:p-12 lg:p-16 z-10 flex flex-col justify-center lg:clip-path-slant shadow-lg">

            <div class="max-w-xl space-y-4">

                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white">
                    A gastronomic leader
                </h2>

                <p class="text-gray-200 text-sm sm:text-base leading-relaxed">
                    The new gastronomic experience at Wedding India Expo will be pleasurable, flexible, and varied. It will be of a high standard that will ensure success at all the events, trade fairs and congresses held both at Yashobhoomi (IICC) and across the premium exhibition halls in New Delhi.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- Add custom clip-path utility if not already in your tailwind config -->
<style>
    @media (min-width: 1024px) {
        .lg\:clip-path-slant {
            clip-path: polygon(0 0, 88% 0, 100% 100%, 0 100%);
            padding-right: 15%;
        }
    }
</style>
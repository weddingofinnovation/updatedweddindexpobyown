<main>
     @php 
        $detailsarticles = DB::table('articles')->limit('1')->get();
      @endphp
      
      <div class="bg-gray-50 min-h-screen">

        <!-- Hero -->
        <section class="bg-white border-b">
            <div class="max-w-7xl mx-auto px-6 py-10">
    
                <nav class="text-sm text-gray-500 mb-4">
                    Home / Articles / Wedding Planning
                </nav>
    
                <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs">
                    Wedding Business
                </span>
                
                @foreach($article as $details )
                    <h1 class="text-5xl font-bold mt-5 leading-tight">
                        {{$details -> title}}
                    </h1>
                
                
                    <div class="flex items-center gap-6 mt-6 text-gray-500 text-sm">
                        <span>By Exhibition Network</span>
                        <span>5 Min Read</span>
                        <span>25 July 2026</span>
                        <span>1,245 Views</span>
                    </div>
                    
                    {{$details-> content}}
                @endforeach
            </div>
        </section>
    
        <div class="max-w-7xl mx-auto px-6 py-12">
    
            <div class="grid lg:grid-cols-12 gap-10">
    
                <!-- Content -->
                <article class="lg:col-span-8">
    
                    <img src="banner.jpg"
                         class="rounded-xl mb-8 w-full">
    
                    <div class="prose prose-lg max-w-none">
    
                        <p>Article Content...</p>
    
                        <h2>Why Participate?</h2>
    
                        <p>Content...</p>
    
                        <blockquote class="border-l-4 border-pink-500 pl-6 italic">
                            "Wedding India Expo is India's fastest growing
                            B2B wedding exhibition."
                        </blockquote>
    
                        <img src="image2.jpg"
                             class="rounded-xl">
    
                        <h2>Benefits</h2>
    
                        <ul>
                            <li>Meet qualified buyers</li>
                            <li>Generate business leads</li>
                            <li>Launch new services</li>
                        </ul>
    
                    </div>
    
                </article>
    
                <!-- Sidebar -->
                <aside class="lg:col-span-4">
    
                    <div class="sticky top-24 space-y-6">
    
                        <!-- Search -->
    
                        <div class="bg-white rounded-xl shadow p-6">
                            <input
                                class="w-full border rounded-lg px-4 py-3"
                                placeholder="Search Articles">
                        </div>
    
                        <!-- CTA -->
    
                        <div class="bg-pink-600 text-white rounded-xl p-8">
    
                            <h3 class="text-2xl font-bold">
                                Become an Exhibitor
                            </h3>
    
                            <p class="mt-3">
                                Showcase your business to thousands of wedding professionals.
                            </p>
    
                            <button
                                class="mt-6 bg-white text-pink-600 font-semibold px-5 py-3 rounded-lg w-full">
                                Book Stall
                            </button>
    
                        </div>
    
                        <!-- Popular -->
    
                        <div class="bg-white rounded-xl shadow">
    
                            <div class="p-5 border-b">
                                <h3 class="font-bold text-lg">
                                    Popular Articles
                                </h3>
                            </div>
    
                            <div class="divide-y">
    
                                <a href="#" class="flex gap-4 p-5 hover:bg-gray-50">
    
                                    <img class="w-24 h-20 rounded-lg object-cover">
    
                                    <div>
    
                                        <h4 class="font-semibold">
                                            Top Wedding Trends
                                        </h4>
    
                                        <span class="text-sm text-gray-500">
                                            4 min read
                                        </span>
    
                                    </div>
    
                                </a>
    
                            </div>
    
                        </div>
    
                        <!-- Categories -->
    
                        <div class="bg-white rounded-xl shadow p-6">
    
                            <h3 class="font-bold mb-4">
                                Categories
                            </h3>
    
                            <div class="flex flex-wrap gap-2">
    
                                <span class="bg-gray-100 px-3 py-2 rounded-full">
                                    Wedding Planner
                                </span>
    
                                <span class="bg-gray-100 px-3 py-2 rounded-full">
                                    Hotels
                                </span>
    
                                <span class="bg-gray-100 px-3 py-2 rounded-full">
                                    Decor
                                </span>
    
                                <span class="bg-gray-100 px-3 py-2 rounded-full">
                                    Photography
                                </span>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </aside>
    
            </div>
    
        </div>
    
        <!-- Related -->
        <section class="bg-white py-16">
    
            <div class="max-w-7xl mx-auto px-6">
    
                <h2 class="text-3xl font-bold mb-10">
                    Related Articles
                </h2>
    
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    
                    <!-- Card -->
    
                    <article class="rounded-xl overflow-hidden shadow hover:shadow-xl transition">
    
                        <img class="h-52 w-full object-cover">
    
                        <div class="p-6">
    
                            <span class="text-pink-600 text-sm">
                                Destination Wedding
                            </span>
    
                            <h3 class="font-bold text-xl mt-2">
                                How Resorts Can Generate Wedding Business
                            </h3>
    
                            <p class="text-gray-500 mt-3">
                                Discover how luxury resorts can attract wedding planners...
                            </p>
    
                        </div>
    
                    </article>
    
                </div>
    
            </div>
    
        </section>
    
      </div>
</main>
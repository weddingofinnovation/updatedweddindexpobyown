<main>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    
            @php 
               $audiences = [
                                        ['title' => 'Exhibitors', 'purpose' => 'Showcase products and services'],
                                        ['title' => 'Visitors', 'purpose' => 'Explore, buy, and network'],
                                        ['title' => 'Buyers', 'purpose' => 'Purchase products or services'],
                                        ['title' => 'Hosted Buyers', 'purpose' => 'Pre-qualified decision makers'],
                                        ['title' => 'VIP Visitors', 'purpose' => 'Special guests and industry leaders'],
                                        ['title' => 'Speakers', 'purpose' => 'Conference and seminar sessions'],
                                        ['title' => 'Sponsors', 'purpose' => 'Brand promotion and visibility'],
                                        ['title' => 'Media', 'purpose' => 'Press, TV, digital publications'],
                                        ['title' => 'Influencers', 'purpose' => 'Social media promotion'],
                                        ['title' => 'Government', 'purpose' => 'Ministries, tourism boards, trade bodies'],
                                        ['title' => 'Investors', 'purpose' => 'Investment and partnerships'],
                                        ['title' => 'Associations', 'purpose' => 'Industry organizations'],
                                        ['title' => 'Students', 'purpose' => 'Learning and career opportunities'],
                                        ['title' => 'Job Seekers', 'purpose' => 'Recruitment opportunities'],
                                        ['title' => 'Suppliers', 'purpose' => 'Supply chain and vendor connections'],
                                        ['title' => 'Startups', 'purpose' => 'New businesses showcasing innovation'],
                                        ['title' => 'Partners', 'purpose' => 'Strategic and business partners'],
                                        ['title' => 'Volunteers', 'purpose' => 'Event support'],
                                        ['title' => 'Delegates', 'purpose' => 'Conference attendees'],
                                        ['title' => 'International Visitors', 'purpose' => 'Overseas buyers and visitors'],
                                    ];
                                    
                $query = DB::table('leads');
                
                if ($board == 'new') {
                
                    $query->whereNotExists(function ($query) {
                        $query->select(DB::raw(1))
                              ->from('comments')
                              ->whereColumn('comments.lead_id', 'leads.id');
                    });
                
                } elseif ($board == 'contacted') {
                
                    $query->whereExists(function ($query) {
                        $query->select(DB::raw(1))
                              ->from('comments')
                              ->whereColumn('comments.lead_id', 'leads.id');
                    });
                }elseif ($board == 'hot') {

                    $query->where('leads.lead_type', 'hot');
                
                }
                
                $businessleados = $query
                    ->latest('leads.id')
                    ->paginate(20);
                    
                  
                
            @endphp

    <div class="cls">

    @if($board == 'speaker')
        
            @php 
              $speakers = DB::table('speakers')->get();
            @endphp
            
            @foreach($speakers as $speaker)
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm mt-2">
                    <div class="p-6 space-y-5">
                    
                     <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            
                            <img src="{{ $speaker->image_url ?? '' }}" alt="{{ $speaker->name }}" class="w-12 h-12 rounded-full object-cover">
                            
                            <div>
                                <h3 class="text-sm font-medium">{{ $speaker->name }}</h3>
                                <p class="text-xs text-gray-500">{{ $speaker->designation }}</p>
                            </div>
                            
                        </div>
                        
                        <div>
                            <button wire:click="#" class="text-red-500 hover:text-red-700 text-sm">upload Image</button>
                            
                            <button wire:click="#" class="text-red-500 hover:text-red-700 text-sm">Edit</button>
                            <button
                                wire:click="deleteSpeaker({{ $speaker->id }})"
                                wire:confirm="Are you sure you want to delete this speaker?"
                                class="text-red-500 hover:text-red-700 text-sm"
                            >
                                Delete
                            </button>
                        </div>
                        
    
                    </div>
                    
                </div>
        
                </div>
            @endforeach
        
        @elseif($board == 'add_speaker')
            <div class="max-w-7xl mx-auto p-6">
                <div class="bg-white rounded-xl shadow border border-gray-200">
        
                <div class="p-6">
        
                    <form wire:submit.prevent="speakerSave">
        
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
                            <!-- Name -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    Speaker Name
                                </label>
        
                              
                                    
                                <input type="text" wire:model.lazy="name"
                                  class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                                placeholder="John Smith">
                                @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                            <!-- Designation -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    Designation
                                </label>
        
                                <input type="text" wire:model.lazy="designation"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 @error('designation') border-red-500 @enderror"
                                    placeholder="CEO">
                                @error('designation')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                            <!-- Company -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    Company Name
                                </label>
        
                                <input type="text" wire:model.lazy="company_name"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 @error('company_name') border-red-500 @enderror"
                                    placeholder="ABC Pvt Ltd">
                                    @error('company_name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                            <!-- Phone -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    Phone
                                </label>
        
                                <input type="number" wire:model.lazy="phone"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 @error('phone') border-red-500 @enderror"
                                    placeholder="+91 9876543210">
                                    
                                @error('phone')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                            <!-- Email -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    Email
                                </label>
        
                                <input type="email" wire:model.lazy="email"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                                    placeholder="john@email.com">
                                @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                           
        
                            <!-- LinkedIn -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    LinkedIn
                                </label>
        
                                <input
                                    type="url"
                                    wire:model.lazy="linkedin_url"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 @error('linkedin_url') border-red-500 @enderror"
                                    placeholder="https://linkedin.com/in/...">
                                                            @error('linkedin_url')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                            <!-- Website -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    Website
                                </label>
        
                                <input
                                    type="url"
                                    wire:model.lazy="website"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3"
                                    placeholder="https://example.com">
                                    @error('website')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                            <!-- City -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    City
                                </label>
        
                                <input
                                    type="text"
                                    wire:model.lazy="city"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3">
                                                                @error('city')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                            <!-- State -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    State
                                </label>
        
                                <input
                                    type="text"
                                    wire:model.lazy="state"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3">
                                                                @error('state')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                            <!-- Country -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    Country
                                </label>
        
                                <input
                                    type="text"
                                    wire:model.lazy="country"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3"
                                    value="India">
                            </div>
        
                           
        
                            <!-- Status -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    Status
                                </label>
        
                                <select
                                    wire:model.lazy="status"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3">
        
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
        
                                </select>
                            </div>
        
                            <!-- Photo -->
                            <div>
                                <label class="block mb-2 font-semibold text-gray-700">
                                    Photo
                                </label>
        
                                <input
                                    type="file"
                                    wire:model="photo"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2">
        
                                @if($photo)
                                    <img src="{{ $photo->temporaryUrl() }}"
                                         class="mt-4 h-28 rounded-lg border">
                                @endif
                                
                                                            @error('photo')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
        
                        </div>
        
                        <!-- Bio -->
                        <div class="mt-6">
                            <label class="block mb-2 font-semibold text-gray-700">
                                Speaker Bio
                            </label>
        
                            <textarea
                                rows="6"
                                wire:model.lazy="bio"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3"
                                placeholder="Write speaker biography..."></textarea>
                                                            @error('bio')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
        
                        <!-- Buttons -->
                        <div class="flex justify-end gap-4 mt-8">
        
                            <button
                                type="reset"
                                class="px-6 py-3 rounded-lg border border-gray-300 hover:bg-gray-100">
                                Reset
                            </button>
        
                            <button
                                type="submit"
                                class="px-8 py-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                                Save Speaker
                            </button>
        
                        </div>
        
                    </form>
        
                </div>
        
            </div>
            </div>
        @elseif($board == 'edit_speaker')
            <div class="">
                <small class="border-t">edit speaker</small>
                <form wire:submit.prevent="updateSpeaker">
                    <input type="text" wire:model.lazy="name" placeholder="type speaker name" class="form-class w-full rounded-lg border border-gray-300 px-4 py-3 mb-4">
                    <input type="file" wire:model="image" class="form-class w-full rounded-lg border border-gray-300 px-4 py-3 mb-4">
                    <input type="text" wire:model.lazy="designation" placeholder="type speaker designation" class="w-full rounded-lg border border-gray-300 px-4 py-3 mb-4">
                    <textarea wire:model.lazy="description" placeholder="type speaker description" class="w-full rounded-lg border border-gray-300 px-4 py-3 mb-4"></textarea>
        
                    <button type="button" wire:click="updateSpeaker" class="bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700">
                        Update Speaker
                    </button>
                </form>
            </div>
        @elseif($board == 'list_images')
            
            {{-- SUCCESS MESSAGE --}}
            @if (session()->has('success'))
                <div class="mb-5 rounded-lg bg-green-50 border border-green-200
                            px-4 py-3 text-sm text-green-700">
                    {{ session('success') }}
                </div>
            @endif
    
    
            {{-- VALIDATION ERRORS --}}
            @if ($errors->any())
                <div class="mb-5 rounded-lg bg-red-50 border border-red-200
                            px-4 py-3 text-sm text-red-700">
    
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
    
                </div>
            @endif
            
    
            <div class="max-w-6xl mx-auto">
    
                {{-- Upload Card --}}
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm">
            
                    {{-- Upload Area --}}
                    <div class="p-6">
            
                        <label
                            for="images"
                            class="flex flex-col items-center justify-center
                                   w-full h-52
                                   border-2 border-dashed border-gray-300
                                   rounded-xl
                                   bg-gray-50
                                   hover:bg-gray-100
                                   hover:border-gray-400
                                   cursor-pointer
                                   transition">
            
                            {{-- Upload Icon --}}
                            <div class="flex items-center justify-center
                                        w-14 h-14 rounded-full
                                        bg-white border border-gray-200
                                        shadow-sm mb-4">
            
                                <svg
                                    class="w-7 h-7 text-gray-500"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24">
            
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.7"
                                        d="M12 16V4m0 0L8 8m4-4l4 4
                                           M4 16.5V19a1 1 0 001 1h14
                                           a1 1 0 001-1v-2.5"/>
                                </svg>
            
                            </div>
            
            
                            {{-- Text --}}
                            <p class="text-sm text-gray-600">
            
                                <span class="font-semibold text-indigo-600">
                                    Click to upload
                                </span>
            
                                or drag and drop
            
                            </p>
            
            
                            <p class="mt-2 text-xs text-gray-400">
                                JPG, PNG or WEBP • Maximum 5MB per image
                            </p>
            
            
                            <input
                                id="images"
                                type="file"
                                multiple
                                accept="image/jpeg,image/png,image/webp"
                                class="hidden">
            
                        </label>
            
            
                        {{-- Selected Images --}}
                        <div class="mt-4">
            
                            <div class="flex items-center justify-between mb-4">
            
                                <h3 class="text-sm font-semibold text-gray-900">
                                    Selected Images
                                </h3>
            
                                <span class="text-xs text-gray-500">
                                    0 Images
                                </span>
            
                            </div>
                            {{-- Upload Button --}}
                            <div class="mt-4 flex justify-end">
                
                                <button
                                    type="button"
                                    class="inline-flex items-center gap-2
                                           px-6 py-2.5
                                           rounded-lg
                                           bg-indigo-600
                                           text-white
                                           text-sm font-semibold
                                           hover:bg-indigo-700
                                           transition">
                
                                    <svg
                                        class="w-4 h-4"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24">
                
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 16V4m0 0L8 8m4-4l4 4
                                               M5 20h14"/>
                
                                    </svg>
                
                                    Upload Images
                
                                </button>
                
                            </div>
                            
            
                            {{-- Image Grid --}}
                            <div class="grid grid-cols-2
                                        sm:grid-cols-3
                                        md:grid-cols-4
                                        lg:grid-cols-6
                                        gap-4">
            
            
                                {{-- IMAGE ITEM --}}
                                <div class="relative group">
            
                                    <div class="aspect-square
                                                rounded-xl overflow-hidden
                                                bg-gray-100
                                                border border-gray-200">
            
                                        <img
                                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?w=200"
                                            class="w-50 h-full object-cover">
            
                                    </div>
            
            
                                    {{-- Delete Icon --}}
                                    <button
                                        type="button"
                                        class="absolute top-2 right-2
                                               w-8 h-8
                                               rounded-full
                                               bg-white
                                               text-red-500
                                               shadow-md
                                               flex items-center justify-center
                                               hover:bg-red-500
                                               hover:text-white
                                               transition">
            
                                        <svg
                                            class="w-4 h-4"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24">
            
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 7l-.867 12.142
                                                   A2 2 0 0116.138 21H7.862
                                                   a2 2 0 01-1.995-1.858L5 7
                                                   m5 4v6m4-6v6
                                                   M9 7V4a1 1 0 011-1h4
                                                   a1 1 0 011 1v3
                                                   m-7 0h8"/>
            
                                        </svg>
            
                                    </button>
            
            
                                    {{-- Filename --}}
                                    <p class="mt-2 text-xs text-gray-500 truncate">
                                        image-name.jpg
                                    </p>
            
                                </div>
            
            
                            </div>
            
                        </div>
            
            
                        
                    </div>
            
                </div>
            
            </div>

        @elseif($board == 'list_articles')
            
                @php 
                    $articles  = DB::table('articles')->orderBy('created_at', 'desc')->get();
                @endphp
                
                @foreach($articles as $article)
                    <div class="bg-white rounded-xl border border-gray-200 shadow-sm mt-1">
                        <div class="p-6 space-y-5">
                              <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <img src="{{ $article->featured_image ?? asset('images/no-image.png')}}" alt="{{ $article->title }}" class="w-12 h-12 rounded-full object-cover">
                                    <div>
                                        <h3 class="text-sm font-medium">{{ $article->title }} | {{$article->created_at}}</h3>
                                        <p class="text-xs text-gray-500">{{ $article->excerpt }}</p>
                                    </div>
                                </div>
                                
                                <div class="space-x-4">
                                    <button wire:click="#" class="text-red-500 hover:text-red-700 text-sm">Edit</button>

                                    <button
                                wire:click="deleteArticle({{ $article->id }})"
                                wire:confirm="Are you sure you want to delete this Artciles?"
                                class="text-red-500 hover:text-red-700 text-sm"
                            >
                                Delete
                            </button>
                                </div>
                              </div>
                        </div>
                    </div>
                @endforeach
        @elseif($board == 'add_article')
            <form wire:submit.prevent="saveArticle">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
                    <!-- Left -->
                    <div class="lg:col-span-2 space-y-6">
    
                        <!-- Basic Information -->
                        <div class="bg-white rounded-xl border border-gray-200 shadow-sm">
    
                            <div class="px-6 py-4 border-b">
                                <h2 class="text-lg font-semibold">
                                    Basic Information
                                </h2>
                            </div>
    
                            <div class="p-6 space-y-5">
    
                                <div>
    
                                    <input
                                        type="text"
                                        wire:model.lazy="title" placeholder="Title"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-3">
    
                                    @error('title')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div>
                                    <textarea
                                        rows="3"
                                        wire:model.lazy="excerpt" placeholder="Excerpt"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-3"></textarea>
                                    @error('excerpt')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div>
    
                                    <textarea
                                        rows="5"
                                        wire:model.lazy="content"
                                        placeholder="Content"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-3"></textarea>
                                    @error('content')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
    
                            </div>
    
                        </div>
    
                        <!-- SEO -->
                        <div class="bg-white rounded-xl border border-gray-200 shadow-sm">
    
                            <div class="px-6 py-4 border-b">
                                <h2 class="text-lg font-semibold">
                                    SEO Info
                                </h2>
                            </div>
    
                            <div class="p-6 space-y-5">
    
                                <input
                                    type="text"
                                    placeholder="Meta Title"
                                    wire:model.lazy="meta_title"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3">
                                @error('meta_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
    
                                <textarea
                                    rows="3"
                                    placeholder="Meta Description"
                                    wire:model.lazy="meta_description"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3"></textarea>
                                @error('meta_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
    
                                <input
                                    type="text"
                                    placeholder="Meta Keywords"
                                    wire:model.lazy="meta_keywords"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3">
                                @error('meta_keywords')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
    
                            </div>
    
                        </div>
    
                    </div>
    
                    <!-- Right -->
                    <div class="space-y-6">
    
                        <!-- Publish -->
                        <div class="bg-white rounded-xl border border-gray-200 shadow-sm">
    
                            <div class="px-6 py-4 border-b">
                                <h2 class="text-lg font-semibold">
                                    Publish
                                </h2>
                            </div>
    
                            <div class="p-6 space-y-4">
    
                                <input
                                    type="file"
                                    wire:model.lazy="featured_image"
                                    class="w-full rounded-lg border border-gray-300">
    
                                <select
                                    wire:model="status"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3">
    
                                    <option value="Draft">Draft</option>
                                    <option value="Published">Published</option>
                                    <option value="Scheduled">Scheduled</option>
    
                                </select>
    
                                <!--<input-->
                                <!--    type="datetime-local"-->
                                <!--    wire:model="published_at"-->
                                <!--    class="w-full rounded-lg border border-gray-300 px-4 py-3">-->
    
                                <button
                                    type="submit"
                                    class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700">
    
                                    Save Article
    
                                </button>
    
                            </div>
    
                        </div>
    
                        <!-- Statistics -->
                        <div class="bg-white rounded-xl border border-gray-200 shadow-sm">
    
                            <div class="px-6 py-4 border-b">
                                <h2 class="text-lg font-semibold">
                                    Statistics
                                </h2>
                            </div>
    
                            <div class="p-6">
    
                                <label class="block text-sm font-medium mb-2">
                                    Views
                                </label>
    
                                <input
                                    type="text"
                                    wire:model="views"
                                    readonly
                                    class="w-full rounded-lg border border-gray-300 bg-gray-100 px-4 py-3">
    
                            </div>
    
    
    
                        </div>
    
    
    
    
                    </div>
    
                </div>
            </form>
        @elseif($board == 'edit_article')
        @elseif($board == 'companies' || $board == 'referral')
           @php
             $getrawdata = DB::table('importcontacts')->paginate(50);
           @endphp
           
           
       <div class="flex flex-wrap gap-1">

    @foreach($getrawdata as $business)

        @php
            $hasDetails = !empty($business->details);
        @endphp

        <a href="{{ $hasDetails
                ? route('crm.company.details', $business->id)
                : '#' }}"
           class="inline-flex items-center gap-2
                  px-3 py-2
                  rounded-full
                  border
                  text-sm font-medium
                  transition
                  {{ $hasDetails
                        ? 'bg-green-50 border-green-300 text-green-800 hover:bg-green-100'
                        : 'bg-white border-gray-200 text-gray-700 hover:bg-gray-50'
                  }}">

            {{-- Logo / Initial --}}
            <span class="w-6 h-6 rounded-full
                         bg-gray-100
                         flex items-center justify-center
                         text-xs font-semibold
                         shrink-0">

                {{ strtoupper(substr(trim($business->company_name), 0, 1)) }}

            </span>

            {{-- Company name --}}
            <span class="max-w-[220px] truncate">
                {{ $business->company_name }}
            </span>

            {{-- Details indicator --}}
            @if($hasDetails)
                <span class="w-2 h-2 rounded-full bg-green-500"></span>
            @endif

        </a>

    @endforeach

</div>

<div class="sticky bottom-0 z-20 bg-white border-t border-gray-200 px-4 py-3">

    <div class="flex items-center justify-between">

        <div class="text-sm text-gray-500">
            Showing
            <span class="font-medium text-gray-700">
                {{ $getrawdata->firstItem() }}
            </span>
            –
            <span class="font-medium text-gray-700">
                {{ $getrawdata->lastItem() }}
            </span>
            of
            <span class="font-medium text-gray-700">
                {{ $getrawdata->total() }}
            </span>
        </div>

        <div>
            {{ $getrawdata->links() }}
        </div>

    </div>

</div>


        @elseif($board == 'hot')
        
           <div x-data="{ openAudience: false, openComments: false, selectedLead: null, commentLead: null }">
               @foreach($businessleados as $business)
                   @php 
                     $bgClass = match(strtolower($business->status)) {
                                            'new' => 'bg-red-100',
                                            'manual' => 'bg-yellow-100',
                                            'assigned' => 'bg-blue-100',
                                            'interested' => 'bg-green-100',
                                            'quotation' => 'bg-orange-100',
                                            'payment' => 'bg-purple-100',
                                            'lost' => 'bg-red-100',
                                            default => 'bg-white',
                                        };
                   @endphp
                   
                    <div class="{{ $bgClass }} rounded-xl shadow border border-gray-200 mb-1">
                           <div class="p-4">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                
                                <!-- Lead Details -->
                                <div class="flex-1">
                
                                    <div class="flex items-center gap-4">
                                        <h3 class="text-lg font-semibold text-gray-800">{{ $business->company_name ?? 'No Company Name' }} | {{$business->audience_type ?? 'no type'}}</h3>
                                        
                                        <div x-cloak>
                
                                            <!-- Button -->
                                            <button @click="selectedLead = {{ $business->id }}; openAudience = true;"
                                                class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500"> Select Audience</button>
                                       </div>
                                    </div>
                                        
                                    <div class="flex flex-wrap items-center gap-4 mt-2 text-sm text-gray-500">
                
                                        <span class="flex items-center gap-1">👤<strong class="text-gray-700">{{$business->name}}</strong></span>
                
                                        <span class="flex items-center gap-1">📞 <a href="https://wa.me/91{{ preg_replace('/\D/', '', $business->phone) }}" target="_blank">{{$business->phone}}</a></span>
                
                                        <span class="flex items-center gap-1">✉️ <a href="mailto:{{ $business->email }}">{{$business->email}}</a></span>
                
                                    </div>
                                        @php 
                                            $comments = DB::table('comments')->where('lead_id', $business->id)->orderBy('created_at', 'desc')->get();
                                            $teamName = 'No assigned';
                                            if (!empty($assigncomment->assigned_to)) {
                                                $teamName = DB::table('users')
                                                    ->where('id', $assigncomment->assigned_to)
                                                    ->value('name') ?? 'No assigned';
                                            }
                                        @endphp
                                                                    
                                    <div class="flex flex-wrap items-center gap-3 mt-3 text-sm">
                                        
                                        <span class="flex items-center gap-1 text-gray-600">
                                           <div x-cloak>
                                               
                                            <button type="button" @click=" commentLead = {{ $business->id }}; openComments = true; $wire.loadComments({{ $business->id }}); "
                                                class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                Comments
                                            </button>
                                          </div>
                                        </span>
                
                                        @php 
                                          $laststatus = DB::table('comments')->where('lead_id', $business->id)->where('user_id', auth()->id())->orderBy('created_at', 'desc')->value('action');
                                        @endphp
                                          
                                        <span class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">{{$laststatus}}</span>
                
                                        <span class="font-semibold text-green-600">₹2,00,000</span>
                
                                        <span class="text-gray-500">Created_at: {{$business->created_at}}</span>
                
                                        <span class="text-gray-700">👤 {{ $teamName }}</span>
                
                                    </div>
                
                                </div>
                
                                <!-- Right Side -->
                                <div class="flex items-center gap-2">
                
                                    <div class="text-center mr-3">
                                        @if(auth()->check() && auth()->user()->role === 'admin')
                                            
                                            @php 
                                              $assignUsers = DB::table('users')->get();
                                            @endphp  
                                        
                                                <div x-data="{ open: false }" class="relative inline-block text-left">
                
                                                    <button
                                                        @click="open = !open"
                                                        class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                        Assign User
                                                        <svg class="h-4 w-4 transition-transform"
                                                             :class="{ 'rotate-180': open }"
                                                             fill="none"
                                                             stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round"
                                                                  stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M19 9l-7 7-7-7"/>
                                                        </svg>
                                                    </button>
                                                
                                                    <ul
                                                        x-show="open"
                                                        @click.away="open = false"
                                                        x-transition
                                                        class="absolute right-0 z-50 mt-2 w-64 overflow-hidden rounded-xl border border-gray-200 bg-white shadow-xl">
                                                
                                                        @foreach($assignUsers as $assignUser)
                                                            <li wire:key="assign-user-{{ $assignUser->id }}">
                                                                <button
                                                                    wire:click="updateCommentStatus({{ $assignUser->id }}, {{ $business->id }})"
                                                                    @click="open = false"
                                                                    class="flex w-full items-center justify-between px-4 py-3 text-left transition hover:bg-indigo-50 hover:text-indigo-600">
                                                
                                                                    <div>
                                                                        <p class="font-medium">{{ $assignUser->name }}</p>
                                                
                                                                        <p class="text-xs text-gray-500">{{ ucfirst($assignUser->role) }}</p>
                                                                    </div>
                
                                                                </button>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                               
                                         @else
                                            
                                            <div class="font-semibold text-gray-800">
                                                {{ ($assigncomment->assigned_to) ?? 'Unassigned' }}
                                            </div>
                                            
                                        @endif
                
                                    </div>
                
                                    <!-- Call -->
                                    <a href="tel:9876543217"
                                        class="w-10 h-10 rounded-lg bg-green-600 hover:bg-green-700 text-white flex items-center justify-center transition">
                                        📞
                                    </a>
                
                                    <!-- WhatsApp -->
                                    <a href="https://wa.me/919876543217"
                                        class="w-10 h-10 rounded-lg  text-green-600 hover:bg-green-600 hover:text-white flex items-center justify-center transition">
                                        💬
                                    </a>
                
                                    <!-- Email -->
                                    <a href="mailto:anil@gmail.com"
                                        class="w-10 h-10 rounded-lg text-blue-600 hover:bg-blue-600 hover:text-white flex items-center justify-center transition">
                                        ✉️
                                    </a>
                
                                    <!-- Dropdown -->
                                    <div class="relative">
                
                                        <button
                                            class="w-10 h-10 rounded-lg  hover:bg-gray-100 flex items-center justify-center">
                                            ⋮
                                        </button>
                
                                        <!-- Dropdown Menu -->
                                        <div
                                            class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg hidden">
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                View Lead
                                            </a>
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                Edit Lead
                                            </a>
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                Add Follow-up
                                            </a>
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                Move to Won
                                            </a>
                
                                        </div>
                
                                    </div>
                
                                </div>
                
                            </div>
                           </div>
                        </div>
                        
               @endforeach
               <div class="mt-6">{{ $businessleados->links() }}</div>
                <!-- model Overlay -->
                    <div x-cloak x-show="openAudience" x-transition.opacity class="fixed inset-0 bg-black/70 z-40 flex items-center justify-center">
                        <!-- Modal -->
                        <div @click.away="openAudience = false" class="relative w-[95vw] max-w-7xl h-[88vh] bg-white rounded-2xl shadow-2xl overflow-hidden">
                
                            <!-- Header -->
                            <div class="flex items-center justify-between border-b p-5">
                                <h2 class="text-xl font-bold">Select Audience Type</h2>
                                <button @click="openAudience = false" class="text-gray-500 hover:text-red-600 text-xl">✕</button>
                            </div>
                
                            <!-- Audience List -->
                            <div class="grid grid-cols-2 md:grid-cols-5 gap-2 p-6 max-h-[60vh] overflow-y-auto">
                
                                @foreach($audiences as $audience)
                                    <button @click="$wire.updateAudienceType('{{ $audience['title'] }}',selectedLead);openAudience=false;" class="rounded-xl border border-gray-200 p-4 text-left hover:border-indigo-500 hover:bg-indigo-50 transition">
                
                                        <div class="font-semibold text-gray-800">{{ $audience['title'] }}</div>
                                        <div class="mt-1 text-xs text-gray-500">{{ $audience['purpose'] }}</div>
                                    </button>
                                @endforeach
                
                            </div>
                
                        </div>
                    </div>
                
                    <!-- Overlay -->
                    <div x-cloak x-show="openComments" x-transition.opacity class="fixed inset-0 bg-black/70 z-40 flex items-center justify-center">
                      <!-- Modal -->
                      <div @click.away="openComments = false" class="relative w-[95vw] max-w-7xl h-[88vh] bg-white rounded-2xl shadow-2xl overflow-hidden">
                        <!-- Header -->
                        <div class="flex items-center justify-between border-b p-5">
                          <div class="">
                            <h3 class="font-semibold text-lg">Add New Comment</h3>
                            <p class="text-sm text-gray-500">
                                @if($commentoLead)
                                    to: {{ $commentoLead->name }}
                                    | {{ $commentoLead->phone }}
                                    | {{ $commentoLead->email }}
                                @else
                                    No lead selected
                                @endif
                            </p>
                          </div>
                    
                          <button @click="openComments = false" class="text-gray-500 hover:text-red-600 text-xl">✕</button>
                        </div>
                    
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-1">
                          <!-- Previous Comments -->
                          <div class="lg:col-span-1">
                            <div class="bg-white rounded-2xl shadow-sm h-[600px] flex flex-col">
                              <div class="flex-1 overflow-y-auto p-2 space-y-1">
                                  @php 
                                    $commentis = DB::table('comments')->where('lead_id', $this->commentLead)->orderBy('created_at', 'desc')->get();
                                  @endphp
                                  
                                    @forelse($commentis as $comment) 
                                        @php 
                                         $getnamecommentby = DB::table('users')->where('id', $comment->user_id)->value('name');
                                        @endphp
                                        <div class="border rounded-xl p-2 bg-gray-50">
                                          <div class="flex justify-between items-center">
                                            <span class="font-semibold text-sm">{{ $getnamecommentby }}</span>
                                            <span class="text-xs text-gray-500">{{ $comment->action }} | {{ $comment->updated_at }}</span>
                                          </div>
                            
                                          <p class="mt-1 text-sm text-gray-700 leading-6">{{$comment->comments}}</p>
                                      </div>
                                    @empty
                    
                                <div class="text-center py-16">
                                  <svg class="mx-auto w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h8M8 14h5M5 20l2-2h10a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v14z"/>
                                  </svg>
                                  <p class="mt-3 text-gray-500">No comments yet.</p>
                                </div>
                    
                                @endforelse
                              </div>
                            </div>
                          </div>
                    
                          <!-- New Comment -->
                          <div class="lg:col-span-2">
                            <div class="bg-white rounded-2xl shadow-sm">
                              <form wire:submit.prevent="saveComment()" class="p-2" >
                                <div class="grid md:grid-cols-3 gap-3">
                                  <!-- Journey Stage -->
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2"
                                      >Lead Journey Stage testo</label
                                    >
                    
                                    <select
                                      wire:model.live="journey_stage"
                                      class="w-full rounded-xl border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                                    >
                                      <option value="selected">Select Journey Stage</option>
                    
                                      <option value="new_lead">New Lead</option>
                                      <option value="first_call_completed">
                                        First Call Completed
                                      </option>
                                      <option value="interested">Interested</option>
                                      <option value="need_more_information">
                                        Need More Information
                                      </option>
                                      <option value="meeting_scheduled">Meeting Scheduled</option>
                                      <option value="meeting_completed">Meeting Completed</option>
                                      <option value="proposal_shared">Proposal Shared</option>
                                      <option value="quotation_sent">Quotation Sent</option>
                                      <option value="negotiation">Negotiation</option>
                                      <option value="booking_confirmed">Booking Confirmed</option>
                                      <option value="payment_pending">Payment Pending</option>
                                      <option value="exhibitor_confirmed">
                                        Exhibitor Confirmed
                                      </option>
                                      <option value="not_interested">Not Interested</option>
                                      <option value="lost_lead">Lost Lead</option>
                                    </select>
                                  </div>
                    
                                  <!-- Communication Type -->
                    
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                      Communication Type
                                    </label>
                    
                                    <select
                                      wire:model.live="communication_type"
                                      class="w-full rounded-xl border-gray-300"
                                    >
                                      <option value="selected">Select Communication</option>
                    
                                      <option value="phone_call">Phone Call</option>
                                      <option value="whatsapp">WhatsApp</option>
                                      <option value="email">Email</option>
                                      <option value="video_meeting">Video Meeting</option>
                                      <option value="physical_meeting">Physical Meeting</option>
                                    </select>
                                  </div>
                    
                                  <!-- Priority -->
                    
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                      Lead Priority
                                    </label>
                    
                                    <select wire:model.live="priority" class="w-full rounded-xl border-gray-300">
                                      <option value="selected">selected</option>
                                      <option value="hot">Hot 🔥</option>
                                      <option value="warm">Warm 🟡</option>
                                      <option value="cold">Cold 🔵</option>
                                    </select>
                                  </div>
                                </div>
                    
                                <!-- Meeting Details -->
                    
                                @if(in_array($communication_type, ['video_meeting','physical_meeting']))
                                   <div class="grid md:grid-cols-2 gap-6">
                                  <div>
                                    <label class="block text-sm font-medium mb-2">Meeting Date</label>
                    
                                    <input type="date" wire:model="meeting_date" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                    
                                  <div>
                                    <label class="block text-sm font-medium mb-2">Meeting Time</label>
                    
                                    <input type="time" wire:model.lazy="meeting_time" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                    
                                  <div class="md:col-span-2">
                                    <label class="block text-sm font-medium mb-2">Venue / Meeting Link</label>
                    
                                    <input wire:model.lazy="meeting_venue" placeholder="Office / Hotel / Zoom / Google Meet" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                                  
                                </div>
                                @endif
                    
                                <!-- Person Meeting -->
                    
                                @if(in_array($communication_type,['video_meeting','physical_meeting']))
                                   <div class="grid md:grid-cols-2 gap-6">
                                  <div>
                                    <label class="block text-sm font-medium mb-2">
                                      Meeting With
                                    </label>
                    
                                    <select wire:model.live="meeting_with" class="w-full rounded-xl border-gray-300">
                                      <option value="same_contact">Same Contact</option>
                                      <option value="other">Other</option>
                                    </select>
                                  </div>
                    
                                  <div>
                                    <label class="block text-sm font-medium mb-2">
                                      Expected Outcome
                                    </label>
                    
                                    <input
                                      wire:model.lazy="expected_outcome"
                                      placeholder="Discuss Sponsorship"
                                      class="w-full rounded-xl border-gray-300"
                                    />
                                  </div>
                                </div>
                                @endif 
                                
                                @if($meeting_with === 'Other')
                                  <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                      <label class="block text-sm font-medium mb-2">Person Name</label>
                                      <input wire:model.lazy="other_name" class="w-full rounded-xl border-gray-300"/>
                                    </div>
                    
                                    <div>
                                      <label class="block text-sm font-medium mb-2">Designation</label>
                                      <input wire:model.lazy="other_designation" class="w-full rounded-xl border-gray-300"/>
                                    </div>
                                  </div>
                                @endif
                    
                                <div class="grid md:grid-cols-3 gap-3">
                                  <div>
                                    <label class="block text-sm font-medium mb-2">Next Follow-up Date</label>
                                    <input type="date" wire:model="next_followup_date" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                    
                                  <div>
                                    <label class="block text-sm font-medium mb-2">
                                      Next Follow-up Time
                                    </label>
                    
                                    <input
                                      type="time"
                                      wire:model="next_followup_time"
                                      class="w-full rounded-xl border-gray-300"
                                    />
                                  </div>
                    
                                  <!-- Follow-up -->
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                      Next Follow-up Action
                                    </label>
                    
                                    <select
                                      wire:model.live="next_action"
                                      class="w-full rounded-xl border-gray-300"
                                    >
                                      <option value="selected">Select</option>
                                      <option value="call_again">Call Again</option>
                                      <option value="send_email">Send Email</option>
                                      <option value="send_brochure">Send Brochure</option>
                                      <option value="send_quotation">Send Quotation</option>
                                      <option value="arrange_meeting">Arrange Meeting</option>
                                      <option value="follow_up_after_event">
                                        Follow-up After Event
                                      </option>
                                      <option>Close Lead</option>
                                    </select>
                                  </div>
                                </div>
                    
                                <!-- Comment -->
                    
                                <div>
                                  <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Discussion Summary
                                  </label>
                    
                                  <textarea
                                    rows="3"
                                    wire:model.lazy="comment"
                                    placeholder="Write what happened during today's discussion..."
                                    class="w-full rounded-xl border-gray-300"
                                  ></textarea>
                                </div>
                    
                                <!-- Internal Note -->
                    
                                <div>
                                  <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Internal Note (Visible only to Team)
                                  </label>
                    
                                  <textarea
                                    rows="2"
                                    wire:model.lazy="internal_note"
                                    class="w-full rounded-xl border-gray-300"
                                  ></textarea>
                                </div>
                    
                                <!-- Button -->
                    
                                <div class="flex justify-end gap-3 pt-4">
                                  <button
                                    type="reset"
                                    class="px-6 py-3 rounded-xl border border-gray-300 hover:bg-gray-100"
                                  >
                                    Cancel
                                  </button>
                    
                                  <button
                                    type="submit"
                                    wire:loading.attr="disabled"
                                    class="px-8 py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700"
                                  >
                                    <span wire:loading.remove> Save Follow-up </span>
                    
                                    <span wire:loading> Saving... </span>
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        
        @elseif($board == 'contacted')
            
            <div x-data="{ openAudience: false, openComments: false, selectedLead: null, commentLead: null }">
               @foreach($businessleados as $business)
                   @php 
                     $bgClass = match(strtolower($business->status ?? 'new')) {
                                            'new' => 'bg-red-100',
                                            'manual' => 'bg-yellow-100',
                                            'assigned' => 'bg-blue-100',
                                            'interested' => 'bg-green-100',
                                            'quotation' => 'bg-orange-100',
                                            'payment' => 'bg-purple-100',
                                            'lost' => 'bg-red-100',
                                            'default' => 'bg-white',
                                        };
                   @endphp
                   
                    <div class="{{ $bgClass }} rounded-xl shadow border border-gray-200 mb-1">
                           <div class="p-4">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                
                                <!-- Lead Details -->
                                <div class="flex-1">
                
                                    <div class="flex items-center gap-4">
                                        <h3 class="text-lg font-semibold text-gray-800">{{ $business->company_name ?? 'No Company Name' }} | {{$business->audience_type ?? 'no type'}}</h3>
                                        
                                        <div x-cloak>
                
                                            <!-- Button -->
                                            <button @click="selectedLead = {{ $business->id }}; openAudience = true;"
                                                class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500"> Select Audience</button>
                                       </div>
                                    </div>
                                        
                                    <div class="flex flex-wrap items-center gap-4 mt-2 text-sm text-gray-500">
                
                                        <span class="flex items-center gap-1">👤<strong class="text-gray-700">{{$business->name}}</strong></span>
                
                                        <span class="flex items-center gap-1">📞 <a href="https://wa.me/91{{ preg_replace('/\D/', '', $business->phone) }}" target="_blank">{{$business->phone}}</a></span>
                
                                        <span class="flex items-center gap-1">✉️ <a href="mailto:{{ $business->email }}">{{$business->email}}</a></span>
                
                                    </div>
                                        @php 
                                            $comments = DB::table('comments')->where('lead_id', $business->id)->orderBy('created_at', 'desc')->get();
                                            $teamName = 'No assigned';
                                            if (!empty($assigncomment->assigned_to)) {
                                                $teamName = DB::table('users')
                                                    ->where('id', $assigncomment->assigned_to)
                                                    ->value('name') ?? 'No assigned';
                                            }
                                        @endphp
                                                                    
                                    <div class="flex flex-wrap items-center gap-3 mt-3 text-sm">
                                        
                                        <span class="flex items-center gap-1 text-gray-600">
                                           <div x-cloak>
                                               
                                            <button type="button" @click=" commentLead = {{ $business->id }}; openComments = true; $wire.loadComments({{ $business->id }}); "
                                                class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                Comments
                                            </button>
                                          </div>
                                        </span>
                
                                        @php 
                                          $laststatus = DB::table('comments')->where('lead_id', $business->id)->where('user_id', auth()->id())->orderBy('created_at', 'desc')->value('action');
                                        @endphp
                                          
                                        <span class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">{{$laststatus}}</span>
                
                                        <span class="font-semibold text-green-600">₹2,00,000</span>
                
                                        <span class="text-gray-500">Created_at: {{$business->created_at}}</span>
                
                                        <span class="text-gray-700">👤 {{ $teamName }}</span>
                
                                    </div>
                
                                </div>
                
                                <!-- Right Side -->
                                <div class="flex items-center gap-2">
                
                                    <div class="text-center mr-3">
                                        @if(auth()->check() && auth()->user()->role === 'admin')
                                            
                                            @php 
                                              $assignUsers = DB::table('users')->get();
                                            @endphp  
                                        
                                                <div x-data="{ open: false }" class="relative inline-block text-left">
                
                                                    <button
                                                        @click="open = !open"
                                                        class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                        Assign User
                                                        <svg class="h-4 w-4 transition-transform"
                                                             :class="{ 'rotate-180': open }"
                                                             fill="none"
                                                             stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round"
                                                                  stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M19 9l-7 7-7-7"/>
                                                        </svg>
                                                    </button>
                                                
                                                    <ul
                                                        x-show="open"
                                                        @click.away="open = false"
                                                        x-transition
                                                        class="absolute right-0 z-50 mt-2 w-64 overflow-hidden rounded-xl border border-gray-200 bg-white shadow-xl">
                                                
                                                        @foreach($assignUsers as $assignUser)
                                                            <li wire:key="assign-user-{{ $assignUser->id }}">
                                                                <button
                                                                    wire:click="updateCommentStatus({{ $assignUser->id }}, {{ $business->id }})"
                                                                    @click="open = false"
                                                                    class="flex w-full items-center justify-between px-4 py-3 text-left transition hover:bg-indigo-50 hover:text-indigo-600">
                                                
                                                                    <div>
                                                                        <p class="font-medium">{{ $assignUser->name }}</p>
                                                
                                                                        <p class="text-xs text-gray-500">{{ ucfirst($assignUser->role) }}</p>
                                                                    </div>
                
                                                                </button>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                               
                                         @else
                                            
                                            <div class="font-semibold text-gray-800">
                                                {{ ($assigncomment->assigned_to) ?? 'Unassigned' }}
                                            </div>
                                            
                                        @endif
                
                                    </div>
                
                                    <!-- Call -->
                                    <a href="tel:9876543217"
                                        class="w-10 h-10 rounded-lg bg-green-600 hover:bg-green-700 text-white flex items-center justify-center transition">
                                        📞
                                    </a>
                
                                    <!-- WhatsApp -->
                                    <a href="https://wa.me/919876543217"
                                        class="w-10 h-10 rounded-lg  text-green-600 hover:bg-green-600 hover:text-white flex items-center justify-center transition">
                                        💬
                                    </a>
                
                                    <!-- Email -->
                                    <a href="mailto:anil@gmail.com"
                                        class="w-10 h-10 rounded-lg text-blue-600 hover:bg-blue-600 hover:text-white flex items-center justify-center transition">
                                        ✉️
                                    </a>
                
                                    <!-- Dropdown -->
                                    <div class="relative">
                
                                        <button
                                            class="w-10 h-10 rounded-lg  hover:bg-gray-100 flex items-center justify-center">
                                            ⋮
                                        </button>
                
                                        <!-- Dropdown Menu -->
                                        <div
                                            class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg hidden">
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                View Lead
                                            </a>
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                Edit Lead
                                            </a>
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                Add Follow-up
                                            </a>
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                Move to Won
                                            </a>
                
                                        </div>
                
                                    </div>
                
                                </div>
                
                            </div>
                           </div>
                        </div>
                        
               @endforeach
               <div class="mt-6">{{ $businessleados->links() }}</div>
                <!-- model Overlay -->
                    <div x-cloak x-show="openAudience" x-transition.opacity class="fixed inset-0 bg-black/70 z-40 flex items-center justify-center">
                        <!-- Modal -->
                        <div @click.away="openAudience = false" class="relative w-[95vw] max-w-7xl h-[88vh] bg-white rounded-2xl shadow-2xl overflow-hidden">
                
                            <!-- Header -->
                            <div class="flex items-center justify-between border-b p-5">
                                <h2 class="text-xl font-bold">Select Audience Type</h2>
                                <button @click="openAudience = false" class="text-gray-500 hover:text-red-600 text-xl">✕</button>
                            </div>
                
                            <!-- Audience List -->
                            <div class="grid grid-cols-2 md:grid-cols-5 gap-2 p-6 max-h-[60vh] overflow-y-auto">
                
                                @foreach($audiences as $audience)
                                    <button @click="$wire.updateAudienceType('{{ $audience['title'] }}',selectedLead);openAudience=false;" class="rounded-xl border border-gray-200 p-4 text-left hover:border-indigo-500 hover:bg-indigo-50 transition">
                
                                        <div class="font-semibold text-gray-800">{{ $audience['title'] }}</div>
                                        <div class="mt-1 text-xs text-gray-500">{{ $audience['purpose'] }}</div>
                                    </button>
                                @endforeach
                
                            </div>
                
                        </div>
                    </div>
                
                    <!-- Overlay -->
                    <div x-cloak x-show="openComments" x-transition.opacity class="fixed inset-0 bg-black/70 z-40 flex items-center justify-center">
                      <!-- Modal -->
                      <div @click.away="openComments = false" class="relative w-[95vw] max-w-7xl h-[88vh] bg-white rounded-2xl shadow-2xl overflow-hidden">
                        <!-- Header -->
                        <div class="flex items-center justify-between border-b p-5">
                          <div class="">
                            <h3 class="font-semibold text-lg">Add New Comment</h3>
                            <p class="text-sm text-gray-500">
                                @if($commentoLead)
                                    to: {{ $commentoLead->name }}
                                    | {{ $commentoLead->phone }}
                                    | {{ $commentoLead->email }}
                                @else
                                    No lead selected
                                @endif
                            </p>
                          </div>
                    
                          <button @click="openComments = false" class="text-gray-500 hover:text-red-600 text-xl">✕</button>
                        </div>
                    
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-1">
                          <!-- Previous Comments -->
                          <div class="lg:col-span-1">
                            <div class="bg-white rounded-2xl shadow-sm h-[600px] flex flex-col">
                              <div class="flex-1 overflow-y-auto p-2 space-y-1">
                                  @php 
                                    $commentis = DB::table('comments')->where('lead_id', $this->commentLead)->orderBy('created_at', 'desc')->get();
                                  @endphp
                                  
                                    @forelse($commentis as $comment) 
                                        @php 
                                         $getnamecommentby = DB::table('users')->where('id', $comment->user_id)->value('name');
                                        @endphp
                                        <div class="border rounded-xl p-2 bg-gray-50">
                                          <div class="flex justify-between items-center">
                                            <span class="font-semibold text-sm">{{ $getnamecommentby }}</span>
                                            <span class="text-xs text-gray-500">{{ $comment->action }} | {{ $comment->updated_at }}</span>
                                          </div>
                            
                                          <p class="mt-1 text-sm text-gray-700 leading-6">{{$comment->comments}}</p>
                                      </div>
                                    @empty
                    
                                <div class="text-center py-16">
                                  <svg class="mx-auto w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h8M8 14h5M5 20l2-2h10a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v14z"/>
                                  </svg>
                                  <p class="mt-3 text-gray-500">No comments yet.</p>
                                </div>
                    
                                @endforelse
                              </div>
                            </div>
                          </div>
                    
                          <!-- New Comment -->
                          <div class="lg:col-span-2">
                            <div class="bg-white rounded-2xl shadow-sm">
                              <form wire:submit.prevent="saveComment()" class="p-2" >
                                <div class="grid md:grid-cols-3 gap-3">
                                  <!-- Journey Stage -->
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2"
                                      >Lead Journey Stage testo</label
                                    >
                    
                                    <select
                                      wire:model.live="journey_stage"
                                      class="w-full rounded-xl border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                                    >
                                      <option value="selected">Select Journey Stage</option>
                    
                                      <option value="new_lead">New Lead</option>
                                      <option value="first_call_completed">
                                        First Call Completed
                                      </option>
                                      <option value="interested">Interested</option>
                                      <option value="need_more_information">
                                        Need More Information
                                      </option>
                                      <option value="meeting_scheduled">Meeting Scheduled</option>
                                      <option value="meeting_completed">Meeting Completed</option>
                                      <option value="proposal_shared">Proposal Shared</option>
                                      <option value="quotation_sent">Quotation Sent</option>
                                      <option value="negotiation">Negotiation</option>
                                      <option value="booking_confirmed">Booking Confirmed</option>
                                      <option value="payment_pending">Payment Pending</option>
                                      <option value="exhibitor_confirmed">
                                        Exhibitor Confirmed
                                      </option>
                                      <option value="not_interested">Not Interested</option>
                                      <option value="lost_lead">Lost Lead</option>
                                    </select>
                                  </div>
                    
                                  <!-- Communication Type -->
                    
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                      Communication Type
                                    </label>
                    
                                    <select
                                      wire:model.live="communication_type"
                                      class="w-full rounded-xl border-gray-300"
                                    >
                                      <option value="selected">Select Communication</option>
                    
                                      <option value="phone_call">Phone Call</option>
                                      <option value="whatsapp">WhatsApp</option>
                                      <option value="email">Email</option>
                                      <option value="video_meeting">Video Meeting</option>
                                      <option value="physical_meeting">Physical Meeting</option>
                                    </select>
                                  </div>
                    
                                  <!-- Priority -->
                    
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                      Lead Priority
                                    </label>
                    
                                    <select wire:model.live="priority" class="w-full rounded-xl border-gray-300">
                                      <option value="selected">selected</option>
                                      <option value="hot">Hot 🔥</option>
                                      <option value="warm">Warm 🟡</option>
                                      <option value="cold">Cold 🔵</option>
                                    </select>
                                  </div>
                                </div>
                    
                                <!-- Meeting Details -->
                    
                                @if(in_array($communication_type, ['video_meeting','physical_meeting']))
                                   <div class="grid md:grid-cols-2 gap-6">
                                  <div>
                                    <label class="block text-sm font-medium mb-2">Meeting Date</label>
                    
                                    <input type="date" wire:model="meeting_date" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                    
                                  <div>
                                    <label class="block text-sm font-medium mb-2">Meeting Time</label>
                    
                                    <input type="time" wire:model.lazy="meeting_time" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                    
                                  <div class="md:col-span-2">
                                    <label class="block text-sm font-medium mb-2">Venue / Meeting Link</label>
                    
                                    <input wire:model.lazy="meeting_venue" placeholder="Office / Hotel / Zoom / Google Meet" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                                  
                                </div>
                                @endif
                    
                                <!-- Person Meeting -->
                    
                                @if(in_array($communication_type,['video_meeting','physical_meeting']))
                                   <div class="grid md:grid-cols-2 gap-6">
                                  <div>
                                    <label class="block text-sm font-medium mb-2">
                                      Meeting With
                                    </label>
                    
                                    <select wire:model.live="meeting_with" class="w-full rounded-xl border-gray-300">
                                      <option value="same_contact">Same Contact</option>
                                      <option value="other">Other</option>
                                    </select>
                                  </div>
                    
                                  <div>
                                    <label class="block text-sm font-medium mb-2">
                                      Expected Outcome
                                    </label>
                    
                                    <input
                                      wire:model.lazy="expected_outcome"
                                      placeholder="Discuss Sponsorship"
                                      class="w-full rounded-xl border-gray-300"
                                    />
                                  </div>
                                </div>
                                @endif 
                                
                                @if($meeting_with === 'Other')
                                  <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                      <label class="block text-sm font-medium mb-2">Person Name</label>
                                      <input wire:model.lazy="other_name" class="w-full rounded-xl border-gray-300"/>
                                    </div>
                    
                                    <div>
                                      <label class="block text-sm font-medium mb-2">Designation</label>
                                      <input wire:model.lazy="other_designation" class="w-full rounded-xl border-gray-300"/>
                                    </div>
                                  </div>
                                @endif
                    
                                <div class="grid md:grid-cols-3 gap-3">
                                  <div>
                                    <label class="block text-sm font-medium mb-2">Next Follow-up Date</label>
                                    <input type="date" wire:model="next_followup_date" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                    
                                  <div>
                                    <label class="block text-sm font-medium mb-2">
                                      Next Follow-up Time
                                    </label>
                    
                                    <input
                                      type="time"
                                      wire:model="next_followup_time"
                                      class="w-full rounded-xl border-gray-300"
                                    />
                                  </div>
                    
                                  <!-- Follow-up -->
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                      Next Follow-up Action
                                    </label>
                    
                                    <select
                                      wire:model.live="next_action"
                                      class="w-full rounded-xl border-gray-300"
                                    >
                                      <option value="selected">Select</option>
                                      <option value="call_again">Call Again</option>
                                      <option value="send_email">Send Email</option>
                                      <option value="send_brochure">Send Brochure</option>
                                      <option value="send_quotation">Send Quotation</option>
                                      <option value="arrange_meeting">Arrange Meeting</option>
                                      <option value="follow_up_after_event">
                                        Follow-up After Event
                                      </option>
                                      <option>Close Lead</option>
                                    </select>
                                  </div>
                                </div>
                    
                                <!-- Comment -->
                    
                                <div>
                                  <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Discussion Summary
                                  </label>
                    
                                  <textarea
                                    rows="3"
                                    wire:model.lazy="comment"
                                    placeholder="Write what happened during today's discussion..."
                                    class="w-full rounded-xl border-gray-300"
                                  ></textarea>
                                </div>
                    
                                <!-- Internal Note -->
                    
                                <div>
                                  <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Internal Note (Visible only to Team)
                                  </label>
                    
                                  <textarea
                                    rows="2"
                                    wire:model.lazy="internal_note"
                                    class="w-full rounded-xl border-gray-300"
                                  ></textarea>
                                </div>
                    
                                <!-- Button -->
                    
                                <div class="flex justify-end gap-3 pt-4">
                                  <button
                                    type="reset"
                                    class="px-6 py-3 rounded-xl border border-gray-300 hover:bg-gray-100"
                                  >
                                    Cancel
                                  </button>
                    
                                  <button
                                    type="submit"
                                    wire:loading.attr="disabled"
                                    class="px-8 py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700"
                                  >
                                    <span wire:loading.remove> Save Follow-up </span>
                    
                                    <span wire:loading> Saving... </span>
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
         
        @elseif($board == 'new' || $board == 'leads')
        
            @php

                if(auth()->user()->role == 'admin')
                {
                    // Admin can see all leads
                    $businessleads = DB::table('leads')->latest()->get();
                }
                else
                {
                    // Sales team can see only assigned leads
                    $businessleads = DB::table('leads')->whereIn('id', function($query){
                
                            $query->select('lead_id')->from('comments')->where('assigned_to', auth()->id())->where('action', 'assign');
                
                        })->latest()->paginate(20);
                }
                
            @endphp
           
              <div x-data="{ openAudience: false, openComments: false, selectedLead: null, commentLead: null }">

                   @foreach($businessleados as $business)
                       @php 
                         $exhibitor = DB::table('exhibitors')->where('lead_id', $business->id)->first();
                         $assigncomment = DB::table('comments')->where('lead_id', $business->id)->first();
                         $audiences = [
                                        ['title' => 'Exhibitors', 'purpose' => 'Showcase products and services'],
                                        ['title' => 'Visitors', 'purpose' => 'Explore, buy, and network'],
                                        ['title' => 'Buyers', 'purpose' => 'Purchase products or services'],
                                        ['title' => 'Hosted Buyers', 'purpose' => 'Pre-qualified decision makers'],
                                        ['title' => 'VIP Visitors', 'purpose' => 'Special guests and industry leaders'],
                                        ['title' => 'Speakers', 'purpose' => 'Conference and seminar sessions'],
                                        ['title' => 'Sponsors', 'purpose' => 'Brand promotion and visibility'],
                                        ['title' => 'Media', 'purpose' => 'Press, TV, digital publications'],
                                        ['title' => 'Influencers', 'purpose' => 'Social media promotion'],
                                        ['title' => 'Government', 'purpose' => 'Ministries, tourism boards, trade bodies'],
                                        ['title' => 'Investors', 'purpose' => 'Investment and partnerships'],
                                        ['title' => 'Associations', 'purpose' => 'Industry organizations'],
                                        ['title' => 'Students', 'purpose' => 'Learning and career opportunities'],
                                        ['title' => 'Job Seekers', 'purpose' => 'Recruitment opportunities'],
                                        ['title' => 'Suppliers', 'purpose' => 'Supply chain and vendor connections'],
                                        ['title' => 'Startups', 'purpose' => 'New businesses showcasing innovation'],
                                        ['title' => 'Partners', 'purpose' => 'Strategic and business partners'],
                                        ['title' => 'Volunteers', 'purpose' => 'Event support'],
                                        ['title' => 'Delegates', 'purpose' => 'Conference attendees'],
                                        ['title' => 'International Visitors', 'purpose' => 'Overseas buyers and visitors'],
                                    ];
                                    
                                    
                                    $bgClass = match(strtolower($business->status)) {
                                        'new' => 'bg-red-100',
                                        'manual' => 'bg-yellow-100',
                                        'assigned' => 'bg-blue-100',
                                        'interested' => 'bg-green-100',
                                        'quotation' => 'bg-orange-100',
                                        'payment' => 'bg-purple-100',
                                        'lost' => 'bg-red-100',
                                        default => 'bg-white',
                                    };
                                        
                       @endphp
                       <div class="{{ $bgClass }} rounded-xl shadow border border-gray-200 mb-1">
                           <div class="px-2 py-1">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                
                                <!-- Lead Details -->
                                <div class="flex-1">
                
                                    <div class="flex items-center gap-4">
                                        <h3 class="text-lg font-semibold text-gray-800">{{ $business->company_name ?? 'No Company Name' }} | {{$business->audience_type ?? 'no type'}}</h3>
                                        
                                        <div x-cloak>
                
                                            <!-- Button -->
                                            <button @click="selectedLead = {{ $business->id }}; openAudience = true;"
                                                class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500"> Select Audience</button>
                                       </div>
                                    </div>
                                        
                                    <div class="flex flex-wrap items-center gap-4 mt-2 text-sm text-gray-500">
                
                                        <span class="flex items-center gap-1">👤<strong class="text-gray-700">{{$business->name}}</strong></span>
                
                                        <span class="flex items-center gap-1">📞 <a href="https://wa.me/91{{ preg_replace('/\D/', '', $business->phone) }}" target="_blank">{{$business->phone}}</a></span>
                
                                        <span class="flex items-center gap-1">✉️ <a href="mailto:{{ $business->email }}">{{$business->email}}</a></span>
                
                                    </div>
                                        @php 
                                            $comments = DB::table('comments')->where('lead_id', $business->id)->orderBy('created_at', 'desc')->get();
                                            $teamName = 'No assigned';
                                            if (!empty($assigncomment->assigned_to)) {
                                                $teamName = DB::table('users')
                                                    ->where('id', $assigncomment->assigned_to)
                                                    ->value('name') ?? 'No assigned';
                                            }
                                        @endphp
                                                                    
                                    <div class="flex flex-wrap items-center gap-3 mt-3 text-sm">
                                        
                                        <span class="flex items-center gap-1 text-gray-600">
                                           <div x-cloak>
                                               
                                            <button type="button" @click=" commentLead = {{ $business->id }}; openComments = true; $wire.loadComments({{ $business->id }}); "
                                                class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                Comments
                                            </button>
                                          </div>
                                        </span>
                
                                        @php 
                                          $laststatus = DB::table('comments')->where('lead_id', $business->id)->where('user_id', auth()->id())->orderBy('created_at', 'desc')->value('action');
                                        @endphp
                                          
                                        <span class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded-full">{{$laststatus}}</span>
                
                                        <span class="font-semibold text-green-600">₹2,00,000</span>
                
                                        <span class="text-gray-500">Created_at: {{$business->created_at}}</span>
                
                                        <span class="text-gray-700">👤 {{ $teamName }}</span>
                
                                    </div>
                
                                </div>
                
                                <!-- Right Side -->
                                <div class="flex items-center gap-2">
                
                                    <div class="text-center mr-3">
                                        @if(auth()->check() && auth()->user()->role === 'admin')
                                            
                                            @php 
                                              $assignUsers = DB::table('users')->get();
                                            @endphp  
                                        
                                                <div x-data="{ open: false }" class="relative inline-block text-left">
                
                                                    <button
                                                        @click="open = !open"
                                                        class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                        Assign User
                                                        <svg class="h-4 w-4 transition-transform"
                                                             :class="{ 'rotate-180': open }"
                                                             fill="none"
                                                             stroke="currentColor"
                                                             viewBox="0 0 24 24">
                                                            <path stroke-linecap="round"
                                                                  stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M19 9l-7 7-7-7"/>
                                                        </svg>
                                                    </button>
                                                
                                                    <ul
                                                        x-show="open"
                                                        @click.away="open = false"
                                                        x-transition
                                                        class="absolute right-0 z-50 mt-2 w-64 overflow-hidden rounded-xl border border-gray-200 bg-white shadow-xl">
                                                
                                                        @foreach($assignUsers as $assignUser)
                                                            <li wire:key="assign-user-{{ $assignUser->id }}">
                                                                <button
                                                                    wire:click="updateCommentStatus({{ $assignUser->id }}, {{ $business->id }})"
                                                                    @click="open = false"
                                                                    class="flex w-full items-center justify-between px-4 py-3 text-left transition hover:bg-indigo-50 hover:text-indigo-600">
                                                
                                                                    <div>
                                                                        <p class="font-medium">{{ $assignUser->name }}</p>
                                                
                                                                        <p class="text-xs text-gray-500">{{ ucfirst($assignUser->role) }}</p>
                                                                    </div>
                
                                                                </button>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                               
                                         @else
                                            
                                            <div class="font-semibold text-gray-800">
                                                {{ ($assigncomment->assigned_to) ?? 'Unassigned' }}
                                            </div>
                                            
                                        @endif
                
                                    </div>
                
                                    <!-- Call -->
                                    <a href="tel:9876543217"
                                        class="w-10 h-10 rounded-lg bg-green-600 hover:bg-green-700 text-white flex items-center justify-center transition">
                                        📞
                                    </a>
                
                                    <!-- WhatsApp -->
                                    <a href="https://wa.me/919876543217"
                                        class="w-10 h-10 rounded-lg  text-green-600 hover:bg-green-600 hover:text-white flex items-center justify-center transition">
                                        💬
                                    </a>
                
                                    <!-- Email -->
                                    <a href="mailto:anil@gmail.com"
                                        class="w-10 h-10 rounded-lg text-blue-600 hover:bg-blue-600 hover:text-white flex items-center justify-center transition">
                                        ✉️
                                    </a>
                
                                    <!-- Dropdown -->
                                    <div class="relative">
                
                                        <button
                                            class="w-10 h-10 rounded-lg  hover:bg-gray-100 flex items-center justify-center">
                                            ⋮
                                        </button>
                
                                        <!-- Dropdown Menu -->
                                        <div
                                            class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg hidden">
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                View Lead
                                            </a>
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                Edit Lead
                                            </a>
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                Add Follow-up
                                            </a>
                
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                                Move to Won
                                            </a>
                
                                        </div>
                
                                    </div>
                
                                </div>
                
                            </div>
                           </div>
                        </div>
                        
                   @endforeach
                   <div class="mt-6">{{ $businessleados->links() }}</div>
                   <!-- model Overlay -->
                    <div x-cloak x-show="openAudience" x-transition.opacity class="fixed inset-0 bg-black/70 z-40 flex items-center justify-center">
                        <!-- Modal -->
                        <div @click.away="openAudience = false" class="relative w-[95vw] max-w-7xl h-[88vh] bg-white rounded-2xl shadow-2xl overflow-hidden">
                
                            <!-- Header -->
                            <div class="flex items-center justify-between border-b p-5">
                                <h2 class="text-xl font-bold">Select Audience Type</h2>
                                <button @click="openAudience = false" class="text-gray-500 hover:text-red-600 text-xl">✕</button>
                            </div>
                
                            <!-- Audience List -->
                            <div class="grid grid-cols-2 md:grid-cols-5 gap-2 p-6 max-h-[60vh] overflow-y-auto">
                
                                @foreach($audiences as $audience)
                                    <button @click="$wire.updateAudienceType('{{ $audience['title'] }}',selectedLead);openAudience=false;" class="rounded-xl border border-gray-200 p-4 text-left hover:border-indigo-500 hover:bg-indigo-50 transition">
                
                                        <div class="font-semibold text-gray-800">{{ $audience['title'] }}</div>
                                        <div class="mt-1 text-xs text-gray-500">{{ $audience['purpose'] }}</div>
                                    </button>
                                @endforeach
                
                            </div>
                
                        </div>
                    </div>
                
                    <!-- Overlay -->
                    <div x-cloak x-show="openComments" x-transition.opacity class="fixed inset-0 bg-black/70 z-40 flex items-center justify-center">
                      <!-- Modal -->
                      <div @click.away="openComments = false" class="relative w-[95vw] max-w-7xl h-[88vh] bg-white rounded-2xl shadow-2xl overflow-hidden">
                        <!-- Header -->
                        <div class="flex items-center justify-between border-b p-5">
                          <div class="">
                            <h3 class="font-semibold text-lg">Add New Comment</h3>
                            <p class="text-sm text-gray-500">
                                @if($commentoLead)
                                    to: {{ $commentoLead->name }}
                                    | {{ $commentoLead->phone }}
                                    | {{ $commentoLead->email }}
                                @else
                                    No lead selected
                                @endif
                            </p>
                          </div>
                    
                          <button @click="openComments = false" class="text-gray-500 hover:text-red-600 text-xl">✕</button>
                        </div>
                    
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-1">
                          <!-- Previous Comments -->
                          <div class="lg:col-span-1">
                            <div class="bg-white rounded-2xl shadow-sm h-[600px] flex flex-col">
                              <div class="flex-1 overflow-y-auto p-2 space-y-1">
                                  @php 
                                    $commentis = DB::table('comments')->where('lead_id', $this->commentLead)->orderBy('created_at', 'desc')->get();
                                  @endphp
                                  
                                    @forelse($commentis as $comment) 
                                        @php 
                                         $getnamecommentby = DB::table('users')->where('id', $comment->user_id)->value('name');
                                        @endphp
                                        <div class="border rounded-xl p-2 bg-gray-50">
                                          <div class="flex justify-between items-center">
                                            <span class="font-semibold text-sm">{{ $getnamecommentby }}</span>
                                            <span class="text-xs text-gray-500">{{ $comment->action }} | {{ $comment->updated_at }}</span>
                                          </div>
                            
                                          <p class="mt-1 text-sm text-gray-700 leading-6">{{$comment->comments}}</p>
                                      </div>
                                    @empty
                    
                                <div class="text-center py-16">
                                  <svg class="mx-auto w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h8M8 14h5M5 20l2-2h10a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v14z"/>
                                  </svg>
                                  <p class="mt-3 text-gray-500">No comments yet.</p>
                                </div>
                    
                                @endforelse
                              </div>
                            </div>
                          </div>
                    
                          <!-- New Comment -->
                          <div class="lg:col-span-2">
                            <div class="bg-white rounded-2xl shadow-sm">
                              <form wire:submit.prevent="saveComment()" class="p-2" >
                                <div class="grid md:grid-cols-3 gap-3">
                                  <!-- Journey Stage -->
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2"
                                      >Lead Journey Stage testo</label
                                    >
                    
                                    <select
                                      wire:model.live="journey_stage"
                                      class="w-full rounded-xl border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                                    >
                                      <option value="selected">Select Journey Stage</option>
                    
                                      <option value="new_lead">New Lead</option>
                                      <option value="first_call_completed">
                                        First Call Completed
                                      </option>
                                      <option value="interested">Interested</option>
                                      <option value="need_more_information">
                                        Need More Information
                                      </option>
                                      <option value="meeting_scheduled">Meeting Scheduled</option>
                                      <option value="meeting_completed">Meeting Completed</option>
                                      <option value="proposal_shared">Proposal Shared</option>
                                      <option value="quotation_sent">Quotation Sent</option>
                                      <option value="negotiation">Negotiation</option>
                                      <option value="booking_confirmed">Booking Confirmed</option>
                                      <option value="payment_pending">Payment Pending</option>
                                      <option value="exhibitor_confirmed">
                                        Exhibitor Confirmed
                                      </option>
                                      <option value="not_interested">Not Interested</option>
                                      <option value="lost_lead">Lost Lead</option>
                                    </select>
                                  </div>
                    
                                  <!-- Communication Type -->
                    
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                      Communication Type
                                    </label>
                    
                                    <select
                                      wire:model.live="communication_type"
                                      class="w-full rounded-xl border-gray-300"
                                    >
                                      <option value="selected">Select Communication</option>
                    
                                      <option value="phone_call">Phone Call</option>
                                      <option value="whatsapp">WhatsApp</option>
                                      <option value="email">Email</option>
                                      <option value="video_meeting">Video Meeting</option>
                                      <option value="physical_meeting">Physical Meeting</option>
                                    </select>
                                  </div>
                    
                                  <!-- Priority -->
                    
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                      Lead Priority
                                    </label>
                    
                                    <select wire:model.live="priority" class="w-full rounded-xl border-gray-300">
                                      <option value="selected">selected</option>
                                      <option value="hot">Hot 🔥</option>
                                      <option value="warm">Warm 🟡</option>
                                      <option value="cold">Cold 🔵</option>
                                    </select>
                                  </div>
                                </div>
                    
                                <!-- Meeting Details -->
                    
                                @if(in_array($communication_type, ['video_meeting','physical_meeting']))
                                   <div class="grid md:grid-cols-2 gap-6">
                                  <div>
                                    <label class="block text-sm font-medium mb-2">Meeting Date</label>
                    
                                    <input type="date" wire:model="meeting_date" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                    
                                  <div>
                                    <label class="block text-sm font-medium mb-2">Meeting Time</label>
                    
                                    <input type="time" wire:model.lazy="meeting_time" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                    
                                  <div class="md:col-span-2">
                                    <label class="block text-sm font-medium mb-2">Venue / Meeting Link</label>
                    
                                    <input wire:model.lazy="meeting_venue" placeholder="Office / Hotel / Zoom / Google Meet" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                                  
                                </div>
                                @endif
                    
                                <!-- Person Meeting -->
                    
                                @if(in_array($communication_type,['video_meeting','physical_meeting']))
                                   <div class="grid md:grid-cols-2 gap-6">
                                  <div>
                                    <label class="block text-sm font-medium mb-2">
                                      Meeting With
                                    </label>
                    
                                    <select wire:model.live="meeting_with" class="w-full rounded-xl border-gray-300">
                                      <option value="same_contact">Same Contact</option>
                                      <option value="other">Other</option>
                                    </select>
                                  </div>
                    
                                  <div>
                                    <label class="block text-sm font-medium mb-2">
                                      Expected Outcome
                                    </label>
                    
                                    <input
                                      wire:model.lazy="expected_outcome"
                                      placeholder="Discuss Sponsorship"
                                      class="w-full rounded-xl border-gray-300"
                                    />
                                  </div>
                                </div>
                                @endif 
                                
                                @if($meeting_with === 'Other')
                                  <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                      <label class="block text-sm font-medium mb-2">Person Name</label>
                                      <input wire:model.lazy="other_name" class="w-full rounded-xl border-gray-300"/>
                                    </div>
                    
                                    <div>
                                      <label class="block text-sm font-medium mb-2">Designation</label>
                                      <input wire:model.lazy="other_designation" class="w-full rounded-xl border-gray-300"/>
                                    </div>
                                  </div>
                                @endif
                    
                                <div class="grid md:grid-cols-3 gap-3">
                                  <div>
                                    <label class="block text-sm font-medium mb-2">Next Follow-up Date</label>
                                    <input type="date" wire:model="next_followup_date" class="w-full rounded-xl border-gray-300"/>
                                  </div>
                    
                                  <div>
                                    <label class="block text-sm font-medium mb-2">
                                      Next Follow-up Time
                                    </label>
                    
                                    <input
                                      type="time"
                                      wire:model="next_followup_time"
                                      class="w-full rounded-xl border-gray-300"
                                    />
                                  </div>
                    
                                  <!-- Follow-up -->
                                  <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                      Next Follow-up Action
                                    </label>
                    
                                    <select
                                      wire:model.live="next_action"
                                      class="w-full rounded-xl border-gray-300"
                                    >
                                      <option value="selected">Select</option>
                                      <option value="call_again">Call Again</option>
                                      <option value="send_email">Send Email</option>
                                      <option value="send_brochure">Send Brochure</option>
                                      <option value="send_quotation">Send Quotation</option>
                                      <option value="arrange_meeting">Arrange Meeting</option>
                                      <option value="follow_up_after_event">
                                        Follow-up After Event
                                      </option>
                                      <option>Close Lead</option>
                                    </select>
                                  </div>
                                </div>
                    
                                <!-- Comment -->
                    
                                <div>
                                  <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Discussion Summary
                                  </label>
                    
                                  <textarea
                                    rows="3"
                                    wire:model.lazy="comment"
                                    placeholder="Write what happened during today's discussion..."
                                    class="w-full rounded-xl border-gray-300"
                                  ></textarea>
                                </div>
                    
                                <!-- Internal Note -->
                    
                                <div>
                                  <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Internal Note (Visible only to Team)
                                  </label>
                    
                                  <textarea
                                    rows="2"
                                    wire:model.lazy="internal_note"
                                    class="w-full rounded-xl border-gray-300"
                                  ></textarea>
                                </div>
                    
                                <!-- Button -->
                    
                                <div class="flex justify-end gap-3 pt-4">
                                  <button
                                    type="reset"
                                    class="px-6 py-3 rounded-xl border border-gray-300 hover:bg-gray-100"
                                  >
                                    Cancel
                                  </button>
                    
                                  <button
                                    type="submit"
                                    wire:loading.attr="disabled"
                                    class="px-8 py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700"
                                  >
                                    <span wire:loading.remove> Save Follow-up </span>
                    
                                    <span wire:loading> Saving... </span>
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
           
            </div>
        
        @elseif($board == 'meeting')
          <div>Communication</div>
        @elseif($board == 'faq')
            @php 
              $faqs = DB::table('article_faqs')->get();
            @endphp
        
            <div class="space-y-4">
        
                @forelse($faqs as $faq)
            
                    <div class="bg-white rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
            
                        <div class="p-5">
            
                            <div class="flex flex-col lg:flex-row lg:justify-between gap-5">
            
                                <!-- Left -->
                                <div class="flex-1">
            
                                    <div class="flex items-center gap-2">
            
                                        <h3 class="text-lg font-semibold text-gray-900">
                                            {{ $faq->question }}
                                        </h3>
            
                                        @if($faq->status)
                                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                                Published
                                            </span>
                                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                                {{$faq->type}}
                                            </span>
                                        @else
                                            <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">
                                                Draft
                                            </span>
                                        @endif
            
                                    </div>
            
                                    <p class="mt-3 text-gray-600 line-clamp-3">
                                        {{ Str::limit(strip_tags($faq->answer),250) }}
                                    </p>
            
                                    <div class="flex flex-wrap gap-5 mt-4 text-sm text-gray-500">
            
                                        <span>
                                            📄
                                           
                                        </span>
            
                                        <span>
                                            👤
                                            {{ $faq->user->name ?? 'Admin' }}
                                        </span>
            
                                        <span>
                                            👁️
                                            {{ number_format($faq->views) }}
                                        </span>
            
                                        <span>
                                            🖱️
                                            {{ number_format($faq->clicks) }}
                                        </span>
            
                                        <span>
                                            📅
                                            {{ $faq->created_at }}
                                        </span>
            
                                    </div>
            
                                </div>
            
                                <!-- Right -->
            
                                <div class="flex items-center gap-2">
            
                                    <button
                                        wire:click="edit({{ $faq->id }})"
                                        class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white">
            
                                        ✏️
            
                                    </button>
            
                                    <button
                                        wire:click="preview({{ $faq->id }})"
                                        class="w-10 h-10 rounded-lg bg-green-50 text-green-600 hover:bg-green-600 hover:text-white">
            
                                        👁️
            
                                    </button>
            
                                    <button
                                        wire:click="delete({{ $faq->id }})"
                                        wire:confirm="Delete this FAQ?"
                                        class="w-10 h-10 rounded-lg bg-red-50 text-red-600 hover:bg-red-600 hover:text-white">
            
                                        🗑️
            
                                    </button>
            
                                </div>
            
                            </div>
            
                        </div>
            
                    </div>
            
                @empty
            
                    <div class="bg-white rounded-xl border border-dashed p-16 text-center">
            
                        <svg class="w-14 h-14 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M8 10h8M8 14h5M12 2l8 4v6c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V6l8-4z"/>
                        </svg>
            
                        <h3 class="mt-4 text-lg font-semibold text-gray-700">
                            No FAQs Found
                        </h3>
            
                        <p class="text-gray-500 mt-2">
                            Start by creating your first FAQ.
                        </p>
            
                    </div>
            
                @endforelse
    
            </div>
            <div class="max-w-5xl mx-auto bg-white rounded-xl shadow border border-gray-200">
    
                <!-- Header -->
                <div class="border-b px-6 py-5">
                    <h2 class="text-2xl font-bold text-gray-800">
                        Create FAQ
                    </h2>
                    <p class="text-sm text-gray-500 mt-1">
                        Link this FAQ to an article or leave it unassigned.
                    </p>
                </div>
            
                <div class="p-6 space-y-6">
            
                    <!-- Select Article -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Select Article <span class="text-gray-400">(Optional)</span>
                        </label>
            
                        @php
                          $articles = DB::table('articles')->get();
                        @endphp
                        <select
                            wire:model="article_id"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500">
            
                            <option value="">-- No Article (Global FAQ) --</option>
                            
            
                            @foreach($articles as $article)
                                <option value="{{ $article->id }}">
                                    {{ $article->title }}
                                </option>
                            @endforeach
            
                        </select>
            
                        <p class="text-xs text-gray-500 mt-2">
                            Leave blank if this FAQ should appear on the global FAQ page only.
                        </p>
                    </div>
            
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            FAQ Category
                        </label>
                    
                        <select wire:model.lazy="type" class="w-full rounded-lg border-gray-300">
                            <option value="Selected">Select Category</option>
                            <option value="general-event-information">General Event Information</option>
                            <option value="visitor-registration">Visitor Registration</option>
                            <option value="for-exhibitors">For Exhibitors</option>
                            <option value="travel-accommodation">Travel & Accommodation</option>
                            <option value="media">Media</option>
                            <option value="article">Article</option>
                            <option value="faq">FAQ</option>
                        </select>
                    </div>
        
                    <!-- Question -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Question
                        </label>
            
                        <input
                            type="text"
                            wire:model.defer="question"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3"
                            placeholder="Example: How can I book an exhibition stall?">
            
                        @error('question')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            
                    <!-- Answer -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Answer
                        </label>
            
                        <textarea
                            wire:model.defer="answer"
                            rows="8"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3"
                            placeholder="Write a detailed answer..."></textarea>
            
                        @error('answer')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            
                   
            
                    <!-- Buttons -->
                    <div class="flex justify-end gap-3 pt-4 border-t">
            
                        <button
                            type="button"
                            wire:click="resetForm"
                            class="px-6 py-3 rounded-lg bg-gray-200 hover:bg-gray-300">
            
                            Reset
            
                        </button>
            
                        <button
                            wire:click="saveFaq"
                            class="px-8 py-3 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">
            
                            Save FAQ
            
                        </button>
            
                    </div>
            
                </div>
            
             </div>
        @elseif($board == 'settings')
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm mt-6">
    
                <div class="px-6 py-4 border-b">
                    <h2 class="text-lg font-semibold">
                        Users/role
                    </h2>
                </div>
        
                @php 
                  $users = DB::table('users')->get();
                @endphp
                
                <div class="p-6 space-y-5">
                    @foreach($users as $speaker)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="" alt="{{ $speaker->name }}" class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h3 class="text-sm font-medium">{{ $speaker->name }}</h3>
                                <p class="text-xs text-gray-500">{{ $speaker->role }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium">{{ $speaker->created_at }}</h3>
                                <h3 class="text-sm font-medium">{{ $speaker->email }}</h3>
                                <h3 class="text-sm font-medium">Phone</h3>
                            </div>
                        </div>
                        <button wire:click="deleteSpeaker({{ $speaker->id }})" class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                    </div>
                    @endforeach
                </div>
        
            </div>
        @elseif($board == 'new_leads' || $board == 'hot_leads' )
           <div class="bg-white rounded-2xl shadow-lg border border-gray-200">
               <form wire:submit.prevent="saveNewBusinessLead" class="p-3 space-y-6">
    
                    <!-- Personal Information -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">
                            Personal Information
                        </h3>
            
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
            
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Contact Person <span class="text-red-500">*</span>
                                </label>
                                <input type="text"
                                       wire:model.lazy="name"
                                       placeholder="Enter contact person"
                                       class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
            
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Designation
                                </label>
                                <input type="text"
                                       wire:model.lazy="designation"
                                       placeholder="Director, Manager, Founder"
                                       class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
            
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Mobile Number
                                </label>
                                <input type="number"
                                       wire:model.lazy="phone"
                                       placeholder="+91 9876543210"
                                       class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium mb-2">Company Name</label>
                                <input type="text"
                                       wire:model.lazy="company_name"
                                       placeholder="Company Name"
                                       class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
            
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Email Address
                                </label>
                                <input type="email"
                                       wire:model.lazy="email"
                                       placeholder="example@company.com"
                                       class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                            
                             <!-- Service Type -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Service Required
                                </label>
            
                                <select wire:model.lazy="service_type"
                                        class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="selected">Select Service</option>
                                    <option value="exhibition-stall-booking">Exhibition Stall Booking</option>
                                    <option value="sponsorship">Sponsorship</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="visitor-registration">Visitor Registration</option>
                                    <option value="hosted-buyer-program">Hosted Buyer Program</option>
                                    <option value="speaker-registration">Speaker Registration</option>
                                    <option value="exhibition-stand-design">Exhibition Stand Design</option>
                                    <option value="event-marketing">Event Marketing</option>
                                    <option value="advertising">Advertising</option>
                                    <option value="media-partner">Media Partner</option>
                                </select>
                            </div>
            
                        </div>
                    </div>
            
                    <!-- Company Information -->
                    <div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        
            
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Brand Name
                                </label>
                                <input type="text"
                                       wire:model.lazy="brand_name"
                                       placeholder="Brand Name"
                                       class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
            
                        </div>
                    </div>
            
                    <!-- Lead Information -->
                    <div class="bg-green-600">
                        
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-1">
            
                            <!-- Reference Type -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Type of Reference
                                </label>
            
                                <select wire:model="reference_type"
                                        class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="selected">Select Reference</option>
                                    <option value="cold-call">Cold Call</option>
                                    <option value="website">Website</option>
                                    <option value="google-search">Google Search</option>
                                    <option value="whatsapp">WhatsApp</option>
                                    <option value="email-campagin">Email Campaign</option>
                                    <option value="linkedin">LinkedIn</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="instagram">Instagram</option>
                                    <option value="referral">Referral</option>
                                    <option value="existing-client">Existing Client</option>
                                    <option value="exhibition">Exhibition</option>
                                </select>
                            </div>
            
                            <!-- Lead Type -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Lead Type
                                </label>
            
                                <select wire:model="lead_type"
                                        class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="selected">Select Lead Type</option>
                                    <option value="hot">Hot Lead</option>
                                    <option value="warm">Warm Lead</option>
                                    <option value="cold">Cold Lead</option>
                                </select>
                            </div>
            
                            <!-- Business Type -->
                            <div>
                                <label class="block text-sm font-medium mb-2">Business Type</label>
            
                                <select wire:model="business_type"
                                        class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="selected">Select Business Type</option>
                                    <option value="wedding-planner">Wedding Planner</option>
                                    <option value="hotel">Hotel</option>
                                    <option value="resort">Resort</option>
                                    <option value="venue">Venue</option>
                                    <option value="jewellery">Jewellery</option>
                                    <option value="fashion-jewellery">Fashion Designer</option>
                                    <option value="photography">Photography</option>
                                    <option value="decoration">Decoration</option>
                                    <option value="catering">Catering</option>
                                    <option value="travel-company">Travel Company</option>
                                    <option value="luxury-brand">Luxury Brand</option>
                                    <option value="invitation-cards">Invitation Cards</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="beauty-&-makeup">Beauty & Makeup</option>
                                </select>
                            </div>
            
                            <!-- Audience Type -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Audience Type
                                </label>
            
                                <select wire:model="audience_type"
                                        class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="selected">Select Audience</option>
                                    <option value="exhibitor">Exhibitor</option>
                                    <option value="visitor">Visitor</option>
                                    <option value="buyer">Buyer</option>
                                    <option value="hosted-buyer">Hosted Buyer</option>
                                    <option value="speaker">Speaker</option>
                                    <option value="sponsor">Sponsor</option>
                                    <option value="media">Media</option>
                                    <option value="influencer">Influencer</option>
                                    <option value="invertor">Investor</option>
                                    <option value="association">Association</option>
                                </select>
                            </div>
            
                        </div>
                    </div>
            
                    <!-- Footer -->
                    <div class="border-t pt-3 flex justify-end gap-3">
            
                        <button type="button" class="px-6 py-3 rounded-xl border border-gray-300 hover:bg-gray-100">Cancel</button>
            
                        <button type="submit" wire:loading.attr="disabled"
                                class="px-6 py-3 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700">
            
                            <span wire:loading.remove>
                                Save Lead
                            </span>
            
                            <span wire:loading>
                                Saving...
                            </span>
            
                        </button>
            
                    </div>
            
                </form>
           </div>
        @elseif($board == 'bulk_data')
           <div class="max-w-4xl mx-auto">
                <!-- Upload Card -->
                <div class="bg-white rounded-2xl shadow border border-gray-200">
            
                    <form wire:submit.prevent="importCSV">
            
                        <div class="p-8 space-y-6">
            
                            <!-- Expo Name -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Expo Name
                                    <span class="text-red-500">*</span>
                                </label>
            
                                <input
                                    type="text"
                                    wire:model="expo_name"
                                    placeholder="e.g. Wedding India Expo 2027"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
            
                                @error('expo_name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
            
                            <!-- Upload Area -->
                            <div>
            
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    CSV File
                                    <span class="text-red-500">*</span>
                                </label>
            
                                <label
                                    class="flex flex-col items-center justify-center w-full p-10 border-2 border-dashed border-indigo-300 rounded-xl cursor-pointer hover:bg-indigo-50 transition">
            
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-12 h-12 text-indigo-600 mb-3"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
            
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M7 16V4m0 0L3 8m4-4l4 4M17 20v-8m0 0l-4 4m4-4l4 4"/>
                                    </svg>
            
                                    <span class="font-semibold text-gray-700">
                                        Click to choose CSV file
                                    </span>
            
                                    <span class="text-sm text-gray-500 mt-1">
                                        Supported format: CSV
                                    </span>
            
                                    <input
                                        type="file"
                                        wire:model="csv"
                                        accept=".csv"
                                        class="hidden">
            
                                </label>
            
                                @if($csv)
                                    <div class="mt-3 bg-green-50 border border-green-200 rounded-lg px-4 py-3">
                                        <span class="text-green-700 font-medium">
                                            Selected:
                                        </span>
            
                                        {{ $csv->getClientOriginalName() }}
                                    </div>
                                @endif
            
                                @error('csv')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
            
                            </div>
            
                            <!-- Loading -->
                            <div wire:loading wire:target="csv">
                                <div class="text-indigo-600 text-sm font-medium">
                                    Uploading file...
                                </div>
                            </div>
            
                        </div>
            
                        <!-- Footer -->
                        <div class="border-t px-8 py-5 flex justify-between items-center">
            
                            <a href="{{ route('dashboard.service',['board'=>'leads']) }}"
                               class="text-gray-600 hover:text-indigo-600">
            
                                ← Back to Leads
            
                            </a>
            
                            <div class="space-x-3">
            
                                <button
                                    type="reset"
                                    class="px-6 py-2 border rounded-lg hover:bg-gray-100">
            
                                    Cancel
            
                                </button>
            
                                <button
                                    type="submit"
                                    class="px-8 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            
                                    Upload CSV
            
                                </button>
            
                            </div>
            
                        </div>
            
                    </form>
            
                </div>
            </div>
        @elseif($board == 'own_data_list')
            <div class="max-w-4xl mx-auto">
                <!-- Upload Card -->
                <div class="bg-white rounded-2xl shadow border border-gray-200">
            
                    <form wire:submit.prevent="multiplebrands">

                        <div class="p-8 space-y-6">
                    
                            <!-- Brands -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    List Your Brands
                                    <span class="text-red-500">*</span>
                                </label>
                    
                                <input
                                    type="text"
                                    wire:model="brands"
                                    placeholder="e.g. Sabyasachi, Manyavar, Anita Dongre, Tarun Tahiliani"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3
                                           focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                    
                                <p class="text-sm text-gray-500 mt-2">
                                    Separate multiple brands with commas (,)
                                </p>
                    
                                @error('brands')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                    
                        </div>
                    
                        <!-- Footer -->
                        <div class="border-t px-8 py-5 flex justify-between items-center">
                    
                            <a href="{{ route('dashboard.service',['board'=>'leads']) }}"
                               class="text-gray-600 hover:text-indigo-600">
                                ← Back to Leads
                            </a>
                    
                            <div class="space-x-3">
                    
                                <button
                                    type="reset"
                                    class="px-6 py-2 border rounded-lg hover:bg-gray-100">
                                    Cancel
                                </button>
                    
                                <button
                                    type="submit"
                                    class="px-8 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                                    Save
                                </button>
                    
                            </div>
                    
                        </div>
                    
                    </form>
            
                </div>
            </div>

    @else
     
    @endif
    
                    
                    
</div>
</main>
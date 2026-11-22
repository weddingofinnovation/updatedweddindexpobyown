<aside class="w-72 bg-white border-r border-gray-200">
    @php
        $board = request()->route('board');
    @endphp

    <div class="h-16 flex items-center px-6 border-b">
       {{auth()->user()->name}}
    </div>


    @auth
        @if(auth()->user()->role == 'admin')
            <nav class="flex-1 px-1 py-6 space-y-2 overflow-y-auto">
                 <!-- Dashboard -->
                     <a href="{{ route('dashboard.service',['board'=>'dashboard']) }}"
                       class="flex items-center gap-3 px-3 py-2 rounded-xl transition
               {{ $board == 'dashboard'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7m-9 11V9m0 0H5m7 0h7"/>
                        </svg>
                        Main Dashboard
                    </a>
                    
                    
                    @if($board == 'dashboard')
                    <a href="{{ route('dashboard.service',['board'=>'leads']) }}" class="flex items-center gap-3 px-3 py-3 rounded-xl transition
                       {{ $board == 'leads' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">Leads</a>
                
                    <!-- Speakers -->
                    <a href="{{ route('dashboard.service', ['board' => 'speaker']) }}"
                       class="flex items-center gap-3 px-3 py-2 rounded-xl transition
                       {{ $board == 'speaker'
                            ? 'bg-indigo-600 text-white shadow'
                            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        
                        Speakers
                    </a>
                
                    <!-- Exhibitors -->
                    <a href="{{ route('dashboard.service', ['board' => 'exhibitors']) }}"
                       class="flex items-center gap-3 px-3 py-2 rounded-xl transition
                       {{ $board == 'exhibitors'
                            ? 'bg-indigo-600 text-white shadow'
                            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        
                        Exhibitors
                    </a>
                
                    <!-- Articles -->
                    <a href="{{ route('dashboard.service', ['board' => 'list_articles']) }}"
                       class="flex items-center gap-3 px-3 py-3 rounded-xl transition
                       {{ $board == 'list_articles'
                            ? 'bg-indigo-600 text-white shadow'
                            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        
                        Blog/Articles
                    </a>
                
                    <!-- FAQs -->
                    <a href="{{ route('dashboard.service', ['board' => 'faq']) }}"
                       class="flex items-center gap-3 px-3 py-3 rounded-xl transition
                       {{ $board == 'faq'
                            ? 'bg-indigo-600 text-white shadow'
                            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        
                        FAQs
                    </a>
                
                    
                    <!-- Categories -->
                    <a href="{{ route('dashboard.service', ['board' => 'list_categories']) }}"
                       class="flex items-center gap-3 px-3 py-3 rounded-xl transition
                       {{ $board == 'list_categories'
                            ? 'bg-indigo-600 text-white shadow'
                            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        
                        Categories
                    </a>
                
                    <!-- Tags -->
                    <a href="{{ route('dashboard.service', ['board' => 'list_tags']) }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                       {{ $board == 'list_tags'
                            ? 'bg-indigo-600 text-white shadow'
                            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">Tags
                    </a>
                
                    <!-- Images -->
                    <a href="{{ route('dashboard.service', ['board' => 'list_images']) }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                       {{ $board == 'list_images'
                            ? 'bg-indigo-600 text-white shadow'
                            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">Images
                    </a>
                
                    <!-- SEO -->
                    <a href="{{ route('dashboard.service', ['board' => 'seo']) }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                       {{ $board == 'seo'
                            ? 'bg-indigo-600 text-white shadow'
                            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        
                        SEO
                    </a>
                
                    <div class="border-t border-gray-200 my-4"></div>
                
                    <!-- Settings -->
                    <a href="{{ route('dashboard.service', ['board' => 'settings']) }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                       {{ $board == 'settings'
                            ? 'bg-indigo-600 text-white shadow'
                            : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        
                        Settings
                    </a>
                   @elseif($board == 'leads' || $board == 'my' ||$board == 'new' || $board == 'untouched' || $board == 'contacted' || $board == 'followup' || $board == 'interested' || $board == 'hot' || $board == 'meeting' || $board == 'proposal' || $board == 'pending' || $board == 'not-interested' || $board == 'referral' || $board == 'converted' || $board == 'vip' || $board == 'hot_leads')
                        <!-- New -->
                        <a href="{{ route('dashboard.service', ['board' => 'new']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ $board == 'new' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            🆕 New
                        </a>
                        
                        <!-- Contacted -->
                        <a href="{{ route('dashboard.service', ['board' => 'contacted']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ $board == 'contacted' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            📞 Contacted
                        </a>
                        
                      
                        
                        <!-- Interested -->
                        <a href="{{ route('dashboard.service', ['board' => 'interested']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ $board == 'interested' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            🎯 Interested
                        </a>
                        
                        <!-- Hot -->
                        <a href="{{ route('dashboard.service', ['board' => 'hot']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ ($board == 'hot' || $board == 'hot_leads') ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            🔥 Hot
                        </a>
                        
                        <!-- Meeting -->
                        <a href="{{ route('dashboard.service', ['board' => 'meeting']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ $board == 'meeting' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            🤝 Meeting
                        </a>
                        
                        <!-- Proposal -->
                        <a href="{{ route('dashboard.service', ['board' => 'proposal']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ $board == 'proposal' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            📄 Proposal
                        </a>
                        
                        <!-- Pending -->
                        <a href="{{ route('dashboard.service', ['board' => 'pending']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ $board == 'pending' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            ⏳ Pending
                        </a>
                        
                        <!-- Not Interested -->
                        <a href="{{ route('dashboard.service', ['board' => 'not-interested']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ $board == 'not-interested' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            ❌ Not Interested
                        </a>
                        

                        
                        <!-- Referral -->
                        <a href="{{ route('dashboard.service', ['board' => 'referral']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ $board == 'referral' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            🔁 Referral
                        </a>
                        
                        <!-- Converted -->
                        <a href="{{ route('dashboard.service', ['board' => 'converted']) }}"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                           {{ $board == 'converted' ? 'bg-indigo-600 text-white shadow' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                            ✅ Converted
                        </a>
                    
                    @else
                    @endif
                    
                    
    
            </nav>
          @else
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
             <!-- Dashboard -->
                    <a href="{{ route('dashboard.service',['board'=>'dashboard']) }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl transition
                        {{ $board == 'dashboard'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7m-9 11V9m0 0H5m7 0h7"/>
                        </svg>
                        Dashboard
                    </a>
                    
            <!-- Leads -->
            <a href="{{ route('dashboard.service',['board'=>'leads']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition
               {{ $board == 'leads'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                🎯 Leads
            </a>
            
            <!-- Companies -->
            <a href="{{ route('dashboard.service',['board'=>'companies']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition
               {{ $board == 'companies'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                🏢 Companies
            </a>
            
            <!-- Contacts -->
            <a href="{{ route('dashboard.service',['board'=>'contacts']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition
               {{ $board == 'contacts'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                👤 Contacts
            </a>
            
            <!-- Follow-ups -->
            <a href="{{ route('dashboard.service',['board'=>'followups']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition
               {{ $board == 'followups'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                📞 Follow-ups
            </a>
            
            <!-- Calendar -->
            <a href="{{ route('dashboard.service',['board'=>'calendar']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition
               {{ $board == 'calendar'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                📅 Calendar
            </a>
            
            <!-- Comments -->
            <a href="{{ route('dashboard.service',['board'=>'comments']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition
               {{ $board == 'comments'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                💬 Comments
            </a>
            
            
            <!-- Orders -->
            <a href="{{ route('dashboard.service',['board'=>'orders']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition
               {{ $board == 'orders'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                📑 Orders / Bookings
            </a>
    
            
            <!-- Settings -->
            <a href="{{ route('dashboard.service',['board'=>'settings']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition
               {{ $board == 'settings'
                    ? 'bg-indigo-600 text-white shadow'
                    : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }}">
                ⚙️ Settings
            </a>
            </nav>
        @endif
    @endauth
</aside>
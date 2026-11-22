<header class="h-16 bg-white border-b border-gray-200">

    <div class="h-full px-8 flex items-center justify-between">
 
        @if(request()->is('crm/leads'))
          <h1 class="text-xl font-semibold">Leads</h1>
          <div class="flex items-center gap-4">

            <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300
                px-4 py-2 focus:ring-2 focus:ring-indigo-500
                focus:outline-none">

            
            <a href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                + New Leads
            </a>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
           
        </div>
        @elseif(request()->is('crm/new_leads'))
          <h1 class="text-xl font-semibold">Create New Lead</h1>
          <div class="flex items-center gap-4">

            <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300
                px-4 py-2 focus:ring-2 focus:ring-indigo-500
                focus:outline-none">

            
            <a href="{{ route('dashboard.service', ['board' => 'leads']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                Leads
            </a> 
            <a href="{{ route('dashboard.service', ['board' => 'bulk_data']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                Bulk data
            </a>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
           
        </div>
        @elseif(request()->is('crm/list_images'))
        
           <h1 class="text-xl font-semibold">Media Library</h1>
          <div class="flex items-center gap-4">

            <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300
                px-4 py-2 focus:ring-2 focus:ring-indigo-500
                focus:outline-none">

            
            <a href="{{ route('dashboard.service', ['board' => 'leads']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                Leads
            </a> 
            <a href="{{ route('dashboard.service', ['board' => 'bulk_data']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                Bulk data
            </a>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
           
        </div>
        
        
          
        @elseif(request()->is('crm/bulk_data'))
        
          <h1 class="text-xl font-semibold">Create Bulk Leads</h1>
          <div class="flex items-center gap-4">

            <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300
                px-4 py-2 focus:ring-2 focus:ring-indigo-500
                focus:outline-none">

            
            <a href="{{ route('dashboard.service', ['board' => 'leads']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                Leads
            </a> 
            <a href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                New Leads
            </a>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
           
        </div>
        @elseif(request()->is('crm/leads'))
            <h1 class="text-xl font-semibold">Create Bulk Leads</h1>
            <div class="flex items-center gap-4">
              <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
              />
            
              <a
                href="{{ route('dashboard.service', ['board' => 'leads']) }}"
                class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                Leads
              </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/my'))
<h1 class="text-xl font-semibold">My Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/new'))
<h1 class="text-xl font-semibold">New Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/untouched'))
<h1 class="text-xl font-semibold">Untouched Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/contacted'))
<h1 class="text-xl font-semibold">Contacted Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/followup'))
<h1 class="text-xl font-semibold">Follow-up Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/interested'))
<h1 class="text-xl font-semibold">Interested Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/hot'))
<h1 class="text-xl font-semibold">Hot Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'hot_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Add Lead
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/hot_leads'))
<h1 class="text-xl font-semibold">Add Hot Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'hot_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Add Lead
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/meeting'))
<h1 class="text-xl font-semibold">Meeting Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/proposal'))
<h1 class="text-xl font-semibold">Proposal Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/pending'))
<h1 class="text-xl font-semibold">Pending Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/not-interested'))
<h1 class="text-xl font-semibold">Not Interested Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/invalid'))
<h1 class="text-xl font-semibold">Invalid Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/referral'))
<h1 class="text-xl font-semibold">Referral Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/converted'))
<h1 class="text-xl font-semibold">Converted Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>
@elseif(request()->is('crm/vip'))
<h1 class="text-xl font-semibold">VIP Leads</h1>
<div class="flex items-center gap-4">
  <input
    type="text"
    placeholder="Search..."
    class="w-80 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
  />

  <a
    href="{{ route('dashboard.service', ['board' => 'leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    Leads
  </a>
  <a
    href="{{ route('dashboard.service', ['board' => 'new_leads']) }}"
    class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95"
  >
    New Leads
  </a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
  </form>
</div>

        @elseif(request()->is('crm/list_articles'))
          <h1 class="text-xl font-semibold">Article</h1>
          <div class="flex items-center gap-4">

            <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300
                px-4 py-2 focus:ring-2 focus:ring-indigo-500
                focus:outline-none">

            
            <a href="{{ route('dashboard.service', ['board' => 'add_article']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                + New Article
            </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
        
        </div>
        @elseif(request()->is('crm/faq'))
          <h1 class="text-xl font-semibold">FAQ</h1>
          <div class="flex items-center gap-4">

            <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300
                px-4 py-2 focus:ring-2 focus:ring-indigo-500
                focus:outline-none">

            
            <a href="{{ route('dashboard.service', ['board' => 'add_article']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                + New Faq
            </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
        </div>
        @elseif(request()->is('crm/speaker'))
          <h1 class="text-xl font-semibold">Speaker</h1>
          <div class="flex items-center gap-4">

            <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300
                px-4 py-2 focus:ring-2 focus:ring-indigo-500
                focus:outline-none">

            
            <a href="{{ route('dashboard.service', ['board' => 'add_speaker']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                + New Speaker
            </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
           
        </div>
        @elseif(request()->is('crm/add_speaker'))
                  <h1 class="text-xl font-semibold">Add Speaker</h1>
          <div class="flex items-center gap-4">

            <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300
                px-4 py-2 focus:ring-2 focus:ring-indigo-500
                focus:outline-none">

            
            <a href="{{ route('dashboard.service', ['board' => 'speaker']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                All Speaker
            </a>
            
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
           
        </div>
        @elseif(request()->is('crm/settings'))
        <h1 class="text-xl font-semibold">Settings</h1>
          <div class="flex items-center gap-4">

            <input
                type="text"
                placeholder="Search..."
                class="w-80 rounded-lg border border-gray-300
                px-4 py-2 focus:ring-2 focus:ring-indigo-500
                focus:outline-none">

            
            <a href="{{ route('dashboard.service', ['board' => 'speaker']) }}"
               class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 active:scale-95">
                Team
            </a>
            
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
           
        </div>
        @endif

        

    </div>

</header>


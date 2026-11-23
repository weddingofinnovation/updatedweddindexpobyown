<main>
    <div class="w-full bg-[#111111] text-white border-t border-white/15">

    <!-- Top Wiki Mode & Create Article Bar -->
    <div class="px-6 sm:px-10 lg:px-16 py-4 bg-[#161616] border-b border-white/15 flex flex-wrap items-center justify-between gap-4">
        <div class="flex flex-wrap items-center gap-2">
            <button
                type="button"
                wire:click="toggleMode('read')"
                class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider transition cursor-pointer {{ $mode === 'read' ? 'bg-white text-[#0A0A0A]' : 'bg-[#111111] text-neutral-400 border border-white/15 hover:text-white' }}"
            >
                Read Mode
            </button>

            <button
                type="button"
                wire:click="toggleMode('link_builder')"
                class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider transition cursor-pointer {{ $mode === 'link_builder' ? 'bg-[#FF5500] text-white shadow-md' : 'bg-[#111111] text-neutral-300 border border-white/15 hover:border-[#FF5500]' }}"
            >
                Link Builder Mode (Click Word)
            </button>

            @if($mode === 'link_builder')
                <span class="text-xs text-amber-300 ml-2">
                    Click any word or highlight text inside the article to create a hyperlink or new wiki page.
                </span>
            @endif
        </div>

        <button
            type="button"
            wire:click="openNewArticleModal"
            class="inline-flex items-center gap-2 bg-[#FF5500] hover:bg-white text-white hover:text-[#0A0A0A] px-5 py-2 text-xs font-bold uppercase tracking-wider transition cursor-pointer"
        >
            <span>+ Add New Wiki Article</span>
        </button>
    </div>

    @if(session()->has('wiki_status'))
        <div class="px-6 sm:px-10 lg:px-16 py-3 bg-[#FF5500]/15 border-b border-[#FF5500]/40 text-xs font-medium text-amber-200 flex items-center justify-between">
            <span>{{ session('wiki_status') }}</span>
            <span class="font-mono uppercase text-[10px] text-[#FF5500]">Saved</span>
        </div>
    @endif

    <!-- Main 12-Column Editorial & Sidebar Layout (Matches Reference Screenshot) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 border-b border-white/15">

        <!-- Left 8 Columns: Article Body -->
        <div
            class="lg:col-span-8 p-6 sm:p-10 lg:p-14 lg:border-r border-white/15 space-y-6"
            x-data="{
                handleArticleClick(e) {
                    if (@js($mode) !== 'link_builder') return;

                    const selection = window.getSelection()?.toString().trim();
                    if (selection && selection.length > 0) {
                        e.preventDefault();
                        $wire.selectTermForLinking(selection);
                        return;
                    }

                    // Otherwise grab the clicked word from text node
                    const range = document.caretRangeFromPoint
                        ? document.caretRangeFromPoint(e.clientX, e.clientY)
                        : null;

                    if (range && range.startContainer.nodeType === Node.TEXT_NODE) {
                        const text = range.startContainer.textContent || '';
                        let start = range.startOffset;
                        let end = range.startOffset;

                        while (start > 0 && /[A-Za-z0-9&-]/.test(text[start - 1])) start--;
                        while (end < text.length && /[A-Za-z0-9&-]/.test(text[end])) end++;

                        const word = text.slice(start, end).trim();
                        if (word.length > 1) {
                            e.preventDefault();
                            $wire.selectTermForLinking(word);
                        }
                    }
                }
            }"
            @click="handleArticleClick($event)"
        >
            <span class="text-xs font-mono font-bold text-[#FF5500] uppercase tracking-widest block">
                01 / {{ strtoupper($article->category) }}
            </span>

            <h2 class="text-2xl sm:text-4xl font-semibold tracking-tight text-white leading-tight">
                {{ $article->title }}
            </h2>

            <div
                class="text-base sm:text-[17px] leading-relaxed space-y-4 {{ $mode === 'link_builder' ? 'text-neutral-200 cursor-pointer [&_p]:hover:bg-white/[0.02]' : 'text-neutral-300' }}"
            >
                {!! $article->content !!}
            </div>

            <!-- Existing Wiki Articles Quick Directory -->
            <div class="pt-8 mt-8 border-t border-white/15">
                <span class="text-[11px] font-bold uppercase tracking-widest text-[#FF5500] block mb-3">
                    Linked & Created Wiki Articles
                </span>
                <div class="flex flex-wrap gap-2">
                    @foreach($allArticles as $item)
                        <a
                            href="{{ route('wiki.show', ['slug' => $item->slug]) }}"
                            class="px-3.5 py-1.5 bg-[#161616] border border-white/15 hover:border-[#FF5500] text-xs text-neutral-200 hover:text-white transition"
                        >
                            {{ $item->title }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Right 4 Columns: TOC & Founding Member Card -->
        <aside class="lg:col-span-4 p-6 sm:p-10 bg-[#141414] space-y-6">
            <div class="border border-white/15 bg-[#111111] p-6 space-y-3 text-sm">
                <a href="#section-2" class="block text-neutral-300 hover:text-[#FF5500] transition">02. Multi-Cuisine Tasting & Bar Theatre</a>
                <a href="#section-3" class="block text-neutral-300 hover:text-[#FF5500] transition">03. Wedding India Expo 2027 Overview</a>
            </div>

            <div class="bg-white text-[#0A0A0A] p-6 sm:p-7 border-t-4 border-[#FF5500]">
                <span class="inline-block bg-[#FF5500] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">
                    FOUNDING MEMBER • ₹3,500/YR
                </span>
                <h3 class="text-xl font-bold tracking-tight mt-3">
                    Join The National & Global Wedding Community
                </h3>
                <p class="text-xs text-neutral-600 mt-2 leading-relaxed">
                    Includes 12 online global buyer meets, offline state roadshows, 3 Award Nominations (rolled into next FY), and VIP Hosted Buyer entry at Yashobhoomi.
                </p>
                <button
                    type="button"
                    wire:click="openNewArticleModal"
                    class="mt-5 flex items-center justify-between w-full bg-[#111111] hover:bg-[#FF5500] text-white px-5 py-3.5 text-xs font-bold uppercase tracking-wider transition cursor-pointer"
                >
                    <span>JOIN FOUNDING CIRCLE — ₹3,500</span>
                    <span>→</span>
                </button>
            </div>
        </aside>
    </div>

    <!-- Modal 1: Turn Clicked Word Into Hyperlink or Create New Article -->
    @if($showLinkModal)
        <div class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4">
            <div class="bg-white text-[#0A0A0A] w-full max-w-lg p-7 border-t-4 border-[#FF5500] space-y-5">
                <div class="flex items-center justify-between border-b border-black/10 pb-3">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-[#FF5500]">WIKI LINK BUILDER</span>
                        <h3 class="text-xl font-bold mt-0.5">Word: "{{ $selectedTerm }}"</h3>
                    </div>
                    <button type="button" wire:click="resetSelection" class="text-xs font-bold uppercase text-neutral-500 hover:text-black cursor-pointer">✕</button>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-1.5">
                        Target Article Slug
                    </label>
                    <input
                        type="text"
                        wire:model="targetSlug"
                        class="w-full bg-neutral-100 border border-black/15 px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF5500]"
                    />
                    <span class="text-[11px] text-neutral-500 mt-1 block">Links to: /wiki/{{ $targetSlug }}</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 pt-2">
                    <button
                        type="button"
                        wire:click="applyHyperlink"
                        class="flex-1 bg-[#111111] hover:bg-[#FF5500] text-white py-3 px-4 text-xs font-bold uppercase tracking-wider transition cursor-pointer"
                    >
                        Save Hyperlink
                    </button>
                    <button
                        type="button"
                        wire:click="openCreateArticleFromSelection"
                        class="flex-1 bg-[#FF5500] hover:bg-[#111111] text-white py-3 px-4 text-xs font-bold uppercase tracking-wider transition cursor-pointer"
                    >
                        + Create New Article
                    </button>
                </div>
            </div>
        </div>
    @endif

    <!-- Modal 2: Create / Add New Wiki Article -->
    @if($showNewArticleModal)
        <div class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4 overflow-y-auto">
            <div class="bg-white text-[#0A0A0A] w-full max-w-2xl p-7 sm:p-8 border-t-4 border-[#FF5500] space-y-4 my-8">
                <div class="flex items-center justify-between border-b border-black/10 pb-3">
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-[#FF5500]">WEDDING INDIA WIKI • NEW ENTRY</span>
                        <h3 class="text-2xl font-bold mt-0.5">Add New Article</h3>
                    </div>
                    <button type="button" wire:click="$set('showNewArticleModal', false)" class="text-xs font-bold uppercase text-neutral-500 hover:text-black cursor-pointer">✕ Close</button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-1">Article Title *</label>
                        <input type="text" wire:model.live="newTitle" placeholder="e.g., Ras Al Khaimah Luxury Weddings" class="w-full bg-neutral-100 border border-black/15 px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF5500]" />
                        @error('newTitle') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-1">URL Slug *</label>
                        <input type="text" wire:model="newSlug" placeholder="ras-al-khaimah-luxury-weddings" class="w-full bg-neutral-100 border border-black/15 px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF5500]" />
                        @error('newSlug') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-1">Category *</label>
                    <input type="text" wire:model="newCategory" class="w-full bg-neutral-100 border border-black/15 px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF5500]" />
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-1">Short Summary</label>
                    <input type="text" wire:model="newExcerpt" class="w-full bg-neutral-100 border border-black/15 px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF5500]" />
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-1">Article Body (HTML supported) *</label>
                    <textarea rows="5" wire:model="newContent" class="w-full bg-neutral-100 border border-black/15 px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF5500]"></textarea>
                    @error('newContent') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                @if($selectedTerm !== '')
                    <label class="flex items-center gap-2 text-xs font-semibold text-neutral-700 cursor-pointer">
                        <input type="checkbox" wire:model="autoLinkInCurrentArticle" class="accent-[#FF5500]" />
                        <span>Automatically hyperlink "{{ $selectedTerm }}" in the current article to this new page</span>
                    </label>
                @endif

                <div class="pt-3 flex justify-end gap-3">
                    <button type="button" wire:click="$set('showNewArticleModal', false)" class="px-5 py-3 border border-black/20 text-xs font-bold uppercase tracking-wider cursor-pointer">Cancel</button>
                    <button type="button" wire:click="saveNewArticle" class="px-6 py-3 bg-[#111111] hover:bg-[#FF5500] text-white text-xs font-bold uppercase tracking-wider transition cursor-pointer">
                        Publish Wiki Article →
                    </button>
                </div>
            </div>
        </div>
    @endif

</div>
</main>
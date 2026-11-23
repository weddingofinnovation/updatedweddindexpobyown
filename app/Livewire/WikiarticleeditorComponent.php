<?php

namespace App\Livewire;

use App\Models\WikiArticle;
use Illuminate\Support\Str;
use Livewire\Component;

class WikiArticleEditor extends Component
{
    public WikiArticle $article;

    // Mode toggles: 'read' or 'link_builder'
    public string $mode = 'read';

    // Word / phrase selection state for creating hyperlink or new article
    public string $selectedTerm = '';
    public string $targetSlug = '';
    public string $existingArticleId = '';
    public bool $showLinkModal = false;

    // Create / Add New Wiki Article modal state
    public bool $showNewArticleModal = false;
    public string $newTitle = '';
    public string $newSlug = '';
    public string $newCategory = 'Destination Weddings';
    public string $newExcerpt = '';
    public string $newContent = '';
    public bool $autoLinkInCurrentArticle = true;

    public function mount(?string $slug = null): void
    {
        $this->article = WikiArticle::firstOrCreate(
            ['slug' => $slug ?? 'dubai-wedding-venues-india-expo-2027'],
            [
                'title' => 'Palace vs. Desert vs. Yacht: Choosing Your Dream Dubai Wedding Venue',
                'category' => 'State Tourism & Venue Infrastructure',
                'excerpt' => 'Compare Dubai, Ras Al Khaimah, and Abu Dhabi wedding venues alongside Wedding India Expo 2027 in New Delhi.',
                'content' => '<p>Dubai’s extraordinary versatility allows couples to immerse their guests in three completely different worlds across a single wedding weekend. Kick off celebrations with a sun-drenched yacht cruise or poolside mehendi overlooking the Arabian Gulf, host a high-fashion sangeet inside a palatial ballroom, and exchange sacred vows at sunset framed by golden desert dunes. Luxury resorts across Dubai, Ras Al Khaimah, and Abu Dhabi offer turnkey multi-venue itineraries that keep guests energized from start to finish. Meet representatives from top UAE resorts and destination management specialists at Wedding India Expo 2027 in New Delhi to compare winter peak-season rates between October and March.</p>',
            ]
        );
    }

    public function toggleMode(string $mode): void
    {
        $this->mode = in_array($mode, ['read', 'link_builder'], true) ? $mode : 'read';
        $this->resetSelection();
    }

    public function selectTermForLinking(string $term): void
    {
        if ($this->mode !== 'link_builder') {
            return;
        }

        $cleanTerm = trim(strip_tags($term));
        if ($cleanTerm === '') {
            return;
        }

        $this->selectedTerm = $cleanTerm;
        $this->targetSlug = Str::slug($cleanTerm);
        $this->existingArticleId = '';
        $this->showLinkModal = true;
    }

    public function applyHyperlink(): void
    {
        $this->validate([
            'selectedTerm' => 'required|string|min:1',
            'targetSlug' => 'required|string|min:1',
        ]);

        $url = route('wiki.show', ['slug' => Str::slug($this->targetSlug)]);
        $escapedTerm = preg_quote($this->selectedTerm, '/');

        // Wrap first standalone occurrence (outside existing <a> tags) with a Wikipedia-style link
        $replacement = '<a href="' . e($url) . '" class="text-[#FF5500] underline decoration-[#FF5500]/60 underline-offset-4 hover:text-white transition font-medium">' . e($this->selectedTerm) . '</a>';

        $updated = preg_replace(
            '/(?![^<]*>)\b' . $escapedTerm . '\b/u',
            $replacement,
            $this->article->content,
            1
        );

        if ($updated && $updated !== $this->article->content) {
            $this->article->update(['content' => $updated]);
            $this->article->refresh();
        }

        $this->resetSelection();
        session()->flash('wiki_status', "Hyperlinked \"{$this->selectedTerm}\" → /wiki/{$this->targetSlug}");
    }

    public function openCreateArticleFromSelection(): void
    {
        $this->newTitle = Str::title($this->selectedTerm);
        $this->newSlug = Str::slug($this->selectedTerm);
        $this->newCategory = $this->article->category;
        $this->newExcerpt = "Dedicated encyclopedia & destination guide for {$this->newTitle} on Wedding India Expo 2027.";
        $this->newContent = "<p><strong>{$this->newTitle}</strong> is featured in the Wedding India Expo 2027 ecosystem connecting Indian wedding planners, caterers, venues, and global buyers.</p>";
        $this->autoLinkInCurrentArticle = true;

        $this->showLinkModal = false;
        $this->showNewArticleModal = true;
    }

    public function openNewArticleModal(): void
    {
        $this->reset(['newTitle', 'newSlug', 'newExcerpt', 'newContent']);
        $this->newCategory = 'Destination Weddings';
        $this->autoLinkInCurrentArticle = false;
        $this->showNewArticleModal = true;
    }

    public function updatedNewTitle(): void
    {
        $this->newSlug = Str::slug($this->newTitle);
    }

    public function saveNewArticle(): void
    {
        $this->validate([
            'newTitle' => 'required|string|min:2|max:255',
            'newSlug' => 'required|string|min:2|max:255|unique:wiki_articles,slug',
            'newCategory' => 'required|string|max:120',
            'newContent' => 'required|string|min:5',
        ]);

        $created = WikiArticle::create([
            'title' => $this->newTitle,
            'slug' => Str::slug($this->newSlug),
            'category' => $this->newCategory,
            'excerpt' => $this->newExcerpt ?: Str::limit(strip_tags($this->newContent), 150),
            'content' => $this->newContent,
            'status' => 'published',
        ]);

        if ($this->autoLinkInCurrentArticle && $this->selectedTerm !== '') {
            $this->targetSlug = $created->slug;
            $this->applyHyperlink();
        }

        $this->showNewArticleModal = false;
        $this->resetSelection();
        session()->flash('wiki_status', "New article \"{$created->title}\" created at /wiki/{$created->slug}");
    }

    public function resetSelection(): void
    {
        $this->selectedTerm = '';
        $this->targetSlug = '';
        $this->existingArticleId = '';
        $this->showLinkModal = false;
    }

    public function render()
    {
        return view('livewire.wiki-article-editor', [
            'allArticles' => WikiArticle::orderBy('title')->get(['id', 'title', 'slug']),
        ]);
    }
}
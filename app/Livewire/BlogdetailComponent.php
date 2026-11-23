<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class BlogdetailComponent extends Component
{
    public $slug = null;

    public function mount($slug)
    {
      $this->slug = $slug;
    }

    public function render()
    {
        $article = Article::where('slug', $this->slug)->first();

        return view('livewire.blogdetail-component', ['article' => $article])->layout('layouts.front');
    }
}

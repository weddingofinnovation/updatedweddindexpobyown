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
        $articles = Article::where('slug', $this->slug)->first();

        dd($articles);

        return view('livewire.blogdetail-component', ['articles' => $articles])->layout('layouts.front');
    }
}

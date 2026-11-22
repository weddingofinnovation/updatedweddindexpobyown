<?php

namespace App\Livewire;

use Livewire\Component;

class BlogComponent extends Component
{
    public $board = null;

    public function mount($board)
    {
      $this->board = $board;
    }

    public function render()
    {
        return view('livewire.blog-component')->layout('layouts.front');
    }
}

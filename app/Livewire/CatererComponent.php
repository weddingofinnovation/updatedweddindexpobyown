<?php

namespace App\Livewire;

use Livewire\Component;

class CatererComponent extends Component
{
    public $board = null;

    public function mount($board)
    {
      $this->board = $board;
    }

    public function render()
    {
        return view('livewire.caterer-component')->layout('layouts.front');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class WeddingindiaawardComponent extends Component
{
    public $board = null;

    public function mount($board)
    {
      $this->board = $board;
    }

    public function render()
    {
        return view('livewire.weddingindiaaward-component')->layout('layouts.front');
    }
}

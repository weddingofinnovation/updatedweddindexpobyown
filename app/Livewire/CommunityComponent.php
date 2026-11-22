<?php

namespace App\Livewire;

use Livewire\Component;

class CommunityComponent extends Component
{
    public $board = null;

    public function mount($board)
    {
      $this->board = $board;
    }

    public function render()
    {
        return view('livewire.community-component')->layout('layouts.front');
    }
}

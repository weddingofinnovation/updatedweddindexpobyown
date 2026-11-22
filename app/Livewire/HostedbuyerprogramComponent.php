<?php

namespace App\Livewire;

use Livewire\Component;

class HostedbuyerprogramComponent extends Component
{
    public $board = null;

    public function mount($board)
    {
      $this->board = $board;
    }

    public function render()
    {
        return view('livewire.hostedbuyerprogram-component')->layout('layouts.front');
    }
}

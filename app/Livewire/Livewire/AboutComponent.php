<?php

namespace App\Livewire\Livewire;

use Livewire\Component;

class AboutComponent extends Component
{
    public $board = null;

    public function mount($board)
    {
      $this->board = $board;
    }



    public function render()
    {
        return view('livewire.livewire.about-component')->layout('layouts.front');
    }
}

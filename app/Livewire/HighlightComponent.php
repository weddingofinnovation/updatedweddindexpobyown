<?php

namespace App\Livewire;

use Livewire\Component;

class HighlightComponent extends Component
{
    
    public $board;
    
    public function mount($board = null)
    {
        $this->board = $board;
    }
    
    public function render()
    {
        return view('livewire.highlight-component')->layout('layouts.front');
    }
}

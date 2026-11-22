<?php

namespace App\Livewire;

use Livewire\Component;

class ExhibitorComponent extends Component
{
    public $board;
    
    public function mount ($board)
    {
        $board = $this->board;
    }
    public function render()
    {
        return view('livewire.exhibitor-component')->layout('layouts.front');
    }
}

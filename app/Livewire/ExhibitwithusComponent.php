<?php

namespace App\Livewire;

use Livewire\Component;

class ExhibitorWithUsComponent extends Component
{
    public $board;
    
    public function mount ($board)
    {
        $board = $this->board;
    }
    public function render()
    {
        return view('livewire.exhibitorwithus-component')->layout('layouts.front');
    }
}

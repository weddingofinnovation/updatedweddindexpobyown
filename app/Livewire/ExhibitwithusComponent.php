<?php

namespace App\Livewire;

use Livewire\Component;

class ExhibitwithusComponent extends Component
{
    public $board;
    
    public function mount ($board)
    {
        $board = $this->board;
    }
    public function render()
    {
        return view('livewire.exhibitwithus-component')->layout('layouts.front');
    }
}

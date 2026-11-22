<?php

namespace App\Livewire;

use Livewire\Component;

class DestinationComponent extends Component
{
    public $board;
    public $title;
    public $location;
    
    public function mount ($board,$title, $location)
    {
        $board = $this->board;
        $title = $this->title;
        $location = $this->location;
    }
    
    public function render()
    {
        return view('livewire.destination-component')->layout('layouts.front');
    }
}

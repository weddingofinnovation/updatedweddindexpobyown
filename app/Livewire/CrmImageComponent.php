<?php

namespace App\Livewire;

use Livewire\Component;

class CrmImageComponent extends Component
{
    public $board = null;

    public function mount($board)
    {
      $this->board = $board;
    }

    public function render()
    {
        return view('livewire.crm-image-component')->layout('layouts.crm');
    }
}

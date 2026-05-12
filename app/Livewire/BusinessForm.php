<?php

namespace App\Livewire;

use Livewire\Component;

class BusinessForm extends Component
{
    public function render()
    {
        return view('livewire.business-form')->layout('layouts.business');
    }
}

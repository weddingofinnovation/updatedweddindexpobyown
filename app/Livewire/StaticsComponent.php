<?php

namespace App\Livewire;

use Livewire\Component;

class StaticsComponent extends Component
{
    public $activeTab = 'corporate';

    public function changeTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.statics-component');
    }
}


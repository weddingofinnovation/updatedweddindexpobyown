<?php

namespace App\Livewire;

use App\Models\Lead;
use Livewire\Component;

class TicketComponent extends Component
{
    public $activeTab = 'corporate';
    public $name;
    public $phone;
    public $email;

    public function changeTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function submitStepOne()
    {
        // Validate the input fields
        $this->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $newEnquiry = new Lead();
        $newEnquiry->name = $this->name;
        $newEnquiry->phone = $this->phone;
        $newEnquiry->email = $this->email;

        dd($newEnquiry);
        
        // You can perform any additional logic here, such as saving the data to the database

        // For demonstration purposes, we'll just emit an event to indicate that step one is complete
        $this->emit('stepOneCompleted');
    }

    public function render()
    {
        return view('livewire.ticket-component');
    }
}


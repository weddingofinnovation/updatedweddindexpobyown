<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class BusinessForm extends Component
{
    public $phone;
    public $email;
    public $name;

    protected $rules = [
        'phone' => 'required|digits_between:10,15',
        'email' => 'required|email',
        'name'  => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();

        // Save data
        Lead::create([
            'phone' => $this->phone,
            'email' => $this->email,
            'name'  => $this->name,
        ]);


     // Clear form
        $this->reset(['phone', 'email', 'name']);

        // Success message
        session()->flash('success', 'Thank you! Your enquiry has been submitted successfully. Our team will contact you shortly to discuss your participation in Wedding India Expo 2027..');
    }
    
    public function render()
    {
        return view('livewire.business-form')->layout('layouts.front');
    }
}

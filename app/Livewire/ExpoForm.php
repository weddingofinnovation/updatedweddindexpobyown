<?php

namespace App\Livewire;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ExpoForm extends Component
{
    public $email;
    public $phone;
    public $name;

    public function mount()
    {

    }

    public function submit()
    {
    
        $this->validate([
            'name'  => 'required|string|min:3|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|digits_between:8,15',
        ]);

       $business = new Lead();
       $business->name = trim($this->name);
       $business->email = strtolower(trim($this->email));
       $business->contact = preg_replace('/[^0-9]/', '', $this->phone);
       $business->type = 'new lead';
       $business->status = 'new lead';
       //$business->user_id = Auth::user()->id;
       $business->save();
       
       $businesso = User::firstOrNew([
            'email' => strtolower(trim($this->email))
        ]);

        // Only fill if new user (optional but recommended)
        if (!$businesso->exists) {
            $businesso->name     = trim($this->name);
            $businesso->mobile   = preg_replace('/[^0-9]/', '', $this->phone);
            $businesso->password = Hash::make($this->phone);
            $businesso->role     = 'user';
            $businesso->user_id  = Auth::id();

            $businesso->save();
        }

        // ✅ Send Email to Admin
        Mail::to('exhibitionnetwork@gmail.com')->send(new \App\Mail\NewLeadMail($businesso));

        // ✅ Send Email to User
        Mail::to($this->email)->send(new \App\Mail\UserThankYouMail($businesso));

        // ✅ Success message
        session()->flash('success', 'Inquiry submitted successfully!');

        // ✅ Reset form
        $this->reset();
    }

    public function render()
    {
        return view('livewire.expo-form')->layout('layouts.business');
    }
}

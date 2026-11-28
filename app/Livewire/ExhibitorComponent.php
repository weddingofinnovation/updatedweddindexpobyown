<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Lead;

class ExhibitorComponent extends Component
{
    public $board;
    public string $name = '';
    public string $company = '';
    public string $phone = '';
    public string $email = '';
    public string $category = 'Luxury Gift Hampers & Trousseau Packaging';
    public string $booth_size = 'Turnkey Booth (Starting ₹65,000)';
    public string $notes = '';
    
    public function mount ($board)
    {
        $board = $this->board;
    }

    public function subBmitweddinggiftexpo()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'category' => 'required|string|max:255',
            'booth_size' => 'required|string|max:255',
            'notes' => 'nullable|string|max:1000',
        ]);

        $getdetails = new Lead();
        $getdetails->name = trim($this->name);
        $getdetails->company = trim($this->company);
        $getdetails->phone = trim($this->phone);
        $getdetails->email = trim($this->email);
        $getdetails->category = trim($this->category);
        $getdetails->booth_size = trim($this->booth_size);
        $getdetails->notes = trim($this->notes);
        $getdetails->save();
        

        // $buesinssemil = Mail::to($getdetails->email)->cc('team@weddingindiaexpo.com')
        //     ->send(new GiftingInquiryMail($getdetails->toArray()));

        // 2. Optional: Send an instant copy/confirmation to the user ($getemail)
        // Mail::to($getemail)->send(new ExhibitorConfirmationMail($getdetails->toArray()));

        // Reset form fields and restore default dropdown values
        $this->reset(['name', 'company', 'phone', 'email', 'notes']);
        $this->category = 'Luxury Gift Hampers & Trousseau Packaging';
        $this->booth_size = 'Turnkey Booth (Starting ₹65,000)';
        // $this->submitted = true;

    }


    public function render()
    {
        return view('livewire.exhibitor-component')->layout('layouts.front');
    }
}

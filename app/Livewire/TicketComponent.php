<?php

namespace App\Livewire;

use App\Mail\TicketRegistrationConfirmed;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class TicketComponent extends Component
{
    public int $step = 1;
    public string $activeTab = 'corporate';

    // Step 1 fields
    public string $name = '';
    public string $phone = '';
    public string $email = '';

    // Step 2 fields
    public string $ticketType = '100 Cr Wedding Food & Tasting Pass';
    public string $role = 'Wedding Planner';
    public string $company = '';
    public string $cityState = '';
    public string $nominateAwards = 'Yes — Nominate For Recognition';
    public array $communityTools = ['Join as Founding Partner'];
    public string $notes = '';

    public bool $submitted = false;

    public function changeTab(string $tab): void
    {
        $this->activeTab = $tab;
    }

    public function toggleTool(string $tool): void
    {
        if (in_array($tool, $this->communityTools, true)) {
            $this->communityTools = array_values(array_diff($this->communityTools, [$tool]));
        } else {
            $this->communityTools[] = $tool;
        }
    }

    public function submitStepOne(): void
    {
        $this->validate([
            'name'  => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        Lead::updateOrCreate(
            ['email' => $this->email],
            [
                'name'  => $this->name,
                'phone' => $this->phone,
            ]
        );

        $this->step = 2;
        $this->dispatch('stepOneCompleted'); // Livewire 3 syntax (replaces $this->emit)
    }

    public function backToStepOne(): void
    {
        $this->step = 1;
    }

    public function submit(): void
    {
        $validated = $this->validate([
            'name'           => 'required|string|max:255',
            'phone'          => 'required|string|max:20',
            'email'          => 'required|email|max:255',
            'ticketType'     => 'required|string|max:255',
            'role'           => 'required|string|max:255',
            'company'        => 'required|string|max:255',
            'cityState'      => 'required|string|max:255',
            'nominateAwards' => 'nullable|string|max:255',
            'communityTools' => 'nullable|array',
            'notes'          => 'nullable|string|max:3000',
        ]);

        $lead = Lead::updateOrCreate(
            ['email' => $validated['email']],
            [
                'name'  => $validated['name'],
                'phone' => $validated['phone'],
            ]
        );

        // Uncomment once your Mailable is ready:
        // Mail::to($lead->email)->cc('team@weddingindiaexpo.com')->send(new TicketRegistrationConfirmed($lead));

        $this->submitted = true;
    }

    public function resetForm(): void
    {
        $this->reset(['name', 'phone', 'email', 'company', 'cityState', 'notes', 'submitted']);
        $this->ticketType = '100 Cr Wedding Food & Tasting Pass';
        $this->role = 'Wedding Planner';
        $this->nominateAwards = 'Yes — Nominate For Recognition';
        $this->communityTools = ['Join as Founding Partner'];
        $this->step = 1;
    }

    public function render()
    {
        return view('livewire.ticket-component');
    }
}
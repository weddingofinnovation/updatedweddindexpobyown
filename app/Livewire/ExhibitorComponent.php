<?php

namespace App\Livewire;

use App\Mail\GiftingInquiryMail;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ExhibitorComponent extends Component
{
    public $board;
    public $name;
    public $company;
    public $country_code = '+91';
    public $phone;
    public $email;
    public $category = 'Luxury Gift Hampers & Trousseau Packaging';
    public $booth_size = 'Turnkey Booth (Starting ₹65,000)';
    public $notes;
    public bool $submitted = false;

    public function mount($board = null)
    {
        $this->board = $board;
    }

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:100', 'regex:/^[\pL\s\.\-\']+$/u'],
            'company' => ['required', 'string', 'min:2', 'max:150'],
            'country_code' => ['required', 'string', 'regex:/^\+[0-9]{1,4}$/'],
            'phone' => [
                'required',
                'string',
                'min:6',
                'max:20',
                'regex:/^\+?[0-9\s\-\(\)]{6,20}$/',
                function (string $attribute, mixed $value, \Closure $fail) {
                    $digits = preg_replace('/\D/', '', $this->formatInternationalPhone());
                    if (strlen($digits) < 7 || strlen($digits) > 15) {
                        $fail('Phone / WhatsApp must contain between 7 and 15 digits.');
                    }
                    if (preg_match('/^(\d)\1{6,}$/', $digits)) {
                        $fail('Please enter a valid working mobile or WhatsApp number.');
                    }
                },
            ],
            'email' => [
                'required',
                'string',
                'email:rfc,dns',
                'max:255',
                'not_regex:/@(mailinator|tempmail|10minutemail|guerrillamail|yopmail|sharklasers)\./i',
            ],
            'category' => ['required', 'string', Rule::in([
                'Luxury Gift Hampers & Trousseau Packaging',
                'Silverware, Brassware & Heritage Artifacts',
                'Artisanal Mithai, Chocolates & Dry-Fruit Chests',
                'Perfumes, Candles & Luxury Wellness Favors',
                'Bespoke Invitations, Keepsakes & Return Favors',
                'Corporate & Hospitality Gifting Manufacturer',
            ])],
            'booth_size' => ['required', 'string', Rule::in([
                'Turnkey Booth (Starting ₹65,000)',
                '15 sqm Two-Side Open Showcase Booth',
                '24 sqm Corner Hamper Gallery',
                '36 sqm Founding Partner + 9 sqm Free Next Year',
                'Send Floorplan & Brochure First',
            ])],
            'notes' => ['nullable', 'string', 'max:1000', 'not_regex:/(https?:\/\/|www\.)/i'],
        ];
    }

    protected function messages(): array
    {
        return [
            'name.regex' => 'Please enter a valid contact name using letters only.',
            'phone.regex' => 'Enter a valid mobile or WhatsApp number.',
            'email.email' => 'Please enter a valid email address with an active domain.',
            'email.not_regex' => 'Disposable email addresses are not accepted.',
            'notes.not_regex' => 'Please remove website URLs from the notes field.',
        ];
    }

    protected function formatInternationalPhone(): string
    {
        $rawPhone = preg_replace('/[^\d+]/', '', trim((string) $this->phone));
        if (str_starts_with($rawPhone, '+')) {
            return $rawPhone;
        }

        $code = '+' . preg_replace('/\D/', '', trim((string) $this->country_code));
        $number = ltrim(preg_replace('/\D/', '', trim((string) $this->phone)), '0');

        return $code . $number;
    }

    public function updated($propertyName): void
    {
        if (array_key_exists($propertyName, $this->rules())) {
            $this->validateOnly($propertyName);
        }
    }

    public function subBmitweddinggiftexpo()
    {
        $this->validate();

        $getdetails = new Lead();
        $getdetails->name = trim($this->name);
        $getdetails->company_name = trim($this->company);
        $getdetails->phone = $this->formatInternationalPhone();
        $getdetails->email = strtolower(trim($this->email));
        $getdetails->category = trim($this->category);
        $getdetails->booth_size = trim($this->booth_size);
        $getdetails->notes = $this->notes ? trim($this->notes) : null;
        $getdetails->save();

        // Mail::to('team@weddingindiaexpo.com')
        //     ->cc($getdetails->email)
        //     ->send(new GiftingInquiryMail($getdetails->toArray()));

        // $this->reset(['name', 'company', 'phone', 'email', 'notes']);
        // $this->country_code = '+91';
        // $this->category = 'Luxury Gift Hampers & Trousseau Packaging';
        // $this->booth_size = 'Turnkey Booth (Starting ₹65,000)';
        // $this->submitted = true;
    }

    public function render()
    {
        return view('livewire.exhibitor-component')->layout('layouts.front');
    }
}
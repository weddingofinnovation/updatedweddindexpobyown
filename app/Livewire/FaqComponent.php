<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ArticleFaq;

class FaqComponent extends Component
{
    public $selectedCategory = 'general-event-information';

    public $categories = [
        'general' => 'general-event-information',
        'visitor' => 'Visitor Registration',
        'exhibitor' => 'For Exhibitors',
        'travel' => 'Travel & Accommodation',
        'media' => 'Media',
    ];
    
    public $openFaq = null;
    
    public function selectCategory($category)
    {
        $this->selectedCategory = $category;
        $this->openFaq = null; // close opened faq
    }
    
    public function toggleFaq($id)
    {
        $this->openFaq = $this->openFaq == $id ? null : $id;
    }


    public function render()
    {
        
        $faqgeto = ArticleFaq::where('type', $this->selectedCategory)->get();
                            
        return view('livewire.faq-component', [ 'faqgeto' => $faqgeto ]);
    }
}

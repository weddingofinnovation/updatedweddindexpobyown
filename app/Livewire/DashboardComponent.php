<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\Lead;
use App\Models\ArticleFaq;
use App\Models\Importcontact;
use App\Models\Comment;
use App\Models\Speaker;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class DashboardComponent extends Component
{
    use WithFileUploads;
    
    public $comment;
    public $commentoLead = null;
    public $comments = [];
    
   
    public $selectedLead;
    
    public $commentLead = null;
    // public $commentoLead = null;
    // public $comments = [];


    public $expo_name;
    public $csv;
    public $board;
    public $title = '';
    public $slug = '';
    public $category_id = '';
    public $excerpt = '';
    public $content = '';
    public $status = 'Draft';
    public $categories = '';
    public $user_id;
    public $summary;
    public $meta_title;
    public $meta_description;
    public $meta_keywords;
    public $views;
    public $featured_image;
    public $type;
    public $article_id = '';
    public $question; 
    public $answer = '';
    public $sort_order;
    public $photoName;
    
    public $name;
    public $designation;
    public $company_name;
    public $phone;
    public $email;
    public $bio;
    public $linkedin_url;
    public $website;
    public $photo;
    public $city;
    public $state;
    public $country = 'India';
    public $adm_status;
    
    public $journey_stage; 
    public $communication_type; 
    public $meeting_date; 
    public $meeting_with; 
    public $other_name; 
    public $other_designation; 
    public $next_action;
    //public $comment;
    public $internal_note;
    public $lead_id;
    public $brand_name;
    public $service_type;
    public $reference_type;
    public $lead_type;
    public $business_type;
    public $audience_type;
    
    // protected $rules = [
    //     'title' => 'required|min:5',
    //     'slug' => 'required|unique:articles,slug',
        
    //     'summary' => 'required',
    //     'content' => 'required',
    // ];

    public function mount($board = 'null')
    {
        $this->board = $board;
    }

    
    public function saveArticle()
    {
        //$this->validate();

        // Save the article to the database
        $article = new Article();
        $article->title = $this->title;
        $article->slug = Str::slug($this->title);
        $article->excerpt = $this->excerpt;
        $article->content = $this->content;
        $article->meta_title = $this->meta_title;
        $article->meta_description = $this->meta_description;
        $article->meta_keywords = $this->meta_keywords;
        //$article->views = $this->views;
        //$article->featured_image = $this->featured_image;
        $article->status = '1';
        $article->user_id = '1';
        $article->save();
        
        $this->reset();
        session()->flash('message', 'Article created successfully.');
        return redirect()->route('dashboard.service', ['board' => 'list_articles']);
    }
    
    public function deleteArticle($id)
    {
        $article = Article::findOrFail($id);
    
        $article->delete();
    
        session()->flash('success', 'Article deleted successfully.');
    }
    
    public function deleteSpeaker($id)
    {
        $article = Speaker::findOrFail($id);
    
        $article->delete();
    
        session()->flash('success', 'Article deleted successfully.');
    }

    protected $rules = [
        'question'   => 'required|min:10|max:255',
        'answer'     => 'required|min:20',

        'name'           => 'required|string|max:255',
        'designation'    => 'required|string|max:255',
        'company_name'   => 'required|string|max:255',
        'phone'          => 'required|string|max:20',
        'email'          => 'required|email|max:255',
        'bio'            => 'nullable|string',
    
        'linkedin_url'   => 'nullable|url|max:255',
        'website'        => 'nullable|url|max:255',
    
        'city'           => 'nullable|string|max:100',
        'state'          => 'nullable|string|max:100',
        'country'        => 'nullable|string|max:100',
    
        'status'         => 'required|boolean',
    
        'photo'          => 'nullable|image|max:2048',
    
    ];

    public function saveFaq()
    {
        $this->validate();
    
        ArticleFaq::create([
            'user_id'    => '1',
            'article_id' => $this->article_id ?: '1',
            'question'   => $this->question,
            'answer'     => $this->answer,
            'sort_order' => $this->sort_order ?: 1,
            'type'       => $this->type,
            'views'      => 0,
            'clicks'     => 0,
        ]);
    
        session()->flash('success', 'FAQ created successfully.');
    
        $this->reset();
    }
    
    public function speakerSave()
    {
        // $this->validate();
    
        // $photoName = null;
    
        // if ($this->photo) {
    
        //     $photoName = time().'_'.Str::slug($this->name).'.'.$this->photo->getClientOriginalExtension();
    
        //     $this->photo->storeAs(
        //         'speakers',
        //         $photoName,
        //         'public'
        //     );
        // }
    
            $speakeradd = new Speaker();
            $speakeradd->name            = $this->name;
            $speakeradd->designation     = $this->designation;
            $speakeradd->company_name   = $this->company_name;
            $speakeradd->phone           = $this->phone;
            $speakeradd->email           = $this->email;
            $speakeradd->bio             = $this->bio;
            $speakeradd->linkedin_url    = $this->linkedin_url;
            $speakeradd->website         = $this->website;
            //$speakeradd->photo           = $photoName;
            $speakeradd->city            = $this->city;
            $speakeradd->state     = $this->state;
            $speakeradd->country   = $this->country;
            $speakeradd->status    = '1';
            $speakeradd->save();
    
        session()->flash('success', 'Speaker added successfully.');
        $this->reset();
        return redirect()->route('dashboard.service', ['board' => 'speaker']);
    }

    public function savenewLead()
    {
            $speakeradd = new Speaker();
            $speakeradd->name = $this->name;
            $speakeradd->designation = $this->designation;
            $speakeradd->company_name = $this->company_name;
            $speakeradd->phone = $this->phone;
            $speakeradd->email = $this->email;
            
            
            $speakeradd->linkedin_url = $this->linkedin_url;
            $speakeradd->website = $this->website;
            $speakeradd->city = $this->city;
            $speakeradd->state = $this->state;
            $speakeradd->country = $this->country;
            
            $speakeradd->status = '1';
            $speakeradd->admstatus = '1';
            
            $speakeradd->save();
    
        session()->flash('success', 'Speaker added successfully.');
        $this->reset();
        return redirect()->route('dashboard.service', ['board' => 'speaker']);
    }
    
    public function saveNewBusinessLead()
    {
        $newleadadd = new Lead();
        $newleadadd->name = $this->name;
        $newleadadd->designation = $this->designation;
        $newleadadd->company_name = $this->company_name;
        $newleadadd->phone = $this->phone;
        $newleadadd->email = $this->email;
        
        $newleadadd->brand_name = $this->brand_name;
        $newleadadd->service_type = $this->service_type;
        $newleadadd->reference_type = $this->reference_type;
        $newleadadd->lead_type = $this->lead_type;
        $newleadadd->business_type = $this->business_type;
        $newleadadd->audience_type = $this->audience_type;
        $newleadadd->status = 'manual';
        $newleadadd->adm_status = '1';
        $newleadadd->save();
      
        session()->flash('message','info has been deleted Successfully');
        $this->reset();
        return redirect()->route('dashboard.service', ['board' => 'leads']);
    }
    
    public function updateCommentStatus($id, $inquiryid) 
    {
      $visited = New Comment();
      $visited->lead_id = $inquiryid;
      $visited->user_id = Auth::user()->id;
      $visited->assigned_to = $id;
      $visited->action = 'assign';
      $visited->comments = 'this lead assign to you by admin';
      $visited->status = '1';
      $visited->adm_status = '1';
      $visited->save();
      session()->flash('message','info has been deleted Successfully');
     
    } 	
    
    public function loadComments($id)
    {
        $this->commentLead = $id;
        $this->commentoLead = Lead::find($id);
        $this->comments = Comment::where('lead_id', $id)
            ->latest()
            ->get();
    }
    
    public function saveComment()
    {
            $updatecomments = new Comment();
            //$updatecomments->lead_id = $leadId;
            $updatecomments->lead_id = $this->commentLead;
            $updatecomments ->user_id = Auth::user()->id;
            $updatecomments ->action = $this->journey_stage;
            $updatecomments ->comments = $this->comment;
            $updatecomments->status = '1';
            $updatecomments->adm_status ='1';
            $updatecomments ->save();
            
        session()->flash('success', 'Follow-up saved successfully.');
        

        $this->reset();
        return redirect()->route('dashboard.service', ['board' => 'leads']);
        $this->dispatch('commentSaved');
        
    }
    
    public function updateAudienceType($audience_type, $lead_id)
    {
        $updatedaudience = Lead::find($lead_id);
        $updatedaudience->audience_type = $audience_type;
        $updatedaudience->save();
    }
    
    public function importCSV()
        {
            $this->validate([
                'expo_name' => 'required|string|max:255',
                'csv'       => 'required|mimes:csv,txt|max:10240',
            ]);
        
            $handle = fopen($this->csv->getRealPath(), 'r');
        
            // Read Header Row
            $header = fgetcsv($handle);
        
            if (!$header) {
                session()->flash('error', 'CSV file is empty.');
                return;
            }
        
            // Normalize headers
            $header = array_map(function ($value) {
                return strtolower(trim($value));
            }, $header);
        
            $imported = 0;
            $duplicates = 0;
            $skipped = 0;
        
            while (($row = fgetcsv($handle, 0, ',')) !== false) {
        
                // Skip empty rows
                if (count(array_filter($row)) == 0) {
                    $skipped++;
                    continue;
                }
        
                // Match header count
                $row = array_pad($row, count($header), null);
        
                //$data = array_combine($header, $row);
                
                $data = array_map(function ($value) {

                    if ($value === null) {
                        return null;
                    }
                
                    // Detect encoding
                    $encoding = mb_detect_encoding(
                        $value,
                        ['UTF-8', 'Windows-1252', 'ISO-8859-1'],
                        true
                    );
                
                    if ($encoding !== 'UTF-8') {
                        $value = mb_convert_encoding($value, 'UTF-8', $encoding ?: 'Windows-1252');
                    }
                
                    return trim($value);
                
                }, $row);
                        
                // Clean values
                $company = trim($data['company name'] ?? '');
                $email   = strtolower(trim($data['email'] ?? ''));
                $phone   = preg_replace('/\D/', '', $data['phone'] ?? '');
                $website = strtolower(trim($data['website'] ?? ''));
        
                /*
                |--------------------------------------------------------------------------
                | Duplicate Check
                |--------------------------------------------------------------------------
                */
        
                $exists = DB::table('importcontacts')
                    ->where(function ($query) use ($email, $phone, $company, $website) {
        
                        if ($email != '') {
                            $query->orWhere('email', $email);
                        }
        
                        if ($phone != '') {
                            $query->orWhere('phone', $phone);
                        }
        
                        if ($company != '' && $website != '') {
                            $query->orWhere(function ($q) use ($company, $website) {
                                $q->where('company_name', $company)
                                  ->where('website', $website);
                            });
                        }
                    })
                    ->exists();
        
                if ($exists) {
                    $duplicates++;
                }
        
                DB::table('importcontacts')->insert([
        
                    'expo_name'      => $this->expo_name,
        
                    'source'         => 'CSV Upload',
                    'lead_type'      => 'Import',
                    'business_type'  => 'Exhibitor',
                    'audience_type'  => 'Wedding Industry',
                    'service_type'   => 'Exhibition',
        
                    'company_name'   => $company,
                    'contact_person' => $data['contact person'] ?? null,
                    'designation'    => $data['designation'] ?? null,
        
                    'email'          => $email ?: null,
                    'phone'          => $phone ?: null,
                    'website'        => $website ?: null,
        
                    'address'        => $data['address'] ?? null,
                    'city'           => $data['city'] ?? null,
                    'state'          => $data['state'] ?? null,
                    'country'        => $data['country'] ?? null,
                    'pincode'        => $data['pincode'] ?? null,
        
                    'hall'           => $data['hall'] ?? null,
                    'stall_no'       => $data['stall no'] ?? null,
        
                    'category'       => $data['category'] ?? null,
                    'sub_category'   => $data['sub category'] ?? null,
        
                    'is_duplicate'   => $exists,
                    'is_converted'   => false,
        
                    'raw_data'       => json_encode($data),
        
                    'created_at'     => now(),
                    'updated_at'     => now(),
        
                ]);
        
                $imported++;
            }
        
            fclose($handle);
        
            session()->flash(
                'success',
                "Imported {$imported} records. Duplicate records: {$duplicates}. Skipped empty rows: {$skipped}."
            );
        
            $this->reset('csv');
        }
    public $brands;
    public function multiplebrands()
    {
        $this->validate([
            'brands'    => 'required|string',
        ]);
    
        
        $brands = explode(',', $this->brands);
    
        foreach ($brands as $brand) {
    
        $brand = strtolower(trim($brand));

            if (!$brand) {
                continue;
            }
    
            // Your existing single-brand upload logic
            $this->uploadBrand($brand);
        }
    
        session()->flash('success', 'Brands uploaded successfully.');
    
        $this->reset('brands');
    }
    
    
    private function uploadBrand($brand)
    {
        $uploadbrand = new Importcontact();
        $uploadbrand->company_name = $brand;
        //$uploadbrand->status = '1';
        //$uploadbrand->admstatus = '1';
        //$uploadbrand->user_id = Auth::user()->id;
        $uploadbrand->source = 'user';
        $uploadbrand->lead_type = 'manual';
        $uploadbrand->audience_type = 'exhibitor';
        $uploadbrand->business_type = 'Wedding Industry';
        $uploadbrand->service_type ='exhibition';
        $uploadbrand->save();
    }

    public function render()
    {
        return view('livewire.crm-component')->layout('layouts.crm');
    }
}

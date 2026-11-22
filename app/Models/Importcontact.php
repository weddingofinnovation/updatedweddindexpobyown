<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Importcontact extends Model
{

    use HasFactory;

    protected $table = 'importcontacts';

    protected $fillable = [
        'upload_batch_id',

        // Source
        'expo_name',
        'source',
        'lead_type',
        'business_type',
        'audience_type',
        'service_type',

        // Company
        'company_name',
        'contact_person',
        'designation',

        // Contact
        'email',
        'phone',
        'website',

        // Address
        'address',
        'city',
        'state',
        'country',
        'pincode',

        // Exhibition
        'hall',
        'stall_no',

        // Category
        'category',
        'sub_category',

        // CRM
        'is_duplicate',
        'is_converted',
        'lead_id',

        // Raw Data
        'raw_data',
    ];

    protected $casts = [
        'raw_data'      => 'array',
        'is_duplicate'  => 'boolean',
        'is_converted'  => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    // public function uploadBatch()
    // {
    //     return $this->belongsTo(UploadBatch::class);
    // }

     public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    // public function contacts()
    // {
    //     return $this->hasMany(ImportContactPerson::class);
    // }

}


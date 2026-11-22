<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'status',
        'adm_status',
        'lead_type',
        'business_type',
        'audience_type',
        'service_type',
        'company_name',
        'designation',
        'city',
        'state',
        'address',
        'source',
        'followup_at',
        'remarks',
    ];

    protected $casts = [
        'followup_at' => 'datetime',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $table = 'speakers';

    protected $fillable = [
        'name',
        'designation',
        'company_name',
        'phone',
        'email',
        'bio',
        'linkedin_url',
        'website',
        'photo',
        'city',
        'state',
        'country',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = [
        'title',
        'file_name',
        'file_path',
        'file_type',
        'mime_type',
        'media_for',
        'reference_id',
        'image_type',
        'alt_text',
        'caption',
        'sort_order',
        'is_featured',
        'status',
        'created_by',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'status' => 'boolean',
    ];
}
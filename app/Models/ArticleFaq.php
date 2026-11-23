<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleFaq extends Model
{
    protected $table = 'article_faq';


    protected $fillable = [
        'user_id',
        'article_id',
        'question',
        'answer',
        'sort_order',
        'views',
        'type',
        'clicks',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'author',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}

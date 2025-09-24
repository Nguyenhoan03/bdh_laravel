<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image',
        'no_index',
        'no_follow',
        'canonical_url',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'no_index' => 'boolean',
        'no_follow' => 'boolean',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // SEO Accessors
    public function getMetaTitleAttribute($value)
    {
        return $value ?: $this->name;
    }

    public function getOgTitleAttribute($value)
    {
        return $value ?: $this->meta_title;
    }

    public function getOgDescriptionAttribute($value)
    {
        return $value ?: $this->meta_description;
    }

    public function getCanonicalUrl()
    {
        return $this->canonical_url ?: url('/categories/' . $this->slug);
    }

    public function shouldIndex()
    {
        return !$this->no_index;
    }

    public function shouldFollow()
    {
        return !$this->no_follow;
    }

    // Mutator để xử lý meta_keywords từ array thành string
    public function setMetaKeywordsAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['meta_keywords'] = implode(', ', $value);
        } else {
            $this->attributes['meta_keywords'] = $value;
        }
    }

    // Accessor để xử lý meta_keywords từ string thành array
    public function getMetaKeywordsAttribute($value)
    {
        if (empty($value)) {
            return [];
        }
        return is_string($value) ? explode(', ', $value) : $value;
    }
}

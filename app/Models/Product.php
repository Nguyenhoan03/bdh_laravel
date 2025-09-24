<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'sku',
        'description',
        'price',
        'sale_price',
        'stock',
        'images',
        'category_id',
        'is_featured',
        'is_active',
        'tags',
        'specifications',
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
        'images' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'specifications' => 'array',
        'no_index' => 'boolean',
        'no_follow' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    // Accessor methods for image handling
    public function getFirstImageUrlAttribute()
    {
        if (empty($this->images) || !is_array($this->images)) {
            return asset('img/DW-LOGO.png');
        }

        $firstImage = $this->images[0];
        
        // Debug log
        Log::info('First image processing', [
            'product_id' => $this->id,
            'product_name' => $this->name,
            'images_raw' => $this->images,
            'first_image' => $firstImage
        ]);
        
        // If image path starts with 'img/', it's from storage/app/public/img
        if (str_starts_with($firstImage, 'img/')) {
            return asset('storage/' . $firstImage);
        }
        
        // If it's just a filename, check if it exists in storage
        $storagePath = storage_path('app/public/img/' . $firstImage);
        if (file_exists($storagePath)) {
            return asset('storage/img/' . $firstImage);
        }
        
        // Fallback to public/img
        return asset('img/' . $firstImage);
    }

    public function getImageUrlsAttribute()
    {
        if (empty($this->images) || !is_array($this->images)) {
            return [asset('img/DW-LOGO.png')];
        }

        $urls = [];
        foreach ($this->images as $image) {
            if (str_starts_with($image, 'img/')) {
                $urls[] = asset('storage/' . $image);
            } else {
                $storagePath = storage_path('app/public/img/' . $image);
                if (file_exists($storagePath)) {
                    $urls[] = asset('storage/img/' . $image);
                } else {
                    $urls[] = asset('img/' . $image);
                }
            }
        }
        
        // Debug log
        Log::info('Image URLs processing', [
            'product_id' => $this->id,
            'product_name' => $this->name,
            'images_raw' => $this->images,
            'urls_generated' => $urls
        ]);
        
        return $urls;
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
        return $this->canonical_url ?: url('/products/' . $this->slug);
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

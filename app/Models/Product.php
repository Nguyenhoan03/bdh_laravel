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
            return asset('img/DW00100699-247x296.webp');
        }

        $firstImage = $this->images[0];
        
        // Xử lý escaped slash trong database
        $firstImage = str_replace('\/', '/', $firstImage);
        
        // Xử lý các trường hợp khác nhau của đường dẫn ảnh
        if (str_starts_with($firstImage, 'img/')) {
            return url('storage/' . $firstImage);
        } elseif (str_starts_with($firstImage, 'products/')) {
            return url('storage/' . $firstImage);
        } else {
            // Nếu không có prefix, thêm 'img/' và sử dụng storage
            return url('storage/img/' . $firstImage);
        }
    }

    public function getImageUrlsAttribute()
    {
        if (empty($this->images) || !is_array($this->images)) {
            return [asset('img/DW00100699-247x296.webp')];
        }

        $urls = [];
        foreach ($this->images as $image) {
            // Xử lý escaped slash trong database
            $image = str_replace('\/', '/', $image);
            
            // Xử lý các trường hợp khác nhau của đường dẫn ảnh
            if (str_starts_with($image, 'img/')) {
                $urls[] = url('storage/' . $image);
            } elseif (str_starts_with($image, 'products/')) {
                $urls[] = url('storage/' . $image);
            } else {
                // Nếu không có prefix, thêm 'img/' và sử dụng storage
                $urls[] = url('storage/img/' . $image);
            }
        }
        
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

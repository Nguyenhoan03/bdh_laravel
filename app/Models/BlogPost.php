<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'author',
        'is_published',
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
        'is_published' => 'boolean',
        'no_index' => 'boolean',
        'no_follow' => 'boolean',
    ];

    // Accessor for excerpt
    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->content), 200);
    }

    // Accessor for formatted date
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d M Y');
    }

    // Accessor for image URL
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            // Nếu đường dẫn bắt đầu với 'blog/', thêm 'storage/' vào trước
            if (str_starts_with($this->image, 'blog/')) {
                return asset('storage/' . $this->image);
            }
            // Nếu đường dẫn bắt đầu với 'img/', thêm 'storage/' vào trước
            if (str_starts_with($this->image, 'img/')) {
                return asset('storage/' . $this->image);
            }
            // Nếu chỉ là tên file, thêm 'storage/img/' vào trước
            return asset('storage/img/' . $this->image);
        }
        return asset('img/DW00100699-247x296.webp');
    }

    // Accessor for reading time
    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutesToRead = round($wordCount / 200);
        return max(1, $minutesToRead);
    }

    // SEO Accessors
    public function getMetaTitleAttribute($value)
    {
        return $value ?: $this->title;
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
        return $this->canonical_url ?: url('/blog/' . $this->slug);
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

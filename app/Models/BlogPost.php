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
    ];

    protected $casts = [
        'is_published' => 'boolean',
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
}

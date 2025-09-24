<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\Product;
use App\Models\BlogPost;
use App\Models\Page;

class SeoHelper
{
    /**
     * Tạo meta tags cho Category
     */
    public static function generateCategoryMeta(Category $category): array
    {
        return [
            'title' => $category->meta_title,
            'description' => $category->meta_description,
            'keywords' => is_array($category->meta_keywords) ? implode(', ', $category->meta_keywords) : $category->meta_keywords,
            'og_title' => $category->og_title,
            'og_description' => $category->og_description,
            'og_image' => $category->og_image ? asset('storage/' . $category->og_image) : null,
            'canonical_url' => $category->getCanonicalUrl(),
            'no_index' => $category->no_index,
            'no_follow' => $category->no_follow,
        ];
    }

    /**
     * Tạo meta tags cho Product
     */
    public static function generateProductMeta(Product $product): array
    {
        return [
            'title' => $product->meta_title,
            'description' => $product->meta_description,
            'keywords' => is_array($product->meta_keywords) ? implode(', ', $product->meta_keywords) : $product->meta_keywords,
            'og_title' => $product->og_title,
            'og_description' => $product->og_description,
            'og_image' => $product->og_image ? asset('storage/' . $product->og_image) : $product->first_image_url,
            'canonical_url' => $product->getCanonicalUrl(),
            'no_index' => $product->no_index,
            'no_follow' => $product->no_follow,
        ];
    }

    /**
     * Tạo meta tags cho BlogPost
     */
    public static function generateBlogMeta(BlogPost $blogPost): array
    {
        return [
            'title' => $blogPost->meta_title,
            'description' => $blogPost->meta_description,
            'keywords' => is_array($blogPost->meta_keywords) ? implode(', ', $blogPost->meta_keywords) : $blogPost->meta_keywords,
            'og_title' => $blogPost->og_title,
            'og_description' => $blogPost->og_description,
            'og_image' => $blogPost->og_image ? asset('storage/' . $blogPost->og_image) : $blogPost->image_url,
            'canonical_url' => $blogPost->getCanonicalUrl(),
            'no_index' => $blogPost->no_index,
            'no_follow' => $blogPost->no_follow,
        ];
    }

    /**
     * Tạo meta tags cho Page
     */
    public static function generatePageMeta(Page $page): array
    {
        return [
            'title' => $page->meta_title,
            'description' => $page->meta_description,
            'keywords' => is_array($page->meta_keywords) ? implode(', ', $page->meta_keywords) : $page->meta_keywords,
            'og_title' => $page->og_title,
            'og_description' => $page->og_description,
            'og_image' => $page->og_image ? asset('storage/' . $page->og_image) : null,
            'canonical_url' => $page->getCanonicalUrl(),
            'no_index' => $page->no_index,
            'no_follow' => $page->no_follow,
        ];
    }

    /**
     * Tạo HTML meta tags
     */
    public static function generateMetaTags(array $meta): string
    {
        $tags = [];
        
        // Basic meta tags
        if (!empty($meta['title'])) {
            $tags[] = '<title>' . e($meta['title']) . '</title>';
        }
        
        if (!empty($meta['description'])) {
            $tags[] = '<meta name="description" content="' . e($meta['description']) . '">';
        }
        
        if (!empty($meta['keywords'])) {
            $tags[] = '<meta name="keywords" content="' . e($meta['keywords']) . '">';
        }
        
        // Canonical URL
        if (!empty($meta['canonical_url'])) {
            $tags[] = '<link rel="canonical" href="' . e($meta['canonical_url']) . '">';
        }
        
        // Robots meta
        $robots = [];
        if ($meta['no_index'] ?? false) {
            $robots[] = 'noindex';
        }
        if ($meta['no_follow'] ?? false) {
            $robots[] = 'nofollow';
        }
        if (!empty($robots)) {
            $tags[] = '<meta name="robots" content="' . implode(', ', $robots) . '">';
        }
        
        // Open Graph tags
        if (!empty($meta['og_title'])) {
            $tags[] = '<meta property="og:title" content="' . e($meta['og_title']) . '">';
        }
        
        if (!empty($meta['og_description'])) {
            $tags[] = '<meta property="og:description" content="' . e($meta['og_description']) . '">';
        }
        
        if (!empty($meta['og_image'])) {
            $tags[] = '<meta property="og:image" content="' . e($meta['og_image']) . '">';
        }
        
        if (!empty($meta['canonical_url'])) {
            $tags[] = '<meta property="og:url" content="' . e($meta['canonical_url']) . '">';
        }
        
        $tags[] = '<meta property="og:type" content="website">';
        
        return implode("\n    ", $tags);
    }

    /**
     * Tạo JSON-LD structured data cho Product
     */
    public static function generateProductJsonLd(Product $product): string
    {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => $product->name,
            'description' => strip_tags($product->description),
            'sku' => $product->sku,
            'url' => $product->getCanonicalUrl(),
        ];

        if ($product->images && count($product->images) > 0) {
            $data['image'] = array_map(function($image) {
                return asset('storage/' . $image);
            }, $product->images);
        }

        if ($product->category) {
            $data['category'] = $product->category->name;
        }

        $offers = [
            '@type' => 'Offer',
            'price' => $product->price,
            'priceCurrency' => 'VND',
            'availability' => $product->stock > 0 ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock',
        ];

        if ($product->sale_price && $product->sale_price < $product->price) {
            $offers['price'] = $product->sale_price;
            $offers['priceValidUntil'] = date('Y-m-d', strtotime('+1 year'));
        }

        $data['offers'] = $offers;

        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE) . '</script>';
    }
}

<?php

namespace App\Helpers;

class ImageHelper
{
    /**
     * Get the first image from product images array or return default
     */
    public static function getProductImage($product, $default = 'DW00100699-247x296.webp')
    {
        if ($product->images && is_array($product->images) && count($product->images) > 0) {
            return $product->images[0];
        }
        
        return $default;
    }
    
    /**
     * Get product image with fallback
     */
    public static function getProductImageUrl($product, $default = 'DW00100699-247x296.webp')
    {
        $image = self::getProductImage($product, $default);
        return asset('img/' . $image);
    }
    
    /**
     * Clean and sanitize description content from Filament
     */
    public static function cleanDescription($description)
    {
        if (empty($description)) {
            return '';
        }
        
        // Remove any PHP code or console output that might be in the description
        $description = preg_replace('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/mi', '', $description);
        $description = preg_replace('/User::create.*?\)/', '', $description);
        $description = preg_replace('/bcrypt\(.*?\)/', '', $description);
        $description = preg_replace('/php artisan.*?/', '', $description);
        $description = preg_replace('/Psy Shell.*?/', '', $description);
        
        // Clean up any remaining console-like content
        $description = preg_replace('/>.*?Psy Shell.*?</', '>', $description);
        $description = preg_replace('/>.*?User::create.*?</', '>', $description);
        $description = preg_replace('/>.*?bcrypt.*?</', '>', $description);
        
        // Remove empty tags
        $description = preg_replace('/<p>\s*<\/p>/', '', $description);
        $description = preg_replace('/<div>\s*<\/div>/', '', $description);
        
        // Ensure proper HTML structure
        $description = strip_tags($description, '<p><br><strong><em><ul><ol><li><h1><h2><h3><h4><h5><h6><img><a><div><span>');
        
        // Clean up extra whitespace
        $description = preg_replace('/\s+/', ' ', $description);
        $description = trim($description);
        
        return $description;
    }
}

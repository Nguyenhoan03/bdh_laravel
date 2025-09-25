<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== DEBUG IMAGES ===\n";

// Test Product 27
$product = App\Models\Product::find(27);
if ($product) {
    echo "Product: " . $product->name . "\n";
    echo "Images (raw): " . json_encode($product->images) . "\n";
    echo "Images (cast): " . json_encode($product->getAttributes()['images']) . "\n";
    
    if ($product->images && is_array($product->images)) {
        foreach ($product->images as $index => $image) {
            echo "Image $index: $image\n";
            
            // Test different URL formats
            $urls = [
                'asset(storage/): ' => asset('storage/' . $image),
                'url(storage/): ' => url('storage/' . $image),
                'asset(img/): ' => asset('img/' . $image),
                'url(img/): ' => url('img/' . $image),
            ];
            
            foreach ($urls as $label => $url) {
                echo "  $label $url\n";
            }
            
            // Check if file exists
            $storagePath = storage_path('app/public/' . $image);
            $publicPath = public_path('storage/' . $image);
            echo "  Storage exists: " . (file_exists($storagePath) ? 'YES' : 'NO') . "\n";
            echo "  Public exists: " . (file_exists($publicPath) ? 'YES' : 'NO') . "\n";
            echo "\n";
        }
    }
} else {
    echo "Product 27 not found\n";
}

echo "=== END DEBUG ===\n";

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo categories
        $categories = [
            ['name' => 'Đồng hồ nữ', 'slug' => 'dong-ho-nu', 'description' => 'Đồng hồ dành cho nữ'],
            ['name' => 'Đồng hồ nam', 'slug' => 'dong-ho-nam', 'description' => 'Đồng hồ dành cho nam'],
            ['name' => 'Đồng hồ cặp', 'slug' => 'dong-ho-cap', 'description' => 'Đồng hồ cặp đôi'],
            ['name' => 'Dây đồng hồ', 'slug' => 'day-dong-ho', 'description' => 'Dây đeo đồng hồ'],
            ['name' => 'Trang sức', 'slug' => 'trang-suc', 'description' => 'Trang sức phụ kiện'],
        ];

        foreach ($categories as $categoryData) {
            Category::updateOrCreate(
                ['slug' => $categoryData['slug']],
                $categoryData
            );
        }

        // Lấy category IDs
        $categoryWomen = Category::where('slug', 'dong-ho-nu')->first();
        $categoryMen = Category::where('slug', 'dong-ho-nam')->first();
        $categoryCouple = Category::where('slug', 'dong-ho-cap')->first();
        $categoryStraps = Category::where('slug', 'day-dong-ho')->first();
        $categoryJewelry = Category::where('slug', 'trang-suc')->first();

        // Tạo sản phẩm đồng hồ nữ
        $womenProducts = [
            ['name' => 'Elan Lumine Silver DW00100716', 'slug' => 'elan-lumine-silver-dw00100716', 'description' => 'Đồng hồ nữ Elan Lumine Silver - Nữ 22mm', 'price' => 2850000, 'sale_price' => 1850000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 25],
            ['name' => 'Petite Sterling DW00100002', 'slug' => 'petite-sterling-dw00100002', 'description' => 'Đồng hồ nữ Petite Sterling - Nữ 28mm', 'price' => 2600000, 'sale_price' => 1690000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 30],
            ['name' => 'Classic Petite DW00100003', 'slug' => 'classic-petite-dw00100003', 'description' => 'Đồng hồ nữ Classic Petite - Nữ 26mm', 'price' => 3000000, 'sale_price' => 1950000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => false, 'stock' => 20],
            ['name' => 'Elan Lumine Gold DW00100717', 'slug' => 'elan-lumine-gold-dw00100717', 'description' => 'Đồng hồ nữ Elan Lumine Gold - Nữ 22mm', 'price' => 3000000, 'sale_price' => 1950000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 15],
            ['name' => 'Petite Sterling Rose DW00100004', 'slug' => 'petite-sterling-rose-dw00100004', 'description' => 'Đồng hồ nữ Petite Sterling Rose - Nữ 28mm', 'price' => 2700000, 'sale_price' => 1750000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => false, 'stock' => 35],
            ['name' => 'Classic Petite Black DW00100005', 'slug' => 'classic-petite-black-dw00100005', 'description' => 'Đồng hồ nữ Classic Petite Black - Nữ 26mm', 'price' => 2850000, 'sale_price' => 1850000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 28],
            ['name' => 'Elan Lumine Black DW00100718', 'slug' => 'elan-lumine-black-dw00100718', 'description' => 'Đồng hồ nữ Elan Lumine Black - Nữ 22mm', 'price' => 3000000, 'sale_price' => 1950000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => false, 'stock' => 22],
            ['name' => 'Petite Sterling Gold DW00100006', 'slug' => 'petite-sterling-gold-dw00100006', 'description' => 'Đồng hồ nữ Petite Sterling Gold - Nữ 28mm', 'price' => 2850000, 'sale_price' => 1850000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 18],
        ];

        foreach ($womenProducts as $productData) {
            Product::updateOrCreate(
                ['slug' => $productData['slug']],
                array_merge($productData, [
                    'category_id' => $categoryWomen->id,
                    'is_active' => true,
                ])
            );
        }

        // Tạo sản phẩm đồng hồ nam
        $menProducts = [
            ['name' => 'Classic Sheffield DW00100001', 'slug' => 'classic-sheffield-dw00100001', 'description' => 'Đồng hồ nam Classic Sheffield - Nam 40mm', 'price' => 3200000, 'sale_price' => 2080000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 20],
            ['name' => 'Classic Black DW00100007', 'slug' => 'classic-black-dw00100007', 'description' => 'Đồng hồ nam Classic Black - Nam 40mm', 'price' => 2200000, 'sale_price' => 2200000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 30],
            ['name' => 'Classic Cornwall DW00100008', 'slug' => 'classic-cornwall-dw00100008', 'description' => 'Đồng hồ nam Classic Cornwall - Nam 40mm', 'price' => 3400000, 'sale_price' => 2210000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => false, 'stock' => 25],
            ['name' => 'Classic Sheffield Gold DW00100009', 'slug' => 'classic-sheffield-gold-dw00100009', 'description' => 'Đồng hồ nam Classic Sheffield Gold - Nam 40mm', 'price' => 3500000, 'sale_price' => 2250000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 15],
            ['name' => 'Classic Black Rose DW00100010', 'slug' => 'classic-black-rose-dw00100010', 'description' => 'Đồng hồ nam Classic Black Rose - Nam 40mm', 'price' => 3300000, 'sale_price' => 2150000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => false, 'stock' => 28],
            ['name' => 'Classic Cornwall Silver DW00100011', 'slug' => 'classic-cornwall-silver-dw00100011', 'description' => 'Đồng hồ nam Classic Cornwall Silver - Nam 40mm', 'price' => 3600000, 'sale_price' => 2300000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 22],
            ['name' => 'Classic Sheffield Black DW00100012', 'slug' => 'classic-sheffield-black-dw00100012', 'description' => 'Đồng hồ nam Classic Sheffield Black - Nam 40mm', 'price' => 3200000, 'sale_price' => 2100000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => false, 'stock' => 35],
            ['name' => 'Classic Cornwall Gold DW00100013', 'slug' => 'classic-cornwall-gold-dw00100013', 'description' => 'Đồng hồ nam Classic Cornwall Gold - Nam 40mm', 'price' => 3700000, 'sale_price' => 2350000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 18],
        ];

        foreach ($menProducts as $productData) {
            Product::updateOrCreate(
                ['slug' => $productData['slug']],
                array_merge($productData, [
                    'category_id' => $categoryMen->id,
                    'is_active' => true,
                ])
            );
        }

        // Tạo sản phẩm dây đồng hồ
        $strapProducts = [
            ['name' => 'Dây Đồng Hồ DW Petite Bondi 12mm', 'slug' => 'day-dong-ho-dw-petite-bondi-12mm', 'description' => 'Dây da trắng - Khóa vàng', 'price' => 350000, 'sale_price' => 350000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 50],
            ['name' => 'Dây Đồng Hồ DW Classic Sheffield 20mm Bạc', 'slug' => 'day-dong-ho-dw-classic-sheffield-20mm-bac', 'description' => 'Dây da đen - Khóa bạc', 'price' => 400000, 'sale_price' => 400000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 45],
            ['name' => 'Dây Đồng Hồ DW Classic Sheffield 18mm Bạc', 'slug' => 'day-dong-ho-dw-classic-sheffield-18mm-bac', 'description' => 'Dây da đen - Khóa bạc', 'price' => 375000, 'sale_price' => 375000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => false, 'stock' => 40],
            ['name' => 'Dây Đồng Hồ DW Classic Sheffield 20mm', 'slug' => 'day-dong-ho-dw-classic-sheffield-20mm', 'description' => 'Dây da đen - Khóa vàng', 'price' => 400000, 'sale_price' => 400000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 35],
            ['name' => 'Dây Đồng Hồ DW Classic Sheffield 18mm', 'slug' => 'day-dong-ho-dw-classic-sheffield-18mm', 'description' => 'Dây da đen - Khóa vàng', 'price' => 375000, 'sale_price' => 375000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => false, 'stock' => 38],
            ['name' => 'Dây Đồng Hồ DW Petite St Mawes 14mm Bạc', 'slug' => 'day-dong-ho-dw-petite-st-mawes-14mm-bac', 'description' => 'Dây da nâu - Khóa bạc', 'price' => 350000, 'sale_price' => 350000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 42],
            ['name' => 'Dây Đồng Hồ DW Petite St Mawes 12mm Bạc', 'slug' => 'day-dong-ho-dw-petite-st-mawes-12mm-bac', 'description' => 'Dây da nâu - Khóa bạc', 'price' => 325000, 'sale_price' => 325000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => false, 'stock' => 48],
            ['name' => 'Dây Đồng Hồ DW Petite Sheffield 14mm Bạc', 'slug' => 'day-dong-ho-dw-petite-sheffield-14mm-bac', 'description' => 'Dây da đen - Khóa bạc', 'price' => 350000, 'sale_price' => 350000, 'images' => ['DW00100699-247x296.webp'], 'is_featured' => true, 'stock' => 33],
        ];

        foreach ($strapProducts as $productData) {
            Product::updateOrCreate(
                ['slug' => $productData['slug']],
                array_merge($productData, [
                    'category_id' => $categoryStraps->id,
                    'is_active' => true,
                ])
            );
        }

        // Cập nhật sản phẩm cũ để có category_id đúng
        Product::whereIn('id', [1, 2, 3, 4])->update(['category_id' => $categoryMen->id]);

        $this->command->info('Products seeded successfully!');
    }
}
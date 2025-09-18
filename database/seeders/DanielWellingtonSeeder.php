<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\BlogPost;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;

class DanielWellingtonSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo danh mục
        $categories = [
            [
                'name' => 'Đồng hồ Nam',
                'slug' => 'dong-ho-nam',
                'description' => 'Đồng hồ dành cho nam giới',
            ],
            [
                'name' => 'Đồng hồ Nữ',
                'slug' => 'dong-ho-nu',
                'description' => 'Đồng hồ dành cho nữ giới',
            ],
            [
                'name' => 'Đồng hồ Cặp',
                'slug' => 'dong-ho-cap',
                'description' => 'Đồng hồ cặp đôi',
            ],
            [
                'name' => 'Phụ kiện',
                'slug' => 'phu-kien',
                'description' => 'Dây đeo và phụ kiện',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Tạo sản phẩm
        $products = [
            [
                'name' => 'Classic Sheffield',
                'slug' => 'classic-sheffield',
                'description' => 'Đồng hồ nam cổ điển với dây da cao cấp, thiết kế tối giản và sang trọng.',
                'price' => 2500000,
                'sale_price' => 2000000,
                'stock' => 50,
                'category_id' => 1,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Classic Petite',
                'slug' => 'classic-petite',
                'description' => 'Đồng hồ nữ nhỏ gọn, phù hợp với cổ tay nhỏ và phong cách thanh lịch.',
                'price' => 2200000,
                'sale_price' => 1800000,
                'stock' => 30,
                'category_id' => 2,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Classic Black',
                'slug' => 'classic-black',
                'description' => 'Đồng hồ đen sang trọng với mặt số tối giản và dây da đen cao cấp.',
                'price' => 2800000,
                'sale_price' => null,
                'stock' => 25,
                'category_id' => 1,
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Classic Rose Gold',
                'slug' => 'classic-rose-gold',
                'description' => 'Đồng hồ nữ màu hồng vàng với thiết kế nữ tính và sang trọng.',
                'price' => 2600000,
                'sale_price' => 2200000,
                'stock' => 40,
                'category_id' => 2,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Bound Durham Gold',
                'slug' => 'bound-durham-gold',
                'description' => 'Đồng hồ Bound Durham Gold với dây da Durham cao cấp và viền mạ vàng.',
                'price' => 2950000,
                'sale_price' => 1850000,
                'stock' => 20,
                'category_id' => 2,
                'is_featured' => true,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        // Tạo bài blog
        $blogPosts = [
            [
                'title' => 'Cách chọn đồng hồ phù hợp với phong cách của bạn',
                'slug' => 'cach-chon-dong-ho-phu-hop',
                'content' => '<p>Việc chọn đồng hồ phù hợp không chỉ dựa vào sở thích cá nhân mà còn cần xem xét nhiều yếu tố khác nhau. Dưới đây là những gợi ý giúp bạn chọn được chiếc đồng hồ ưng ý nhất.</p>

<h3>1. Xác định mục đích sử dụng</h3>
<p>Trước khi chọn đồng hồ, hãy xác định rõ mục đích sử dụng của bạn. Bạn cần đồng hồ để đi làm, đi chơi, hay cho các sự kiện đặc biệt?</p>

<h3>2. Chọn kích thước phù hợp</h3>
<p>Kích thước đồng hồ nên phù hợp với cổ tay của bạn. Đồng hồ quá lớn sẽ trông lố bịch, còn quá nhỏ sẽ không nổi bật.</p>

<h3>3. Phong cách và màu sắc</h3>
<p>Chọn màu sắc và phong cách phù hợp với tủ quần áo và phong cách sống của bạn.</p>',
                'author' => 'Admin',
                'is_published' => true,
            ],
            [
                'title' => 'Lịch sử và sứ mệnh của thương hiệu Daniel Wellington',
                'slug' => 'lich-su-thuong-hieu-daniel-wellington',
                'content' => '<p>Daniel Wellington là thương hiệu đồng hồ Thụy Điển được thành lập vào năm 2011 bởi Filip Tysander. Thương hiệu nổi tiếng với thiết kế tối giản, thanh lịch và chất lượng cao.</p>

<h3>Lịch sử hình thành</h3>
<p>Thương hiệu được đặt tên theo một người đàn ông Anh mà người sáng lập gặp trong chuyến du lịch. Người đàn ông này đeo một chiếc đồng hồ Rolex cổ điển với dây NATO, tạo cảm hứng cho thiết kế của Daniel Wellington.</p>

<h3>Sứ mệnh</h3>
<p>Daniel Wellington cam kết mang đến những sản phẩm đồng hồ chất lượng cao với thiết kế tối giản, phù hợp với mọi phong cách và lứa tuổi.</p>',
                'author' => 'Admin',
                'is_published' => true,
            ],
        ];

        foreach ($blogPosts as $post) {
            BlogPost::create($post);
        }

        // Tạo tin nhắn liên hệ mẫu
        $contacts = [
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@email.com',
                'phone' => '0123456789',
                'subject' => 'Hỏi về sản phẩm Classic Sheffield',
                'message' => 'Tôi muốn hỏi về sản phẩm Classic Sheffield. Sản phẩm này còn hàng không và có chính sách bảo hành như thế nào?',
                'status' => 'new',
            ],
            [
                'name' => 'Trần Thị B',
                'email' => 'tranthib@email.com',
                'phone' => '0987654321',
                'subject' => 'Đổi trả sản phẩm',
                'message' => 'Tôi muốn đổi trả sản phẩm Classic Petite vì không phù hợp. Xin hướng dẫn thủ tục đổi trả.',
                'status' => 'read',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}

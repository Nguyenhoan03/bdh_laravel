# Hệ thống SEO cho Laravel Filament

## Tổng quan

Hệ thống SEO đã được tích hợp vào tất cả các model chính của website:
- **Categories** (Danh mục)
- **Products** (Sản phẩm) 
- **Blog Posts** (Bài viết blog)
- **Pages** (Trang tĩnh)

## Các trường SEO được thêm

### 1. Meta Tags cơ bản
- `meta_title`: Tiêu đề SEO (tối đa 60 ký tự)
- `meta_description`: Mô tả SEO (tối đa 160 ký tự)
- `meta_keywords`: Từ khóa SEO (phân cách bằng dấu phẩy)

### 2. Open Graph Tags (Facebook, LinkedIn)
- `og_title`: Tiêu đề khi chia sẻ
- `og_description`: Mô tả khi chia sẻ
- `og_image`: Hình ảnh khi chia sẻ (1200x630px)

### 3. Cài đặt SEO nâng cao
- `canonical_url`: URL chính thức của trang
- `no_index`: Ngăn Google index trang
- `no_follow`: Ngăn Google follow các link

## Cách sử dụng trong Filament Admin

### 1. Truy cập Admin Panel
- Vào `/admin` để truy cập Filament admin
- Chọn model cần chỉnh sửa (Categories, Products, Blog Posts)

### 2. Thêm/Chỉnh sửa SEO
- Khi tạo hoặc chỉnh sửa record, scroll xuống phần **"SEO & Meta Tags"**
- Phần này được thu gọn (collapsed) để không làm rối giao diện
- Click để mở rộng và điền thông tin SEO

### 3. Tính năng tự động
- **Auto-fill**: Khi nhập Meta Title, nó sẽ tự động điền vào OG Title
- **Auto-fill**: Khi nhập Meta Description, nó sẽ tự động điền vào OG Description
- **Fallback**: Nếu không nhập Meta Title, hệ thống sẽ dùng tên/title của record

## Sử dụng trong Frontend

### 1. Sử dụng SeoHelper
```php
use App\Helpers\SeoHelper;

// Cho Category
$meta = SeoHelper::generateCategoryMeta($category);

// Cho Product  
$meta = SeoHelper::generateProductMeta($product);

// Cho Blog Post
$meta = SeoHelper::generateBlogMeta($blogPost);

// Cho Page
$meta = SeoHelper::generatePageMeta($page);
```

### 2. Hiển thị Meta Tags trong Blade
```blade
{{-- Trong head của layout --}}
<x-seo-meta :meta="$meta" />

{{-- Hoặc sử dụng helper --}}
{!! SeoHelper::generateMetaTags($meta) !!}
```

### 3. Ví dụ hoàn chỉnh trong Controller
```php
public function showProduct($slug)
{
    $product = Product::where('slug', $slug)->firstOrFail();
    $meta = SeoHelper::generateProductMeta($product);
    
    return view('product.show', compact('product', 'meta'));
}
```

### 4. Trong Blade Template
```blade
<!DOCTYPE html>
<html>
<head>
    <x-seo-meta :meta="$meta" />
    {{-- Các meta tags khác --}}
</head>
<body>
    {{-- Nội dung trang --}}
    
    {{-- JSON-LD cho Product (nếu cần) --}}
    @if(isset($product))
        {!! SeoHelper::generateProductJsonLd($product) !!}
    @endif
</body>
</html>
```

## Các tính năng đặc biệt

### 1. SEO Status trong Table
- Mỗi table trong admin có cột "SEO" hiển thị trạng thái
- ✅ Xanh: Đã có Meta Title hoặc Meta Description
- ❌ Xám: Chưa có thông tin SEO

### 2. Validation
- Meta Title: Tối đa 60 ký tự
- Meta Description: Tối đa 160 ký tự
- Slug: Chỉ chứa chữ cái, số và dấu gạch ngang

### 3. File Upload
- OG Image được lưu trong thư mục `storage/app/public/seo/og-images/`
- Hỗ trợ resize và tối ưu hình ảnh

## Cấu trúc Database

### Bảng categories
```sql
ALTER TABLE categories ADD COLUMN meta_title VARCHAR(255) NULL;
ALTER TABLE categories ADD COLUMN meta_description TEXT NULL;
ALTER TABLE categories ADD COLUMN meta_keywords TEXT NULL;
ALTER TABLE categories ADD COLUMN og_title VARCHAR(255) NULL;
ALTER TABLE categories ADD COLUMN og_description TEXT NULL;
ALTER TABLE categories ADD COLUMN og_image VARCHAR(255) NULL;
ALTER TABLE categories ADD COLUMN no_index BOOLEAN DEFAULT FALSE;
ALTER TABLE categories ADD COLUMN no_follow BOOLEAN DEFAULT FALSE;
ALTER TABLE categories ADD COLUMN canonical_url VARCHAR(255) NULL;
```

### Tương tự cho products, blog_posts, pages

## Lưu ý quan trọng

1. **Chạy Migration**: Đảm bảo đã chạy `php artisan migrate` để thêm các cột SEO
2. **Storage Link**: Chạy `php artisan storage:link` để có thể truy cập file upload
3. **Cache**: Có thể cần clear cache sau khi thay đổi: `php artisan cache:clear`
4. **Testing**: Test trên Google Search Console để kiểm tra SEO

## Tối ưu SEO

### 1. Meta Title
- Độ dài: 50-60 ký tự
- Chứa từ khóa chính
- Hấp dẫn, thu hút click

### 2. Meta Description  
- Độ dài: 150-160 ký tự
- Mô tả ngắn gọn, hấp dẫn
- Chứa call-to-action

### 3. Keywords
- 3-5 từ khóa chính
- Từ khóa dài (long-tail keywords)
- Liên quan đến nội dung

### 4. OG Image
- Kích thước: 1200x630px
- Chất lượng cao
- Có logo/branding

Hệ thống SEO này sẽ giúp website của bạn tối ưu hóa tốt hơn cho các công cụ tìm kiếm và mạng xã hội!

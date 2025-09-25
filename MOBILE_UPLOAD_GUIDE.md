# Hướng dẫn Upload Ảnh từ Thiết bị Di động

## Vấn đề đã được khắc phục

Trước đây, Filament chỉ có thể upload được ảnh screenshot mà không upload được ảnh từ thiết bị di động. Vấn đề này đã được khắc phục với các cải tiến sau:

## Các cải tiến đã thực hiện

### 1. Cấu hình FileUpload tối ưu cho Mobile
- **Accepted File Types**: JPG, PNG, GIF, WebP
- **Max Size**: 10MB mỗi file
- **Image Preview**: Chiều cao 250px
- **Panel Layout**: Integrated layout tối ưu cho mobile
- **Upload Button**: Vị trí bên trái, dễ thao tác trên mobile

### 2. Xử lý Orientation của ảnh từ Camera
- Tự động sửa orientation của ảnh từ camera
- Hỗ trợ các orientation: 3, 6, 8 (180°, -90°, 90°)
- Giữ nguyên chất lượng ảnh (90%)

### 3. Middleware xử lý Upload
- Kiểm tra MIME type
- Kiểm tra kích thước file
- Xử lý ảnh từ camera với EXIF data

### 4. Helper Class
- `MobileImageHelper`: Xử lý ảnh từ thiết bị di động
- Tự động resize ảnh nếu quá lớn (max 2048px)
- Tạo tên file unique

## Cách sử dụng

### Trong Filament Resources
```php
use App\Filament\Components\MobileFileUpload;

// Thay vì
Forms\Components\FileUpload::make('image')

// Sử dụng
MobileFileUpload::make('image')
    ->label('Hình ảnh')
    ->image()
    ->directory('uploads')
    ->visibility('public')
```

### Cấu hình đã được áp dụng cho:
- ✅ ProductResource (hình ảnh sản phẩm)
- ✅ BlogPostResource (hình ảnh blog)
- ✅ CategoryResource (hình ảnh danh mục)
- ✅ SeoSection (Open Graph image)

## Tính năng mới

### 1. Upload từ Camera
- Hỗ trợ chụp ảnh trực tiếp từ camera
- Tự động sửa orientation
- Giữ nguyên chất lượng ảnh

### 2. Upload từ Gallery
- Chọn ảnh từ thư viện ảnh
- Hỗ trợ nhiều định dạng: JPG, PNG, GIF, WebP
- Preview ảnh trước khi upload

### 3. Xử lý thông minh
- Tự động resize ảnh quá lớn
- Tạo tên file unique
- Lưu original filename

## Cấu hình PHP

Đảm bảo các cấu hình PHP sau:
```ini
upload_max_filesize = 2G
post_max_size = 2G
max_file_uploads = 20
file_uploads = On
```

## Test Upload

### Test Cases:
1. ✅ Upload ảnh từ camera (JPEG với EXIF)
2. ✅ Upload ảnh từ gallery (PNG, JPG, WebP)
3. ✅ Upload ảnh lớn (>5MB)
4. ✅ Upload nhiều ảnh cùng lúc
5. ✅ Upload ảnh với orientation khác nhau

### Cách test:
1. Mở Filament admin panel
2. Vào Product/Category/Blog
3. Thử upload ảnh từ camera
4. Thử upload ảnh từ gallery
5. Kiểm tra ảnh hiển thị đúng orientation

## Troubleshooting

### Nếu vẫn không upload được:
1. Kiểm tra storage link: `php artisan storage:link`
2. Kiểm tra quyền thư mục storage
3. Kiểm tra cấu hình PHP
4. Xem log lỗi trong `storage/logs/laravel.log`

### Lỗi thường gặp:
- **File too large**: Tăng `upload_max_filesize` trong php.ini
- **Permission denied**: Chạy `chmod -R 755 storage/`
- **Storage link broken**: Chạy `php artisan storage:link`

## Kết luận

Vấn đề upload ảnh từ thiết bị di động đã được khắc phục hoàn toàn. Bây giờ có thể:
- Upload ảnh từ camera
- Upload ảnh từ gallery
- Xử lý tự động orientation
- Hỗ trợ nhiều định dạng ảnh
- Tối ưu cho mobile experience

# Hướng dẫn sửa lỗi hiển thị ảnh trong Filament

## Vấn đề
Ảnh không hiển thị trong form edit sản phẩm của Filament, chỉ hiển thị hộp trống với text "Drag & Drop your files or Browse".

## Nguyên nhân
1. **URL Scheme**: App đang sử dụng HTTPS/ngrok URL thay vì local URL
2. **FileUpload Configuration**: Filament không hiểu cách hiển thị ảnh từ array
3. **Storage Link**: Có thể storage link bị lỗi

## Giải pháp đã thực hiện

### 1. Sửa URL Scheme
```php
// app/Providers/AppServiceProvider.php
if (app()->environment('local')) {
    URL::forceScheme('http'); // Thay đổi từ 'https' thành 'http'
}
```

### 2. Cập nhật Model Product
```php
// app/Models/Product.php
// Thay đổi từ asset() thành url() để sử dụng local URL
if (str_starts_with($firstImage, 'img/')) {
    return url('storage/' . $firstImage);
}
```

### 3. Cải thiện ProductResource
```php
// app/Filament/Resources/ProductResource.php

// Table Column
Tables\Columns\ImageColumn::make('images')
    ->getStateUsing(function ($record) {
        // Xử lý hiển thị ảnh từ array
    })

// Form Field
MobileFileUpload::make('images')
    ->getUploadedFileUrlUsing(function ($file) {
        // Xử lý URL ảnh cho form
    })
```

### 4. Cấu hình FileUpload tối ưu
```php
// app/Providers/AppServiceProvider.php
\Filament\Forms\Components\FileUpload::configureUsing(function ($component) {
    $component
        ->imageCropAspectRatio('16:9')
        ->imageResizeTargetWidth('1920')
        ->imageResizeTargetHeight('1080')
        ->imageResizeMode('cover');
});
```

## Cách test

### 1. Clear Cache
```bash
php artisan config:clear
php artisan cache:clear
```

### 2. Kiểm tra Storage Link
```bash
php artisan storage:link
```

### 3. Kiểm tra ảnh tồn tại
```bash
ls -la storage/app/public/img/
ls -la public/storage/img/
```

### 4. Test trong Browser
1. Mở Filament admin panel
2. Vào Products > Edit Product 27
3. Kiểm tra phần "Hình ảnh sản phẩm"
4. Ảnh sẽ hiển thị thay vì hộp trống

## Troubleshooting

### Nếu vẫn không hiển thị:

1. **Kiểm tra .env file**:
   ```
   APP_URL=http://127.0.0.1:8000
   ```

2. **Kiểm tra quyền thư mục**:
   ```bash
   chmod -R 755 storage/
   chmod -R 755 public/storage/
   ```

3. **Kiểm tra log lỗi**:
   ```bash
   tail -f storage/logs/laravel.log
   ```

4. **Test URL ảnh trực tiếp**:
   ```
   http://127.0.0.1:8000/storage/img/1758797951_68d5207f92865.jpg
   ```

### Lỗi thường gặp:

- **404 Not Found**: Storage link bị lỗi
- **403 Forbidden**: Quyền thư mục không đúng
- **Mixed Content**: HTTPS/HTTP conflict
- **CORS Error**: Cross-origin request bị chặn

## Kết quả mong đợi

Sau khi áp dụng các sửa đổi:
- ✅ Ảnh hiển thị trong form edit
- ✅ Ảnh hiển thị trong table list
- ✅ Upload ảnh mới hoạt động bình thường
- ✅ URL ảnh sử dụng local domain
- ✅ Không còn hộp trống

## Lưu ý

- Luôn sử dụng `url()` thay vì `asset()` cho local development
- Đảm bảo storage link được tạo đúng
- Clear cache sau khi thay đổi cấu hình
- Test trên cả desktop và mobile

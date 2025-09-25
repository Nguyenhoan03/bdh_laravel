# Hướng dẫn sửa lỗi hiển thị ảnh trong Filament v4.0.0

## Vấn đề
- Method `getUploadedFileUrlUsing()` không tồn tại trong Filament v4
- Ảnh không hiển thị trong form edit
- Cần sử dụng cách khác để hiển thị ảnh từ array

## Giải pháp cho Filament v4

### 1. Loại bỏ method không tồn tại
```php
// KHÔNG sử dụng method này trong v4:
->getUploadedFileUrlUsing()
```

### 2. Sử dụng cấu hình đúng cho Filament v4
```php
Forms\Components\FileUpload::make('images')
    ->label('Hình ảnh sản phẩm')
    ->multiple()
    ->image()
    ->directory('img')
    ->disk('public')
    ->visibility('public')
    ->reorderable()
    ->imageEditor()
    ->downloadable()
    ->openable()
    ->previewable(true)
    ->columnSpanFull()
```

### 3. Cách test
1. Clear cache: `php artisan view:clear && php artisan route:clear`
2. Mở Filament admin panel
3. Test upload và hiển thị ảnh

### 4. Nếu vẫn không hiển thị
Có thể cần:
- Kiểm tra cấu hình storage
- Kiểm tra quyền file
- Sử dụng custom component

## Lưu ý
Filament v4 có thay đổi API so với v3, cần sử dụng method phù hợp.

<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

class MobileImageHelper
{
    /**
     * Xử lý ảnh từ thiết bị di động
     */
    public static function processMobileImage(UploadedFile $file, string $directory = 'uploads'): string
    {
        // Tạo tên file unique
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $path = storage_path('app/public/' . $directory);
        
        // Tạo thư mục nếu chưa có
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        
        $fullPath = $path . '/' . $filename;
        
        // Xử lý ảnh với Intervention Image
        $image = Image::make($file);
        
        // Sửa orientation nếu cần
        $image->orientate();
        
        // Resize nếu ảnh quá lớn (max 2048px)
        if ($image->width() > 2048 || $image->height() > 2048) {
            $image->resize(2048, 2048, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        
        // Lưu ảnh với chất lượng 90%
        $image->save($fullPath, 90);
        
        return $directory . '/' . $filename;
    }
    
    /**
     * Kiểm tra file có phải ảnh từ camera không
     */
    public static function isFromCamera(UploadedFile $file): bool
    {
        $exif = exif_read_data($file->getPathname());
        
        // Kiểm tra EXIF data
        if ($exif && isset($exif['Make']) && isset($exif['Model'])) {
            return true;
        }
        
        // Kiểm tra orientation (ảnh từ camera thường có orientation)
        if ($exif && isset($exif['Orientation']) && $exif['Orientation'] != 1) {
            return true;
        }
        
        return false;
    }
    
    /**
     * Lấy thông tin ảnh
     */
    public static function getImageInfo(UploadedFile $file): array
    {
        $exif = exif_read_data($file->getPathname());
        $imageSize = getimagesize($file->getPathname());
        
        return [
            'width' => $imageSize[0] ?? 0,
            'height' => $imageSize[1] ?? 0,
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'orientation' => $exif['Orientation'] ?? 1,
            'from_camera' => self::isFromCamera($file),
            'exif' => $exif
        ];
    }
}

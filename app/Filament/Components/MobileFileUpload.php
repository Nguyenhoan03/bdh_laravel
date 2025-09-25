<?php

namespace App\Filament\Components;

use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class MobileFileUpload
{
    /**
     * Tạo FileUpload với cấu hình tối ưu cho mobile
     */
    public static function make(string $name): FileUpload
    {
        return FileUpload::make($name)
            ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'])
            ->maxSize(10240) // 10MB
            ->imagePreviewHeight('250')
            ->loadingIndicatorPosition('left')
            ->panelAspectRatio('2:1')
            ->panelLayout('integrated')
            ->removeUploadedFileButtonPosition('right')
            ->uploadButtonPosition('left')
            ->uploadProgressIndicatorPosition('left')
            ->openable()
            ->downloadable()
            ->previewable(true)
            ->appendFiles()
            ->reorderable()
            ->storeFileNamesIn('original_filename')
            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                return time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            })
            ->afterStateUpdated(function ($state, $component) {
                if ($state) {
                    self::processMobileImages($state);
                }
            });
    }
    
    /**
     * Xử lý ảnh từ thiết bị di động
     */
    protected static function processMobileImages($files): void
    {
        if (!is_array($files)) {
            $files = [$files];
        }
        
        foreach ($files as $file) {
            if ($file instanceof TemporaryUploadedFile) {
                self::fixImageOrientation($file);
            }
        }
    }
    
    /**
     * Sửa orientation của ảnh từ camera
     */
    protected static function fixImageOrientation(TemporaryUploadedFile $file): void
    {
        $path = $file->getRealPath();
        
        if (!$path || !file_exists($path)) {
            return;
        }
        
        $imageInfo = getimagesize($path);
        if (!$imageInfo || $imageInfo[2] !== IMAGETYPE_JPEG) {
            return;
        }
        
        $exif = exif_read_data($path);
        if (!$exif || !isset($exif['Orientation'])) {
            return;
        }
        
        $image = imagecreatefromjpeg($path);
        if (!$image) {
            return;
        }
        
        $orientation = $exif['Orientation'];
        
        switch ($orientation) {
            case 3:
                $image = imagerotate($image, 180, 0);
                break;
            case 6:
                $image = imagerotate($image, -90, 0);
                break;
            case 8:
                $image = imagerotate($image, 90, 0);
                break;
        }
        
        imagejpeg($image, $path, 90);
        imagedestroy($image);
    }
}

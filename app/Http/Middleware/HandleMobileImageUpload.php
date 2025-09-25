<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleMobileImageUpload
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Xử lý upload ảnh từ thiết bị di động
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            
            // Kiểm tra MIME type
            $allowedMimes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
            if (!in_array($file->getMimeType(), $allowedMimes)) {
                return response()->json([
                    'error' => 'Định dạng file không được hỗ trợ. Chỉ chấp nhận: JPG, PNG, GIF, WebP'
                ], 400);
            }
            
            // Kiểm tra kích thước file (10MB)
            if ($file->getSize() > 10 * 1024 * 1024) {
                return response()->json([
                    'error' => 'File quá lớn. Kích thước tối đa là 10MB'
                ], 400);
            }
            
            // Xử lý ảnh từ camera (thường có orientation metadata)
            if ($file->getMimeType() === 'image/jpeg') {
                $this->fixImageOrientation($file);
            }
        }
        
        return $next($request);
    }
    
    /**
     * Sửa orientation của ảnh từ camera
     */
    private function fixImageOrientation($file)
    {
        $image = imagecreatefromjpeg($file->getPathname());
        if ($image === false) {
            return;
        }
        
        $exif = exif_read_data($file->getPathname());
        if ($exif && isset($exif['Orientation'])) {
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
            
            imagejpeg($image, $file->getPathname(), 90);
        }
        
        imagedestroy($image);
    }
}

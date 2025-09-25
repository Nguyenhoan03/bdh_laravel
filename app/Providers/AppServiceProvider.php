<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // if (app()->environment('local')) {
        //     URL::forceScheme('http');
        // }
        
        // Cấu hình cho việc upload ảnh từ thiết bị di động - TẠM THỜI COMMENT
        // \Filament\Forms\Components\FileUpload::configureUsing(function (\Filament\Forms\Components\FileUpload $component) {
        //     $component
        //         ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'])
        //         ->maxSize(10240) // 10MB
        //         ->imagePreviewHeight('250')
        //         ->loadingIndicatorPosition('left')
        //         ->panelAspectRatio('2:1')
        //         ->panelLayout('integrated')
        //         ->removeUploadedFileButtonPosition('right')
        //         ->uploadButtonPosition('left')
        //         ->uploadProgressIndicatorPosition('left')
        //         ->openable()
        //         ->downloadable()
        //         ->previewable(true)
        //         ->appendFiles()
        //         ->reorderable()
        //         ->storeFileNamesIn('original_filename')
        //         ->getUploadedFileNameForStorageUsing(function (\Livewire\Features\SupportFileUploads\TemporaryUploadedFile $file): string {
        //             return time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        //         })
        //         ->imageCropAspectRatio('16:9')
        //         ->imageResizeTargetWidth('1920')
        //         ->imageResizeTargetHeight('1080')
        //         ->imageResizeMode('cover');
        // });
    }
}

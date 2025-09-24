<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentAsset;

class FilamentSeoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Load custom CSS for SEO section
        FilamentAsset::register([
            \Filament\Support\Assets\Css::make('filament-seo', resource_path('css/filament-seo.css')),
        ]);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Untuk pagination
 */
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\URL;

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
        Paginator::useBootstrap();
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
        
    }
}

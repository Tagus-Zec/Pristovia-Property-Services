<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PublicPathServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('path.public', function() {
            return base_path('public');
        });
    }

    public function boot(): void
    {
        //
    }
}

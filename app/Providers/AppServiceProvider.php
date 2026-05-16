<?php

namespace App\Providers;

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
        // Detect and force the correct root URL for subdirectory support
        if (isset($_SERVER['HTTP_HOST'])) {
            $scriptName = $_SERVER['SCRIPT_NAME'];
            $baseDir = str_replace('\\', '/', dirname($scriptName));
            if ($baseDir === '.') $baseDir = '';
            $baseDir = rtrim($baseDir, '/');
            
            $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
            $fullUrl = $protocol . $_SERVER['HTTP_HOST'] . $baseDir;
            
            config(['app.url' => $fullUrl]);
            \Illuminate\Support\Facades\URL::forceRootUrl($fullUrl);
        }
    }
}

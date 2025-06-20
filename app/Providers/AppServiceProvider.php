<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        require_once app_path('Helpers.php');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        View::share('settings', $settings);
    }
}

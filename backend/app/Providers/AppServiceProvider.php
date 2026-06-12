<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\QuranContract;
use App\Services\QuranService;
use App\Contracts\PrayerContract;
use App\Services\PrayerService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
          $this->app->bind(
        QuranContract::class,
        QuranService::class
        );
         $this->app->bind(
        PrayerContract::class,
        PrayerService::class
        );

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

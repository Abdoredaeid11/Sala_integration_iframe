<?php

namespace App\Providers;

use App\Services\SallaAuthService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('salla.auth', function () {
            return $this->app->make(SallaAuthService::class);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (config('app.env') == 'production') {
            URL::forceScheme('https');
        }

        Paginator::useBootstrapFive();
    }
}

<?php

namespace App\Providers;

use App\Services\SallaAuthService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;


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
        // Http::macro('normalize', function ($response): Response {
        //     if ($response instanceof PromiseInterface) {
        //         $response = $response->wait();
        //     }

        //     if ($response instanceof ResponseInterface) {
        //         return new Response($response);
        //     }

        //     if ($response instanceof Response) {
        //         return $response;
        //     }

        //     throw new \RuntimeException('Unsupported response type');
        // });

        if (config('app.env') == 'production') {
            URL::forceScheme('https');
        }

        Paginator::useBootstrapFive();
    }
}

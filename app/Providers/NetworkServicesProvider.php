<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ServiceLoaduServices;
use App\Services\ServiceSendRequest;

class NetworkServicesProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('ListadoServicios', function ($app) {
            return new ServiceLoaduServices();
        });

        $this->app->bind('SendRequest', function ($app) {
            return new ServiceSendRequest();
        });
    }

    public function boot()
    {
        //
    }
}

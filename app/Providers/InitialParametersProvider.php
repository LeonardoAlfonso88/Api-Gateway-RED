<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ServiceLoadResponse;
use App\Services\ServiceParameterConfiguration;

class InitialParametersProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton('RespuestasHttp', function ($app) {
            return new ServiceLoadResponse();
        });

        $this->app->singleton('ParametrosConfiguracion', function ($app) {
            return new ServiceParameterConfiguration();
        });
    }

    public function boot()
    {
        //
    }
}

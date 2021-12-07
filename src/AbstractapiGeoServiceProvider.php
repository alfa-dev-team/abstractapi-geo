<?php

namespace AlfaDevTeam\AbstractapiGeo;

use Illuminate\Support\ServiceProvider;

class AbstractapiGeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../configs/services.php', 'services'
        );
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}

<?php

namespace AlfaDevTeam\AbstractapiGeo;

use Illuminate\Support\ServiceProvider;

class AbstractapiGeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/services.php', 'services'
        );
    }

    public function boot()
    {
        //
    }
}

<?php

namespace AlfaDevTeam\AbstractapiGeo\Tests;

use Illuminate\Support\ServiceProvider;

class AbstractapiGeoTestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
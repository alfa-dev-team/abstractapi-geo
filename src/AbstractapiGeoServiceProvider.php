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
        $this->publishes([
            __DIR__ . '/../database/migrations/create_location_logs_table.php.stub' =>
                database_path('migrations/' .
                    date('Y_m_d_His', time()) . '_create_location_logs_table.php'),
        ], 'migrations');
    }
}

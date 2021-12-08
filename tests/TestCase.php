<?php

namespace AlfaDevTeam\AbstractapiGeo\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;

    protected function getPackageProviders($app)
    {
        return [
            AbstractapiGeoTestServiceProvider::class,
            \AlfaDevTeam\AbstractapiGeo\AbstractapiGeoServiceProvider::class,
        ];
    }
}

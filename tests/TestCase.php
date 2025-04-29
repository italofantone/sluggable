<?php

namespace Italofantone\Sluggable\Tests;

use Italofantone\Sluggable\SluggableServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->app->register(SluggableServiceProvider::class);        
    }

    // ...
}
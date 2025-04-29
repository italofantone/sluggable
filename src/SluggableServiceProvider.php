<?php

namespace Italofantone\Sluggable;

use Illuminate\Support\ServiceProvider;

class SluggableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/sluggable.php', 'sluggable'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/sluggable.php' => config_path('sluggable.php'),
        ], 'sluggable-config');
    }
}

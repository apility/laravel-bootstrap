<?php

namespace Bootstrap\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views/components', 'bootstrap');

        $this->publishes([
            __DIR__ . '/../../config/bootstrap.php' => base_path('config/bootstrap.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../../resources/views/components' => base_path('resources/views/vendor/bootstrap'),
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $prefix = config('bootstrap.prefix', 'bs');

        $this->loadViewComponentsAs($prefix, array_values(array_map(
            fn ($file) => 'Bootstrap\\View\\Components\\' . basename($file, '.php'),
            array_filter(glob(__DIR__ . '/../View/Components/*.php'), fn ($file) => $file !== 'Component.php')
        )));
    }
}

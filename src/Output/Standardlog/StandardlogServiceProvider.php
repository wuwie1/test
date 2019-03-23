<?php

namespace Output\Standardlog;

use Illuminate\Support\ServiceProvider;

class StandardlogServiceProvider extends ServiceProvider
{
    /**
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('standardlog', function () {
            return new Standardlog();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['standardlog'];
    }
}

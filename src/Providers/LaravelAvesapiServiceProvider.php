<?php

namespace WDevs\LaravelAvesapi\Providers;

use Illuminate\Support\ServiceProvider;
use WDevs\LaravelAvesapi\LaravelAvesapi;

class LaravelAvesapiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-avesapi');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-avesapi');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/avesapi.php' => config_path('avesapi.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-avesapi'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-avesapi'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-avesapi'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/avesapi.php', 'laravel-avesapi');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-avesapi', function () {
            return new LaravelAvesapi;
        });
    }
}

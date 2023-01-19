<?php

namespace Meteor\Country;

use Illuminate\Support\ServiceProvider;

class NegaraServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/country.php', 'meteor.country');

        $this->app->singleton('negara', function () {
            return new Negara();
        });
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMigrations();
        $this->registerPublishing();
        $this->registerCommands();
    }

    /**
     * Register the Passport migration files.
     *
     * @return void
     */
    protected function registerMigrations()
    {
        if ($this->app->runningInConsole() && Negara::$runsMigrations) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        }
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'meteor.country.migrations');

            $this->publishes([
                __DIR__.'/../config/country.php' => config_path('meteor/country.php'),
            ], 'meteor.country.config');
        }
    }

    /**
     * Register the Shipper Artisan commands.
     *
     * @return void
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\ImportCommand::class,
            ]);
        }
    }
}

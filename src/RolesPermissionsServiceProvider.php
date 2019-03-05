<?php

namespace Cheran\RolesPermissions;

use Illuminate\Support\ServiceProvider;
use Artisan;
class RolesPermissionsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','rolespermissions');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->publishes([
            __DIR__ . '/database/seeds' => $this->app->databasePath() . '/seeds'
        ], 'seeds');
        $this->publishes([
            __DIR__ . '/public' => public_path('/rolespermissions')
        ], 'assets');
    }
}

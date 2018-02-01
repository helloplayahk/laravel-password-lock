<?php

namespace Playa\PasswordLock;

use Illuminate\Support\ServiceProvider;

class PasswordLockServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['router']->aliasMiddleware('playa_password_lock', PasswordLockMiddleware::class);
        $this->loadViewsFrom(__DIR__ . '/views', 'playa-password-lock');

        $this->mergeConfigFrom(
            __DIR__ . '/config/playa-password-lock.php', 'playa-password-lock'
        );
        $this->publishes([
            __DIR__ . '/config/playa-password-lock.php' => config_path('playa-password-lock.php'),
        ]);

        require __DIR__ . '/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Playa\PasswordLock\PasswordLockController');
    }
}

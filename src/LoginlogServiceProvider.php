<?php namespace Thekavish\Loginlogger;

use Illuminate\Support\ServiceProvider;
use Thekavish\LoginLogger\Listeners\LoginEventSubscriber;

class LoginlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        \Event::subscribe(LoginEventSubscriber::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind('Thekavish\Loginlogger\Listeners\LoginEventSubscriber');
    }
}

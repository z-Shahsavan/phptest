<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Fly', 'MallardDuck');
        $this->app->bind('CommonBehavior', 'MallardDuck');
        $this->app->bind('Fly', 'RedHeadDuck');
        $this->app->bind('CommonBehavior', 'RedHeadDuck');
        $this->app->bind('CommonBehavior', 'DecoyDuck');
        $this->app->bind('CommonBehavior', 'RubberDock');
    }
}

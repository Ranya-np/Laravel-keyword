<?php

namespace lilac\keywords;

use Illuminate\Support\ServiceProvider;

class keywordsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->make('lilac\keywords\KeywordsController');
        $this->loadViewsFrom(__DIR__.'/views', 'keywords');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       include __DIR__.'/routes.php';
    }
}

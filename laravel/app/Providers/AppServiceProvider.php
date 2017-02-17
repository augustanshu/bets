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
        $this->app->bind('App\Repositories\CrawlerRepositoryInterface','App\Repositories\CrawlerRepository');
		 $this->app->bind('App\Repositories\MatchRepositoryInterface','App\Repositories\MatchRepository');
    }
}

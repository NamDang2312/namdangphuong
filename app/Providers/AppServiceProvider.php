<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(evn('REDIRECT_HTTPS')){
            $this -> app['request'] ->server->set('HTTPS',true);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (evn('REDIRECT_HTTPS')) {
            URL::formatScheme('https');
           
        }
        Paginator::useBootstrap();
    }
}

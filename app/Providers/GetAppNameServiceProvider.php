<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Setting;

class GetAppNameServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('APP_NAME', function(){
            return Setting::first()->name ?? config('name');
        });
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

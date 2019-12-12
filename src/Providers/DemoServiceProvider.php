<?php

namespace Joyride\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        info("Provider Packages");
    }
}

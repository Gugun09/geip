<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class Gugun09HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path(). '/Helpers/Gugun09Helper.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\GeneralSettings;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
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
        //
        Paginator::useBootstrap();
            // $settings = GeneralSettings::first();
           $settings = [];

        ini_set('max_input_vars', '1000000');
        ini_set('max_execution_time', 59918000);
        ini_set('memory_limit', '-1');

        view()->share(compact('settings'));

       
    }
}

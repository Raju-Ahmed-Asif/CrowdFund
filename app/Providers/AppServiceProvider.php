<?php

namespace App\Providers;

use App\Models\Crisis;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {



        Paginator::useBootstrap();
        
        $crisis=Crisis::all();
        View::share('cris',$crisis);
        

    }
}
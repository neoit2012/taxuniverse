<?php

namespace App\Providers;

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
        // Share menu data with the navigation view
        \Illuminate\Support\Facades\View::composer('layouts.navigation', \App\View\Composers\NavigationComposer::class);
    }
}

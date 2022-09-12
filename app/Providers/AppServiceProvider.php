<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Paginator::useBootstrap();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                'Pages',
                'Blog',
                'Sections',
                'Appliance',
                'Products',
                'Settings'
            ]);
        });
    }
}

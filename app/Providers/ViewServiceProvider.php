<?php

namespace App\Providers;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partials.menu', function ($view) {
            $view->with('productsCategories', ProductCategory::with('childrenCategory')->where('parent',0)->get());
        });
    }
}

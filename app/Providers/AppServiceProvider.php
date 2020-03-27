<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Backend\Model\Menu;



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

        view()->composer('Frontend.layouts.app', function($view) {
            $view->with('menus', Menu::menus('site'));
        });


        view()->composer('Backend.layouts.app', function($view) {
            $view->with('menus', Menu::menus('admin'));
        });


    }
}

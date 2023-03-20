<?php

namespace App\Providers;

use App\Models\Admin\TopMenu;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $topMenus = TopMenu::where('status','enabled')->get();
        view()->share('topMenus',$topMenus);
    }
}

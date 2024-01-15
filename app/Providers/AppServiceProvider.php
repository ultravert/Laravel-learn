<?php

namespace App\Providers;

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
        //переменная $date теперь доступна везде
        View::share('date', date('Y'));

        //отображается только для user
        View::composer('user*', function ($view) {
            $view->with('balance', 1000000);
        });
    }
}

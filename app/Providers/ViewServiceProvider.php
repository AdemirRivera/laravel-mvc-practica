<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\CompanyComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('prueba', 'Esta es una variable compartida');
        // View::composer('posts.show', function ($view) {
        //     $view->with('test', 'variable compartida desde el composer');
        // });
        View::composer('posts.show', CompanyComposer::class);
    }
}

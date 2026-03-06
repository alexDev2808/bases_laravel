<?php

namespace App\Providers;

use App\View\Composers\CompanyComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('prueba', 'Hola desde AppServiceProvider, esta variable está disponible en todas las vistas');
        // Compartir datos con vistas específicas usando View::composer()
        View::composer(['welcome'], CompanyComposer::class);
    }
}

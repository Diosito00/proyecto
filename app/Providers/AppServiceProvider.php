<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; // <-- 1. AGREGAR ESTA LÍNEA AQUÍ ARRIBA

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
        // 2. AGREGAR ESTA LÍNEA PARA ARREGLAR LA PAGINACIÓN
        Paginator::useBootstrapFive(); 
    }
}
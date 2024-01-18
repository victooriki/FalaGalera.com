<?php

namespace App\Providers;

use App\Repositories\{ChamadosRepositoryInterface};
use App\Repositories\{ChamadosEloquentORM};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            ChamadosRepositoryInterface::class, 
            ChamadosEloquentORM::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

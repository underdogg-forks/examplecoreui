<?php

declare(strict_types=1);

namespace Modules\Calendar\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Modules\Calendar\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot(): void
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(): void
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes(): void
    {
        Route::group([
             'middleware' => 'web',
             'namespace'  => $this->namespace,
        ], function ($router): void {
            require __DIR__ . '/../../routes/web.php';
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes(): void
    {
        Route::group([
             'middleware' => 'api',
             'namespace'  => $this->namespace,
             'prefix'     => 'api',
         ], function ($router): void {
             require __DIR__ . '/../../routes/api.php';
         });
    }
}

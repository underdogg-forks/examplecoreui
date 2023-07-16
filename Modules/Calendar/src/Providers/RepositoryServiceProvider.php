<?php

declare(strict_types=1);

namespace Modules\Calendar\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $module = 'App\Module\Calendar';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
    }
}

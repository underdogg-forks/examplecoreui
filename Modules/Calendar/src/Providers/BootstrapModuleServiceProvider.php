<?php

declare(strict_types=1);

namespace Modules\Calendar\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapModuleServiceProvider extends ServiceProvider
{
    protected $module = 'Modules\Calendar';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        app()->booted(function (): void {
            $this->booted();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
    }

    private function booted(): void
    {
        /*
         * Register dynamic menu or what you want when
         * bootstrap your module
         */
    }
}

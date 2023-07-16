<?php

declare(strict_types=1);

namespace Modules\Calendar\Providers;

use Illuminate\Support\ServiceProvider;

class InstallModuleServiceProvider extends ServiceProvider
{
    protected $module = 'App\Module\Calendar';

    protected $moduleAlias = 'calendar';

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
        //Resolve your module dependency

        $this->createSchema();
    }

    private function createSchema(): void
    {
        \Artisan::call('module:migrate', ['alias' => $this->moduleAlias]);
    }
}

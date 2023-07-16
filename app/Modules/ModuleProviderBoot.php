<?php

declare(strict_types=1);

namespace App\Modules;

trait ModuleProviderBoot
{
    public function boot(): void
    {
        // Get module name from namespace
        $moduleName = explode('\\', self::class)[2];

        // Use __DIR__ and module name to generate the correct path
        $dir = __DIR__ . '/' . $moduleName;

        // Register our view files
        view()->addLocation($dir . '/Views');

        // Bring in the routes
        require $dir . '/routes.php';
    }
}

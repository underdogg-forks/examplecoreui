<?php

declare(strict_types=1);

namespace Modules\Modules\MyModules\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Traits\BootModule;

class ModuleProvider extends ServiceProvider
{
    use BootModule;

    public function register(): void
    {
    }
}

<?php

declare(strict_types=1);

web_route_group('MyModules', function (): void {
    Route::resource('my-modules', 'MyModulesController');
});

<?php

web_route_group('MyModules', function () {
    Route::resource('my-modules', 'MyModulesController');
});
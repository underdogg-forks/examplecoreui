<?php

declare(strict_types=1);

Route::group(['middleware' => 'web', 'prefix' => 'core', 'namespace' => 'Modules\Core\Http\Controllers'], function (): void {
    Route::get('/', 'CoreController@index');
});

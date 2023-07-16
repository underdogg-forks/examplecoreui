<?php

declare(strict_types=1);

namespace Modules\Modules\MyModules;

use Modules\ModelBase;

class MyModule extends ModelBase
{
    protected $table = 'my_modules';

    protected $guarded = [];
}

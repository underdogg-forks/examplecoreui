<?php

namespace Modules\Modules\MyModules\Repositories;

use Modules\Modules\MyModules\MyModule;
use Modules\Modules\MyModules\Validators\MyModuleValidator;
use Modules\Repositories\EloquentRepositoryAbstract;

class MyModuleRepository extends EloquentRepositoryAbstract
{
    /**
     * @param MyModule $model
     * @param MyModuleValidator $validator
     */
    public function __construct(MyModule $model, MyModuleValidator $validator)
    {
        $this->model = $model;
        $this->validator = $validator;
    }
}


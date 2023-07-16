<?php

declare(strict_types=1);

namespace Modules\Modules\MyModules\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Modules\MyModules\Repositories\MyModuleRepository;

class MyModulesController extends Controller
{
    /**
     * @var MyModuleRepository
     */
    private $myModuleRepository;

    /**
     * MyModulesController constructor.
     *
     * @param MyModuleRepository $myModuleRepository
     */
    public function __construct(MyModuleRepository $myModuleRepository)
    {
        $this->myModuleRepository = $myModuleRepository;
    }

    /**
     * GET /my-modules.
     */
    public function index(): void
    {
        // TODO: Implement
    }

    /**
     * GET /my-modules/create.
     */
    public function create(): void
    {
        // TODO: Implement
    }

    /**
     * POST /my-modules.
     *
     * @param Request $request
     */
    public function store(Request $request): void
    {
        // TODO: Implement
    }

    /**
     * GET /my-modules/{id}.
     *
     * @param $id
     */
    public function show($id): void
    {
        // TODO: Implement
    }

    /**
     * GET /my-modules/{id}/edit.
     *
     * @param $id
     */
    public function edit($id): void
    {
        // TODO: Implement
    }

    /**
     * PUT/PATCH /my-modules/{id}.
     *
     * @param         $id
     * @param Request $request
     */
    public function update($id, Request $request): void
    {
        // TODO: Implement
    }

    /**
     * DELETE /my-modules/{id}.
     *
     * @param $id
     */
    public function destroy($id): void
    {
        // TODO: Implement
    }
}

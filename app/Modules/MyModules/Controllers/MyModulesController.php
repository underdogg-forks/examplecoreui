<?php

namespace Modules\Modules\MyModules\Controllers;

use App\Http\Controllers\Controller;
use Modules\Modules\MyModules\Repositories\MyModuleRepository;
use Illuminate\Http\Request;
use Input;
use View;
use Response;
use Redirect;

class MyModulesController extends Controller
{
    /**
     * @var MyModuleRepository
     */
    private $myModuleRepository;

    /**
     * MyModulesController constructor.
     * @param MyModuleRepository $myModuleRepository
     */
    public function __construct(MyModuleRepository $myModuleRepository)
    {
        $this->myModuleRepository = $myModuleRepository;
    }

    /**
     * GET /my-modules
     */
    public function index()
    {
        // TODO: Implement
    }

    /**
     * GET /my-modules/create
     */
    public function create()
    {
        // TODO: Implement
    }

    /**
     * POST /my-modules
     * @param Request $request
     */
    public function store(Request $request)
    {
        // TODO: Implement
    }

    /**
     * GET /my-modules/{id}
     * @param $id
     */
    public function show($id)
    {
        // TODO: Implement
    }

    /**
     * GET /my-modules/{id}/edit
     * @param $id
     */
    public function edit($id)
    {
        // TODO: Implement
    }

    /**
     * PUT/PATCH /my-modules/{id}
     * @param $id
     * @param Request $request
     */
    public function update($id, Request $request)
    {
        // TODO: Implement
    }

    /**
     * DELETE /my-modules/{id}
     * @param $id
     */
    public function destroy($id)
    {
        // TODO: Implement
    }

}


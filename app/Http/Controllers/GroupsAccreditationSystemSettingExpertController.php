<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccreditationExpert;
use App\Services\UpdatedRoleGroupCollectionService;

class GroupsAccreditationSystemSettingExpertController extends Controller
{
    private $updatedRoleGroupCollectionService;

    public function __construct(UpdatedRoleGroupCollectionService $updatedRoleGroupCollectionService)
    {
        $this->updatedRoleGroupCollectionService = $updatedRoleGroupCollectionService;
    }
    public function index()
    {
        $action = 'show';
        $groupUrl = strval(session('groupUrl'));
        $roleGroupCollection = $this->updatedRoleGroupCollectionService->getUpdatedRoleGroupCollection($action);
        $updatedRoleGroupCollection = $roleGroupCollection['updatedRoleGroupCollection'];
        $permission = $roleGroupCollection['permission'];
        $viewName = $roleGroupCollection['viewName'];
        $accreditationExperts = AccreditationExpert::all();
        return view($viewName, [
            'groupUrl' => $groupUrl,
            'modules' => $updatedRoleGroupCollection,
            'permission' => $permission,
            'accreditationExperts' => $accreditationExperts
       ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AccreditationType;
use App\Models\UnitTest;
use App\Services\UpdatedRoleGroupCollectionService;

class GroupsAccreditationSystemAccreditationListController extends Controller
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
        $unitTests = UnitTest::all();
        return view($viewName, [
            'groupUrl' => $groupUrl,
            'modules' => $updatedRoleGroupCollection,
            'permission' => $permission,
            'unitTests' => $unitTests
       ]);
    }

    public function create()
    {
        $action = 'create';
        $groupUrl = strval(session('groupUrl'));
        $roleGroupCollection = $this->updatedRoleGroupCollectionService->getUpdatedRoleGroupCollection($action);
        $updatedRoleGroupCollection = $roleGroupCollection['updatedRoleGroupCollection'];
        $permission = $roleGroupCollection['permission'];
        $viewName = $roleGroupCollection['viewName'];
        $createView = str_replace('.index', '.create', $viewName);
        $accreditationTypes = AccreditationType::all();
        $users = User::where('is_admin','1')->get();
        return view($createView, [
            'groupUrl' => $groupUrl,
            'modules' => $updatedRoleGroupCollection,
            'permission' => $permission,
            'users' => $users,
            'accreditationTypes' => $accreditationTypes
       ]); 
    }

    public function store(Request $request)
    {
        UnitTest::create([
            'name' => $request->name,
            'description' => $request->description,
            'accreditation_type_id' => $request->accreditation_type,
            'user_id' => $request->user
        ]);

        return redirect()->route('groups.accreditation-system.accreditation.list');
    }
}



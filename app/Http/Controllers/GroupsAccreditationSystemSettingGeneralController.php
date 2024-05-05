<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\UpdatedRoleGroupCollectionService;

class GroupsAccreditationSystemSettingGeneralController extends Controller
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
        return view($viewName, [
            'groupUrl' => $groupUrl,
            'modules' => $updatedRoleGroupCollection,
            'permission' => $permission,
       ]);
    }

    public function externalApi(Request $request)
    {
        if ($request->has('submit1')) {
            $response = Http::get('https://www.dss.go.th/info/api/dropdown/products?lang=th', [
                'productCatID' => '5',
            ]);
        } elseif ($request->has('submit2')) {
            $response = Http::get('https://www.dss.go.th/info/api/dropdown/products?lang=th', [
                'productCatID' => '1,5',
            ]);
        }elseif ($request->has('submit3')) {
            $response = Http::get('https://www.dss.go.th/info/product-standard/228'); 
        }elseif ($request->has('submit4')) {
            $response = Http::get('https://www.dss.go.th/info/document-list', [ 
                'search' => '', 
                'publisher' => 'AACC', 
                'docCatID' => '', 
                'year' => '', 
                'segments' => '', 
                'volumes' => '', 
                'page' => 1 
            ]); 
        }elseif ($request->has('submit5')) {
            $response = Http::get('https://www.dss.go.th/info/document-list', [ 
                'search' => '', 
                'publisher' => 'AACC', 
                'docCatID' => 1, 
                'year' => 2001, 
                'segments' => '', 
                'volumes' => '', 
                'page' => 1 
            ]); 
        }
        $data = $response->json();
        dd($data);
    }
}

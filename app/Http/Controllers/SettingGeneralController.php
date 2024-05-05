<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingGeneralController extends Controller
{
    public function searchFilter()
    {
        return view('setting.general.search-filter');
    }

    public function industryResource()
    {
        return view('setting.general.industry-resource');
    }

    public function qualityResource()
    {
        return view('setting.general.quality-resource');
    }
}

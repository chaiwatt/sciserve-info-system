<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class SettingAccessRoleController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลรายการบทบาททั้งหมด
        $roles = Role::all();

        // ส่งข้อมูลรายการบทบาทไปยังหน้าวิวเพื่อแสดงผล
        return view('setting.access.role.index', [
            'roles' => $roles
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class SettingAccessAssignmentRoleController extends Controller
{
    public function store(Request $request)
    {
        // รับข้อมูลรหัสผู้ใช้งานและรหัสบทบาทจากคำขอ
        $userIds = $request->data['selectedUserIds'];
        $roleId = $request->data['roleId'];
        $role = Role::find($roleId);

        // วนลูปเพื่อมอบหมายบทบาทให้กับผู้ใช้งานที่ระบุ
        foreach ($userIds as $userId) {
            $currentUser = User::find($userId);
            $currentUser->roles()->detach($role);
            $user = User::find($userId);
            $user->roles()->attach($role);
        }

        // ส่งคำตอบกลับในรูปแบบ JSON พร้อมกับข้อความแจ้งว่ามอบหมายบทบาทสำเร็จ
        return response()->json(['message' => 'มอบหมายบทบาทสำเร็จ']);
    }

    /**
     * ลบการมอบหมายบทบาทที่กำหนดให้กับผู้ใช้งาน
     *
     * @param int $roleId
     * @param int $userId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($roleId, $userId)
    {
        $user = User::find($userId);
        $role = Role::find($roleId);


        $user->roles()->detach($role);

        // ส่งกลับไปยังหน้าก่อนหน้านี้
        return redirect()->back();
    }
}

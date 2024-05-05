<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MainRole;
use Illuminate\Http\Request;

class SettingUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('setting.user.index',[
            'users' => $users
        ]);
    }

    public function create()
    {
        $mainRoles = MainRole::all();
        return view('setting.user.create',[
            'mainRoles' => $mainRoles
        ]);
    }

    public function import()
    {
        return view('setting.user.import');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $lastname = $request->lastname;
        $email = $request->email;
        $mainRole = $request->main_role;

        $user = User::create([
                'is_admin' => $mainRole,
                'name' => $name,
                'lastname' => $lastname,
                'email' => $email,
                'password' => bcrypt('11111111'),
            ]);
        return redirect()->route('setting.user');
    }

    public function view($id)
    {
        $mainRoles = MainRole::all();
        $user = User::find($id);
        return view('setting.user.view',[
            'mainRoles' => $mainRoles,
            'user' => $user
        ]);
    }

    public function update(Request $request,$id)
    {
        $name = $request->name;
        $lastname = $request->lastname;
        $email = $request->email;
        $mainRole = $request->main_role;

        $user = User::find($id)->update([
                'is_admin' => $mainRole,
                'name' => $name,
                'lastname' => $lastname,
                'email' => $email
            ]);
        return redirect()->route('setting.user');
    }
}

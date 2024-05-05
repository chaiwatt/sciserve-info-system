<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteLoginController extends Controller
{
    public function login()
    {
        return Socialite::driver('keycloak')
        ->redirect();     
    }

    public function callback()
    {
        $user = Socialite::driver('keycloak')->user();  
        $check = User::where('email', $user->email)->first();
        if($check == null)
        {
            $user = User::create([
                'is_admin' => 4,
                'name' => $user->nickname,
                'email' => $user->email,
                'password' => bcrypt(11111111),
            ]);
            auth()->login($user);
        }else{
            auth()->login($check); 
        }
        return redirect()->route('home');
    }

}

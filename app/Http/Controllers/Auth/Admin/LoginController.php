<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $findUser = User::where('usr_user_name',$request->username)->first();
        if($findUser->usr_is_active == 1){
            $credentials = [
                'usr_user_name'	=> $request->username,
                'password' => $request->password,
                'usr_is_admin' => 1
            ];

            if (Auth::attempt($credentials)) {
                $this->setLastLogin();
                return redirect()->route('admin.main.dashboard');
            }else{
                return redirect()->back()->withErrors(['error'=>'Wrong username or password']);
            }
        }else{
            return redirect()->back()->withErrors(['error'=>'Account is deactive']);
        }
    }

    public function logOut()
    {
        Auth::logout();

        return redirect('/');
    }

    public function setLastLogin()
    {
        $user = User::find(auth()->user()->id);
        $user->usr_last_login = Carbon::now();
        $user->save();
    }
}

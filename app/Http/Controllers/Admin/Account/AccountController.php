<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function returnInfo()
    {
        $user = User::where('id',auth()->user()->id)->first();
        return view('admin.accounts.index',compact('user'));
    }

    public function updateInfo(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'nullable',
            'mobile' => 'nullable',
        ]);

        $user = User::find(auth()->user()->id);
        $user->usr_user_name = $request->username;
        $user->usr_email_address = $request->email;
        $user->usr_mobile_phone = $request->mobile;
        $user->save();

        return redirect()->back()->withSuccess('Your account info updated successfully');
    }

    public function changePass(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|same:confirm_new_password',
            'confirm_new_password' => 'required',
        ]);

        if (Hash::check($request->password, auth()->user()->usr_password_hash)) {
            auth()->user()->update([
                'usr_password_hash' => Hash::make($request->password)
            ]);

            return redirect()->back()->withSuccess('Account password updated successfully');
        }else{
            return redirect()->back()->withErrors(['errors'=>'Wrong current password']);
        }
    }
}

<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\UserAdminRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('usr_is_hidden',0)->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAdminRequest $request)
    {
        User::create([
            'usr_user_name' => $request->username,
            'usr_mobile_phone' => $request->mobile,
            'usr_password_hash' => Hash::make($request->password),
            'usr_email_address' => $request->email,
            'usr_is_active' => $request->status,
        ]);

        return redirect()->back()->withSuccess('New user added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserAdminRequest $request, User $user)
    {
        if(!empty($request->password)){
            $password = Hash::make($request->password);
        }else{
            $password = $user->usr_password_hash;
        }

        $user->usr_user_name = $request->username;
        $user->usr_mobile_phone = $request->mobile;
        $user->usr_email_address = $request->email;
        $user->usr_is_active = $request->status;
        $user->usr_password_hash = $password;
        $user->save();

        return redirect()->back()->withSuccess('Admin info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->withSuccess('Admin deleted successfully');
    }
}

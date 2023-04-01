<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function returnInfo()
    {
        return view('admin.profile.index');
    }

    public function updateInfo(Request $request)
    {
        dd(2);
    }
}

<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function returnInfo()
    {
        $setting = Setting::find(1);
        return view('admin.settings.info',compact('setting'));
    }

    public function updateInfo(Request $request)
    {
        $setting = Setting::find(1);
        $setting->set_header_contact_info = $request->connection;
        $setting->set_news_letter_subscription = $request->subscription;
        $setting->set_credits_footer_info = $request->credentials;
        $setting->save();

        return redirect()->back()->withSuccess('Setting info updated successfully');
    }
}

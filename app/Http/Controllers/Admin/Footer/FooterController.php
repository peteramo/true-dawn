<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function returnInfo()
    {
        $footer = Footer::find(1);
        return view('admin.footer.index', compact('footer'));
    }

    public function updateInfo(Request $request)
    {
        $footer = Footer::find(1);
        $footer->foo_name_1 = $request->name1;
        $footer->foo_link_1 = $request->link1;
        $footer->foo_name_2 = $request->name2;
        $footer->foo_link_2 = $request->link2;
        $footer->foo_name_3 = $request->name3;
        $footer->foo_link_3 = $request->link3;
        $footer->foo_name_4 = $request->name4;
        $footer->foo_link_4 = $request->link4;
        $footer->foo_name_5 = $request->name5;
        $footer->foo_link_5 = $request->link5;
        $footer->save();

        return redirect()->back()->withSucess('Footer links updated successfully');
    }
}

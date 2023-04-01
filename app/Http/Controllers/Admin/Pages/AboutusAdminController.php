<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\StaticPages;
use Illuminate\Http\Request;

class AboutusAdminController extends Controller
{
    public function viewAbout()
    {
        $static = StaticPages::where('sta_page_id',4)->first();

        return view('admin.pages.aboutus',compact('static'));
    }

    public function updateAbout(Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);

        StaticPages::where('sta_page_id',4)->update([
            'sta_body' => $request->body
        ]);

        return redirect()->back()->withSuccess('Body of aboutus page updated successfully');
    }
}

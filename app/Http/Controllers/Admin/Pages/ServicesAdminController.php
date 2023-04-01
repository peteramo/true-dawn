<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\StaticPages;
use Illuminate\Http\Request;

class ServicesAdminController extends Controller
{
    public function viewService()
    {
        $static = StaticPages::where('sta_page_id',2)->first();

        return view('admin.pages.services',compact('static'));
    }

    public function updateService(Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);

        StaticPages::where('sta_page_id',2)->update([
            'sta_body' => $request->body
        ]);

        return redirect()->back()->withSuccess('Body of services page updated successfully');
    }
}

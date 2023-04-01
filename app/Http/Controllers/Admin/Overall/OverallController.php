<?php

namespace App\Http\Controllers\Admin\Overall;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use App\Models\Overall;
use Illuminate\Http\Request;

class OverallController extends AdminController
{
    public function returnInfo()
    {
        $overall = Overall::find(1);
        return view('admin.overall.info', compact('overall'));
    }

    public function updateInfo(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'brand' => 'required',
            'image' => 'nullable',
        ]);

        $overall = Overall::find(1);

        if($request->has('image')){
            $path = $this->uploadFile($request->file('image'),'overall');
        }else{
            $path = $overall->ove_logo_path;
        }

        $overall->ove_company_name = $request->name;
        $overall->ove_site_url = $request->url;
        $overall->ove_brand_name = $request->brand;
        $overall->ove_logo_path = $path;
        $overall->save();

        return redirect()->back()->withSuccess('Overall info updated successfully');
    }
}

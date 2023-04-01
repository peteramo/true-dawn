<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use App\Models\Meta;
use App\Models\Pages\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomepageAdminController extends AdminController
{
    public function updateHero(Request $request, $id)
    {
        $request->validate([
            'background' => 'nullable',
            'change-background' => 'nullable',
            'title' => 'nullable',
            'description' => 'nullable',
            'button_name' => 'nullable',
            'button_uri' => 'nullable',
        ]);

        $home = Homepage::find($id);

        $path = NULL;
        if($request->change_background == "on"){
            if($request->has('background')){
                $path = $this->uploadFile($request->file('background'),"home");
            }else{
                return redirect()->back()->withErrors(['errors'=>'You chose to change the background but did not specify the file']);
            }
        }else{
            $path = $home->hom_hero_background_uri;
        }

        $home->hom_hero_header = $request->title;
        $home->hom_hero_background_uri = $path;
        $home->hom_hero_paragraph = $request->description;
        $home->hom_hero_button_name = $request->button_name;
        $home->hom_hero_button_action_uri = $request->button_uri;
        $home->save();

        alert('Updated','Hero info updated successfully', 'success');

        return redirect()->back()->withSuccess('Hero info updated successfully');
    }
}

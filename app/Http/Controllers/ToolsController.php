<?php

namespace App\Http\Controllers;

use App\Models\Overall;
use App\Models\Pages\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ToolsController extends Controller
{
    public function seeCustomPicture()
    {
        $headers = ['content-type' => 'image/jpeg'];
        $overall = Overall::find(1);
        $logo = Storage::get("public/".$overall->ove_logo_path);
        return response($logo, 200, $headers);
    }

    public function seeHeroBackground()
    {
        $headers = ['content-type' => 'video/mp4'];
        $home = Homepage::find(1);
        $bg = Storage::get("public/".$home->hom_hero_background_uri);
        return response($bg, 200, $headers);
    }
}

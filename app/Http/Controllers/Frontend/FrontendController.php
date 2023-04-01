<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Pages\Homepage;

class FrontendController extends Controller
{
    public function index()
    {
        $page = Pages::findOrFail(1);
        return view('frontend.index', compact('page'));
    }

    public function projects()
    {
        $page = Pages::findOrFail(3);
        //dd($page->project[0]->pro_name);
        return view('frontend.projects', compact('page'));
    }

    public function contactus()
    {
        $page = Pages::findOrFail(5);
        return view('frontend.static', compact('page'));
    }

    // Static pages

    public function staticPages()
    {
        $segment = request()->segment(count(request()->segments()));
        $page = Pages::where('pag_uri',$segment)->first();
        return view('frontend.static', compact('page'));
    }
}

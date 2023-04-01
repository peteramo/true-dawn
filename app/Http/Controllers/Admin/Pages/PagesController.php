<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Meta;
use App\Models\Pages;
use App\Models\StaticPages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Pages::paginate(5);

        return view('admin.pages.index', compact('pages'));
    }

    public function view(Pages $page)
    {
        return view('admin.pages.view', compact('page'));
    }

    public function updateMetaData(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'keywords' => 'nullable',
        ]);

        Meta::where('met_page_id',$id)->update([
            'met_title' => $request->title,
            'met_description' => $request->description,
            'met_keywords' => $request->keywords,
        ]);

        return redirect()->back()->withSuccess('Meta data info updated successfully');
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'uri' => 'required',
            'body' => 'nullable'
        ]);

        $new_page = Pages::create([
            'pag_name' => $request->name,
            'pag_uri' => $request->uri,
        ]);

        StaticPages::create([
            'sta_page_id' => $new_page->id,
            'sta_body' => $request->body
        ]);

        return redirect()->back()->withSuccess('New page created successfully');
    }

    public function edit(Pages $page)
    {
        return view('admin.pages.edit',compact('page'));
    }

    public function update(Request $request, Pages $page)
    {
        $request->validate([
            'name' => 'required',
            'uri' => 'required'
        ]);

        $page->pag_uri = $request->uri;
        $page->pag_name = $request->name;
        $page->save();

        return redirect()->back()->withSuccess('Page info updated successfully');
    }

    public function destroy(Pages $page)
    {
        $page->delete();

        return redirect()->back()->withSuccess('Page deleted successfully');
    }
}

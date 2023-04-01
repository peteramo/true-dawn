<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function viewMenus()
    {
        $items = Menu::paginate(10);
        return view('admin.menu.index', compact('items'));
    }

    public function createMenu(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'nullable',
            'status' => 'required'
        ]);

        Menu::create([
            'men_name' => $request->name,
            'men_link' => $request->link,
            'men_active' => $request->status,
        ]);

        return redirect()->back()->withSuccess('New item added successfully');
    }

    public function editMenuItem($id)
    {
        $item = Menu::find($id);
        return view('admin.menu.edit', compact('item'));
    }

    public function updateMenuItem(Request $request,$id)
    {
        $item = Menu::find($id);
        $item->men_name = $request->name;
        $item->men_link = $request->link;
        $item->men_active = $request->status;
        $item->save();

        return redirect()->back()->withSuccess('Menu item edited successfully');
    }

    public function deleteMenuItem(Request $request, $id)
    {
        $item = Menu::find($id);
        $item->delete();

        return redirect()->route('admin.menus.index')->withSuccess('Menu item deleted successfully');
    }
}

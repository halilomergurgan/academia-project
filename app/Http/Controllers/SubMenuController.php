<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    public function index()
    {
        $subMenu = SubMenu::with('menu')->get();
        return view('admin.submenu.index', compact('subMenu'));
    }
    public function create()
    {
        try {
            $menus = Menu::all();
            return view('admin.submenu.create',compact('menus'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('SubMenuController@index');
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_tr' => 'required',
            'name_eng' => 'required'
        ]);

        $subMenu = new SubMenu();
        $subMenu->name_tr = request('name_tr');
        $subMenu->name_eng = request('name_eng');
        $subMenu->menu_id = request('menu_id');

        $subMenu->save();

        if ($subMenu) {
            return redirect()->route('submenu.index');
        } else {
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        try {
            $menus = Menu::all();
            $subMenu = SubMenu::findOrFail($id);
            return view('admin.submenu.edit', compact('subMenu','menus'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('SubMenuController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $subMenu = SubMenu::find($id);

        $subMenu->name_tr = $request->input('name_tr');
        $subMenu->name_eng = request('name_eng');
        $subMenu->menu_id = request('menu_id');

        $subMenu->save();

        if ($subMenu) {
            return redirect()->route('submenu.index');
        } else {
            return redirect()->back();
        }
    }
    public function destroy($id)
    {
        SubMenu::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('submenu.index');
    }
}

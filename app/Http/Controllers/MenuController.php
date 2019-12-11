<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_tr' => 'required',
            'name_eng' => 'nullable'
        ]);

        $menu = new Menu();
        $menu->name_tr = request('name_tr');
        $menu->name_eng = request('name_eng');

        $menu->save();

        if ($menu) {
            return redirect()->route('menu.index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        try {
            $menu = Menu::findOrFail($id);
            return view('admin.menu.edit', compact('menu'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('MenuController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);

        $menu->name_tr = $request->input('name_tr');
        $menu->name_eng = request('name_eng');

        $menu->save();

        if ($menu) {
            return redirect()->route('menu.index');
        } else {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        Menu::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('menu.index');
    }
}

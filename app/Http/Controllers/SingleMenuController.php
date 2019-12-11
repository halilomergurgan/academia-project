<?php

namespace App\Http\Controllers;

use App\Models\SingleMenu;
use Illuminate\Http\Request;

class SingleMenuController extends Controller
{
    public function index()
    {
        $singles = SingleMenu::all();
        return view('admin.single.index', compact('singles'));
    }

    public function create()
    {
        return view('admin.single.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_tr' => 'required',
            'name_eng' => 'nullable'
        ]);

        $single = new SingleMenu();
        $single->name_tr = request('name_tr');
        $single->name_eng = request('name_eng');

        $single->save();

        if ($single) {
            return redirect()->route('single.index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        try {
            $single = SingleMenu::findOrFail($id);
            return view('admin.single.edit', compact('single'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('SingleMenuController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $single = SingleMenu::find($id);

        $single->name_tr = $request->input('name_tr');
        $single->name_eng = request('name_eng');

        $single->save();

        if ($single) {
            return redirect()->route('single.index');
        } else {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        SingleMenu::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('single.index');
    }
}

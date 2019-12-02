<?php

namespace App\Http\Controllers;

use App\Models\Magazine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazines = Magazine::all();
        return view('admin.magazines.index', compact('magazines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.magazines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_tr' => 'required',
            'title_eng' => 'required',
            'description_tr' => 'required',
            'description_eng' => 'required',
            'photo_path' => 'nullable',
            'file' => 'nullable'
        ]);

        $magazine = new Magazine();
        $magazine->title_tr = request('title_tr');
        $magazine->title_eng = request('title_eng');
        $magazine->description_tr = request('description_tr');
        $magazine->description_eng = request('description_eng');

        $path = Storage::disk('local')->putFileAs('/public/magazines', $request->file('file'));
        dd($path);
        // $magazine->photo_path = $path;
        $magazine->file = $path;
        if ($request->hasFile('photo_path' || $request->hasFile('file'))) {

            //$this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            //$this->validate(request(), array('file' => 'required|max:10000|mimes:doc,docx'));
            //$path = Storage::disk('local')->put('/public/magazines', request()->file('file'));


            //$result = Storage::putFileAs($path, $file, $fileName);

        }
        $magazine->save();

        if ($magazine){
            return redirect()->route('magazines.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $magazines = Magazine::findOrFail($id);
            return view('admin.magazines.edit', compact('magazines'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('MagazineController@index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $magazines = Magazine::find($id);
        $magazines->title_tr = $request->input('title_tr');
        $magazines->title_eng = request('title_eng');
        $magazines->description_tr = request('description_tr');
        $magazines->description_eng = request('description_eng');
        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/magazines', request()->file('photo_path'));
            $magazines->photo_path = $path;
        }

        $magazines->save();

        if ($magazines){
            return redirect()->route('magazines.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Magazine::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('magazines.index');
    }
}

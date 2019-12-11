<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_tr' => 'required',
            'title_eng' => 'nullable',
            'description_tr' => 'required',
            'description_eng' => 'nullable',
            'photo_path' => 'required'
        ]);

        $news = new News();
        $news->title_tr = request('title_tr');
        $news->title_eng = request('title_eng');
        $news->description_tr = request('description_tr');
        $news->description_eng = request('description_eng');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/news', request()->file('photo_path'));
            $news->photo_path = $path;
        }
        $news->save();
        if ($news) {
            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(2000);
            return redirect()->route('news.index');

        } else {
            alert()
                ->error('Hata', ' Başarısız.')
                ->autoClose(2000);
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $news = News::findOrFail($id);
            return view('admin.news.edit', compact('news'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('NewsController@index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title_tr = $request->input('title_tr');
        $news->title_eng = request('title_eng');
        $news->description_tr = request('description_tr');
        $news->description_eng = request('description_eng');
        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/news', request()->file('photo_path'));
            $news->photo_path = $path;
        }

        $news->save();

        if ($news) {

            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(1000);
            return redirect()->route('news.index');

        } else {
            alert()
                ->error('Hata', ' Başarısız.')
                ->autoClose(2000);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('news.index');
    }
}

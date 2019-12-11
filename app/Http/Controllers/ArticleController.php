<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
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
            'title_tr' => 'required|string|min:2|unique:articles,title_tr',
            'title_eng' => 'nullable',
            'description_tr' => 'required',
            'description_eng' => 'nullable',
            'photo_path' => 'nullable',
            'embed_video_path' => 'nullable',
            'external_link' => 'nullable'
        ]);


        $article = new Article();
        $article->title_tr = request('title_tr');
        $article->title_eng = request('title_eng');
        $article->description_tr = request('description_tr');
        $article->description_eng = request('description_eng');
        $article->embed_video_path = request('embed_video_path');
        $article->external_link = request('external_link');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/articles', request()->file('photo_path'));
            $article->photo_path = $path;
        }
        $article->save();

        if ($article) {
            return redirect()->route('articles.index');
        } else {
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
            $articles = Article::findOrFail($id);
            return view('admin.articles.edit', compact('articles'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('ArticleController@index');
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
        $article = Article::find($id);
        $article->title_tr = $request->input('title_tr');
        $article->title_eng = request('title_eng');
        $article->description_tr = request('description_tr');
        $article->description_eng = request('description_eng');
        $article->embed_video_path = request('embed_video_path');
        $article->external_link = request('external_link');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/articles', request()->file('photo_path'));
            $article->photo_path = $path;
        }

        $article->save();
        if ($article) {
            return redirect()->route('articles.index');
        } else {
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
        Article::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('articles.index');
    }
}

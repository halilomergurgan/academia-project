<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\SingleMenu;
use App\Models\SinglePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SinglePostController extends Controller
{
    public function index()
    {
        $singlePost = SinglePost::with('menu')->get();

        return view('admin.single-posts.index', compact('singlePost'));
    }
    public function create()
    {
        try {
            $menus = SingleMenu::all();
            $articles = Article::all();
            return view('admin.single-posts.create', compact('menus','articles'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('SinglePostController@index');
        }
    }
    public function store(Request $request)
    {

        $request->validate([
            'title_tr' => 'required',
            'title_eng' => 'nullable',
            'description_tr' => 'nullable',
            'description_eng' => 'nullable',
            'single_menu_id' => 'nullable|exists:single_menus,id',
            'article_id' => 'nullable|exists:articles,id',
            'photo_path' => 'nullable',
            'embed_video_path' => 'nullable'
        ]);


        $singlePost = new SinglePost();
        $singlePost->title_tr = request('title_tr');
        $singlePost->title_eng = request('title_eng');
        $singlePost->description_tr = request('description_tr');
        $singlePost->description_eng = request('description_eng');
        $singlePost->embed_video_path = request('embed_video_path');
        $singlePost->single_menu_id = request('single_menu_id');
        $singlePost->article_id = request('article_id');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/single-posts', request()->file('photo_path'));
            $singlePost->photo_path = $path;
        }
        $singlePost->save();

        if ($singlePost) {
            return redirect()->action('SinglePostController@index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {

        try {
            $menus = SingleMenu::all();
            $articles = Article::all();

            $posts = SinglePost::findOrFail($id);
            return view('admin.single-posts.edit', compact('posts', 'articles', 'menus'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('SinglePostController@index');
        }
    }

    public function update(Request $request, $id)
    {

        $singlePost = SinglePost::find($id);
        $singlePost->title_tr = request('title_tr');
        $singlePost->title_eng = request('title_eng');
        $singlePost->description_tr = request('description_tr');
        $singlePost->description_eng = request('description_eng');
        $singlePost->embed_video_path = request('embed_video_path');
        $singlePost->single_menu_id = request('single_menu_id');
        $singlePost->article_id = request('article_id');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/single-posts', request()->file('photo_path'));
            $singlePost->photo_path = $path;
        }

        $singlePost->save();
        if ($singlePost) {
            return redirect()->action('SinglePostController@index');
        } else {
            return redirect()->back();
        }
    }
    public function destroy($id)
    {
        SinglePost::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->action('SinglePostController@index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Post;
use App\Models\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $menus = Menu::all();
            $subMenus = SubMenu::all();
            return view('admin.posts.create',compact('menus','subMenus'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('PostController@index');
        }
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
            'menu_id' => 'required|exists:menus',
            'submenu_id' => 'required|exists:sub_menus',
            'photo_path' => 'nullable',
            'embed_video_path' => 'nullable'
        ]);

        $post = new Post();
        $post->title_tr = request('title_tr');
        $post->title_eng = request('title_eng');
        $post->description_tr = request('description_tr');
        $post->description_eng = request('description_eng');
        $post->embed_video_path = request('embed_video_path');
        $post->menu_id = request('menu_id');
        $post->submenu_id = request('submenu_id');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/posts', request()->file('photo_path'));
            $post->photo_path = $path;
        }
        $post->save();

        if ($post) {
            return redirect()->route('posts.index');
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
            $menus = Menu::all();
            $subMenus = SubMenu::all();
            $posts = Post::findOrFail($id);
            return view('admin.posts.edit', compact('posts','subMenus','menus'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('SubMenuController@index');
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
        $post = Post::find($id);
        $post->title_tr = $request->input('title_tr');
        $post->title_eng = request('title_eng');
        $post->description_tr = request('description_tr');
        $post->description_eng = request('description_eng');
        $post->embed_video_path = request('embed_video_path');
        $post->menu_id = request('menu_id');
        $post->submenu_id = request('submenu_id');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/posts', request()->file('photo_path'));
            $post->photo_path = $path;
        }

        $post->save();
        if ($post){
            return redirect()->route('posts.index');
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
        Post::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('posts.index');
    }
}

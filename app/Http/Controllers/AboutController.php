<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::find(1);
        return view('admin.about.index', compact('about'));
    }

    public function edit($id)
    {
        try {
            $about = About::findOrFail($id);
            return view('admin.about.edit', compact('about'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('AboutController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->title_tr = $request->input('title_tr');
        $about->title_eng = request('title_eng');
        $about->description_tr = request('description_tr');
        $about->description_eng = request('description_eng');
        $about->embed_video_path = request('embed_video_path');

        $about->save();

        if ($about) {
            return redirect()->route('about.index');
        } else {
            return redirect()->back();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
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
            'photo_path' => 'required',
            'embed_video_path' => 'nullable'
        ]);

        $course = new Course();
        $course->title_tr = request('title_tr');
        $course->title_eng = request('title_eng');
        $course->description_tr = request('description_tr');
        $course->description_eng = request('description_eng');
        $course->embed_video_path = request('embed_video_path');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/course', request()->file('photo_path'));
            $course->photo_path = $path;
        }
        $course->save();

        if ($course) {
            return redirect()->route('courses.index');
        } else {
            return redirect()->back();
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
            $course = Course::findOrFail($id);
            return view('admin.courses.edit', compact('course'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('CourseController@index');
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


        $course = Course::find($id);
        $course->title_tr = $request->input('title_tr');
        $course->title_eng = request('title_eng');
        $course->description_tr = request('description_tr');
        $course->description_eng = request('description_eng');
        $course->embed_video_path = request('embed_video_path');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/course', request()->file('photo_path'));
            $course->photo_path = $path;
        }

        $course->save();
        if ($course){
            return redirect()->route('courses.index');
        }else{
            return redirect()->back();
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
        Course::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('courses.index');
    }
}

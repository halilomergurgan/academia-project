<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'teach_name_tr' => 'required',
            'teach_title' => 'nullable',
            'teach_description_tr' => 'required',
            'web_site' => 'nullable',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'photo_path' => 'nullable'
        ]);

        $teachers = new Teacher();
        $teachers->teach_name_tr = request('teach_name_tr');
        $teachers->teach_title = request('teach_title');
        $teachers->teach_description_tr = request('teach_description_tr');
        $teachers->web_site = request('web_site');
        $teachers->facebook = request('facebook');
        $teachers->twitter = request('twitter');
        $teachers->instagram = request('instagram');
        $teachers->linkedin = request('linkedin');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/teachers', request()->file('photo_path'));
            $teachers->photo_path = $path;
        }
        $teachers->save();
        if ($teachers) {
            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(2000);
            return redirect()->route('teachers.index');

        } else {
            alert()
                ->error('Hata', ' Başarısız.')
                ->autoClose(2000);
            return back();
        }

    }

    public function edit($id)
    {
        try {
            $teachers = Teacher::findOrFail($id);
            return view('admin.teachers.edit', compact('teachers'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->action('TeacherController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $teachers = Teacher::find($id);
        $teachers->teach_name_tr = request('teach_name_tr');
        $teachers->teach_title = request('teach_title');
        $teachers->teach_description_tr = request('teach_description_tr');
        $teachers->web_site = request('web_site');
        $teachers->facebook = request('facebook');
        $teachers->twitter = request('twitter');
        $teachers->instagram = request('instagram');
        $teachers->linkedin = request('linkedin');

        if ($request->hasFile('photo_path')) {
            $this->validate(request(), array('photo_path' => 'image|mimes:png,jpg,jpeg,gif'));
            $path = Storage::disk('local')->put('/public/teachers', request()->file('photo_path'));
            $teachers->photo_path = $path;
        }

        $teachers->save();

        if ($teachers) {

            alert()
                ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
                ->autoClose(1000);
            return redirect()->route('teachers.index');

        } else {
            alert()
                ->error('Hata', ' Başarısız.')
                ->autoClose(2000);
            return back();
        }
    }
    public function destroy($id)
    {
        Teacher::destroy($id);
        alert()
            ->success('Başarılı', ' Başarılı Şekilde yapılmıştır.')
            ->autoClose(1000);
        return redirect()->route('teachers.index');
    }
}

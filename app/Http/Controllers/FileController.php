<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('admin.files.index', compact('files'));
    }

    public function create()
    {
        return view('admin.files.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file_name' => 'required',
            'file_path' => 'required'
        ]);

        $file = new File();
        $file->file_name = request('file_name');
        $uploadedFile = $request->file('file_path');
        $extension = $request->file_path->getClientOriginalExtension();
        $filename = time() . $uploadedFile->getClientOriginalName();
        $filename = str_replace(' ', '', $filename);
        $path = Storage::disk('local')->putFileAs('/public/files', $uploadedFile, $filename);

        $file->file_path = $path;
        $file->extension = $extension;



        $file->save();

        if ($file) {
            return redirect()->route('files.index');
        } else {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        File::destroy($id);

        return redirect()->route('files.index');
    }


}

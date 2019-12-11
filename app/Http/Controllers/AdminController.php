<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Course;
use App\Models\Magazine;
use App\Models\News;
use App\Models\Slider;
use App\Models\Task;
use App\Models\Teacher;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = array();
        $news = News::whereNull('deleted_at')->count();
        $sliders = Slider::whereNull('deleted_at')->count();
        $courses = Course::whereNull('deleted_at')->count();
        $magazines = Magazine::whereNull('deleted_at')->count();
        $articles = Article::whereNull('deleted_at')->count();
        $teachers = Teacher::whereNull('deleted_at')->count();

        $count['news'] = $news;
        $count['slider'] = $sliders;
        $count['courses'] = $courses;
        $count['articles'] = $articles;
        $count['magazines'] = $magazines;
        $count['teachers'] = $teachers;
        $tasks = Task::all();
        return view('admin.index',compact('count','tasks'));
    }

}

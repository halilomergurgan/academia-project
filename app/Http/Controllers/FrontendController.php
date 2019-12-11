<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Magazine;
use App\Models\News;
use App\Models\Post;
use App\Models\SinglePost;
use App\Models\Slider;
use App\Models\Teacher;

class FrontendController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $news = News::all();
        $sliders = Slider::all();
        $about = About::all();
        $magazines = Magazine::all();
        return view('frontend.content', compact('courses', 'news', 'sliders', 'about', 'magazines'));
    }

    public function contact()
    {
        $contact = Contact::all();
        return view('frontend.contact', compact('contact'));
    }

    public function about()
    {
        $about = About::all();
        return view('frontend.about', compact('about'));
    }

    public function post($id)
    {
        $post = Post::find($id);
        return view('frontend.post', compact('post'));
    }

    public function course($id)
    {
        $course = Course::find($id);
        return view('frontend.course', compact('course'));
    }

    public function journal($id)
    {
        $journal = Magazine::find($id);
        return view('frontend.journal', compact('journal'));
    }

    public function news($id)
    {
        $news = News::find($id);
        return view('frontend.news', compact('news'));
    }

    public function article($id, $slug)
    {
        $article = Article::where('slug', $slug)->findOrFail($id);
        return view('frontend.article', compact('article'));
    }

    public function teachers()
    {
        $teachers = Teacher::all();
        return view('frontend.teachers',compact('teachers'));
    }

    public function singlePost($id)
    {
        $post = SinglePost::with('article')->findOrFail($id);

        return view('frontend.single-post',compact('post'));
    }
}

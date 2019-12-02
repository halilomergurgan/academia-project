<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Magazine;
use App\Models\News;
use App\Models\Post;
use App\Models\Slider;

class FrontendController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $news = News::all();
        $sliders = Slider::all();
        $about = About::all();
        $magazines = Magazine::all();
        return view('frontend.content', compact('courses', 'news','sliders','about','magazines'));
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
}

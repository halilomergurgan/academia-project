<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $contact = Contact::all();
        $menus = Menu::with('post')->get();
        $posts = Post::with('menu')->with('subMenu')->get();
        View::share([
                'post' => $posts,
                'menus'=>$menus,
                'contact'=> $contact
            ]
        );
    }
}

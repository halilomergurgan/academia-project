<?php

namespace App\Http\View\Composers;

use App\Models\Menu;
use App\Models\Post;
use Illuminate\View\View;

class NavbarComposer
{

    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menus = Menu::with(['submenus' => function($query){
            $query->with('posts');
        }] )->get();
        $view->with('_navbar', $menus);
    }
}

<?php

namespace App\Http\View\Composers;

use App\Models\Menu;
use App\Models\Post;
use App\Models\SingleMenu;
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
        $menus2 = SingleMenu::with('post')->get();
        $view->with('_navbar', $menus);
        $view->with('_navbar2', $menus2);
    }
}

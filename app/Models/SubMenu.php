<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    public function menu()
    {
        return $this->hasMany(Menu::class, 'id', 'menu_id');
    }
}

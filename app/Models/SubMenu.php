<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubMenu extends Model
{
    use SoftDeletes;

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
}

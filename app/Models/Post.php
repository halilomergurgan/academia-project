<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use SoftDeletes;

    public function getPhotoPathAttribute($value)
    {
        return Storage::url($value);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    public function subMenu()
    {
        return $this->belongsTo(SubMenu::class, 'submenu_id', 'id');
    }
}

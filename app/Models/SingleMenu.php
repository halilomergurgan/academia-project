<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SingleMenu extends Model
{
    use SoftDeletes;

    public function post()
    {
        return $this->hasMany(SinglePost::class, 'single_menu_id', 'id');
        //return $this->belongsTo(SinglePost::class, 'id', 'single_menu_id');
    }
}

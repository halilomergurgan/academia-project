<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    public function post()
    {
        return $this->belongsTo(Post::class, 'id', 'menu_id');
    }

}

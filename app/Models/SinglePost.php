<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class SinglePost extends Model
{
    use SoftDeletes;

    public function getPhotoPathAttribute($value)
    {
        return Storage::url($value);
    }

    public function menu()
    {
        return $this->belongsTo(SingleMenu::class, 'single_menu_id', 'id');
    }

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }
}

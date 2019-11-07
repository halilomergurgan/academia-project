<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Magazine extends Model
{
    use SoftDeletes;

    public function getPhotoPathAttribute($value)
    {
        return Storage::url($value);
    }
}


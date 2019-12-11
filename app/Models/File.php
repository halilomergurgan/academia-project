<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    public function getFilePathAttribute($value)
    {
        return Storage::url($value);
    }
}

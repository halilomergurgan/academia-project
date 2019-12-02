<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Slider extends Model
{
    use SoftDeletes;
    protected $table = 'sliders';
    protected $appends = ['description_en_for_datatable'];

    public function getPhotoPathAttribute($value)
    {
        return Storage::url($value);
    }
    
}

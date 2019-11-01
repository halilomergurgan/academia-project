<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Course extends Model
{
    use SoftDeletes;
    protected $table = 'courses';
    protected $appends = ['description_en_for_datatable'];

    public function getPhotoPathAttribute($value)
    {
        return Storage::url($value);
    }

    public function getDescriptionENForDatatableAttribute()
    {
        return Str::limit($this->description_eng, 100);
    }
}

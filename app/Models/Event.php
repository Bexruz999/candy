<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Event extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['description', 'title', 'short_desc'];

    protected $fillable = [
        'name',
        'title',
        'description',
        'short_desc',
        'file',
        'img',
        'foto',
        'slug',
        'date',
        'status',
        'order',
        'visible'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Map extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'year_text', 'year', 'tons', 'tons_text'];
    protected $fillable = [
        'name',
        'title',
        'img',
        'year_text',
        'year',
        'tons_text',
        'tons',
        'order',
        ];
}

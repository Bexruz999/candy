<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class History extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'text'];

    protected $fillable = [
        'year',
        'title',
        'text',
        'img',
        'icon',
    ];
}

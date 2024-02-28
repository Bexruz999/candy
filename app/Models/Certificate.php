<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Certificate extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'description'];

    protected $fillable = [
        'name',
        'description',
        'title',
        'img',
        'icon',
    ];
}

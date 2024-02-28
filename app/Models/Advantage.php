<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Advantage extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'subtitle' , 'description'];

    protected $fillable = [
        'title',
        'description',
        'name',
        'img',
        'status',
        'subtitle',
    ];
}

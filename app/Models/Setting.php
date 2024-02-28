<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'subtitle', 'text', 'description'];

    protected $fillable = [
        'name',
        'title',
        'subtitle',
        'description',
        'text',
        'file',
        'galery',
        'page'
    ];

    protected $casts = [
        'galery' => 'array',
    ];
}

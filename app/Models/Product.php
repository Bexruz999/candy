<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['description', 'title', 'custom_fields'];

    protected $fillable = [
        'name',
        'title',
        'category_id',
        'description',
        'file',
        'img',
        'video',
        'img360',
        'outerimg360',
        'slug',
        'status'
    ];

    public function category() {

        return $this->belongsTo(Category::class, 'category_id', 'id');

    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    protected $casts = [
        'img360' => 'array',
        'outerimg360' => 'array',
    ];
}

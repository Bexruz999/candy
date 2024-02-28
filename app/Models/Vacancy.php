<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Vacancy extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'responsibility', 'requirement', 'conditions'];

    protected $fillable = [
        'name',
        'title',
        'responsibility',
        'requirement',
        'conditions',
        'status',
        'specialization_id',
        'img'
    ];

    public function specialization()
    {

        return $this->belongsTo(Specialization::class, 'specialization_id', 'id');

    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value . '-' . $this->attributes['id']);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'icon',
        'icon_white',
        'video',
        'visible',
        'order',
        'fon',
        'status',
        'sertificates'
    ];

    public function products():HasMany {
        return $this->hasMany(Product::class);
    }

    public function certificates():BelongsToMany {
        return $this->belongsToMany(Certificate::class, 'certificates_categories');
    }

    /*protected $casts = [
        'sertificates' => 'array',
    ];*/
}

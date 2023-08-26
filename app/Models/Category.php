<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'icon', 'order'];

    protected $translatable = ['name'];


    public function products(): HasMany
    {

       return $this->hasMany(Product::class);
    }
}

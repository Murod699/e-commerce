<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class DeliveryMetod extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'delivery_metods';

    protected $fillable = ['name', 'estimeted_time', 'sum'];


    protected $translatable = ['name', 'estimeted_time'];

    public function orders(): HasMany
    {

        return $this->hasMany(Order::class);

    }
}

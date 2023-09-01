<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAdress extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'latitude', 'longitude', 'region', 'district', 'street', 'home'];

    public function users(): BelongsTo
    {

        return $this->belongsTo(User::class);
        
    }
}

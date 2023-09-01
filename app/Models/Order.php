<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['user_id', 'comment', 'delivery_method_id', 'payment_type_id', 'sum', 'products', 'address'];


    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class);

    }



    public function delivery_method(): BelongsTo
    {

        return $this->belongsTo(DeliveryMetod::class);

    }



    public function payment_types(): BelongsTo
    {

        return $this->belongsTo(PaymentType::class);

    }


}

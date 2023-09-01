<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'delivery_metod_id'=> 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'products' => 'required|array:product_id,stock_id,quantity',
            'products.*.product_id' => 'required|numeric',
            'products.*.quantity' => 'required|numeric',
            'products.*.stock_id' => 'nullable|numeric',
            'comment' => 'nullable|max:300'
        ];
    }
}

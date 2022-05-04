<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:4000',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'discount_option' => 'required',
            'discount' => 'required_if:discount_option, 2, 3',
            'variation.*.attribute_id' => 'nullable',
            'variation.*.attribute_value' => 'required_with:variation.*.attribute_id',
            'variation.*.sku' => 'required',
            'variation.*.price' => 'required',
            'variation.*.quantity' => 'required',
        ];
    }
}

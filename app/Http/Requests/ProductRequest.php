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
            'variation.*.attribute.*.attribute_id' => 'nullable',
            'variation.*.attribute.*.attribute_value' => 'required_with:variation.*.attribute.*.attribute_id',
            'variation.*.sku' => 'required',
            'variation.*.sku_price' => 'required',
            'variation.*.quantity' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'variation.*.attribute.*.attribute_value.required_with' => 'The Attribute Value is required if Attribute is selected',
            'variation.*.sku.required' => 'The SKU field is required.',
            'variation.*.sku_price.required' => 'The Price field is required.',
            'variation.*.quantity.required' => 'The Quantity field is required.',

        ];
    }
}

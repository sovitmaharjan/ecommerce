<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'image' => $this->method() == 'POST' ? 'required|mimes:jpg,jpeg,png|max:4096' : 'nullable|mimes:jpg,jpeg,png|max:4096',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Banner name is required.',
            'image.required' => 'Image is required.',
        ];
    }
}

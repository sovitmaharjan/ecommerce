<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Http\Exceptions\HttpResponseException;
// use Illuminate\Contracts\Validation\Validator;

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
            'image' => 'required',
        ];
    }

    // public function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(
    //         response()->json([
    //             'success'   => false,
    //             'message'   => 'Validation errors',
    //             'data'      => $validator->errors()
    //         ], 433)
    //     );
    // }
}

<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class FormValidation extends FormRequest
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
            'full_name' => 'required',
            'email' => 'required|email',
            'detail' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'captcha.captcha' => 'Text did not match. Please, try again.'
        ];
    }
}

<?php

namespace App\Http\Requests\Admin\OurFeature;

use Illuminate\Foundation\Http\FormRequest;

class AddFormValidation extends FormRequest
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
        $rules = [
            'title'     => 'required|unique:our_service,title',
            'status'    => 'required',
            'rank'    => 'required',

        ];

        return $rules;
    }


}

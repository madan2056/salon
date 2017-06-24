<?php

namespace App\Http\Requests\Admin\SampleWork;

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
            'title' => 'required|min:2|max:115',
            'status' => 'required',
            'rank' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ];

        return $rules;
    }


}

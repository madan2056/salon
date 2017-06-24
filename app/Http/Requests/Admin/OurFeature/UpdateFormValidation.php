<?php

namespace App\Http\Requests\Admin\OurFeature;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFormValidation extends FormRequest
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
            'title'      => 'required|max:100|unique:our_service,title,'.$this->request->get('id'),

            'status'    => 'required',
            'rank'    => 'required',

        ];

        return $rules;
    }



}

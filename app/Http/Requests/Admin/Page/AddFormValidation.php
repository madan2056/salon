<?php

namespace App\Http\Requests\Admin\Page;

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
            'title1'     => 'required|unique:page,title1',
            'page_type' => 'required',
            'status'    => 'required',

        ];
        if ($this->request->get('page_type') == 'page') {
            $rules['image']       = 'image';
            $rules['description'] = 'required';
        }

        return $rules;
    }
}

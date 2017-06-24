<?php

namespace App\Http\Requests\Admin\User;

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
        return [
            'name'      => 'required|max:100|unique:users,name,'.$this->request->get('id'),
            'email'     => 'required|email|max:100|unique:users,email,'.$this->request->get('id'),
            'password'  => 'max:255|confirmed',
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Name is required.',
            'name.max'       => 'Name must be no more then 255 charactor.',
            'name.unique'    => 'This name is already taken.',
            'email.required' => 'Email is required.',
            'email.max'      => 'Email must be no more then 255 charactor.',
            'email.unique'   => 'This email is already taken.',
        ];
    }

}

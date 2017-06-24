<?php

namespace App\Http\Requests\Admin\User;

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
        return [
            'name'      => 'required|max:100|unique:users,name',
            'email'     => 'required|email|max:100|unique:users,email',
            'password'  => 'required|max:255|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'User Name is Required.',
            'name.unique'       => 'User Name already taken.',
            'email.required'    => 'Email is Required.',
            'email.unique'      => 'Email address must be unique.',
            'password.required' => 'Password is Required.',
        ];
    }
}

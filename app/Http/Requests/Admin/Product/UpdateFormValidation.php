<?php

namespace App\Http\Requests\Admin\Product;

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
            'title' => 'required|min:2|max:115|unique:product,title,'.$this->request->get('id'),
            'category_id' => 'required|int',
            'status' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'category_id.required' => 'Please select category',
            'category_id.int'      => 'Category field must be integer'
        ];
    }
}

<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RequestQuotationValidateRequest extends FormRequest
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
            'full_name'    => 'required',
            'email'         => 'email|required',
            'phone_number'  => 'required',
            'address'       => 'required',
            'service_id'    => 'required',
            'quantity'      => 'required',
            'detail'        => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            //
            'cus_name' => [
                'required','string',
            ],
            'cus_gstn' => [
                'required','string',
            ],
            'cus_phone' => [
                'required','integer'
            ],
            'cus_email' => [
                'string', 'email:rfc,dns','required',
            ],
            'cus_address' =>[
                'required','string',
            ],
        ];
    }
}
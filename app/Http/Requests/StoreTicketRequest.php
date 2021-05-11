<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
            'service_mode' => [
                'required', 'string'
            ],
            'mode_of_shipment' => [
                'required', 'string',
            ],
            'sea_opts' => [
                'required', 'integer',
            ],
            'type_of_shipment' => [
                'required', 'string',
            ],
            'service_type' => [
                'required','array',
            ],
            'cus_name' => [
                'required','string'
            ],
            'cus_gst' => [
            'required','string'
            ],,
            'cus_address' => [
            'required','string'
            ],
            'cus_email'=> [
            'required','string'
            ],
            'cus_contact_number'=> [
            'required','string'
            ],
            'sup_name'=> [
                'required','string'
            ],
            'sup_gst'=> [
                'required','string'
            ],
            'sup_address'=> [
                'required','string'
            ],
            'sup_email'=> [
                'required','string'
            ],
            'sup_contact_number'=> [
                'required','string'
            ],
            'date_of_doc_rec'=> [
                'required','string'
            ],
            'timedoc' => [
                'required','string'
            ]
        ];
    }
}
<?php

namespace App\Http\Requests\PM;

use Illuminate\Foundation\Http\FormRequest;

class TenderStoreRequest extends FormRequest
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
            'tender_owner' => 'required',
            'tender_address' => 'required',
            'schedule_price' => 'required',
            
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'tender_owner.required' => 'Tender Owner is required.',
            'tender_address.required' => 'Tender Address is required.',
            'schedule_price.required' => 'Tender Price is required.',
            
        ];
    }
}

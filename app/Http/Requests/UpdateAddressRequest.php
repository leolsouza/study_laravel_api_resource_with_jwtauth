<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAddressRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'street' => ['string'],
            'number' => ['numeric'],
            'district' => ['string'],
            'city' => ['string'],
            'state' => ['string'] ,
            'country' => ['string'],
            'zip_code' => ['digits:8'],
        ];
    }
}

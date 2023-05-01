<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'firsname' => ['string', 'required', 'max:100'],
            'lastname' => ['string', 'required', 'max:100'],
            'email' => ['email', 'string', 'required', 'max:225'],
            'country' => ['string', 'required'],
            'address' => ['string', 'required', 'max:225'],
            'country' => ['string', 'required', 'max:50'],
            'region' => ['string', 'required', 'max:50'],
            'postal-code' => ['string', 'required', 'max:6'],
        ];
    }
}

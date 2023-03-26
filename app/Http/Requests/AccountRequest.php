<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'first_name' => 'nullable|min:2',
            'last_name' => 'nullable|min:2',
            'birthday' => 'nullable|date',
            'sex' => 'nullable|min:2',
            'phone' => 'nullable|min:7',
            'country' => 'nullable|min:2',
            'city' => 'nullable|min:2',
            'timezone' => 'nullable|min:2',
        ];
    }

public function messages()
    {
        return [
            'first_name.min' => 'The name must be minimum 2 characters',
            'last_name.min' => 'The name must be minimum 2 characters',
            'sex.min' => 'The name must be minimum 2 characters',
            'phone.min' => 'The phone must be minimum 7 characters',
            'country.min' => 'The phone must be minimum 7 characters',
            'city.min' => 'The phone must be minimum 7 characters',
            'timezone.min' => 'The phone must be minimum 7 characters'
        ];
    }
}

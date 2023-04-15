<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'max:55',
            'email' => 'required|email|max:55',
            'message' => 'required|max:255',
            'subject' => '',
            'file_name' => 'nullable',
            'file_size' => 'nullable',
            'file_type' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'The name must be maximum 55 characters',
            'email.max' => 'The email must be maximum 55 characters',
            'message.max' => 'Message must be maximum 255 characters'
        ];

    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:55|confirmed'
        ];
    }
    public function messages()
    {
        return [
          'name.min' => 'Name must be minimum 8 characters',
          'email.required' => ' The email cannot be empty',
          'email.unique' => 'User with this email already exists',
          'password.required' => 'The password cannot be empty',
          'password.min' => 'The password must be minimum 8 characters',
          'password.max' => 'The password must be maximum 8 characters'
        ];
    }
}

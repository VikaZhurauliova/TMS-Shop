<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'min:2',
            'short_description' => 'nullable|min:2',
            'description' => 'nullable',
            'price' => 'min:1|numeric',
            'sale_price' => 'nullable',
            'category_id' => 'nullable|integer',
            'is_active' => 'nullable',
            'tag' => 'nullable',
            'image' => 'nullable',
            'files' => 'nullable'
        ];
    }
}

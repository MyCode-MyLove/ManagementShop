<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'code' => 'required|string|max:50|unique:categories,code,'.$this->category->id,
            'name' => 'required|string|max:250',
            // 'quantity' => 'required|integer|min:1|max:10000',
            // 'price' => 'required',
            'description' => 'required|string'
        ];
    }
}

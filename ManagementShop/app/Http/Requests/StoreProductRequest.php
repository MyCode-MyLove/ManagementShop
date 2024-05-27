<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'author' => 'required|string|max:50',
            'publishing_company' => 'required|string|max:50',
            'cover_form' => 'required|string|max:20',
            'publishing_year'=> 'int',
            'packaging_size'=> 'string|max:20',
            'weight'=> 'int',
            'quantity'=> 'int',
            'description_long' => 'required|string'
        ];
    }
}

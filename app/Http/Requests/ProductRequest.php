<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'max:100'],
            'description' => ['required'],
            'category' => 'array|nullable',
            'status' => 'exists:tags,id',
            'quantity' => 'url|nullable',
            // 'submitted' => ['required', 'boolean'],
        ];
    }

}

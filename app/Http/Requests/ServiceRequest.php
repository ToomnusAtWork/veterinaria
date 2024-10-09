<?php

namespace App\Http\Requests;

use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            // 'name' => ['required', 'string', 'min:1', 'max:255'],
            // 'description' => ['required','string', 'min:1'],
            // 'category' => ['required', Rule::exists('product_categories', 'id')],
            // 'quantity' => ['required', 'numeric', 'min:1'],
            // 'price' => ['required', 'numeric', 'min:0'],
            // 'status' => 'integer',
        ];
    }

    public function name()
    {
        return;
    }

    public function slug()
    {

    }

    public function description()
    {
        return;
    }

    public function price()
    {
        return ;
    }

    public function notes()
    {
        return;
    }

    
}

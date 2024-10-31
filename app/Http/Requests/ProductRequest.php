<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:1', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpg, jpeg, png, svg, gif, webp', 'max:2048'],
            'description' => ['required','string', 'min:1'],
            'category' => ['required', Rule::exists('product_categories', 'id')],
            'quantity' => ['required', 'numeric', 'min:1'],
            'price' => ['required', 'numeric', 'min:0'],
            // 'status' => 'integer',
        ];
    }

    public function author(): User
    {
        return $this->user();
    }

    public function name(): string
    {
        return $this->get('name');
    }

    public function description(): string
    {
        return $this->get('description');
    }

    public function category()
    {
        return $this->get('category');
    }

    public function quantity(): int
    {
        return $this->get('quantity');
    }

    public function price(): int
    {
        return $this->get('price');
    }

    // public function status(): int
    // {
    //     return $this->get('status');
    // }



}

<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
            'pet_type_id' => ['required', Rule::exists('pet_types', 'id')],
            'breed_id' => ['required', Rule::exists('breeds', 'id')],
            'date_of_birth' => ['required', 'date'],
            'weight' => ['required', 'numeric', 'min:0'],
            'allergen' => ['nullable','string', 'min:1'],
            'note' => ['nullable','string', 'min:1'],
            'user_id' => ['nullable'],
        ];
    }

    public function customer()
    {
        return $this->user()->id;
    }

    public function name(): string
    {
        return $this->get('name');
    }

    public function pettype()
    {
        return $this->get('pet_type_id');
    }

    public function breed()
    {
        return $this->get('breed_id');
    }

    public function DOB()
    {
        return $this->get('date_of_birth');
    }

    public function weight(): int
    {
        return $this->get('weight');
    }

    public function allergen(): string
    {
        return $this->get('allergen');
    }

    public function note(): string
    {
        return $this->get('note');
    }
}

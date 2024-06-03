<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class CreateProduct extends Component
{
    use WithFileUploads;

    public $name, $description, $image, $price, $quantity;

    protected $rules = [
        'name' => 'required|string|min:1|max:255',
        'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        'description' => 'required|string|min:1',
        'quantity' => 'required|numeric|min:1',
        'price' => 'required|numeric|min:0',
    ];

    public function submit()
    {
        $this->validate();
        $this->image->store('images', 'public');

        Product::create([
            'name' => $this->$name,
            'description' => $this->$description,
            'quantity' => $this->$quantity,
            'price' => $this->price,
        ]);
        
        session()->flash('message', 'Product successfully created.');

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.create-product');
    }

}

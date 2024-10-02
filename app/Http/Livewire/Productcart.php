<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\CartServiceFacade as Cart;

class Productcart extends Component
{
   
    public $product;
    public $quantity;
    /**
     * Mounts the component on the template.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->quantity = 1;
    }

    public function render()
    {
        return view('livewire.productcart');
    }

    /**
     * Adds an item to cart.
     *
     * @return void
     */
    public function addToCart(): void
    {
        Cart::addItem($this->product->id, $this->product->name, $this->product->price, $this->quantity);
        $this->emit('productAddedToCart');
    }
}

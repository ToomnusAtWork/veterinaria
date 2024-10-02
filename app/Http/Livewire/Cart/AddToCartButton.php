<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class AddToCartButton extends Component
{
    public $quantity = 1;
    public $currentQuantity = 0;

    public function mount(int $productId)
    {
        $this->quantity = $productId;
    }

    public function hydrate()
    {
        // $this->currentQuantity = ->getCurrentQuantity($this->id);
    }

    public function add(): void
    {
        $quantity = $this->currentQuantity + (int) $this->quantity;
        if ($quantity < 1) {
            $quantity = 1;
        }

        // ->add($this->productId, $quantity);
        $this->quantity =  1;
        $this->emit('CartUpdate');
    }

    public function render()
    {
        return view('livewire.cart.add-to-cart-button');
    }
}

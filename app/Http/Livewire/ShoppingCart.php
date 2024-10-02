<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\CartServiceFacade as Cart;


class ShoppingCart extends Component
{
    
    protected $total;
    protected $content;
    protected $listeners = [
        'productAddedToCart' => 'updateCart',
    ];

    public function mount()
    {
        if (session()->has('productAddedToCart')) {
            foreach (session('productAddedToCart') as $alert) {
                $this->receiveAlert($alert['type'], $alert['message']);
            }
            session()->forget('productAddedToCart');
        }

        $this->updateCart();
    }

    public function render()
    {
        return view('livewire.shopping-cart', [
            'total' => $this->total,
            'content' => $this->content,
        ]);
    }

    public function removeFromCart(string $id)
    {
        Cart::remove($id);
        $this->updateCart();
    }

    public function clearCart()
    {
        Cart::clear();
        $this->updateCart();
    }

    public function updateCartItem(string $id, string $action)
    {
        Cart::update($id, $action);
        $this->updateCart();
    }

    public function updateCart()
    {
        $this->total = Cart::total();
        $this->content = Cart::content();
    }
}
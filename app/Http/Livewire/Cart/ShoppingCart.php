<?php

namespace App\Http\Livewire\Cart;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ShoppingCart extends Component
{

    protected $listeners = [
        'basketUpdated' => 'hydrate',
    ];

    public function hydrate()
    {
        // $this->cart = ->all();

        $this->products = tap(
                $this->products(),
                fn($product) => $this->total = int_to_decimal($product->sum('total'))
        )->toArray();
    }

    public function render()
    {
        return view('livewire.cart.shopping-cart');
    }

    private function products(int $total): array
    {
        if (empty($this->cart))
        {
            return new Collection;
        }

        return Product::WhereIn('id', array_keys($this->cart))
            ->get()
            ->map(function(Product $product) {
                return (object) [
                    'id'=> $product->id,
                    'name'=> $product->name,
                    'price'=> $product->price,
                    'quantity'=> $qty = $product->quantity,
                    'total' => $product->price * $qty,
                ];
            });
    }

    public function remove(int $id)
    {
        cart()->remove($id);
        $this->update();
    }

    private function update()
    {
        $this->emit('CartUpdated');
    }

    public function increase(int $id)
    {
        cart()->add($id, $this->cart[$id] + 1);
        $this->update();
    }

    public function decrease(int $id)
    {
        if (($qty = $this->cart[$id] - 1) < 1) {
            $this->remove($id);
        } else {
            cart()->add($id, $qty);
            $this->update();
        }
    }
}

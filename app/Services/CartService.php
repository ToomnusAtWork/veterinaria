<?php

namespace App\Services;


use Illuminate\Session\SessionManager;

class CartService {
    const MINIMUM_CART_SIZE = 0;
    const DEFAULT_INSTANCE = 'shopping-cart';

    protected $session;
    protected $instance;


    public function __construct(SessionManager $session) 
    {
        $this->session = $session;
    }
    
    /**
     * addItem
     *
     * @param  mixed $id
     * @param  mixed $name
     * @param  mixed $price
     * @param  mixed $quantity
     * @param  mixed $option
     * @return void
     */
    public function addItem($id, $name, $price, $quantity, $option = [])
    {
        $cartItem = $this->createCartItem($name, $price, $quantity, $option);
        $content = $this->getContent();

        if ($content->has($id)) {
            $cartItem->put('quantity', $content->get($id)->get('quantity') + $quantity);
        }

        $content->put($id, $cartItem);
        $this->session->put(self::DEFAULT_INSTANCE, $content);
    }

    public function update(string $id, string $action)
    {
        $content = $this->getContent();
        
        if ($content->has($id)) {
            $cartItem = $content->get($id);

            switch($action){
                case 'plus':
                    $cartItem->put('quantity', $content->get($id)->get('quantity') + 1);
                    break;
                case 'minus':
                    $updateQuantity = $content->get($id)->get('quantity') - 1;

                    if ($updateQuantity < self::MINIMUM_CART_SIZE) {
                        $updateQuantity = self::MINIMUM_CART_SIZE;
                    }

                    $cartItem->put('quantity', $updateQuantity);
                    break;
            }

            $content->put($id, $cartItem);
            $this->session->put(self::DEFAULT_INSTANCE, $content);
        }
    }

    public function remove(string $id)
    {
        $content = $this->getContent();

        if ($content->has($id)) {
            $this->session->put(self::DEFAULT_INSTANCE, $content->except($id));
        }
    }

    public function clear()
    {
        $this->session->forget(self::DEFAULT_INSTANCE);
    }

    public function content()
    {
        return is_null($this->session->get(self::DEFAULT_INSTANCE)) ? collect([]) : $this->session->get(self::DEFAULT_INSTANCE);
    }

    public function total()
    {
        $content = $this->getContent();
        
        $total = $content->reduce(function ($total, $item){
            return $total += $item->get('price') * $item->get('quantity');
        });

        return number_format($total, 2);
    }

    public function getContent()
    {
        return $this->session->has(self::DEFAULT_INSTANCE) ? $this->session->get(self::DEFAULT_INSTANCE) : collect([]);
    }

    public function createCartItem(string $name, string $price, string $quantity, array $options)
    {
        $price = floatval($price);
        $quantity = intval($quantity);

        if($quantity < self::MINIMUM_CART_SIZE)
        {
            $quantity = self::MINIMUM_CART_SIZE;
        }

        return collect([
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
            'options' => $options
        ]);
    }

}
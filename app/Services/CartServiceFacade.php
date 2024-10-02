<?php

namespace App\Services;

use Illuminate\Support\Facades\Facade;

class CartServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CartService::class;
    }
}
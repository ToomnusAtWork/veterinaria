<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DisplayProduct extends Controller
{
    public function index() 
    {
        $products = Product::orderByPrice('PriceLowToHigh')->paginate(10);
        return view('livewire.customer-product-view', compact('products'));
    }

    public function show($name)
    {
        $ProductQuery = Product::where('name', $name)->firstOrFail();

        return view('livewire.view-product', compact('ProductQuery'));
    }
}

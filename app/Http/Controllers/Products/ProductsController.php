<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware([Authenticate::class, EnsureEmailIsVerified::class], ['except' => ['index', 'show']]);
    }

    public function index()
    {

        // $filter = $this->getFilter(['rating', 'popular', 'recent', 'priceLowToHigh' ,'PriceHighToLow']);

        $products = Product::orderByPrice('created_at', 'DESC')->paginate(10);
        return view('livewire.customer-product-view', [
            'products' => $products,
        ]);
    }
}

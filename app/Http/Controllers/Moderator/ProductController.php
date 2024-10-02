<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
            'staff'], ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $products = Product::all();
        return view('dashboard.manage-products.index', [
            'products'=> $products
        ]);
    }

    public function show(Product $product)
    {
        // $product = Product::findOrFail($product);
        return view('dashboard.manage-products.show', compact('product'))->with('title', $product->name);
    }

    public function create(Request $request)
    {
        return view('dashboard.manage-products.create');
    }

    public function store(Request $request)
    {

        return redirect()->route('dashboard.manage-products.index');
    }

    public function update()
    {

    }

    public function edit()
    {
      
    }

    public function delete()
    {

    }
}

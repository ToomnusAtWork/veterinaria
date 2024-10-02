<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Traits\UsesFilters;
use App\Models\Product;
use App\Models\ProductCategory;


class ProductsController extends Controller
{
    use UsesFilters;

    public function index()
    {

        $filter = $this->getFilter(['alphabetical', 'popular', 'recent', 'priceLowToHigh', 'priceHighToLow']);

        $CategoryTag = ProductCategory::wherehas('products', function ($query) {
            $query->where('status', 1);
        })->orderBy('name')->get();


        $products = Product::{$filter}()->paginate(10);
        return view('product.overviews', [
            'products' => $products,
            'filter' => $filter,
        ]);
    }

    public function show(Product $product)
    {
        // $product = Product::findOrFail($product);
        return view('product.show', compact('product'))->with('title', $product->name);
    }

    public function create()
    {
        
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

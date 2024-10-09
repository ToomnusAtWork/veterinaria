<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Http\Requests\ProductRequest;
use App\Jobs\CreateProduct;
use App\Jobs\UpdateProduct;
use App\Jobs\DeleteProduct;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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

    public function show(Request $request, Product $product)
    {
        $product = $request->product;
        // $product = Product::findOrFail($product);
        return view('dashboard.manage-products.show', compact('product'))
            ->with('title', $product->name);
    }

    public function create()
    {
        $productCategories = ProductCategory::all();
        return view('dashboard.manage-products.create', [
            'productCategories' => $productCategories,
        ]);
    }

    public function store(ProductRequest $request)
    {
        $this->dispatchSync(CreateProduct::fromRequest($request));

        // $this->success('Product added');
        return redirect()->route('manage-product')->with('success','Product Created');
    }

    public function edit(Request $request, Product $product)
    {
        $product = $request->product;
        return view('dashboard.manage-products.edit', [
            'product' => $product,
        ]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $this->dispatchSync(UpdateProduct::fromRequest($product, $request));

        $this->success('Thread successfully updated!');

        return  $request->wantsJson() 
            ? ProductsResource::make($product)
            : redirect()->route('manage-product')->with('success','Product Created');
    }



    public function delete(Request $request, Product $product)
    {
        $this->dispatchSync(job: new DeleteProduct($product));
        
        $this->success('HELLOWORLD');

        return $request->wantsJson()
            ? response()->json([], Response::HTTP_NO_CONTENT)
            : redirect()->route('manage-product');
    }
}

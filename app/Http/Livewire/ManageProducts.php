<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ManageProducts extends Component
{

    use withPagination;
    use withFileUploads;

    public $confirmingProductDeletion = false;
    public $confirmingProductAdd = false;
    public $confirmingProductEdit = false;

    public $search;
    public $newProduct, $name, $description, $image, $price, $quantity;

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    protected function rules()
    {
        $rules = [
            'newProduct.name' => 'required|string|min:1|max:255',
            'newProduct.description' => 'required|string|min:1',
            'newProduct.price' => 'required|numeric|min:0',
            'newProduct.quantity' => 'required|numeric|min:1',
            'newProduct.product_category_id' => 'required|integer|min:1|exists:product_categories, id',
        ];
        // check if image is an instance of UploadedFile
        if ($this->image instanceof \Illuminate\Http\UploadedFile) {
    
            $rules['image'] = 'required|image|mimes:jpg,jpeg,png,svg,gif,webp|max:204800';
        } else {
            $rules['image'] = 'required|string|min:1|max:255';
        }
        return $rules;
    }

    public function render()
    {
        $products = Product::when($this->search, function ($query){
            $query->where('name', 'like', '%'.$this->search.'%')
                ->orwhere('description', 'like', '%'.$this->search.'%')
                ->orwhere('price', 'like', '%'.$this->search.'%');
        })->orderByPrice('PriceLowToHigh')
            ->paginate(10);
        return view('livewire.manage-products', compact('products'));
    }

    public function confirmProductDeletion($id)
    {
        $this->confirmingProductDeletion = $id;

    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        session()->flash('message', 'Produc successfully deleted.');
        $this->confirmingProductDeletion = false;

    }

    public function confirmProductAdd()
    {
        $this->reset(['newProduct']);
        $this->reset(['image']);
        $this->confirmingProductAdd = true;
    }

    public function confirmProductEdit(Product $newProduct)
    {
        $this->newProduct = $newProduct;
        $this->image = $newProduct->image;
        $this->confirmingProductAdd = true;
    }

    public function saveProduct() 
    {
        $this->validateOnly('newProduct.name');
        $this->validateOnly('newProduct.description');
        $this->validateOnly('newProduct.price');
        $this->validateOnly('newProduct.quantity');
        $this->validateOnly('newProduct.product_category_id');

        if (isset($this->newProduct['id'])) 
        {
            // overwrite old photo
            if ($this->image instanceof \Illuminate\Http\UploadedFile)
            {
                $this->validateOnly('image');
                $originalImage = Product::find($this->newProduct['id'])->image;
                $originalImage = str_replace('storage', 'public', $originalImage);
                Storage::delete($originalImage);

                $this->image = $this->image->store('images', 'public');
            }

            // save new product
            $this->newProdcut['image'] = $this->image;
            $this->newProduct->save();

            
        } else {
            $product = Product::create($this->newProduct);
        }

        session()->flash('message', 'Product successfully saved.');

        $this->confirmingProductAdd = false;
    }

}

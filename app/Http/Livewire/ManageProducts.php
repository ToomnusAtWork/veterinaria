<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductCategory;
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
    public $newProduct, $name, $description, $image, $price, $quantity, $product_category_id;
    public $perPage = 10; 

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
            'newProduct.product_category_id' => 'required|integer',
        ];

        // check if image is an instance of UploadedFile
        if ($this->image instanceof \Illuminate\Http\UploadedFile) {
    
            $rules['image'] = 'required|image|mimes:jpg,jpeg,png,svg,gif,webp|max:204800';
        } else {
            $rules['image'] = 'required|string|min:1|max:255';
        }
        return $rules;
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::when($this->search, function ($query){
            $query->where('name', 'like', '%'.$this->search.'%')
                ->orwhere('description', 'like', '%'.$this->search.'%')
                ->orwhere('price', 'like', '%'.$this->search.'%');
        })
        // ->orderByPrice('PriceLowToHigh')
            ->paginate($this->perPage);

        $categories = ProductCategory::all();
        return view('livewire.manage-products', compact(['products', 'categories']));
    }

    public function confirmProductDeletion($id)
    {
        $this->confirmingProductDeletion = $id;

    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        session()->flash('message', 'Product successfully deleted.');
        $this->confirmingProductDeletion = false;

    }

    public function confirmProductEdit(Product $newProduct)
    {
        $this->newProduct = $newProduct;
        $this->image = $newProduct->image;
        $this->confirmingProductAdd = true;
    }

    public function confirmProductAdd()
    {
        $this->reset(['newProduct']);
        $this->reset(['image']);
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

                $filepath = $this->image->store('images', 'public');
            }

            // save new product
            $this->newProduct['image'] = $filepath;
            $this->newProduct->save();
            
        } else {
            $product = Product::create($this->newProduct);
        }

        session()->flash('message', 'Product successfully saved.');

        $this->confirmingProductAdd = false;
    }

}

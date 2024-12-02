<?php

namespace App\Http\Livewire\Products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;

class ProductEdit extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;

    protected $rules = [
        'product.name' => 'required',
        'product.description' => 'required',
        'product.old_price' => '',
        'product.price' => 'numeric|required',
        'product.category_id' => 'required',
        'product.total_stock' => 'numeric|required',
    ];
    
    public $image;
    
    public $categories;
    public Product $product;
    public $images;

    public function render()
    {
        return view('livewire.products.product-edit')->extends('layouts.app')->section('content');
    }
    public function mount(Product $product){
        $this->authorize('update', $product);
        $this->categories = Category::all();
        $this->product = $product;
        $this->images = $product->images;
    }

    public function saveChanges() {
        $this->validate();
        $this->product->save(); 
        return redirect('/products');   
    }
    
    public function addImage()
    {
        foreach($this->images as $img){
            $path = '/images/products/'.$this->product->id;
            $imgName = $img->getClientOriginalName();
            Image::Create([
                'path' => $path,
                'name' => $imgName,
                'product_id' => $this->product->id,
            ]);
            $img->storeAs('/public'.$path,$imgName);
            
        }
    }

    public function updatedProductName() {
        $this->validateOnly('product.name');
    }
    public function updatedProductDescription() {
        $this->validateOnly('product.description');
    }
    public function updatedImages() {
        $this->validateOnly('images');
    }
    public function updatedProductOldPrice() {
        $this->validateOnly('product.old_price');
    }
    public function updatedProductPrice() {
        $this->validateOnly('product.price');
    }
    public function updatedProductCategoryId() {
        $this->validateOnly('product.category_id');
    }
    public function updatedProductTotalStock() {
        $this->validateOnly('product.total_stock');
    }
    private function validateMultiple($fields ){
        $validated = [];
        foreach($fields as $field){
            $validatedData = $this->validateOnly( $field);
            $validated[ key($validatedData) ] = current($validatedData);
        }
        return $validated;
    }
}

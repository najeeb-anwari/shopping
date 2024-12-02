<?php

namespace App\Http\Livewire\Products;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;


class Create extends Component
{

    use WithFileUploads;

    protected $rules = [
        'product.name' => 'required',
        'product.description' => 'required',
        'images.*' => 'required|image|max:5024',
        'images' => 'array|min:1',
        'product.old_price' => '',
        'product.price' => 'numeric|required',
        'product.category_id' => 'required',
        'product.total_stock' => 'numeric|required',
    ];

    public $image;

    public $categories;
    public Product $product;
    public $images = [];
    public function render()
    {
        return view('livewire.products.create')->extends('layouts.app')->section('content');
    }
    public function mount(){

        $this->categories = Category::all();
        $this->product = new Product();
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
    public function store() {
        $this->product->seller_id = auth()->user()->id;
        $this->product->old_price =  empty($this->product->old_price) ? null : $this->product->old_price;
        $this->validate();
        $this->product->save();
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
        return redirect('/products');
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

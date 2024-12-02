<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;

class ProductList extends Component
{

    public $products;
    public $perPage = 6;
    public $category;
    public function render()
    {
        if(in_array(auth()->user()->role_id, [Role::IS_SELLER, Role::IS_ADMIN])){
            return view('livewire.products.product-list' )->extends('layouts.app')->section('content');
        }
        return view('livewire.products.product-list')->extends('layouts.buyer')->section('content');
    }
    
    public function mount(Category $category)
    {
        if($category->products->isNotEmpty()) {
            $this->products = $category->products;
            $this->category = $category;
        }
        else {
            $this->products = Product::all();
        }
    }

    function searchQuery($input){
        return Product::where('name','like','%' . $input . '%' );
    }
}

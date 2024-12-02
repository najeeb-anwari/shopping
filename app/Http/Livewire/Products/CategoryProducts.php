<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Category;

class CategoryProducts extends Component
{

    
    public $products;
    public $category;

    public function render()
    {
        return view('livewire.products.category-products')->extends('layouts.buyer')->section('content');
    }

    public function mount(Category $category)
    {
        if($category != null ) {
            $this->products = $category->products;
            $this->category = $category;
        }
    }
}

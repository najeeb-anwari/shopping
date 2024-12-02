<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class PopularProducts extends Component
{

    public $products;
    public $category;
    public function render()
    {
        return view('livewire.products.popular-products');
    }

    public function mount($category)
    {
        $this->category = $category;
        $this->category->load('products');
        $this->products = $category?->products?->take(8);
    }
}

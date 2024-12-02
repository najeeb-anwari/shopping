<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $query;
    public $perPage = 8;
    protected $queryString = ['query'];
    public function render()
    {
        $products = $this->searchQuery($this->query);
        return view('livewire.products.search', [
            'products' => $products->paginate($this->perPage),
        ])->extends('layouts.buyer');
    }

    public function mount()
    {

        
    }

    public function searchQuery($input){
        return Product::where('name','like','%' . $input . '%' );
    }

}

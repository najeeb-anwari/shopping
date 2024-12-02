<?php

namespace App\Http\Livewire\Products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Role;

use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    use AuthorizesRequests;
    protected $listeners = [
        'updateItems' => '$refresh',
    ];

    protected $paginationTheme = 'bootstrap';
    public $sortDirection ="ASC";
    public $perPage = 6;
    public $search = '';
    public $categories;
    public $categoryFilters;

    public function update()
    {
        $this->resetPage();
    }
    public function render()
    {
        // $this->authorize('viewAny', Product::class);
        if($this->search != ''){
            $products = $this->searchQuery($this->search);
        }
        else if($this->categoryFilters){
            
            $products = $this->filterQuery($this->categoryFilters);

        }
        else {
            $products = Product::where('id', '>','0');
        }
        
        if(auth()->user() != null)
        {
            if(in_array(auth()->user()->role_id, [Role::IS_SELLER, Role::IS_ADMIN])){
                return view('livewire.products.index', [
                    'products' => $products->paginate($this->perPage)
                ])->extends('layouts.app')->section('content');
            }
        }
        return view('livewire.products.index', [
            'products' => $products->paginate($this->perPage)
        ])->extends('layouts.buyer')->section('content');
    }
    function mount(){

        $this->categories = Category::all();
    }

    function searchQuery($input){
        return Product::where('name','like','%' . $input . '%' );
    }
    function filterQuery($input) {
        return Product::whereIn('category_id', $input);

    }
    

}

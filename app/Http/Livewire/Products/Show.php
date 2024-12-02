<?php

namespace App\Http\Livewire\Products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Review;
use App\Models\Role;

class Show extends Component
{
    use AuthorizesRequests;
    protected $listeners = [
        'freshReview' => '$refresh',
    ];
    public $rating_average;
    public $total_reviews;
    public $product;
    public $cart;
    public $quantity = 1;
    
    public function render()
    {
        if(auth()->user() != null)
        {
            if(in_array(auth()->user()->role_id, [Role::IS_SELLER, Role::IS_ADMIN])){
                return view('livewire.products.show')->extends('layouts.app')->section('content');    
            }

        }
        return view('livewire.products.show')->extends('layouts.buyer')->section('content');
    }
    public function mount(Product $product){
        
        $this->product = $product;
        $query = Review::where('product_id', $product->id);
        $this->rating_average = round($query->average('rating'));
        $this->total_reviews = $query->count('rating');
    }

    public function addToCart($product_id, $quantity)
    {
        $this->authorize('create', Cart::class);
        $cart = Cart::where([
            'product_id' => $product_id,
            'buyer_id' => auth()->user()->id
        ])->first();

        if($cart == null){
            Cart::create([
                'product_id' => $product_id,
                'buyer_id' => auth()->user()->id,
                'quantity' => $quantity
            ]);
        }
        else {
            $cart->quantity = $quantity;
            $cart->save();
        }
        
        $this->dispatchBrowserEvent('action-performed', [
            'actionTitle' => "Done!",
            'actionText' => "Product added successfully!!!",
            'actionIcon' => "success",
        ]);
        $this->emit('freshCart');


    }

}

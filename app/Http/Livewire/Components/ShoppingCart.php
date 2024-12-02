<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;

class ShoppingCart extends Component
{

    protected $listeners = [
        'freshCart' => '$refresh',
    ];

    public $cart;
    public $quantity;
    public function render()
    {
        return view('livewire.components.shopping-cart')->extends('layouts.buyer')->section('content');
    }

    public function mount() {
        $this->cart = Cart::where('buyer_id', auth()->user()->id)->get();
    }

    public function setQuantity(Cart $cart, $quantity) {
        $total_in_stock = Product::find($cart->product_id)->total_stock;
        if($quantity < 1){

            
            
            $this->dispatchBrowserEvent('action-performed', [
                'actionTitle' => "Error!",
                'actionText' => "Quantity can not be less than 1 !!!",
                'actionIcon' => "error",
            ]);
            
        }
        else if($total_in_stock < $quantity) {
            $actionMessage = "Only $total_in_stock items are available in stock.";
            $actionIcon = "info";
            $this->dispatchBrowserEvent('action-performed', [
                'actionTitle' => "Notice!",
                'actionText' => "Only $total_in_stock items are available in stock.",
                'actionIcon' => "info",
            ]);

        }
        else {
            $cart->quantity = $quantity;
            $cart->save();
            $this->mount();
            $this->emit('freshCart');
        }
    }

    public function emptyCart() {
        dd("Work on it later");
    }
}

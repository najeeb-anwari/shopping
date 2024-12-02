<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class CartCounter extends Component
{
    use AuthorizesRequests;

    protected $listeners = [
        'freshCart' => 'refresh',
        'addCart' => 'addToCart',
        'deleteItem' => 'deleteItem'
    ];
    public $subTotal = 0;
    public $items;

    public function render()
    {
        return view('livewire.components.cart-counter');
    }
    
    public function mount(){
        $this->items = Cart::where('buyer_id', auth()->user()->id)->get();
    }
    public function refresh(){
        $this->mount();
    }
    public function deleteItem(Cart $item){
        $this->authorize('delete', $item);
        $item->delete();
        // if($item->quantity > 1){
        //     $item->quantity = $item->quantity - 1;
        //     $item->save();
        // }
        // else {
        //     $item->delete();
        // }

        $this->emit('freshCart');
    }

    function addToCart($product_id){
        $this->authorize('create', Cart::class);
        $cart = Cart::where([
            'product_id' => $product_id,
            'buyer_id' => auth()->user()->id
        ])->first();

        if($cart == null){
            Cart::create([
                'product_id' => $product_id,
                'buyer_id' => auth()->user()->id,
            ]);
        }
        else {
            $cart->quantity++;
            $cart->save();
        }
        
        $this->emitSelf('freshCart');
    }
}

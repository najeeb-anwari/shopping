<?php

namespace App\Http\Livewire\Products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Wishlist;

class BuyerProductItem extends Component
{
    use AuthorizesRequests;

    public $product;
    public $wish;
    public $wishedByBuyer;

    public function render()
    {
        return view('livewire.products.buyer-product-item');
    }

    public function mount($product)
    {
        $this->product = $product;
        if(auth()->user() != null){
            $this->wish = Wishlist::where(
                [
                    'buyer_id' => auth()->user()->id,
                    'product_id' => $this->product->id,
                ])->get();
    
            if( $this->wish->isNotEmpty()){
                $this->wishedByBuyer = true;
                
            }
            else {
                $this->wishedByBuyer = false;
            }
        }     
    }

    public function addWish() {
        $this->authorize('buyer_access');
        $this->wish = new Wishlist();
        $this->wish->buyer_id = auth()->user()->id;
        $this->wish->product_id = $this->product->id;
        $this->wish->save();
        $this->emit('refreshWishes');
        $this->mount($this->product);
    }

    public function removeWish() {
        $this->authorize('buyer_access');
        Wishlist::where(
            [
                'buyer_id' => auth()->user()->id,
                'product_id' => $this->product->id,
        ])->delete();
        $this->emit('refreshWishes');
        $this->mount($this->product);
    }
}

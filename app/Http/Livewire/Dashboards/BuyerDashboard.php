<?php

namespace App\Http\Livewire\Dashboards;

use Livewire\Component;

use App\Models\Wishlist;
use App\Models\Order;

class BuyerDashboard extends Component
{
    public $order_count;
    public $wish_count;
    public $total_expenses;
    public function render()
    {
        return view('livewire.dashboards.buyer-dashboard');
    }

    public function mount()
    {
        $user_id = auth()->user()->id;
        $this->order_count = Order::where('buyer_id', $user_id)->count();
        $this->wish_count = Wishlist::where('buyer_id', $user_id)->count();
        $this->total_expenses = Order::where('buyer_id', $user_id)->sum('total');
        
    }


}

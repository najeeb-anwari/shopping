<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;
use App\Models\Order;
use App\Models\Role;

class OrderList extends Component
{
    public $orders;
    
    public function render()
    {
        if(in_array(auth()->user()->role_id, [Role::IS_SELLER, Role::IS_ADMIN])){
            return view('livewire.orders.order-list')->extends('layouts.app')->section('content');

        }
        return view('livewire.orders.order-list')->extends('layouts.buyer')->section('content');
    }

    public function mount() {
        $this->orders = Order::all();    
    }
}

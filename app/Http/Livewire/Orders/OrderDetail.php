<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;
use App\Models\Order;
use App\Models\Role;

class OrderDetail extends Component
{
    protected $rules = [
        'order.status' => ['required'],
    ];

    public $order;
    public $billing;
    public $shipping;
    public $items;
    
    public function render()
    {   
        if(in_array(auth()->user()->role_id, [Role::IS_SELLER, Role::IS_ADMIN])){
            return view('livewire.orders.order-detail')->extends('layouts.app')->section('content');
        }
        return view('livewire.orders.order-detail')->extends('layouts.buyer')->section('content');


    }

    public function mount(Order $order){

        $this->order = $order;
        $this->billing = $order->billing;
        $this->shipping = $order->shipping;
        $this->items = $order->items;
    }
    
    public function updatedOrderStatus($value) {
        $this->order->save();
    }
}

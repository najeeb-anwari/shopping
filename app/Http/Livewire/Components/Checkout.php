<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Order; 
use App\Models\OrderItem; 
use App\Models\Billing;
use App\Models\Shipping;
use App\Models\Payment; 

class Checkout extends Component
{
    
    public $cart;
    public Order $order;
    public OrderItem $orderItem;
    public Billing $billing;
    public Shipping $shipping;
    public Payment $payment;
    public $sameShippingInfo = false;
    public $check;
    protected $rules = [
        'billing.first_name' => 'required|min:3|string', 
        'billing.last_name'  => 'required|min:3|string', 
        'billing.delivery_address'  => 'required|min:3|string', 
        'billing.city'  => 'required|min:3|string', 
        'billing.phone'  => 'required|min:10|max:10', 
        'shipping.first_name' => 'required|min:3|string', 
        'shipping.last_name'  => 'required|min:3|string', 
        'shipping.delivery_address'  => 'required|min:3|string', 
        'shipping.city'  => 'required|min:3|string', 
        'shipping.phone'  => 'required|min:3|string', 
        'payment.method'  => 'required', 
        'check' => '',

    ];
    
    public function render()
    {
        return view('livewire.components.checkout')->extends('layouts.buyer')->section('content');
    }

    public function mount(){
        $this->cart = auth()->user()->cart;
        $this->order = new Order();
        $this->billing = new Billing();
        $this->shipping = new Shipping();
        $this->payment = new Payment();
    }
    public function updated() {
        $this->validateMultiple(array_keys($this->rules));
        // $this->validateOnly($propertyBillingFirst_name);
    }


    private function validateMultiple($fields ){
        $validated = [];
        foreach($fields as $field){
            $validatedData = $this->validateOnly( $field);
            $validated[ key($validatedData) ] = current($validatedData);
        }
        return $validated;
    }

    public function setPaymentMethod($method) {
        $this->payment->method = $method;
        
         
    }
    public function placeOrder() {
        $this->validate();
        $this->order->buyer_id = auth()->user()->id;
        $this->order->total = 0;
        $this->order->save();
        $total = 0;
        foreach ($this->cart as $item) {
            $this->orderItem = new OrderItem();
            $this->orderItem->quantity = $item->quantity;
            $this->orderItem->product_id = $item->product_id;
            $this->orderItem->order_id = $this->order->id;
            $total += $item->product->price * $item->quantity;
            $this->orderItem->save();
        }

        $this->order->total =  $total;
        $this->billing->order_id = $this->order->id;
        $this->billing->save();
        $this->shipping->order_id = $this->order->id;
        $this->shipping->save();
        $this->payment->order_id = $this->order->id;
        if($this->payment->method == "Credit / Debit Card"){
            $this->payment->payment_id = 1;
        }
        else {
            $this->payment->payment_id = 2;
        }
        $this->payment->save();
        $this->order->save();
        Cart::where('buyer_id', auth()->user()->id)->delete();
        $this->emit('freshCart');
        session()->flash('info','The country have been added successful.');
        return redirect('/orders/'. $this->order->id);

    }
    public function updatingCheck() {
        $this->sameShippingInfo = !$this->sameShippingInfo;
        if($this->sameShippingInfo){
            $this->shipping->first_name = $this->billing->first_name;
            $this->shipping->last_name = $this->billing->last_name;
            $this->shipping->delivery_address = $this->billing->delivery_address;
            $this->shipping->city = $this->billing->city;
            $this->shipping->phone = $this->billing->phone;
        }
        else {
            $this->shipping->first_name ='';
            $this->shipping->last_name = '';
            $this->shipping->delivery_address = '';
            $this->shipping->city = '';
            $this->shipping->phone = '';
        }

    }

    public function updatingPaymentMethod($value) {
        $this->payment->method = $value;
    }
}

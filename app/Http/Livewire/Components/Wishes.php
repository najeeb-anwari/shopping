<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Wishlist;
class Wishes extends Component
{
    protected $listeners = [
        'refreshWishes' => '$refresh',
    ];
    
    public $wishes;
    public function render()
    {
        return view('livewire.components.wishes')->extends('layouts.buyer')->section('content');
    }

    function mount(){
        $this->wishes = Wishlist::where([
            'buyer_id' => auth()->user()->id,
        ])->get();
    }

}

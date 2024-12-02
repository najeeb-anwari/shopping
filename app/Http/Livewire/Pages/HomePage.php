<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class HomePage extends Component
{
    // public $clothes = $categories=Category::latest()->take(3)->get();;
    public $first_category;
    public $second_category;
    public $seventh_category;


    public function render()
    {
        return view('livewire.pages.home-page')->extends('layouts.buyer')->section('content');
    }

    public function mount()
    {
        $this->first_category  = Category::where('id', 1)->first();
        $this->second_category  = Category::where('id', 2)->first();
        $this->seventh_category  = Category::where('id', 7)->first();

    }

}

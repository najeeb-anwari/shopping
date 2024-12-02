<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\Category;

class Footer extends Component
{
    public $categories;
    
    public function render()
    {
        return view('livewire.layouts.footer');
    }

    public function mount()
    {
        $this->categories = Category::take(4)->get();
    }
}

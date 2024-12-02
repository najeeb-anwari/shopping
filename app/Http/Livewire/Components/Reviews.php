<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Review;

class Reviews extends Component
{
    protected $listeners = [
        'freshReview' => 'freshReview',
    ];

    public $product_id;
    public $reviews;

    public function render()
    {
        return view('livewire.components.reviews');
    }

    public function mount($product_id)
    {
        $query = Review::where('product_id', $this->product_id);
        $this->product_id = $product_id;
        $this->reviews = $query->get();
        $this->rating_average = $query->average('rating');
        $this->total_reviews = $query->count('rating');
    }
    function freshReview() {
        $this->mount($this->product_id);
    }
}

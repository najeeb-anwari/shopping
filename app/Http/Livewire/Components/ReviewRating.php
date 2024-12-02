<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Review;

class ReviewRating extends Component
{
    public $rating_average;
    public $total_reviews;

    public function render()
    {
        return view('livewire.components.review-rating');
    }

    public function mount($product_id){
        
        $query = Review::where('product_id', $product_id);
        $this->rating_average = round($query->average('rating'));
        $this->total_reviews = $query->count('rating');
    }

}

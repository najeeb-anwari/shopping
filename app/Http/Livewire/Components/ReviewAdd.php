<?php

namespace App\Http\Livewire\Components;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Review;

class ReviewAdd extends Component
{
    use AuthorizesRequests;
    public $rules = [
        'review.comment' => ['required'],
        'review.rating' => ['required'],
        'review.product_id' => ['required'],
        'review.buyer_id' => ['required'],
    ];
    public $product_id;
    public $review;

    public function render()
    {
        return view('livewire.components.review-add');
    }

    public function mount($product_id)
    {
        $this->review = new Review();
        $this->product_id = $product_id;
    }

    public function addReview() {
        $this->authorize('create', Review::class);
        $this->review->buyer_id = auth()->user()->id;
        $this->review->product_id = $this->product_id;
        $this->validate();
        $this->review->save();
        $this->mount($this->product_id);
        $this->emit('freshReview');
    }
}

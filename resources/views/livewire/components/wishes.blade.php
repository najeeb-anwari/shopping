<div class="container my-5" style="min-height: 50vh;">
    <div class="row mb-3">
        <div class="col-12">
            <div class="title text-center">
                <h4>My Wishlist</h4>
            </div>
        </div>
    </div>



    @if($wishes->isNotEmpty())
        <div class="row g-4">
            @foreach($wishes as $wish)
            <div class="col-md-3">
                @livewire('products.buyer-product-item', ['product' => $wish->product], key($wish->id))
            </div>
            @endforeach

        </div>
    @else
    <div class="alert alert-danger"> No Product is Added to Wishlist Yet !!!</div>
    @endif

</div>
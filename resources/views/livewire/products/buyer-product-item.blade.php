<div class="item ">
    <div class="product-box common-cart-box">
        <div class="product-img common-cart-img">
            <img src="{{ asset('storage/'. $product->images->first()->path . '/' . $product->images->first()->name)  }}" alt="product-img">
            <div class="hover-option">
                <div class="add-cart-btn">
                    <a wire:click="$emit('addCart',{{ $product->id }})" class="btn btn-primary">Add To Cart</a>
                </div>
                <ul class="hover-icon">
                    <li>
                    @if($wishedByBuyer)
                        <a wire:click.prevent="removeWish" href="#" class="bg-danger"><i class="fa fa-heart" title="Add to Wishlist"></i></a>
                    
                    @else
                        <a wire:click.prevent="addWish" href="#"  class="bg-dark"><i class="fa fa-heart" title="Add to Wishlist"></i></a>
                    @endif
                    </li>
                    <li><a href="/products/{{ $product->id }}"  title="View Product" ><i
                                class="fa fa-eye"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product-info common-cart-info text-center">
            <a href="/products/{{ $product->id }}" class="cart-name">{{ $product->name }}</a>
            @livewire('components.review-rating', ['product_id' => $product->id])
            <p class="cart-price">@if($product->old_price) <del><span class="h5">؋</span> {{ $product->old_price }}</del>  @endif<span class="h5">؋</span> {{ $product->price }}</p>
        </div>
    </div>
</div>
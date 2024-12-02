<div class="header-cart">
    <a href="/shopping/cart">
        <div class="cart-icon">
            <img src="/public_content/image/cart-icon.png" alt="cart-icon">
            <span>{{ count($items) }}</span>
        </div>
        <i class="fa fa-angle-down"></i>
    </a>
    <div class="cart-box">
        <div class="cart-info">
            @foreach($items as $item)
            @php $subTotal += $item->quantity * $item->product->price; @endphp
            <div class="cart-prodect d-flex">
                <div class="cart-img">
                    <img src="{{ asset('storage'. $item->product->images->first()->path . '/' . $item->product->images->first()->name)  }}" alt="cart-img">
                </div>
                <div class="cart-product">
                    <a href="index_2.html#">{{$item->product->name}}</a>
                    <p>{{ $item->quantity }} x <span class="h5">؋</span> {{$item->product->price}}</p>
                </div>
                <a wire:click.prevent="deleteItem({{ $item->id }})" href="#" class=" d-flex align-items-center"><i
                        class="bi bi-trash text-danger"></i></a>
            </div>
            @endforeach
            
        </div>
        <div class="price-prodect d-flex align-items-center justify-content-between">
            <p class="total">total</p>
            <p class="total-price"><span class="h5">؋</span> {{$subTotal}}</p>
        </div>
        <div class="">
            <a href="/shopping/cart" class="btn btn-primary">View Cart</a>
        </div>
    </div>
</div>

    
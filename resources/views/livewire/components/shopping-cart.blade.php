@push('title', 'Shopping Cart')
<div>

    <!-- Start Cart Section -->
    <section class="cart-section pt_large">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-table table-responsive card">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>
                                        <p>Item</p>
                                    </th>
                                    <th>
                                        <p>Product Name</p>
                                    </th>
                                    <th>
                                        <p>Price</p>
                                    </th>
                                    <th>
                                        <p>Quantity</p>
                                    </th>
                                    <th>
                                        <p>Subtotal</p>
                                    </th>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $sub_total = 0; @endphp
                            @foreach($cart as $item)
                                <tr>
                                    
                                    <td class="row-img"><img width="150" src="{{ asset('storage'. $item->product->images->first()->path . '/' . $item->product->images->first()->name)  }}" alt="cart-img"></td>
                                    <td class="product-name" data-title="Product"><a href="cart_2.html#">{{ $item->product->name }}</a></td>
                                    <td class="product-price" data-title="Price">
                                        <p><span class="h5">؋</span> {{ $item->product->price }}</p>
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity_filter ">
                                            <input wire:change="setQuantity({{$item->id}}, $event.target.value)" value="{{ $item->quantity }}" class="quantity-number qty" type="number" min="1" max="{{$item->product->total_stock}}">
                                            
                                        </div>
                                    </td>
                                    <td class="product-total" data-title="Subprice">
                                        <p><span class="h5">؋</span> {{ $item->product->price * $item->quantity }}</p>
                                    </td>
                                    <td class="row-close close-2" data-title="product-remove"><a wire:click.prevent="$emit('deleteItem',{{ $item->id }})"  href="#"><i
                                                class="bi bi-trash"></i></a></td>
                                </tr>
                                @php $sub_total +=  $item->product->price * $item->quantity @endphp
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="12">
                                        <ul class="table-btn">
                                            <li><a href="/" class="btn btn-secondary"><i
                                                        class="fa fa-chevron-left"></i>Continue Shopping</a></li>
                                            
                                        </ul>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Section -->


    <!-- Start Cart Box Section -->
    <section class="cart-box-section pb_large">
        <div class="container">
            <div class="row justify-content-end">

                <div class="col-lg-4 col-md-6">
                    <div class="cart-inner-box box-2 text-center card">
                        <div class="ci-title">
                            <h6>Cart Total</h6>
                        </div>
                        <div class="ci-caption">
                            <ul>
                                <li>Subtotal <span><span class="h5">؋</span> {{ $sub_total }}</span></li>
                                <li>Shipping <span>Free</span></li>
                                <li>Total <span><span class="h5">؋</span> {{ $sub_total }}</span></li>

                            </ul>
                        </div>
                        <div class="ci-btn">
                            <a href="/shopping/checkout" class="btn btn-primary btn-block rounded-0">Proceed to
                                Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Box Section -->
</div>




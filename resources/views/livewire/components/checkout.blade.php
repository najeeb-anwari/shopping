@push('styles')

@endpush

<div class="container my-5">


    <div class="row">
        <div class="col-md-8">
            
            <section class="card card-body mb-4">

                <div class="card-title d-flex justify-content-between align-items-center"  data-bs-toggle="collapse"
                    aria-expanded="true" data-bs-target="#billingCollapse" role="button">
                    <h3>Billing</h3>
                    <div class="bi bi-chevron-down"></div>
                </div>
                <div class="collapse show " id="billingCollapse">
                    <div class="text-muted mb-3">Enter your billing information</div>
                    <div class="form-group">
                        <div class="row g-4 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input wire:model="billing.first_name" type="text" class="form-control @error('billing.first_name') is-invalid  @enderror">
                                @error('billing.first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input wire:model="billing.last_name" type="text" class="form-control @error('billing.last_name') is-invalid  @enderror">
                                @error('billing.last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
                            </div>
                                
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Delivery Address</label>
                            <input wire:model="billing.delivery_address" type="text" class="form-control @error('billing.delivery_address') is-invalid  @enderror">
                                @error('billing.delivery_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
                        </div>
                        <div class="row g-4 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input wire:model="billing.city" type="text" class="form-control @error('billing.city') is-invalid  @enderror">
                                @error('billing.city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input wire:model="billing.phone" type="text" class="form-control @error('billing.phone') is-invalid  @enderror">
                                @error('billing.phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-check" >
                        <label>Shipping Address is same as above
                            <input wire:model="check" class="defult-check" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>    
                    
            </section>

            <section class="card card-body mb-4">
                <div class="card-title d-flex justify-content-between align-items-center"  data-bs-toggle="collapse"
                    aria-expanded="true" data-bs-target="#shippingCollapse" role="button">
                    <h3>Shipping</h3>
                    <div class="bi bi-chevron-down"></div>
                </div>

                <div class="collapse show " id="shippingCollapse">
                    <div class="text-muted mb-3">Choose where you want to recived your product.</div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">First Name</label>
                            <input wire:model="shipping.first_name" type="text" class="form-control @error('shipping.first_name') is-invalid  @enderror">
                            @error('shipping.first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @else 
                                <span class="valid-feedback" role="alert">
                                    <strong>{{ "Looks Good!" }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last Name</label>
                            <input wire:model="shipping.last_name" type="text" class="form-control @error('shipping.last_name') is-invalid  @enderror">
                            @error('shipping.last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @else 
                                <span class="valid-feedback" role="alert">
                                    <strong>{{ "Looks Good!" }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        
                        <label class="form-label">Delivery Address</label>
                        <input wire:model="shipping.delivery_address" type="text" class="form-control @error('shipping.delivery_address') is-invalid  @enderror">
                        @error('shipping.delivery_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else 
                            <span class="valid-feedback" role="alert">
                                <strong>{{ "Looks Good!" }}</strong>
                            </span>
                        @enderror
                        
                        
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">City</label>
                            <input wire:model="shipping.city" type="text" class="form-control @error('shipping.city') is-invalid  @enderror">
                            @error('shipping.city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @else 
                                <span class="valid-feedback" role="alert">
                                    <strong>{{ "Looks Good!" }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone</label>
                            <input wire:model="shipping.phone" type="text" class="form-control @error('shipping.phone') is-invalid  @enderror">
                            @error('shipping.phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @else 
                                <span class="valid-feedback" role="alert">
                                    <strong>{{ "Looks Good!" }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>


            </section>

            <section class="card card-body mb-4" >
                <div class="card-title mb-2 d-flex justify-content-between align-items-center"  data-bs-toggle="collapse"
                    aria-expanded="true" data-bs-target="#paymentCollapse" role="button">
                    <h3>Payment</h3>
                    <div class="bi bi-chevron-down"></div>
                </div>

                <div class="collapse show " id="paymentCollapse">
                    <div class="text-muted mb-3">Choose your payment method.</div>
                    @error('payment.method')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        
                    @enderror
                    <div wire:ignore class="accordion accordion-with-radio" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                                    <div class="form-check">
                                        <input wire:model="payment.method" value="Master Card" class="form-check-input" type="radio" name="paymentFlexRadioDefault"
                                                id="debitCardFlexRadioDefault">
                                        <label class="form-check-label mb-0" for="debitCardFlexRadioDefault">
                                            Master Card
                                        </label>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Card Number</label>
                                            <input type="text" class="form-control"  min="16" max="16" placeholder="5555 5555 5555 5555">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Name on Card</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Expiry Date</label>
                                                <input type="text" class="form-control" placeholder="MM/YY">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">CVV Code</label>
                                                <input type="text" class="form-control" placeholder="025">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="form-check">
                                        <input wire:model="payment.method" value="Cash on Delivery"  class="form-check-input" type="radio" name="paymentFlexRadioDefault"
                                            id="cashOnDeliveryFlexRadioDefault">
                                        <label class="form-check-label mb-0" for="cashOnDeliveryFlexRadioDefault">
                                            Cash on Delivery
                                        </label>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="d-flex align-items-center">
                                        <img width="50" class="me-3" src="/assets/images/cash-on-delivery-logo.png"
                                            alt="...">
                                        Pay with cash when your order is delivered.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </section>
            <div class="place-order-btn">
                <a wire:click.prevent="placeOrder" href="#" class="btn btn-secondary">Place Oreder</a>
            </div>
        </div>
        <div class="col-md-4">
            
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="mb-4">Order Summary</h5>
                    @php $sub_total = 0; @endphp 
                    @foreach($cart as $item)
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex px-0">
                            <a href="{{ $item->product->id }}" class="me-3">
                                <img src="{{ asset('storage'. $item->product->images->first()->path . '/' . $item->product->images->first()->name)  }}" class="rounded" width="60" alt="...">
                            </a>
                            <div>
                                <h6>{{ $item->product->name }}</h6>
                                <div>{{ $item->quantity . " x $" . $item->product->price }}</div>
                            </div>
                            <div class="text-end ms-auto">${{ $item->quantity * $item->product->price }}</div>
                        </div>
                    </div>
                    @php $sub_total +=  $item->product->price * $item->quantity @endphp
                    @endforeach
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Price</h6>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Sub Total :</div>
                        <div class="col-4">${{ $sub_total }}</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Shipping :</div>
                        <div class="col-4">Free</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Tax(0%) :</div>
                        <div class="col-4">$0</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end">
                            <strong>Total :</strong>
                        </div>
                        <div class="col-4">
                            <strong>${{ $sub_total }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')

@endpush
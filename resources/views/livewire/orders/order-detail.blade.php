<div class="container my-5">


    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-5 d-flex align-items-center justify-content-between">
                        <span>Order No : <a href="#">#{{ $order->id }}</a></span>
                        <span class="badge bg-success">{{ $order->status }}</span>
                    </div>
                    <div class="row mb-5 g-4">
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Order Created at</p>
                            {{ $order->created_at->diffForHumans() }}
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Name</p>
                            {{ $order->customer->name }}
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Email</p>
                            {{ $order->customer->email }}
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Payment Method</p>
                            {{ $order->payment->method }}
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex flex-column gap-3">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Shipping Address</h5>
                                        <a href="#">Edit</a>
                                    </div>
                                    <div>Name: Home</div>
                                    <div>{{ $shipping->first_name . " " . $shipping->first_name }}</div>
                                    
                                    <div>{{ $shipping->delivery_address . "/" . $shipping->city }}</div>
                                    <div>
                                        <i class="bi bi-telephone me-2"></i> {{ $shipping->phone }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex flex-column gap-3">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Billing Address</h5>
                                        <a href="#">Edit</a>
                                    </div>
                                    <div>Name: Workplace</div>
                                    <div>{{ $billing->first_name . " " . $billing->first_name }}</div>
                                    <div>{{ $billing->delivery_address . "/" . $billing->city }}</div>
                                    <div>
                                        <i class="bi bi-telephone me-2"></i> {{ $billing->phone }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card widget">
                <h5 class="card-header">Order Items</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-custom mb-0">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item )
                                <tr>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('storage'. $item->product->images->first()->path . '/' . $item->product->images->first()->name)  }}" class="rounded"
                                                width="60" alt="...">
                                        </a>
                                    </td>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>${{ $item->product->price }}</td>
                                    <td>${{ $item->quantity * $item->product->price }}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Price</h6>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Sub Total :</div>
                        <div class="col-4">{{ $order->total }}</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Shipping :</div>
                        <div class="col-4">Free</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Tax(18%) :</div>
                        <div class="col-4">$0</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end">
                            <strong>Total :</strong>
                        </div>
                        <div class="col-4">
                            <strong>${{ $order->total }}</strong>
                        </div>
                    </div>
                </div>
            </div>
            @can('seller_access')
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-4">Status</h6>
                    <div class="col-md-12">
                        <label class="form-label">Order Status</label>
                        <select wire:model="order.status" class="form-select" aria-label="Default select example">
                            <option value="Requested">Requested</option>
                            <option value="Shipped">Shipped</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
</div>

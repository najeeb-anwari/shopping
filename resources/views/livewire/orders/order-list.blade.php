<div class="my-5 container" style="min-height: 50vh;">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Orders List</h3>
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Customer Name</th>
                                <th>Payment Info</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td><a href="/orders/{{ $order->id }}"><strong>#{{ $order->id }}</strong></a></td>
                                <td>{{ $order->customer->name }}</td>
                                <td>{{ $order->payment->method }}</td>
                                <td>
                                    ${{ $order->total }}
                                </td>
                                <td><span class="badge bg-warning">{{$order->status}}</span></td>
                                <td><a class="btn btn-sm btn-outline-info" href="/orders/{{ $order->id }}"><i class="bi bi-eye"></i> View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- Row end  -->
</div>
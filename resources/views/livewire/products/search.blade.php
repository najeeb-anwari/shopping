<div class="container my-5" style="min-width:50vh">
    @if($products->isNotEmpty())
        <div class="row g-4">
            @foreach($products as $product)
            <div class="col-lg-3">
                @livewire('products.buyer-product-item', ['product' => $product], key($product->id))
            </div>
            @endforeach

        </div>
    @else
    <div class="alert alert-danger">Product Was Not Found !!!</div>
    @endif
    
    <nav class="mt-5" aria-label="Page navigation example">
        {{ $products->render() }}
    </nav>
</div>

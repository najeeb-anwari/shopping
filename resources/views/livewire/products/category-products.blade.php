<div class="container my-5" style="min-height: 50vh;">
    <div class="row mb-3">
        <div class="col-12">
            <div class="title text-center">
                <h4>{{  $category->name }}</h4>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            @if($products->isNotEmpty())
                <div class="row g-4">
                    @foreach($products as $product)
                    <div class="col-md-3">
                        @livewire('products.buyer-product-item', ['product' => $product], key($product->id))
                    </div>
                    @endforeach

                </div>
            @else
            <div class="alert alert-danger"> No Product is Added to This Category Yet !!!</div>
            @endif
        </div>

    </div>
       

</div>
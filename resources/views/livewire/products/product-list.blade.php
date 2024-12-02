<div class="container my-5" style="min-height: 50vh;">
    <div class="row mb-3">
        <div class="col-12">
            <div class="title text-center">
                <h4>
                    @if($category != null)
                        {{  $category->name }} 
                    @else 
                    All Products 
                    @endif</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-9">
            @if($products->isNotEmpty())
                <div class="row g-4">
                    @foreach($products as $product)
                    <div class="col-md-4">
                        @livewire('products.buyer-product-item', ['product' => $product], key($product->id))
                    </div>
                    @endforeach

                </div>
            @else
            <div class="alert alert-danger"> No Product is Added Yet !!!</div>
            @endif
        </div>

    </div>
        

</div>
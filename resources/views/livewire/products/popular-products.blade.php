<div class="mt-5">
    <div class="row">
        <div class="col-12">
            <div class="title text-center">
                <h4><a href="/categories/{{ $category->id }}/products">{{ $category->name }}</a></h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class=" products-slider4 same-nav owl-carousel owl-theme" data-margin="30" data-dots="false"
                data-nav="true">
                @foreach($products as $product)
                
                    @livewire('products.buyer-product-item', ['product' => $product], key($product->id))
                @endforeach

            </div>
        </div>
    </div>
</div>
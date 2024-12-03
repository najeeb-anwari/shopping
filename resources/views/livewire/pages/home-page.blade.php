<div class="my-5 container">
    @if($first_category)
        @livewire('products.popular-products', ['category' => $first_category])
    @endif
    @if($second_category)
        @livewire('products.popular-products', ['category' => $second_category])
    @endif
    @if($third_category)
        @livewire('products.popular-products', ['category' => $third_category])

    @endif

</div>

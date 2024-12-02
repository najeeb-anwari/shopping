<div class="my-5 container">
    @if($first_category)
        @livewire('products.popular-products', ['category' => $first_category])
    @endif
    @if($second_category)
        @livewire('products.popular-products', ['category' => $second_category])
    @endif
    @if($seventh_category)
        @livewire('products.popular-products', ['category' => $seventh_category])

    @endif

</div>

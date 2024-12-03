<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card card-hover">
        <a href="/products/{{ $product->id }}">

            <img src="{{ asset('storage/'. $product->images->first()->path . '/' . $product->images->first()->name)  }}"
                class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <a href="/products/{{ $product->id }}">
                <h6 class="mb-3">{{ $product->name }}</h6>
            </a>
            <div class="d-flex gap-3 mb-3 align-items-center" >
                <del class="text-muted" x-show="{{ $product->old_price ? true : false }}" >؋{{ $product->old_price }}</del>
                <h6 class="mb-0">؋{{ $product->price }}</h6>
            </div>
            @livewire('components.review-rating', ['product_id' => $product->id])
            @can('modify_cart')
            <div class="d-flex">
                <button wire:click="$emit('addCart',{{ $product->id }})" class="btn btn-primary btn-sm">Add to
                    <i class="bi bi-cart"></i></button>
                @if($wishedByBuyer)
                    <a wire:click="removeWish" href="#" class="btn ms-auto">
                        <i class="bi bi-heart-fill text-danger"></i>
                    </a>
                @else
                    <a wire:click="addWish" href="#" class="btn ms-auto">
                        <i class="bi bi-heart"></i>
                    </a>
                @endif
            </div>
            @endcan
            @can('update', $product)
            <div class="d-flex">
                <a href="/products/{{ $product->id }}/edit" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil"></i> Edit Product</a>
            </div>
            @endcan
        </div>

    </div>
</div>

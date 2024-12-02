<div class="container my-5">

    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="slick-wrapper mx-3" wire:ignore>
                                <div class="slider-for mb-3">
                                    @foreach($product->images as $image)
                                    <div class="slick-slide-item" wire:key="{{ $image->id }}">
                                        <img src="{{ asset('storage'. $image->path . '/' . $image->name) }}" class="w-100 rounded" alt="image">
                                    </div>
                                    @endforeach
                                   
                                </div>
                                <div class="slick-nav-wrapper">
                                    <div class="slider-nav">
                                        @foreach($product->images as $image)
                                        <div class="slick-slide-item m-2" wire:key="{{ $image->id }}">
                                            <img src="{{ asset('storage'. $image->path . '/' . $image->name) }}" class="w-100 rounded"
                                                alt="image">
                                        </div>
                                        @endforeach
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex justify-content-between align-items-start mt-4 mt-md-0">
                                <div>
                                    <div class="small text-muted mb-2">{{ $product->category->name }} Products</div>
                                    <h2>{{ $product->name }}</h2>
                                    <p>
                                        @if($product->total_stock > 0)
                                            <span class="badge bg-success">In Stock</span>
                                        @else
                                            <span class="badge bg-danger">Out of Stock</span>
                                        @endif
                                    </p>
                                    <p class="my-3">{{ $product->description }}</p>
                                    <div class="d-flex gap-3 mb-3 align-items-center">
                                        <h4 class="text-muted mb-0">
                                            <del><span class="h5">؋</span> {{ $product->old_price }}</del>
                                        </h4>
                                        <h4 class="mb-0"><span class="h5">؋</span> {{ $product->price }}</h4>
                                    </div>
                                    <div class="d-flex gap-2 mb-3">
                                        @foreach(range(1,5) as $i)
                                            @if($i <= $rating_average)
                                                
                                                <i class="bi bi-star-fill icon-lg text-warning"></i>
                                            @else
                                                <i class="bi bi-star-fill icon-lg text-muted"></i>
                                            @endif

                                        @endforeach
                                        <span>({{ $total_reviews }})</span>
                                    </div>
                                    
                                    @can('modify_cart')
                                    <form  class="mt-4">
                                        <div class="row row-cols-lg-auto">
                                            <div class="col-12">
                                            <label for="quantity">Quantity: </label>
                                                <div class="input-group">
                                                    <input   wire:model="quantity"  type="number" class="form-control" min="1" max="{{ $product->total_stock }}">
                                                    <button wire:click.prevent="addToCart( {{$product->id}},{{$quantity}} )" class="btn btn-sm btn-primary ">Add To
                                                        Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    @endcan
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                                aria-controls="reviews" aria-selected="false">Reviews ({{ $total_reviews }})</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="specification-tab" data-bs-toggle="tab" href="#specification"
                                role="tab" aria-controls="specification" aria-selected="true">Specifications</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-5">
                                        <div class="display-6">{{ ($rating_average ? $rating_average . " Stars" : false)   ?: "Unrated"}}</div>
                                        <div class="d-flex gap-2 my-3">
                                            @foreach(range(1,5) as $i)
                                                @if($i <= $rating_average)
                                                    
                                                    <i class="bi bi-star-fill icon-lg text-warning"></i>
                                                @else
                                                    <i class="bi bi-star-fill icon-lg text-muted"></i>
                                                @endif

                                            @endforeach
                                            <span>({{ $total_reviews }})</span>
                                        </div>
                                    </div>
                                    @livewire('components.reviews', ['product_id' => $product->id])
                                    @can('create', App\Models\Review::class)
                                        @livewire('components.review-add', ['product_id' => $product->id])
                                    @endcan
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade  " id="specification" role="tabpanel"
                            aria-labelledby="specification-tab">
                            @if($product->specification == null)
                                @can('seller_access')
                                    @livewire('products.product-specification', ['product_id' => $product->id])    
                                @else
                                <div class="alert alert-info">
                                    No Specification is Added yet
                                </div>
                                @endcan
                            @else
                                <div class="tab-caption">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td colspan="1">Brand</td>
                                                    <td>{{$product->specification->brand}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1">Model</td>
                                                    <td>{{$product->specification->model}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1">Type</td>
                                                    <td>{{$product->specification->type}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif

                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@push('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Slick -->
<script src="/libs/slick/slick.min.js"></script>
<script src="/dist/js/examples/product-detail.js"></script>

@endpush

@push('styles')

    <!-- Slick -->
    <link rel="stylesheet" href="/libs/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="/libs/slick/slick-theme.css">
@endpush
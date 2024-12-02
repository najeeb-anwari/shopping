@push('title', 'Products')
@push('styles')
<link rel="stylesheet" href="/libs/range-slider/css/ion.rangeSlider.min.css" type="text/css">

@endpush
<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="d-none d-md-flex">All Products</div>
                        <div class="d-md-flex gap-4 align-items-center " >
                            <form class="mb-3 mb-md-0 " style="min-width:200px;">
                                <div class="row g-3  align-items-center">
                                    <div class="col-md-6" style="width:50%">
                                        <div >Per Page:</div> 
                                    </div>
                                    <div class="col-md-6">
                                        <select wire:model="perPage" class="form-select">
                                            <option value="6">6</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                            <option value="24">24</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @can('modify_products')
                        <a href="/products/create" class="btn btn-primary btn-icon ms-auto">
                            <i class="bi bi-plus-circle"></i> Add Product
                        </a>
                        @endcan
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach($products as $product)
                    @livewire('products.product-item', ['product' => $product], key($product->id))
                @endforeach
            </div>
            
            <nav class="mt-5" aria-label="Page navigation example">
                {{ $products->links() }}
            </nav>
        </div>
        <div class="col-md-4">
            <h5 class="mb-4">Filter Products</h5>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        aria-expanded="true" data-bs-target="#keywordsCollapseExample" role="button">
                        <div>Keywords</div>
                        <div class="bi bi-chevron-down"></div>
                    </div>
                    <div class="collapse show mt-4" id="keywordsCollapseExample">
                        <div class="input-group">
                            <input wire:model="search" type="text" class="form-control" placeholder="Phone, Headphone, Shoe ...">
                            <button class="btn btn-outline-light" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        aria-expanded="true" data-bs-target="#categoriesCollapse" role="button">
                        <div>Categories</div>
                        <div class="bi bi-chevron-down"></div>
                    </div>
                    <div class="collapse show mt-4" id="categoriesCollapse">
                        <form>
                            <select multiple wire:model="categoryFilters" class="form-select" size="10" aria-label="size 3 select example" name="categoryFilters">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@push('scripts')
<!-- Range slider -->
<script src="/libs/range-slider/js/ion.rangeSlider.min.js"></script>

<!-- Examples -->
<script src="/dist/js/examples/products.js"></script>
@endpush
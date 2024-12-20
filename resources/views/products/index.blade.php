@extends('layouts.app')

@section('title','Products')

@section('styles')
<link rel="stylesheet" href="/libs/range-slider/css/ion.rangeSlider.min.css" type="text/css">
@endsection

@section('content')

<div>
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="d-none d-md-flex">All Products</div>
                        <div class="d-md-flex gap-4 align-items-center">
                            <form class="mb-3 mb-md-0">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option>Sort by</option>
                                            <option value="desc">Desc</option>
                                            <option value="asc">Asc</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="/products/create" class="btn btn-primary btn-icon ms-auto">
                            <i class="bi bi-plus-circle"></i> Add Product
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="/assets/images/products/1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Headphone</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <del class="text-muted">$800</del>
                                <h4 class="mb-0">$499,90</h4>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-muted"></i>
                                <span>(25)</span>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="/assets/images/products/3.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Digital clock</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$1.190,90</h4>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <span>(10)</span>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="/assets/images/products/5.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Glasses</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$1.599,00</h4>
                            </div>
                            <p>&nbsp;</p>
                            <div class="d-flex">
                                <a href="#" class="btn btn-success">In cart (2)</a>
                                <a href="#" class="btn ms-auto text-danger">
                                    <i class="bi bi-heart-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="/assets/images/products/6.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Cake</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$10,00</h4>
                            </div>
                            <p>&nbsp;</p>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="/assets/images/products/9.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Perfume</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$30,00</h4>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-muted"></i>
                                <span>(5)</span>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <a href="#">
                            <img src="/assets/images/products/10.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title mb-3">Cookie</h5>
                            </a>
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <h4 class="mb-0">$25,00</h4>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-muted"></i>
                                <i class="bi bi-star-fill text-muted"></i>
                                <span>(8)</span>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn ms-auto text-danger">
                                    <i class="bi bi-heart-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="mt-5" aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
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
                            <input type="text" class="form-control" placeholder="Phone, Headphone, Shoe ...">
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
                        <div class="d-flex flex-column gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                <label class="form-check-label" for="categoryCheck1">
                                    All
                                </label>
                            </div>
                            @foreach($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck{{ $category->id }}">
                                    <label class="form-check-label" for="categoryCheck{{ $category->id }}">
                                        {{ $category->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        aria-expanded="true" data-bs-target="#priceCollapseExample" role="button">
                        <div>Price</div>
                        <div class="bi bi-chevron-down"></div>
                    </div>
                    <div class="collapse show mt-4" id="priceCollapseExample">
                        <input id="price-filter" />
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        aria-expanded="true" data-bs-target="#colorsCollapseExample" role="button">
                        <div>Colors</div>
                        <div class="bi bi-chevron-down"></div>
                    </div>
                    <div class="collapse show mt-4" id="colorsCollapseExample">
                        <div class="color-filter-group d-flex gap-3">
                            <input class="form-check-input" type="checkbox" value="#1fa0c6" aria-label="...">
                            <input class="form-check-input" type="checkbox" checked value="green"
                                aria-label="...">
                            <input class="form-check-input" type="checkbox" checked value="#c61faa"
                                aria-label="...">
                            <input class="form-check-input" type="checkbox" value="#1fc662" aria-label="...">
                            <input class="form-check-input" type="checkbox" value="#9dc61f" aria-label="...">
                            <input class="form-check-input" type="checkbox" checked value="#c67b1f"
                                aria-label="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="/libs/range-slider/js/ion.rangeSlider.min.js"></script>
    <script src="/dist/js/examples/products.js"></script>
@endsection



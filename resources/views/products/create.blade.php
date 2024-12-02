@extends('layouts.app')

@section('title','Products')

@section('styles')

@endsection

@section('breadcrumb')
<div class="mb-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">
                    <i class="bi bi-globe2 small me-2"></i> Dashboard
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
                <a href="/products">
                     Products
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<!-- Row start -->
<div class="row align-items-center">
    <div class="border-0 mb-4">
        <div
            class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
            <h3 class="fw-bold mb-0">Products Add</h3>
            <button type="submit"
                class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
        </div>
    </div>
</div> <!-- Row end  -->
<!-- row starts -->
<div class="row g-3 mb-3">
    <div class="col-xl-8 col-lg-8">
        <div class="card mb-3">
            <div
                class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Basic information</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-6">
                            <label class="form-label"> Product Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Page Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Product Identifier URL</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">https://eBazar.com/</span>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Product Description</label>
                            <textarea id="editor" name="description">
                            </textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-3">
            <div
                class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Images</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label class="form-label">Product Images Upload</label>
                            <small class="d-block text-muted mb-2">Only portrait or square images,
                                2M max and 2000px max-height.</small>
                            <input type="file" id="input-file-to-destroy" class="dropify"
                                data-allowed-formats="portrait square" data-max-file-size="2M"
                                data-max-height="2000">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label w-100">Select Product Color</label>
                            <input type="color" id="color">
                        </div>
                        <div class="col-md-12">
                            <div class="product-cart">
                                <div class="checkout-table table-responsive">
                                    <table id="myCartTable"
                                        class="table display dataTable table-hover align-middle"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="product">Product</th>
                                                <th class="product">Product Tag Name</th>
                                                <th class="quantity">Color</th>
                                                <th class="quantity">Quantity</th>
                                                <th class="quantity">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="product-cart d-flex align-items-center">
                                                        <div class="product-thumb">
                                                            <img src="assets/images/product/upload.png"
                                                                class="img-fluid avatar xl"
                                                                alt="Product">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        placeholder="Product tag name">
                                                </td>
                                                <td>
                                                    <input type="color" class="form-control">
                                                </td>
                                                <td>
                                                    <div class="product-quantity d-inline-flex">
                                                        <input type="number">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic outlined example">
                                                        <button type="button"
                                                            class="btn btn-outline-secondary deleterow"><i
                                                                class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="product-cart d-flex align-items-center">
                                                        <div class="product-thumb">
                                                            <img src="assets/images/product/upload.png"
                                                                class="img-fluid avatar xl"
                                                                alt="Product">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        placeholder="Product tag name">
                                                </td>
                                                <td>
                                                    <input type="color" class="form-control">
                                                </td>
                                                <td>
                                                    <div class="product-quantity d-inline-flex">
                                                        <input type="number">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic outlined example">
                                                        <button type="button"
                                                            class="btn btn-outline-secondary deleterow"><i
                                                                class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="product-cart d-flex align-items-center">
                                                        <div class="product-thumb">
                                                            <img src="assets/images/product/upload.png"
                                                                class="img-fluid avatar xl"
                                                                alt="Product">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        placeholder="Product tag name">
                                                </td>
                                                <td>
                                                    <input type="color" class="form-control">
                                                </td>
                                                <td>
                                                    <div class="product-quantity d-inline-flex">
                                                        <input type="number">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic outlined example">
                                                        <button type="button"
                                                            class="btn btn-outline-secondary deleterow"><i
                                                                class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="product-cart d-flex align-items-center">
                                                        <div class="product-thumb">
                                                            <img src="assets/images/product/upload.png"
                                                                class="img-fluid avatar xl"
                                                                alt="Product">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        placeholder="Product tag name">
                                                </td>
                                                <td>
                                                    <input type="color" class="form-control">
                                                </td>
                                                <td>
                                                    <div class="product-quantity d-inline-flex">
                                                        <input type="number">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic outlined example">
                                                        <button type="button"
                                                            class="btn btn-outline-secondary deleterow"><i
                                                                class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4">
        <div class="">
            <div class="card mb-3">
                <div
                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                    <h6 class="m-0 fw-bold">Pricing Info</h6>
                </div>
                <div class="card-body">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label class="form-label">Product Price Old</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Product Price New</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Product Coupon</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div
                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                    <h6 class="m-0 fw-bold">Categories</h6>
                </div>
                <div class="card-body">
                    <label class="form-label">Categories Select</label>
                    <select class="form-select" size="3" aria-label="size 3 select example" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card">
                <div
                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                    <h6 class="m-0 fw-bold">Inventory Info</h6>
                </div>
                <div class="card-body">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label class="form-label">SKU</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Total Stock Quantity</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div><!-- Row end  -->
@endsection

@section('scripts')
<script src="/libs/ckeditor5/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#editor'));
</script>
<script>
    $(document).ready(function () {
        document.querySelector('.preloader').position = "none";
    });
</script>
@endsection

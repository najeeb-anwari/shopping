
<div>
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
    <!-- Row start -->
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Products Add</h3>
                <button wire:click="store()"
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
                                <input wire:model="product.name" type="text" class="form-control @error('product.name') is-invalid   @enderror">
                                @error('product.name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
                            </div>
                            <div>
                                
                            </div>
                            <div class="col-md-12" >
                                <label class="form-label">Product Description</label>
                                <textarea wire:model="product.description" class="form-control @error('product.description') is-invalid   @enderror" >
                                </textarea>
                                @error('product.description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
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
                    <form  enctype="multipart/form-data">
                        <div class="row g-3 align-items-center" >
                            <div class="col-md-12">
                                <label class="form-label">Product Images Upload</label>
                                <small class="d-block text-muted mb-2">Only portrait or square images,
                                    2M max and 2000px max-height.</small>
                                <input wire:model="images" name="images" type="file" multiple id="input-file-to-destroy" class="form-control @error('images.*') is-invalid   @enderror @error('images') is-invalid   @enderror"
                                    >
                                @error('images.*')
                                    <span class="invalid-feedback">
                                        {{$message}}
                                    </span>
                                @enderror
                                @error('images')
                                    <span class="invalid-feedback">
                                        {{$message}}
                                    </span>
                                @enderror
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
                                <input wire:model="product.old_price"  type="text" class="form-control @error('product.old_price') is-invalid   @enderror">
                                @error('product.old_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Product Price New</label>
                                <input wire:model="product.price" type="text" class="form-control @error('product.price') is-invalid   @enderror">
                                @error('product.price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
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
                        <select wire:model="product.category_id" class="form-control  @error('product.category_id') is-invalid   @enderror" name="category_id">
                            <option value="">Please select a category</option>    
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('product.category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
                                <label class="form-label">Total Stock Quantity</label>
                                <input wire:model="product.total_stock" type="text" class="form-control @error('product.total_stock') is-invalid   @enderror">
                                @error('product.total_stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div><!-- Row end  -->
</div>

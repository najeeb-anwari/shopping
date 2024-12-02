@extends('layouts.app')

@section('title','Categories')

@section('styles')

@endsection

@section('content')
    <!-- Create Category Starts  -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header"> 
                <strong>Add New</strong> Category
            </div>
            <div class="card-body">
                <form class="row" action="/categories" method="post" accept-charset="utf-8">
                    @csrf
                    @method('post')
                    <div class="form-group col-12">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid  @enderror" name="name" placeholder="Category Name" id="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="details" class="form-label">Textarea</label>
                        <textarea name="details" class="form-control @error('name') is-invalid @enderror" id="details" placeholder="Category Details" required>{{ old('details') }}</textarea>
                        @error('details')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
                    <div class="form-group col-12">
                        <button type="submit" class="btn btn-primary"><span class="ladda-label"> <i class="fas fa-check-square-o"></i> Create </span><span class="ladda-spinner"></span></button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <!-- Create Category Ends  -->
@endsection

@section('scripts')

@endsection




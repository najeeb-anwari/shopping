@extends('layouts.app')

@section('title','Categories')

@section('styles')

@endsection

@section('content')
<!-- Create Category Starts  -->
<div class="col-md-4">
    <div class="card">
        <div class="card-header bg-primary"> 
            <strong>Edit</strong> Category
        </div>
        <div class="card-body">
            <form class="row" action="/categories/{{ $category->id }}" method="post" accept-charset="utf-8">
                @csrf
                @method('patch')
                <div class="form-group col-12">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" value="{{ $category->name }}" class="form-control @error('name') is-invalid  @enderror" name="name" placeholder="Category Name" id="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="details" class="form-label">Category Details</label>
                    <textarea rows="3" name="details" class="form-control @error('details') is-invalid @enderror" id="details" placeholder="Category details">{{ $category->details }}</textarea>
                    @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="ladda-label"> <i class="bi bi-check2-square"></i> Update </span><span class="ladda-spinner"></span></button>
                    <a href="/categories" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> Back to List </a>
                </div>

            </form> 
        </div>
    </div>
</div>
<!-- Create Category Ends  -->
@endsection

@section('scripts')

@endsection




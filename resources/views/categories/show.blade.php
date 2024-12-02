@extends('layouts.app')

@section('title','Categories')

@section('styles')

@endsection

@section('content')
<div class="card">
    <div class="card-header bg-primary">Category Details</div>
    <div class="card-body">
        <div class="row  mb-4">
            <div class="col-3">
                <label for="name">Category Name: </label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" readonly value="{{ $category->name }}" id="name">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="details">Category Details: </label>
            </div>
            <div class="col-9">
                <textarea rows="3" type="text" class="form-control" readonly id="details" >{{ $category->details }}</textarea>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="/categories" class="btn btn-secondary">Back to Categories</a>
    </div>

</div>
@endsection

@section('scripts')

@endsection

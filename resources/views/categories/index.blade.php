@extends('layouts.app')

@section('title','Categories')

@section('styles')

@endsection

@section('content')

    <div class="row justify-content-center">
            <!-- Create Category Starts  -->
            <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary">
                    <strong>Add New</strong> Category
                </div>
                <div class="card-body">
                    <form class="row" action="/categories" method="post" accept-charset="utf-8">
                        @csrf
                        @method('post')
                        <div class="form-group mb-3">
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
                            <textarea rows="3" name="details" class="form-control @error('details') is-invalid @enderror" id="details" placeholder="Category details">{{ old('details') }}</textarea>
                            @error('details')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><span class="ladda-label"> <i class="bi bi-plus-circle"></i> Create </span><span class="ladda-spinner"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Create Category Ends  -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary display-8">Categories</div>
                <!-- Card Body Starts-->
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm" id="categories">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>                                    <td>{{ $category->name}}</td>
                                    <td>
                                        <a href="/categories/{{ $category->id}}" class="btn btn-sm btn-outline-info"><i class=" bi bi-eye"></i> View</a>
                                        <a href="/categories/{{ $category->id }}/edit" class="btn btn-success btn-sm" title="Edit"><i class="bi bi-pencil"></i> Edit</a>
                                        <span>
                                            <form style="display:inline;" class="form-inline delete-form" action="/categories/{{ $category->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-outline-danger" type="submit" title="Delete"><i class="bi bi-trash3"></i> Delete</button>
                                            </form>
                                        </span>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card Body Ends -->

            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection

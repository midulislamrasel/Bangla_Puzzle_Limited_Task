@extends('layout.layout')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Edit Category</h1>
        
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="name" class="form-label">Category Name:</label>
                <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

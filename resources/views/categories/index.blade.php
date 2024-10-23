@extends('layout.layout')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-info mb-4 fs-5 fw-bolder text-white">Create New Category</a>

        @if($categories->count())
            <div class="list-group">
                @foreach($categories as $category)
                    <div class="list-group-item d-flex justify-content-between align-items-center mb-2">
                        <span class="fs-4">{{ $category->name }}</span>
                        <div>
                            <a class="btn btn-info text-white me-2" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning" role="alert">
                No categories found.
            </div>
        @endif
    </div>
@endsection

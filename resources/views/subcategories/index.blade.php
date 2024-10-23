@extends('layout.layout')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Subcategories</h1>
        <a href="{{ route('subcategories.create') }}" class="btn btn-primary mb-3">Create New Subcategory</a>

        @if ($subcategories->count())
            <div class="row">
                @foreach ($subcategories as $subcategory)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $subcategory->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Category: {{ $subcategory->category->name }}</h6>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="{{ route('subcategories.edit', $subcategory) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('subcategories.destroy', $subcategory) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning" role="alert">
                No subcategories found.
            </div>
        @endif
    </div>
@endsection



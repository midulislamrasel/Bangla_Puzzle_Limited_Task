@extends('layout.layout')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Create Subcategory</h1>

        <form action="{{ route('subcategories.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Subcategory Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Select Category:</label>
                <select name="category_id" class="form-select" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Subcategory</button>
        </form>
    </div>
@endsection

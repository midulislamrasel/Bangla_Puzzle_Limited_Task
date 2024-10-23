@extends('layout.layout')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Edit Subcategory</h1>

        <form action="{{ route('subcategories.update', $subcategory) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Subcategory Name:</label>
                <input type="text" name="name" value="{{ $subcategory->name }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Select Category:</label>
                <select name="category_id" class="form-select" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Subcategory</button>
        </form>
    </div>
@endsection

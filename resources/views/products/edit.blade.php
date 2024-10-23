@extends('layout.layout')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="name">Product Name:</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="image">Image:</label>
                @if ($product->image)
                    <div class="mb-2">
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="100" class="img-thumbnail">
                    </div>
                @endif
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="old_price">Old Price:</label>
                <input type="number" name="old_price" value="{{ $product->old_price }}" step="0.01" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="new_price">New Price:</label>
                <input type="number" name="new_price" value="{{ $product->new_price }}" step="0.01" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-select" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="subcategory_id">Subcategory:</label>
                <select name="subcategory_id" class="form-select" required>
                    @foreach($categories as $category)
                        @foreach($category->subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                {{ $subcategory->name }}
                            </option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection

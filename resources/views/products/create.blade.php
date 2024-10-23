@extends('layout.layout')

@section('content')
    <div class="container">
        <h1 class="my-4">Add New Product</h1>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Product Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(event)">
            </div>

            <!-- Image Preview Section -->
            <div class="form-group mb-3">
                <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 200px; display: none;">
            </div>

            <div class="form-group mb-3">
                <label for="old_price">Old Price:</label>
                <input type="number" name="old_price" step="0.01" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="new_price">New Price:</label>
                <input type="number" name="new_price" step="0.01" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-select" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="subcategory_id">Subcategory:</label>
                <select name="subcategory_id" class="form-select" required>
                    @foreach($categories as $category)
                        @foreach($category->subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>

    <!-- Image Preview Script -->
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection

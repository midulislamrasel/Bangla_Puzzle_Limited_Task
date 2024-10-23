@extends('layout.layout')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>

        @if($products->count())
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <!-- Image Display -->
                            @if ($product->image)
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                            @else
                                <img src="https://via.placeholder.com/150" alt="No image available" class="card-img-top" style="height: 200px; object-fit: cover;">
                            @endif
                            
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $product->category->name }} > {{ $product->subcategory->name }}</h6>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="text-muted">
                                    <span>Old Price: <del>${{ $product->old_price }}</del></span>
                                    <span class="ms-3">New Price: <strong>${{ $product->new_price }}</strong></span>
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST">
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
                No products found.
            </div>
        @endif
    </div>
@endsection

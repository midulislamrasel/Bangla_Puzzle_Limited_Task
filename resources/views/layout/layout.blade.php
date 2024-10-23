<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <!-- Custom CSS (Optional) -->
     <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   

</head>
<body>
    <div class="top_navbar bg-info ">
        <div class="d-flex">
            <div class="p-2 flex-grow-1 fs-3">Bangla Puzzle Limited</div>
            <div class="py-4 px-4 fs-5">All Product</div>
          </div>
    </div>
<!-- Sidebar -->
<div class="sidebar ">
    <ul class="nav flex-column">
        <!-- Category Dropdown -->
        <li class="nav-item dropdown">
               <a class="dropdown-item" href="{{ route('categories.index') }}"> Category</a>
        </li>
        
        <!-- SubCategory Dropdown -->
        <li class="nav-item dropdown">
           <a class="dropdown-item" href="{{ route('subcategories.index') }}">SubCategory</a>
        </li>
        
        <!-- Product Dropdown -->
        <li class="nav-item dropdown">
            <a class="dropdown-item" href="{{ route('products.index') }}">All Product</a>
        </li>
    </ul>

</div>


<!-- Main Content Area -->
<div class="content">
    <h2>Welcome to the Admin Dashboard</h2>
    <!-- Dynamic content goes here -->
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

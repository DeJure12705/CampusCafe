@extends('layouts.app')

@section('content')
<div class="container-lg py-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
            <h1 class="display-4 fw-bold text-primary">Add Product</h1>
            <p class="text-muted">Fill in the details below to add a new product to your catalog.</p>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <form action="/create-product" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input 
                                type="text" 
                                class="form-control form-control-lg" 
                                name="product_name" 
                                id="product_name" 
                                placeholder="Enter Product Name" 
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea 
                                class="form-control form-control-lg" 
                                name="description" 
                                id="description" 
                                rows="3" 
                                placeholder="Write a brief description" 
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input 
                                type="number" 
                                class="form-control form-control-lg" 
                                name="price" 
                                id="price" 
                                placeholder="Enter Price" 
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select 
                                class="form-select form-select-lg" 
                                name="category_id" 
                                id="category_id" 
                                required>
                                <option value="" disabled selected>Select one</option>
                                <option value="1">Coffee</option>
                                <option value="2">Cake</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Product Image</label>
                            <input 
                                type="file" 
                                class="form-control form-control-lg" 
                                name="product_image" 
                                id="product_image" 
                                required />
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
        <p class="mb-0">&copy; 2024 Campus Café Express. All rights reserved.</p>
    </div>
</footer>
@endsection
